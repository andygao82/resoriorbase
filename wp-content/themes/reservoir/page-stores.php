<?php
    /* Template Name: Store Page */
    get_header();
    $img_path = get_template_directory_uri( '/' );
    $size = 'full';

    $categoryid = sanitize_text_field( get_query_var( 'categoryid' ) );
    $categoryName = '';
    $catId = '';
    if( !empty($categoryid) ){
        $catId = $categoryid;
        $categoryName = get_cat_name($categoryid);
    }else{
        $catId = 3;
        $categoryName = 'All Categories';
    }
?>
<main>
	<div class="banner banner-store">
        <div class="banner-image" style="background-image: url(<?= get_field('banner_image') ?>)"></div>
        <img src="<?php echo get_template_directory_uri('/'); ?>/images/colour-strip.svg" alt="reservoir shopping center" />
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="wrapper">
                        <h1 class="page-title">STORES</h1>
                        <div class="search">
                            <div class="search-bar">
                                <div class="search-dropdown">
                                    <a href="javascript:;" id="current"><span><?= $categoryName?></span></a>
                                    <ul id="dropdown">
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>stores">All Categories</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=5">Supermarket</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=11">Eat In & Takeaway</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=6">Gifts & Homewares</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=7">Liquor</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=8">Health & Beauty</a></li>
                                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>stores?categoryid=13">Service</a></li>
                                    </ul>
                                </div>
                                <div class="search-input">
                                    <input type="text" placeholder="Enter Shop Name" data-search />
                                </div>
                            </div>


                            <div class="stores">
                                <div class="wrapper">
                                    <div class="inner-wrapper">
                                        <ul >
                                            <?php
                                            global $post;
                                            $myposts = get_posts( array(
                                                'numberposts'      => -1,
                                                'category'       => $catId
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
            </div>
        </div>
	</div>
</main>
<?php get_footer(); ?>
<script>
    $(function(){
        $('[data-search]').on('keyup', function() {
            var searchVal = $(this).val();
            var filterItems = $('[data-filter-item]');

            if ( searchVal != '' ) {
                filterItems.addClass('hidden');
                $('[data-filter-item][data-filter-name*="' + searchVal.toLowerCase() + '"]').removeClass('hidden');
            } else {
                filterItems.removeClass('hidden');
            }
        });
        $('#current').on('click', function (e) {
            e.preventDefault();
            $('#dropdown').slideToggle('fast')
        })
    })
</script>
