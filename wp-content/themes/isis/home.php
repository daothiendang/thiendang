<?php get_header(); ?>
<?php // if (is_home()) { ?>
    <!--<div class="row">--> 
<!--        <div id="slider">
            <?php // if (get_option('isis')) { ?>
                <?php // get_template_part('' . $slides = of_get_option('slider_select', 'nivo') . ''); ?>
            <?php // } else { ?>
                <?php // get_template_part('dummy/dummy', 'nivo'); ?>
            <?php // } ?>
        <?php // } ?>
        </div>-->
    <!--</div>-->
    <div class="row">
        <?php echo do_shortcode('[slideshow_deploy id="46"]'); ?>
    </div>
</div>
</div>
    <div class="row ">
        <div class="services-wrap large-12 columns">
            <?php if (get_option('isis') && of_get_option('blocks_checkbox', 'isis') == '1') { ?>   
                <div class="midrow">
                    <div class="midrow_wrap">
                        <?php if (of_get_option('block1_text')) { ?>
                            <div class="midrow_blocks">
                                <div class="midrow_blocks_wrap">
                                    <i class="fa <?php echo of_get_option('block1_logo'); ?> fa-3x icon"></i>
                                    <div class="midrow_block">
                                        <div class="mid_block_content">
                                            <h3><?php echo of_get_option('block1_text'); ?></h3>
                                            <p><?php echo of_get_option('block1_textarea'); ?></p>
                                        </div>
                                        <?php if (of_get_option('block1_link')) { ?>
                                            <a href="<?php echo of_get_option('block1_link'); ?>" class="blocklink"><?php _e('More', 'isis'); ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="shadow">
                                    <img  src="<?php echo get_template_directory_uri(); ?>/images/service_shadow.png" alt="<?php the_title_attribute(); ?>" />
                                </div>
                            </div>
                        <?php } ?>
                        <?php if (of_get_option('block2_text')) { ?>
                            <div class="midrow_blocks">
                                <div class="midrow_blocks_wrap">
                                    <i class="fa <?php echo of_get_option('block2_logo'); ?> fa-3x icon"></i>
                                    <div class="midrow_block">
                                        <div class="mid_block_content">
                                            <h3><?php echo of_get_option('block2_text'); ?></h3>
                                            <p><?php echo of_get_option('block2_textarea'); ?></p>
                                        </div>
                                        <?php if (of_get_option('block2_link')) { ?>
                                            <a href="<?php echo of_get_option('block2_link'); ?>" class="blocklink"><?php _e('More', 'isis'); ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="shadow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/service_shadow.png" alt="<?php the_title_attribute(); ?>" />
                                </div>
                            </div>
                        <?php }
                        if (of_get_option('block3_text')) { ?>
                            <div class="midrow_blocks">
                                <div class="midrow_blocks_wrap">
                                    <i class="fa <?php echo of_get_option('block3_logo'); ?> fa-3x icon"></i>
                                    <div class="midrow_block">
                                        <div class="mid_block_content">
                                            <h3><?php echo of_get_option('block3_text'); ?></h3>
                                            <p><?php echo of_get_option('block3_textarea'); ?></p>
                                        </div>
                                        <?php if (of_get_option('block3_link')) { ?>
                                            <a href="<?php echo of_get_option('block3_link'); ?>" class="blocklink"><?php _e('More', 'isis'); ?></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="shadow"><img  src="<?php echo get_template_directory_uri(); ?>/images/service_shadow.png" alt="<?php the_title_attribute(); ?>" /></div>
                            </div>
                        <?php }
                        if (of_get_option('block4_text')) { ?>
                            <div class="midrow_blocks">
                                <div class="midrow_blocks_wrap">
                                    <i class="fa <?php echo of_get_option('block4_logo'); ?> fa-3x icon"></i>
                                    <div class="midrow_block">
                                        <div class="mid_block_content">
                                            <h3><?php echo of_get_option('block4_text'); ?></h3>
                                            <p><?php echo of_get_option('block4_textarea'); ?></p>
                                        </div>
                                        <?php if (of_get_option('block4_link')) { ?><a href="<?php echo of_get_option('block4_link'); ?>" class="blocklink"><?php _e('More', 'isis'); ?></a><?php } ?>
                                    </div>
                                </div>
                                <div class="shadow">
                                    <img  src="<?php echo get_template_directory_uri(); ?>/images/service_shadow.png" alt="<?php the_title_attribute(); ?>" />
                                </div>
                            </div>
                        <?php }
                } else {
                    get_template_part('dummy/dummy', 'bloks');
                } ?>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="row "> 
    <div class="warp large-12 columns">
        <?php
        // Recent Work
        if (get_option('isis')) {
            if (of_get_option('recentwork_checkbox', 'isis') == '1') {
                get_template_part('parts/mid', 'contant');
            }
        } else {
            get_template_part('dummy/dummy', 'contant');
        }
        ?>
    </div>
</div>
</div>
<div class="warp row">
    <div class="large-12">
        <?php if (of_get_option('isis_welcome')) { ?>
            <section id="callout">
                <?php echo apply_filters('the_content', of_get_option('isis_welcome')); ?>
            </section>
        <?php } ?>
    </div>
</div>
</div>
</div>

<!--LATEST POSTS-->
<?php
    $category = get_categories();
    var_dump($category);
    $sql = 'SELECT * FROM wp_posts
                WHERE post_type = "post" AND post_status = "publish"
                ORDER BY post_date DESC LIMIT 8';
    $posts = $wpdb->get_results($sql);
?>
<div class="row "> 
    <div class="warp columns">
        <div class="lay1">
            <div class="title">
                <h2 class="blue">
                    <?php echo of_get_option('latest_blog'); ?>
                </h2>
            </div>
            <?php
            foreach ($posts as $post) {
                the_post();
                ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                    <div class="post_image">
                        <!--CALL TO POST IMAGE-->
                        <?php if (has_post_thumbnail()) { ?>
                            <div class="imgwrap">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                                <div class="ch-item ch-img-1"> 
                                    <div class="ch-info">
                                        <h3>
                                        <?php $category = get_the_category();
                                        if ($category[0]) {
                                            echo '<a href="' . get_category_link($category[0]->term_id) . '">+' . $category[0]->cat_name . '</a>';
                                        } ?>
                                        </h3>
                                        <p><?php the_time('d'); the_time('S'); the_time('M'); the_time('Y'); ?></p>
                                        <a class="more2" href="<?php the_permalink(); ?>">More</a>
                                    </div>
                                </div>
                            </div>
                        <?php } else if ($photo = isis_get_images('numberposts=1', true)) { ?>
                            <div class="imgwrap">
                                <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($photo[0]->ID, 'medium'); ?></a>
                                <div class="ch-item ch-img-1 "> 
                                    <div class="ch-info">
                                        <h3>
                                            <?php $category = get_the_category();
                                            if ($category[0]) {
                                                echo '<a href="' . get_category_link($category[0]->term_id) . '">+' . $category[0]->cat_name . '</a>';
                                            } ?>
                                        </h3>
                                        <p><?php the_time('d'); the_time('S'); the_time('M'); the_time('Y'); ?></p>
                                        <a class="more2"  href="<?php the_permalink(); ?>" >More</a>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="imgwrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php $linkImg = get_post_meta($post->ID, 'movie_image_url', true);?>
                                    <?php if ($linkImg) { ?>
                                       <img src="<?php echo $linkImg; ?>" alt="<?php the_title_attribute(); ?>" class="thn_thumbnail"/>
                                    <?php } else { ?>
                                       <img src="<?php echo get_template_directory_uri(); ?>/images/blank1.jpg" alt="<?php the_title_attribute(); ?>" class="thn_thumbnail"/>
                                    <?php } ?>
                                </a>
                                <div class="ch-item ch-img-1 "> 
                                    <div class="ch-info">
                                        <h3>
                                            <?php $category = get_the_category();
                                            if ($category[0]) {
                                                echo '<a href="' . get_category_link($category[0]->term_id) . '">+' . $category[0]->cat_name . '</a>';
                                            } ?>
                                        </h3>
                                        <p><?php the_time('d'); the_time('S'); the_time('M'); the_time('Y'); ?></p>
                                        <a class="more2" href="<?php the_permalink(); ?>">Xem</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="post_content2">
                        <h2 class="postitle">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <div class="content2">
                            <?php isis_excerpt('isis_excerptlength_teaser', 'isis_excerptmore'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
<?php if (of_get_option('ourclient_checkbox', 'isis') == "1") { ?>
    <div class="row">
        <div class="warp large-12 columns">
            <?php get_template_part('parts/our', 'client'); ?>
        </div>
    </div>
<?php }
get_footer();