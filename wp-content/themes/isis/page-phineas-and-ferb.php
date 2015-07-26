<?php get_header(); ?>
<div class="row">
    <!--Content-->
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
                        <div class="post_info_wrap">
                            <section class="color-1">
                                <div class="grid">
                                    <nav class="cl-effect-20">
                                        <a href="http://localhost/thien_dang/tag/pf-season-1/">
                                            <span data-hover="Season 1">Season 1</span>
                                        </a>
                                        <figure class="effect-julia">
                                            <img src="http://i747.photobucket.com/albums/xx116/daothiendang/Web/PampF-SS1.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Season 1 completed</h2>
                                                <div>47/47 tập</div>
                                                <a href="http://localhost/thien_dang/tag/pf-season-1/">Xem phim</a>
                                            </figcaption>
                                        </figure>
                                        <a href="http://localhost/thien_dang/tag/pf-season-2/">
                                            <span data-hover="Season 2">Season 2</span>
                                        </a>
                                        <figure class="effect-julia">
                                            <img src="http://i747.photobucket.com/albums/xx116/daothiendang/Web/PampF-SS2.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Season 2 on-going</h2>
                                                <div>60/65 tập</div>
                                                <a href="http://localhost/thien_dang/tag/pf-season-2/">Xem phim</a>
                                            </figcaption>
                                        </figure>
                                    </nav>
                                    <nav class="cl-effect-14">
                                        <a href="http://localhost/thien_dang/tag/pf-season-3/">Season 3</a>
                                        <figure class="effect-goliath">
                                            <img src="http://i747.photobucket.com/albums/xx116/daothiendang/Web/PampF-SS3.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Season 3 on-going</h2>
                                                <div>8/63 tập</div>
                                                <a href="http://localhost/thien_dang/tag/pf-season-3/">Xem phim</a>
                                            </figcaption>
                                        </figure>
                                        <a href="http://localhost/thien_dang/tag/pf-season-4/">Season 4</a>
                                        <figure class="effect-goliath">
                                            <img src="http://i747.photobucket.com/albums/xx116/daothiendang/Web/PampF-SS4.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Season 4 on-going</h2>
                                                <div>7/? tập</div>
                                                <a href="http://localhost/thien_dang/tag/pf-season-4/">Xem phim</a>
                                            </figcaption>
                                        </figure>
                                    </nav>
                                </div>
                            </section>
                        </div>
                        <div style="clear:both"></div>	
                        <div class="post_wrap_n"></div>
                    <?php endwhile ?> 
                </div>
                <div class="comments_template"><?php comments_template('', true); ?></div>
                <?php $currentLink = $linkFbComment . substr(get_permalink(), strlen(get_option('home'))); ?>
                <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
            <?php endif ?>
        </div>
        <?php if (of_get_option('nosidebar_checkbox') == "0") { ?><?php get_sidebar(); ?><?php } ?>
    </div>
</div>
</div>

<?php get_footer(); ?>