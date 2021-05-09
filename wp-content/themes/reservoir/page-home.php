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
            <div class="flex-custom-nav">
                <a href="#" class="flex-prev"><span></span></a>
                <a href="#" class="flex-next"><span></span></a>
            </div>
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
                                    <a class="store-wrapper"  href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=5">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>SUPERMARKET</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="store-wrapper"  href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=11">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/eat.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>EAT IN & TAKEAWAY</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="store-wrapper"  href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=6">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/gift.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>GIFTS & HOMEWARES</h3>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="inner-wrapper">
                            <ul>
                                <li>
                                    <a class="store-wrapper"  href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=7">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/liquar.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>LIQUOR</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="store-wrapper"  href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=8">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/beauty.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>HEALTH & BEAUTY</h3>
                                    </a>
                                </li>
                                <li>
                                    <a class="store-wrapper"  href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=13">
                                        <div class="store-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/service.png" alt="reservoir shopping center" />
                                        </div>
                                        <h3>SERVICE</h3>
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
        <div class="container-fluid">
            <div class="row">
				<div class="col-12">
					<div class="wrapper">
                        <h2>WHAT'S ON</h2>
                        <div class="inner-wrapper">
                            <ul>
                                <li>
                                    <a class="whatson-wrapper"  href="#">
                                        <div class="whatson-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <div class="whaton-info">
                                            <h3>Special Offer from Maroc Fine Foods & Groceries</h3>
                                            <div class="excerpt">
                                                WEEKLY SPECIALS for you! Offer valid till 31st March at 6 pm or sold out.* Top-quality produce including raspberries, spring onions, avocados…
                                            </div>
                                            <span class="button">LEARN MORE</span>
                                            <span class="date">April 2021</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="whatson-wrapper"  href="#">
                                        <div class="whatson-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <div class="whaton-info">
                                            <h3>Special Offer from Maroc Fine Foods & Groceries</h3>
                                            <div class="excerpt">
                                                WEEKLY SPECIALS for you! Offer valid till 31st March at 6 pm or sold out.* Top-quality produce including raspberries, spring onions, avocados…
                                            </div>
                                            <span class="button">LEARN MORE</span>
                                            <span class="date">April 2021</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="whatson-wrapper"  href="#">
                                        <div class="whatson-image">
                                            <img src="<?php echo get_template_directory_uri('/'); ?>/images/Category_Supermarket.png" alt="reservoir shopping center" />
                                        </div>
                                        <div class="whaton-info">
                                            <h3>Special Offer from Maroc Fine Foods & Groceries</h3>
                                            <div class="excerpt">
                                                WEEKLY SPECIALS for you! Offer valid till 31st March at 6 pm or sold out.* Top-quality produce including raspberries, spring onions, avocados…
                                            </div>
                                            <span class="button">LEARN MORE</span>
                                            <span class="date">April 2021</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
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
            animationSpeed: 1000,
            customDirectionNav: $(".flex-custom-nav a")
        });
    })
</script>
