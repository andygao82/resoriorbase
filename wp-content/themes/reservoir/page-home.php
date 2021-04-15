<?php
    /* Template Name: Home Page */
    get_header();
    $img_path = get_template_directory_uri( '/' );
    $size = 'full';
?>
<main>
 	<div class="banner banner-main banner-home banner-section">
        <div class="flexslider">
            <ul class="slides">
                <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <?php $_img = get_field('banner_image_'.$i.'') ?>
                    <?php if(!empty($_img)) :?>
                        <li>
                            <?php if($_img): ?>
                                <?php $image_url = $_img['url']; ?>
                                <?php $image_alt = $_img['alt']; ?>
                                <?php $image_caption = $_img['caption']; ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                                <h2 class="text-center"><?php echo esc_attr($image_caption);?></h2>
                            <?php endif ?>
                        </li>
                    <?php endif ?>
                <?php } ?>
            </ul>
        </div>
        <img src="<?php echo get_template_directory_uri('/'); ?>/images/colour-strip.svg" alt="reservoir shopping center" />
    </div>
	<div class="home-stores">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="wrapper">
                        <h2>STORES</h2>
                        <div class="inner-wrapper">
                            <ul>
                                <li>
                                    <a class="store-wrapper"  href="#">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>SUPERMARKET</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="store-wrapper"  href="#">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>SUPERMARKET</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="store-wrapper"  href="#">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>SUPERMARKET</h3>
                                    </a>
                                </li>
                         
                            </ul>
                        </div>
                        <div class="inner-wrapper">
                            <ul>
                                <li>
                                    <a class="store-wrapper"  href="#">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>SUPERMARKET</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="store-wrapper"  href="#">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>SUPERMARKET</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="store-wrapper"  href="#">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>SUPERMARKET</h3>
                                    </a>
                                </li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="whatson">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="wrapper">
                        <h2>WHAT'S ON</h2>
                        <ul>
                            <li><a href="#">SUPERMARKET</a></li>
                            <li><a href="#">EAT IN & TAKEAWAY</a></li>
                            <li><a href="#">GIFT & HOMEWARES</a></li>
                        </ul>
					</div>
				</div>
			</div>
		</div>            
    </div>
</main>
<?php get_footer(); ?>
<script>
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "fade",
            touch: true,  
            slideshow: true,                //Boolean: Animate slider automatically
            slideshowSpeed: 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
            animationSpeed: 1000
        });
    }) 
</script>