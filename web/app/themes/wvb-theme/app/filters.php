<?php

namespace App;

use WC_Session_Handler;

/**
 * Add <body> classes
 */
add_filter('body_class', function (array $classes) {
    /** Add page slug if it doesn't exist */
    if (is_single() || is_page() && !is_front_page()) {
        if (!in_array(basename(get_permalink()), $classes)) {
            $classes[] = basename(get_permalink());
        }
    }

    /** Add class if sidebar is active */
    if (display_sidebar()) {
        $classes[] = 'sidebar-primary';
    }

    /** Clean up class names for custom templates */
    $classes = array_map(function ($class) {
        return preg_replace(['/-blade(-php)?$/', '/^page-template-views/'], '', $class);
    }, $classes);

    return array_filter($classes);
});

/**
 * Add "… Continued" to the excerpt
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

/**
 * Template Hierarchy should search for .blade.php files
 */
collect([
    'index', '404', 'archive', 'author', 'category', 'tag', 'taxonomy', 'date', 'home',
    'frontpage', 'page', 'paged', 'search', 'single', 'singular', 'attachment'
])->map(function ($type) {
    add_filter("{$type}_template_hierarchy", __NAMESPACE__.'\\filter_templates');
});

/**
 * Render page using Blade
 */
add_filter('template_include', function ($template) {
    $data = collect(get_body_class())->reduce(function ($data, $class) use ($template) {
        return apply_filters("sage/template/{$class}/data", $data, $template);
    }, []);
    if ($template) {
        echo template($template, $data);
        return get_stylesheet_directory().'/index.php';
    }
    return $template;
}, PHP_INT_MAX);

/**
 * Render comments.blade.php
 */
add_filter('comments_template', function ($comments_template) {
    $comments_template = str_replace(
        [get_stylesheet_directory(), get_template_directory()],
        '',
        $comments_template
    );

    $data = collect(get_body_class())->reduce(function ($data, $class) use ($comments_template) {
        return apply_filters("sage/template/{$class}/data", $data, $comments_template);
    }, []);

    $theme_template = locate_template(["views/{$comments_template}", $comments_template]);

    if ($theme_template) {
        echo template($theme_template, $data);
        return get_stylesheet_directory().'/index.php';
    }

    return $comments_template;
}, 100);

// Nice URL structure combining post_type and taxonomy when using links.
add_filter('post_type_link', function ($post_link, $post) {
    if (is_object($post) && $post->post_type === 'elftal') {
        $terms = wp_get_object_terms($post->ID, 'afdeling');
        if ($terms) {
            return str_replace('%afdeling%' , $terms[0]->slug , $post_link);
        }
    }
    return $post_link;
}, 1, 2);

/**
 * @param $value
 * @param $post_id
 * @param $field
 * @return mixed
 */
function acf_set_featured_image($value, $post_id, $field)
{
    if ($value != '') {
        //Add the value which is the image ID to the _thumbnail_id meta data for the current post
        update_post_meta($post_id, '_thumbnail_id', $value);
    }

    return $value;
}
add_filter('acf/update_value/name=afbeelding_bericht', __NAMESPACE__.'\\acf_set_featured_image', 10, 3);

function wvb_remove_protected_from_title($title)
{
    $post = get_post();

    if (! empty($post->post_password)) {
        $formatted = sprintf(__('Protected: %s'), $post->post_title);
        $title = str_replace($formatted, $post->post_title, $title);
    }
    return $title;
}
add_filter('the_title', __NAMESPACE__.'\\wvb_remove_protected_from_title', 10);

/**
 * 1. HULPFUNCTIE: Check of er compost in de mand zit
 */
function has_compost_product() {
    if ( ! function_exists('WC') || is_null(WC()->cart) ) {
        return false;
    }

    // Vul hier de ID's in van de compost producten
    $compost_ids = [2379, 2505, 2508, 2509];

    // Of als je een categorie 'compost' hebt:
    // return has_term('compost', 'product_cat', $cart_item['product_id']);

    foreach (WC()->cart->get_cart() as $cart_item) {
        if (in_array($cart_item['product_id'], $compost_ids)) {
            return true;
        }
    }
    return false;
}

/**
 * 2. FRONTEND: Toon het invulveld op de checkout pagina
 */
add_action('woocommerce_review_order_before_payment', function() {
    if (!has_compost_product()) return;

    $donation_product_id = 10828;
    foreach (WC()->cart->get_cart() as $cart_item) {
        if ($cart_item['product_id'] == $donation_product_id) {
            return;
        }
    }

    $current_donation = WC()->session->get('custom_donation_amount');

    echo '<div id="checkout-donation-section" style="margin-bottom: 20px; background: #BC2F27; padding: 25px; border-radius: 10px;">';
    echo '<h4 style="margin-top:0; font-weight:bold; color:#ffffff;">Een euro voor de toekomst van onze jeugd</h4>';
    echo '<p style="font-size: 1rem; margin-bottom: 10px; color:#ffffff;">De bouw van de nieuwe kantine is gestart! Met 1 euro steun van iedere inwoner van Warnsveld en omgeving maken we dit mooie project samen mogelijk en investeren we in de toekomst van onze jeugd.</p>';

    woocommerce_form_field('donation_amount', [
        'type' => 'number',
        'style' => 'margin-right:15px;',
        'class' => ['form-row-wide text-white'],
        'label' => 'Ik doneer graag:',
        'placeholder' => 'Bijvoorbeeld € 1,-',
        'custom_attributes' => ['step' => '0.25', 'min' => '1'],
    ], $current_donation);

    echo '</div>';
});

/**
 * 3. BACKEND: Sla het bedrag op in de sessie als de checkout update (AJAX)
 */
add_action('woocommerce_checkout_update_order_review', function($post_data) {
    parse_str($post_data, $post_vars);

    if (isset($post_vars['donation_amount']) && !empty($post_vars['donation_amount'])) {
        $amount = floatval($post_vars['donation_amount']);

        // Validatie: Minimaal 1 euro
        if ($amount >= 1) {
            WC()->session->set('custom_donation_amount', $amount);
        } else {
            WC()->session->set('custom_donation_amount', 0); // Reset als < 1
        }
    } else {
        WC()->session->set('custom_donation_amount', 0);
    }
});

/**
 * 4. REKENEN: Voeg de donatie toe aan het totaalbedrag
 */
add_action('woocommerce_cart_calculate_fees', function() {
    if (is_admin() && !defined('DOING_AJAX')) return;
    if (!has_compost_product()) return;

    $donation = WC()->session->get('custom_donation_amount');

    if ($donation && $donation >= 1) {
        WC()->cart->add_fee(__('Donatie', 'sage'), $donation);
    }
});

// Voeg dit toe onderaan app/filters.php als je geen zin hebt om je assets te compilen
add_action('wp_footer', function() {
    if (!is_checkout()) return;
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            // Luister naar wijzigingen in het donatie veld
            $(document.body).on('change', '#donation_amount', function() {
                // Forceer een update van de checkout (AJAX)
                $('body').trigger('update_checkout');
            });
        });
    </script>

    <style>
        #donation_amount_field label {
            margin-right:15px;
        }
        #donation_amount_field .optional {
            font-size: 0.875rem;
        }
    </style>
    <?php
}, 999);

/**
 * 1. VERWERK HOMEPAGE DONATIE
 * Vangt de POST op, voegt product toe met metadata
 */
add_action('template_redirect', function() {
    // Stop direct als we niet in de juiste context zitten
    if (is_admin() || !isset($_POST['home_donation_amount'])) {
        return;
    }

    // Controleer de nonce
    if (!isset($_POST['home_donation_nonce']) || !wp_verify_nonce($_POST['home_donation_nonce'], 'home_donation_action')) {
        // Tip: Log dit eventueel om te zien of het vaak door caching komt
        return;
    }

    // Check of WooCommerce wel echt geladen is
    if (!function_exists('WC') || is_null(WC()->cart)) {
        return;
    }

    $amount = floatval($_POST['home_donation_amount']);
    $donation_product_id = 10828;

    if ($amount >= 1) {
        WC()->cart->add_to_cart($donation_product_id, 1, 0, [], ['custom_donation_price' => $amount]);

        // Gebruik js redirect als fallback of zorg voor een 'clean' redirect
        wp_safe_redirect(wc_get_checkout_url());
        exit;
    }
});

/**
 * 2. PRIJS AANPASSEN IN WINKELMAND
 * Kijkt of het product 'custom_donation_price' data heeft en past de prijs aan.
 */
add_action('woocommerce_before_calculate_totals', function($cart) {
    if (is_admin() && !defined('DOING_AJAX')) return;

    foreach ($cart->get_cart() as $cart_item) {
        // Check of we ons 'custom price' labeltje hebben meegegeven in stap 1
        if (isset($cart_item['custom_donation_price'])) {
            // Overschrijf de prijs van het product (oorspronkelijk €1) naar het ingevoerde bedrag
            $cart_item['data']->set_price($cart_item['custom_donation_price']);
        }
    }
});

/**
 * DONATIE BEDANKJE IN EMAIL
 * Checkt op product OF fee en toont een bedanktekst boven de tabel.
 */
add_action('woocommerce_email_before_order_table', function($order, $sent_to_admin, $plain_text, $email) {

    // 1. Configuratie
    $donation_product_id = 10828; // Jouw virtuele product ID
    $found_donation = false;

    // 2. Check: Zit het donatie-product in de bestelling? (Scenario Homepagina)
    foreach ($order->get_items() as $item) {
        if ($item->get_product_id() == $donation_product_id) {
            $found_donation = true;
            break;
        }
    }

    // 3. Check: Zit er een donatie-toeslag op? (Scenario Compost/Checkout)
    // Alleen checken als we nog niks gevonden hebben
    if (!$found_donation) {
        foreach ($order->get_fees() as $fee) {
            // We zoeken op de naam 'Donatie' (die we in de eerdere stappen hebben ingesteld)
            if (stripos($fee->get_name(), 'Donatie') !== false) {
                $found_donation = true;
                break;
            }
        }
    }

    // 4. Output: Toon het blokje als er gedoneerd is
    if ($found_donation) {
        ?>
        <div style="background-color: #f0fdf4; border: 1px solid #bbf7d0; color: #166534; padding: 15px; margin-bottom: 20px; border-radius: 4px;">
            <h3 style="color: #166534; margin-top: 0; margin-bottom: 10px;">Hartelijk dank voor je donatie! 🌱</h3>
            <p style="margin: 0;">Wat fijn dat je ons extra steunt. We gaan zorgen dat jouw bijdrage goed terechtkomt.</p>
        </div>
        <?php
    }

}, 10, 4);

/**
 * 1. REGISTRATIE: Voeg het veld toe aan de plugin (UI)
 */
add_filter('woe_get_order_fields', function($fields) {
    $fields['custom_donation_total'] = array(
        'label'   => 'Donatie Totaal (Compost + Home)',
        'colname' => 'Donatie Totaal',
        'checked' => 1,        // Probeert hem standaard aan te vinken
        'segment' => 'cart',   // We zetten hem onder het kopje 'Cart' / 'Winkelmand'
        'type'    => 'number',
        'format'  => 'money',
    );
    return $fields;
});

/**
 * 2. BEREKENING: Vul het veld met data
 */
add_filter('woe_get_order_value_custom_donation_total', function($value, $order, $fieldname) {
    $total_donation = 0.0;
    $donation_product_id = 10828; // <--- Zorg dat dit ID klopt!

    // A. Check: Toeslagen (Fee)
    foreach ($order->get_fees() as $fee) {
        if (stripos($fee->get_name(), 'Donatie') !== false) {
            $total_donation += floatval($fee->get_total());
        }
    }

    // B. Check: Producten (Homepagina donatie)
    foreach ($order->get_items() as $item) {
        if ($item->get_product_id() == $donation_product_id) {
            $total_donation += floatval($item->get_total());
        }
    }

    // C. Output voor Excel (bijv: 5.00)
    if ($total_donation > 0) {
        return number_format($total_donation, 2, '.', ',');
    }

    return '';
}, 10, 3);

/**
 * REST API UITBREIDING: Donatie Totaal toevoegen
 * Zorgt dat het veld 'custom_donation_total' beschikbaar is in de JSON response.
 */
add_action('rest_api_init', function () {
    register_rest_field('shop_order', 'custom_donation_total', array(
        'get_callback' => function ($order_data) {
            // Haal het order object op
            $order = wc_get_order($order_data['id']);

            $total_donation = 0.0;
            $donation_product_id = 10828; // <--- ZORG DAT DIT ID KLOPT

            // 1. Check op 'Fee' (Donatie via checkout)
            foreach ($order->get_fees() as $fee) {
                if (stripos($fee->get_name(), 'Donatie') !== false) {
                    $total_donation += floatval($fee->get_total());
                }
            }

            // 2. Check op 'Product' (Donatie via homepagina)
            foreach ($order->get_items() as $item) {
                if ($item->get_product_id() == $donation_product_id) {
                    $total_donation += floatval($item->get_total());
                }
            }

            // Geef het bedrag terug (of 0)
            return $total_donation;
        },
        'schema' => null, // Geen specifiek schema nodig, het is een nummer
    ));
});
