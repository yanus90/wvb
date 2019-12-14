<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="woocommerce-order">

	<?php if ( $order ) : ?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></p>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php _e( 'Pay', 'woocommerce' ) ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php _e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>

            <div class="row mb-5">
                <div class="col-12 col-lg-8">
                    <div class="alert alert-success mb-4">
                        <div class="woocommerce-thankyou-order-received">
                            <?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?>
                        </div>
                    </div>
                    <div class="order_details">
                        <div class="list-group">
                            <div class="list-group-item order">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-5 col-lg-3">
                                        <?php _e( 'Order number:', 'woocommerce' ); ?>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-7 col-lg-9">
                                        <span class="font-weight-semi-bold"><?php echo $order->get_order_number(); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item date">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-5 col-lg-3">
                                        <?php _e( 'Date:', 'woocommerce' ); ?>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-7 col-lg-9">
                                        <span class="font-weight-semi-bold"><?php echo wc_format_datetime( $order->get_date_created() ); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
                                <div class="list-group-item email">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-5 col-lg-3">
                                            <?php _e( 'Email:', 'woocommerce' ); ?>
                                        </div>
                                        <div class="col-6 col-sm-8 col-md-7 col-lg-9">
                                            <span class="font-weight-semi-bold"><?php echo $order->get_billing_email(); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="list-group-item total">
                                <div class="row">
                                    <div class="col-6 col-sm-4 col-md-5 col-lg-3">
                                        <?php _e( 'Total:', 'woocommerce' ); ?>
                                    </div>
                                    <div class="col-6 col-sm-8 col-md-7 col-lg-9">
                                        <span class="font-weight-semi-bold"><?php echo $order->get_formatted_order_total(); ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php if ( $order->get_payment_method_title() ) : ?>
                                <div class="list-group-item total">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-5 col-lg-3">
                                            <?php _e( 'Payment method:', 'woocommerce' ); ?>
                                        </div>
                                        <div class="col-6 col-sm-8 col-md-7 col-lg-9">
                                            <span class="font-weight-semi-bold"><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

		<?php endif; ?>

		<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
		<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>

	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', __( 'Thank you. Your order has been received.', 'woocommerce' ), null ); ?></p>

	<?php endif; ?>

</div>
