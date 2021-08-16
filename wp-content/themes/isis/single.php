<?php
    get_header();
?>
<div class="row">
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
                                    <?php if (current_user_can('manage_options')) {?>
                                        <div class="post_format"><span class="icon-pencil"><?php edit_post_link(); ?></span></div>
                                    <?php } ?>
                                    <div class="post_date" style="height: 65px;">
                                        <a href="<?php the_permalink(); ?>">
                                        <span class="day"><?php echo date('j'); ?></span>
                                        <span class="month" style="margin: 4px;"><?php echo date('M'); ?></span>
                                        <span class="month"><?php echo date('Y'); ?></span>
                                        </a>
                                    </div>
                                </div>

                                <div class="title_area">
                                    <h1 class="post_title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                                </div>

                                <?php /*
                                <div class="post_info post_info_2">
                                    <?php if (of_get_option('dissauth_checkbox') == "0") { ?>
                                        <span class="post_author">
                                            Posted by: <a class="post_author"><?php the_author(); ?></a>
                                        </span>
                                    <?php } ?>
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
                                            <span class="comments_number">
                                                <?php comments_popup_link('No comments', '1 Comment', '% Comments'); ?>
                                            </span>
                                            <span class="icon-comment"></span>
                                        </a>
                                    </div>
                                </div>
                                */?>
                                
                                <div class="pic_wrapper image_wrapper">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                                <div class="post_content">
                                    <p><?php the_content(); ?></p>
                                    <div class="post_wrap_n">
                                        <?php wp_link_pages('<p class="pages"><strong>Pages: </strong> ', '</p>', 'number'); ?>
                                    </div>	
                                </div>
                                <div class="post_info post_info_3 clearboth">
                                    <?php if (of_get_option('disscats_checkbox') == "0" && has_tag()) { ?>
                                        <span class="post_tags">
                                            <span class="tags_label">Tags:</span>
                                            <a class="tag_link"><?php the_tags('', '  '); ?></a>
                                        </span>
                                    <?php } ?>
                                </div>
                            </article>
                            <div class="wp-pagenavi">
                                <?php previous_post_link('<div class="alignleft">%link</div>', '&laquo; %title'); ?>
                                <?php next_post_link('<div class="alignright">%link</div>', '%title &raquo; '); ?>
                            </div>
                            <?php
                                $currentLink = $linkFbComment . str_replace(home_url(), '', get_permalink());
                                include(locate_template('share_this.php'));
                            ?>
                            <div style="margin:30px auto; width:90%">
                                <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
                            </div>
                        </div>
                    <?php } ?>
                    <a class="comments_template"><?php comments_template('', true); ?></a>
                <?php } ?>
            </div>
            <?php
                if (of_get_option('nosidebar_checkbox') == "0") {
                    get_sidebar();
                }
            ?>
        </div>
    </div>
</div>
</div>
</div>
<?php get_footer();