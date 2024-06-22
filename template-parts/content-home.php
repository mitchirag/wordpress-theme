<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
<div class="swiper first-swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/1-5.png"
                    media="(min-width: 1400px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/1-4.png"
                    media="(min-width: 1200px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/1-3.png"
                    media="(min-width: 992px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/1-2.png"
                    media="(min-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/1-1.png"
                    media="(min-width: 576px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/1-1.png"
                    media="(max-width: 575px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1-5.png" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/2-5.png"
                    media="(min-width: 1400px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/2-4.png"
                    media="(min-width: 1200px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/2-3.png"
                    media="(min-width: 992px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/2-2.png"
                    media="(min-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/2-1.png"
                    media="(min-width: 576px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/2-1.png"
                    media="(max-width: 575px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2-5.png" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/3-5.png"
                    media="(min-width: 1400px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/3-4.png"
                    media="(min-width: 1200px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/3-3.png"
                    media="(min-width: 992px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/3-2.png"
                    media="(min-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/3-1.png"
                    media="(min-width: 576px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/3-1.png"
                    media="(max-width: 575px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/3-5.png" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/4-5.png"
                    media="(min-width: 1400px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/4-4.png"
                    media="(min-width: 1200px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/4-3.png"
                    media="(min-width: 992px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/4-2.png"
                    media="(min-width: 768px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/4-1.png"
                    media="(min-width: 576px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/4-1.png"
                    media="(max-width: 575px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/4-5.png" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="swiper second-swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Purple.webp" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Black.webp" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Pink.webp" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/White.jpg" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<div class="swiper second-swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Courier-Bags.webp"
                    alt="Responsive Image" class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Customise-Bags.webp"
                    alt="Responsive Image" class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Printed-Bag.webp"
                    alt="Responsive Image" class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Carry-Bag.webp"
                    alt="Responsive Image" class="img-fluid col-12 p-0">
            </picture>
        </div>
        <div class="swiper-slide">
            <picture>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Box.webp" alt="Responsive Image"
                    class="img-fluid col-12 p-0">
            </picture>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

<?php get_footer(); ?>