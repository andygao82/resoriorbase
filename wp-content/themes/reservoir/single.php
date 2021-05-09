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
	<main class="shop">
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
        <div class="shop-content">
            <div class="container-fluid">
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
                                    <?php if(!empty(get_field('opening_hours'))):?>
                                    <div class="opening-hour">
                                        <h4>Opening hours</h4>
                                        <?php echo get_field('opening_hours') ?>
                                    </div>
                                    <?php endif;?>
                                    <div class="contact-shop">
                                        <h4>Contact Store</h4>
                                        <?php if(!empty(get_field('shop_phone'))):?>
                                            <a href="tel:<?php echo get_field('shop_phone') ?>">P: <?php echo get_field('shop_phone') ?></a>
                                        <?php endif;?>
                                        <?php if(!empty(get_field('shop_email'))):?>
                                            <a class="email" href="mailto:<?php echo get_field('shop_email') ?>">E: <?php echo get_field('shop_email') ?></a>
                                        <?php endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="stores">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="wrapper">
                            <h2>Stores You Might Be Interested In</h2>
                            <div class="inner-wrapper">
                                <ul >
                                    <?php
                                    global $post;
                                    $myposts = get_posts( array(
                                        'numberposts'      => 3,
                                        'category'       => 3
                                    ) );
                                    if ( $myposts ) {
                                        foreach ( $myposts as $post ) :
                                            setup_postdata( $post ); ?>
                                            <li data-filter-item data-filter-name="<?php echo strtolower(get_the_title()) ?>">
                                                <a class="store-wrapper" href="<?php echo esc_url( get_permalink() )?>">
                                                    <?php $logo = get_the_post_thumbnail()?>
                                                    <div class="store-image" style="background-color: <?= get_field('branding_color', get_the_ID())?>">
                                                        <?php if($logo){ ?>
                                                            <?= $logo?>
                                                        <?php }else{?>
                                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="Placeholder">
                                                        <?php } ?>
                                                    </div>
                                                    <h3><?php the_title() ?></h3>
                                                </a>
                                            </li>
                                        <?php
                                        endforeach;
                                        wp_reset_postdata();
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	</main><!-- #main -->

<?php
get_footer();
