<?php
defined('ABSPATH') || exit;

do_action('woocommerce_before_my_account');

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            /**
             * My Account content.
             */
            do_action('woocommerce_account_content');
            ?>
        </div>
    </div>
</div>
<?php do_action('woocommerce_after_my_account'); ?>
