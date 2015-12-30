<div class="row">
    <div class="lay1">
        <div class="title">
            <h2 class="blue">
            <?php 
                if (single_cat_title('', false) == 'Movie') {
                    echo 'Các tập mới post';
                } else {
                    echo of_get_option('latest_blog');
                }
            ?>
            </h2>
        </div>
        <?php if (of_get_option('frontcat_checkbox') == '1') {
            if (is_front_page()) {
            $args = array(
                'cat' => '' . $os_front = of_get_option('front_cat') . '',
                'post_type' => 'post',
                'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                'posts_per_page' => '' . $os_fonts = of_get_option('frontnum_select') . ''
            );
            new WP_Query($args);
            }
        } ?>
        <?php wp_reset_postdata(); ?>
        <?php if (have_posts()) { ?>
            <?php while (have_posts()) { ?>
                <?php the_post(); ?>
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                <div class="post_image">
                    <!--CALL TO POST IMAGE-->
                    <?php if (has_post_thumbnail()) { ?>
                        <div class="imgwrap">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                            <div class="ch-item ch-img-1 "> 
                            <div class="ch-info">
                                <h3>
                                <?php $category = get_the_category();
                                if ($category[0]) {
                                    echo '<a href="' . get_category_link($category[0]->term_id) . '">+' . $category[0]->cat_name . '</a>';
                                } ?>
                                </h3>
                                <p ><?php the_time('d'); ?><?php the_time('S'); ?> <?php the_time('M'); ?> <?php the_time('Y'); ?></p>
                                <a class="more2"  href="<?php the_permalink(); ?>" >More</a>
                            </div>
                            </div>
                        </div>
                    <?php } else if ($photo = isis_get_images('numberposts=1', true)) { ?>
                        <div class="imgwrap">
                            <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($photo[0]->ID, 'medium'); ?></a>
                            <div class="ch-item ch-img-1 "> 
                            <div class="ch-info">
                                <h3><?php $category = get_the_category();
                                if ($category[0]) {
                                echo '<a href="' . get_category_link($category[0]->term_id) . '">+' . $category[0]->cat_name . '</a>';
                                } ?></h3>
                                <p><?php the_time('d'); ?><?php the_time('S'); ?> <?php the_time('M'); ?> <?php the_time('Y'); ?></p>
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
                                    <h3><?php $category = get_the_category();
                                        if ($category[0]) {
                                            echo '<a href="' . get_category_link($category[0]->term_id) . '">+' . $category[0]->cat_name . '</a>';
                                        } ?>
                                    </h3>
                                    <p><?php the_time('d'); ?><?php the_time('S'); ?> <?php the_time('M'); ?> <?php the_time('Y'); ?></p>
                                    <a class="more2" href="<?php the_permalink(); ?>">Xem</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="post_content2">
                    <h2 class="postitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="content2"><?php isis_excerpt('isis_excerptlength_teaser', 'isis_excerptmore'); ?> </div>
                </div>
                </div>
            <?php } ?> 
        <?php } ?>
    </div>
    <?php get_template_part('pagination'); ?>             
</div>
</div>
</div>