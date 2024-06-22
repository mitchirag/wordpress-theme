<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                    <div class="site-logo">
                        <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                if ($logo) {
                    echo '<a href="' . esc_url(home_url('/')) . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . ' width="100""></a>';
                } else {
                    echo '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
                }
                ?>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 d-none d-lg-block">
                    <?php echo do_shortcode('[fibosearch]'); ?>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-8 col-6">
                    <div class="user-info">
                        <?php if (is_user_logged_in()) : 
                            $current_user = wp_get_current_user();
                        ?>
                        <div class="user-profile">
                            <?php echo get_avatar($current_user->ID, 32); // Display the user's profile picture (32 is the size) ?>
                            <span class="user-name"><?php echo esc_html($current_user->display_name); ?></span>
                        </div>
                        <?php else : ?>
                        <a href="<?php echo wp_login_url(); ?>">Login</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 2
                        ));
                        ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="whatsapp-info">

                    </div>
                </div>
            </div>
        </div>
    </header>