<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reservoir
 */

get_header();
?>
	<main>
        <div class="banner banner-shop" style="background-image: url(<?php echo get_field('banner')?>)">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <h1 class="page-title"><?= the_title()?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri('/'); ?>/images/colour-strip.svg" alt="reservoir shopping center" />
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <div class="content-left">
                                <div class="inner-wrapper">
                                    <div class="breadcrumbs">
                                        <?php $categories = get_the_category();?>
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>stores">Stores</a><a href="#"><?php echo esc_html( $categories[1]->name) ?></a><span><?= the_title()?></span>
                                    </div>
                                    <h2><?= the_title()?></h2>
                                    <div class="shop-map">
                                        <img src="<?php echo get_field('map') ?>" alt="<?= the_title()?>" />
                                    </div>
                                    <div class="shop-description">
                                        <?php echo get_field('shop_description') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="content-right">
                                <div class="inner-wrapper">
                                    <div class="shop-logo">
                                        <img src="<?php echo get_field('logo') ?>" alt="<?= the_title()?>" />
                                    </div>
                                    <div class="opening-hour">
                                        <?php echo get_field('opening_hours') ?>
                                    </div>
                                    <div class="contact-shop">
                                        <h4>Contact Store</h4>
                                        P: <?php echo get_field('shop_phone') ?>
                                        E: <?php echo get_field('shop_email') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


	</main><!-- #main -->

<?php
get_footer();
