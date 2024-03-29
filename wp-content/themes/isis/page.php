<?php get_header(); ?>
<div class="row">
    <div id="sub_banner">
        <h1>
            <?php the_title(); ?>
        </h1>
    </div>
    <div id="content">
        <div class="top-content">
            <?php if (have_posts()): ?><?php while (have_posts()): ?><?php the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                        <div class="post_content">
                            <a class="postimg"><?php the_post_thumbnail('medium'); ?></a>
                            <div class="metadate"> <?php edit_post_link(); ?></div> 
                        </div>
                        <div style="clear:both"></div>	
                        <div class="post_info_wrap"><?php the_content(); ?> </div>
                        <div style="clear:both"></div>	
                        <div class="post_wrap_n">
                        </div>
                    <?php endwhile ?> 
                </div>
                <div class="comments_template"><?php comments_template('', true); ?></div>
                <?php $currentLink = $linkFbComment . str_replace(home_url(), '', get_permalink()); ?>
                <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
            <?php endif ?>
        </div>
        <?php if (of_get_option('nosidebar_checkbox') == "0") { ?><?php get_sidebar(); ?><?php } ?>
    </div>
</div>
</div>

<?php get_footer();