<?php

namespace App\Controllers;

use App\Controllers\Partials\AllAfdelingen;
use Sober\Controller\Controller;

class TaxonomyAfdeling extends Controller
{
    use AllAfdelingen;

    protected $template = 'taxonomy-afdeling';
    private $category;

    public function __construct()
    {
        $this->category = get_queried_object();
    }

//    public function leftDescription()
//    {
//        $description['koptekst'] = get_term_meta($this->category->term_id, 'two_text_columns_linkerkoptekst', true);
//        $description['subtekst'] = get_term_meta($this->category->term_id, 'two_text_columns_linkersubtekst', true);
//
//        return $description;
//    }
//
//    public function rightDescription()
//    {
//        $description['koptekst'] = get_term_meta($this->category->term_id, 'two_text_columns_rechterkoptekst', true);
//        $description['subtekst'] = get_term_meta($this->category->term_id, 'two_text_columns_rechtersubtekst', true);
//
//        return $description;
//    }

    public function elftallen()
    {
        $query = new \WP_Query([
            'post_type' => 'elftal',
            'orderby' => 'menu_order',
            'order' => 'DESC',
            'tax_query' => [
                [
                    'taxonomy' => 'afdeling',
                    'field' => 'term_id',
                    'terms' => $this->category->term_id
                ]
            ]
        ]);
        return $query->posts;
    }
}
