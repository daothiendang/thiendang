<?php get_header(); ?>
    <div class="row">
        <?php if (get_post_type($post->ID) == 'movie') { ?>
            <div class="lay1 list_movie">
                <div class="post_title">
                    <a href="<?php echo get_tag_link($tag_id); ?>">
                        <?php single_tag_title(); ?>
                    </a>
                </div>
                <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
                <?php query_posts($query_string .'&orderby=post_title&order=ASC&posts_per_page=24&paged=' . $paged); ?>
                <?php if (have_posts()) {
                    while (have_posts()) {
                        the_post(); ?>
                        <div class="hentry">
                            <div class="post_image">
                                <div class="imgwrap">
                                <a href="<?php the_permalink(); ?>">
                                    <?php $linkImg = get_post_meta($post->ID, 'movie_image_url', true);?>
                                    <img src="<?php echo $linkImg;?>" alt="<?php the_title(); ?>" class="thn_thumbnail"/>
                                    <div class="ch-item ch-img-1 "> 
                                    <div class="ch-info">
                                        <a class="xem_phim" href="<?php the_permalink(); ?>">Xem phim</a>
                                    </div>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="post_content2">
                                <?php $movieTitle = get_the_title();
                                if (strlen($movieTitle) > 50) {
                                    $movieTitle = substr($movieTitle, 0, 47) . '...';
                                } ?>
                                <h2 class="postitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo $movieTitle;?></a></h2>
                                <div class="content2"><?php isis_excerpt('isis_excerptlength_teaser', 'isis_excerptmore'); ?> </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="wp-pagenavi">
                        <?php wp_pagenavi(); ?>
                    </div>
                <?php } ?>
            </div>
        <?php } else { ?>
            <div class="columns">
                <div id="content" >
                    <div class="top-content">
                    <?php if (have_posts()) { ?>
                        <?php while (have_posts()) { ?>
                            <?php the_post(); ?>
                            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"></div>
                            <div id="content" class="content_blog blog_style_b1" role="main">
                            <article class="post_format_standard odd">
                                <div class="post_info_1">
                                <div class="post_format"><span class="icon-pencil"><?php edit_post_link(); ?></span></div>
                                <div class="post_date"><span class="day"><?php the_time(('j')); ?></span><span class="month"><?php the_time(('M')); ?></span></div>
                                </div>

                                <div class="title_area">
                                <h1 class="post_title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                </div>

                                <div class="post_info post_info_2">
                                <?php if (of_get_option('dissauth_checkbox') == "0") { ?>
                                <span class="post_author">Posted by: <a class="post_author"><?php the_author(); ?></a></span><?php } ?>
                                <span class="post_info_delimiter"></span>
                                <?php if (of_get_option('disscats_checkbox') == "0") { ?>
                                    <?php if (has_category()) { ?>
                                    <span class="post_categories">
                                        <span class="cats_label">Categories:</span>
                                        <a class="cat_link"><?php the_category(' '); ?></a>
                                    </span>
                                    <?php } ?><?php } ?>
                                <div class="post_comments">
                                    <a>
                                    <span class="comments_number"> <?php comments_popup_link(__('No comments', 'isis'), __('1 Comment', 'isis'), __('% Comments', 'isis')); ?> </span>
                                    <span class="icon-comment"></span>
                                    </a>
                                </div>  
                                </div>

                                <div class="pic_wrapper image_wrapper">
                                <?php the_post_thumbnail('medium'); ?>
                                </div>
                                <div class="post_content">
                                <p><?php the_content(); ?></p>
                                <div class="post_wrap_n"><?php wp_link_pages('<p class="pages"><strong>' . __('Pages:') . '</strong> ', '</p>', 'number'); ?></div>    
                                </div>
                                <div class="post_info post_info_3 clearboth">
                                <?php if (of_get_option('disscats_checkbox') == "0") { ?>
                                    <span class="post_tags">
                                    <span class="tags_label">Tags:</span>
                                    <?php if (has_tag()) { ?>
                                        <a class="tag_link"><?php the_tags('', '  '); ?></a>
                                    <?php } ?>
                                    </span>
                                <?php } ?>
                                </div>
                            </article>
                            <div class="wp-pagenavi">
                                <?php previous_post_link('<div class="alignleft">%link</div>', '&laquo; %title'); ?>
                                <?php next_post_link('<div class="alignright">%link</div>', '%title &raquo; '); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div style="margin:30px auto; width:90%">
                        <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
                    </div>
                    <?php } ?>
                    </div>
                    <?php if (of_get_option('nosidebar_checkbox') == '0') {
                        get_sidebar();
                    } ?>
                </div>
            </div>
        <?php } ?>
        <?php
            $tag = get_queried_object();
            $currentLink = $linkFbComment . 'tag/' . $tag->slug;
            include(locate_template('share_this.php'));
        ?>
        <div style="margin:30px auto; width:90%">
            <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
        </div>
        <div class="comments_template">
            <?php comments_template('', true); ?>
        </div>
    </div>
</div>
<?php get_footer();