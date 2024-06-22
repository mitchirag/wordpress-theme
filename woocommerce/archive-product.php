<?php
defined('ABSPATH') || exit;

get_header('shop');
?>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php if (is_active_sidebar('shop-sidebar')) : ?>
                <aside id="secondary" class="widget-area">
                    <?php dynamic_sidebar('shop-sidebar'); ?>
                </aside>
            <?php endif; ?>
        </div>
        <div class="col-md-9">
            <?php if ( have_posts() ) : ?>
                <header class="woocommerce-products-header">
                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
                    <?php endif; ?>
                    <?php do_action( 'woocommerce_archive_description' ); ?>
                </header>
                <?php
                woocommerce_product_loop_start();

                if ( wc_get_loop_prop( 'total' ) ) {
                    while ( have_posts() ) {
                        the_post();

                        /**
                         * Hook: woocommerce_shop_loop.
                         */
                        do_action( 'woocommerce_shop_loop' );

                        wc_get_template_part( 'content', 'product' );
                    }
                }

                woocommerce_product_loop_end();

                /**
                 * Hook: woocommerce_after_shop_loop.
                 */
                do_action( 'woocommerce_after_shop_loop' );
                ?>
            <?php else : ?>
                <?php
                /**
                 * Hook: woocommerce_no_products_found.
                 */
                do_action( 'woocommerce_no_products_found' );
                ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer('shop');
?>
