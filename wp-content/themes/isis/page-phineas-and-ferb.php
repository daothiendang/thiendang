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
                        <div class="post_info_wrap">
                            <section class="color-1">
                                <div class="grid">
                                    <nav class="cl-effect-20">
                                        <a href="<?php echo $siteUrl; ?>/tag/pf-season-1/">
                                            <span data-hover="Season 1">Season 1</span>
                                        </a>
                                        <figure class="effect-julia">
                                            <img src="//c1.staticflickr.com/5/4147/35386958320_83cffe09c5.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Season 1 completed</h2>
                                                <div>47/47 tập</div>
                                                <a href="<?php echo $siteUrl; ?>/tag/pf-season-1/">Xem phim</a>
                                            </figcaption>
                                        </figure>
                                        <a href="<?php echo $siteUrl; ?>/tag/pf-season-2/">
                                            <span data-hover="Season 2">Season 2</span>
                                        </a>
                                        <figure class="effect-julia">
                                            <img src="//c1.staticflickr.com/5/4236/35605339692_3ae17d4b80.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Season 2 completed</h2>
                                                <div>65/65 tập</div>
                                                <a href="<?php echo $siteUrl; ?>/tag/pf-season-2/">Xem phim</a>
                                            </figcaption>
                                        </figure>
                                    </nav>
                                    <nav class="cl-effect-14">
                                        <a href="<?php echo $siteUrl; ?>/tag/pf-season-3/">Season 3</a>
                                        <figure class="effect-goliath">
                                            <img src="//c1.staticflickr.com/5/4214/34934164304_8ae6e9af1a.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Season 3 on-going</h2>
                                                <div>29/63 tập</div>
                                                <a href="<?php echo $siteUrl; ?>/tag/pf-season-3/">Xem phim</a>
                                            </figcaption>
                                        </figure>
                                        <a href="<?php echo $siteUrl; ?>/tag/pf-season-4/">Season 4</a>
                                        <figure class="effect-goliath">
                                            <img src="//c1.staticflickr.com/5/4257/35605339832_4dc848b50e.jpg" alt="img01" />
                                            <figcaption>
                                                <h2>Season 4 on-going</h2>
                                                <div>9/48 tập</div>
                                                <a href="<?php echo $siteUrl; ?>/tag/pf-season-4/">Xem phim</a>
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
                <?php
                    $currentLink = $linkFbComment . substr(get_permalink(), strlen(get_option('home')));
                    include(locate_template('share_this.php'));
                ?>
                <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
            <?php endif ?>
        </div>
        <?php if (of_get_option('nosidebar_checkbox') == "0") { ?><?php get_sidebar(); ?><?php } ?>
    </div>
</div>
</div>
<?php get_footer();