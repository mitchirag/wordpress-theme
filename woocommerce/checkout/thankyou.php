<?php
defined('ABSPATH') || exit;
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if ($order) : ?>

                <?php if ($order->has_status('failed')) : ?>

                    <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e('Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce'); ?></p>

                    <p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
                        <a href="<?php echo esc_url($order->get_checkout_payment_url()); ?>" class="button pay"><?php esc_html_e('Pay', 'woocommerce'); ?></a>
                        <?php if (is_user_logged_in()) : ?>
                            <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="button pay"><?php esc_html_e('My account', 'woocommerce'); ?></a>
                        <?php endif; ?>
                    </p>

                <?php else : ?>

                    <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters('woocommerce_thankyou_order_received_text', esc_html__('Thank you. Your order has been received.', 'woocommerce'), $order); ?></p>

                    <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                        <li class="woocommerce-order-overview__order order">
                            <?php esc_html_e('Order number:', 'woocommerce'); ?>
                            <strong><?php echo esc_html($order->get_order_number()); ?></strong>
                        </li>

                        <li class="woocommerce-order-overview__date date">
                            <?php esc_html_e('Date:', 'woocommerce'); ?>
                            <strong><?php echo esc_html(wc_format_datetime($order->get_date_created())); ?></strong>
                        </li>

                        <li class="woocommerce-order-overview__total total">
                            <?php esc_html_e('Total:', 'woocommerce'); ?>
                            <strong><?php echo wp_kses_post($order->get_formatted_order_total()); ?></strong>
                        </li>

                        <?php if ($order->get_payment_method_title()) : ?>
                            <li class="woocommerce-order-overview__payment-method method">
                                <?php esc_html_e('Payment method:', 'woocommerce'); ?>
                                <strong><?php echo wp_kses_post($order->get_payment_method_title()); ?></strong>
                            </li>
                        <?php endif; ?>

                    </ul>

                <?php endif; ?>

                <?php do_action('woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id()); ?>
                <?php do_action('woocommerce_thankyou', $order->get_id()); ?>

            <?php else : ?>

                <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php esc_html_e('Thank you. Your order has been received.', 'woocommerce'); ?></p>

            <?php endif; ?>
        </div>
    </div>
</div>
