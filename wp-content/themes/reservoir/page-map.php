<?php
/* Template Name: Certral Page */
get_header();
$img_path = get_template_directory_uri( '/' );
$size = 'full';
?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="wrapper">
                    <h1 class="page-title">Central Map</h1>
                </div>
                <div class="inner-wrapper">
                    <div class="map-wrapper">
                        <div class="shops">
                            <div class="shop-list">
                                <h3>Supermarket</h3>
                                <?php echo get_field('supermarket')?>
                            </div>
                            <div class="shop-list">
                                <h3>Gifts & Homeware</h3>
                                <?php echo get_field('gift_&_homeware')?>
                            </div>
                            <div class="shop-list">
                                <h3>Liquor</h3>
                                <?php echo get_field('liquor')?>
                            </div>
                            <div class="shop-list">
                                <h3>Health & Beauty</h3>
                                <?php echo get_field('health_&_beauty')?>
                            </div>
                        </div>
                        <div class="shop-map">
                            <img src="<?php echo get_field('map')?>" alt="Reservoir Central">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>

