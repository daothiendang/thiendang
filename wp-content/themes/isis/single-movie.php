<?php get_header(); ?>
<style>
    .movie_container {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 60%;
    }
    .movie_iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    #bigger_screen {
        float: right;
        font-size: 16px;
        font-weight: bold;
        color: orange;
        cursor: pointer;
    }
    #share_buttons {
        padding: 0;
        width: 90%;
    }
    @media screen and (max-width: 766px) {
        #bigger_screen {
            display: none;
        }
    }
</style>

<?php global $wpdb; ?>

<div class="row">
    <div class="columns">
        <div id="content">
            <div class="top-content">
                <div <?php post_class(); ?>></div>
                <div id="content" class="content_blog blog_style_b1" role="main">
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
                    <div class="title_area" style="padding-left: 55px;">
                        <h1 class="post_title">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </h1>
                    </div>
                    <div class="pic_wrapper image_wrapper">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div style="margin: 0 5px 20px 55px;">
                        <?php echo apply_filters('the_content', $post->post_content) . '&nbsp;'; ?>
                    </div>
                    <?php
                        $googleDriveId  = get_post_meta($post->ID, 'google_drive_id', true);
                        if ($googleDriveId) {
                            $linkMovie      = 'https://docs.google.com/file/d/' . $googleDriveId . '/preview';
                            $downloadLink[] = 'https://docs.google.com/uc?export=download&id=' . $googleDriveId;
                        }
                        $youtubeId = get_post_meta($post->ID, 'youtube_id', true);
                        if ($youtubeId) {
                            $linkMovie      = 'https://www.youtube.com/embed/' . $youtubeId;
                            $downloadLink[] = 'http://keepvid.com/?url=https://www.youtube.com/watch?v=' . $youtubeId;
                        }
                    ?>
                    <div class="movie_container">
                        <iframe class="movie_iframe" src="<?php echo $linkMovie; ?>" width="536" height="302" allowfullscreen></iframe>
                    </div>
                    <div class="post_wrap_n">
                        <?php wp_link_pages('<p class="pages"><strong>Pages: </strong>', '</p>', 'number'); ?>
                    </div>    

                    <div class="post_info post_info_3 clearboth" style="margin-top:10px;">
                        <?php if (of_get_option('disscats_checkbox') == "0" && has_tag()) { ?>
                            <span class="post_tags">
                                <span class="tags_label">Phim:</span>
                                <a class="tag_link"><?php the_tags('', ', '); ?></a>
                            </span>
                        <?php } ?>
                        <span id="bigger_screen">Xem với kích thước lớn</span>
                    </div>

                    <div class="wp-pagenavi">
                        <?php previous_post_link('<div class="alignleft">%link</div>', '&laquo; %title'); ?>
                        <?php next_post_link('<div class="alignright">%link</div>', '%title &raquo; '); ?>
                    </div>
                    <div style="width:100%;">
                        <?php /*
                        <div class="download_button">
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    Download Phim <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <?php
                                        $i = 0;
                                        foreach ($downloadLink as $link) {
                                            $i++;
                                            echo '<li><a target="_blank" href="' . $link . '">Link ' . $i . '</a></li>';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                         */?>
                        <?php
                            $tags = wp_get_post_tags($post->ID);
                            $relatedEpisode = get_movies_by_tag($tags[0]->term_id);
                        ?>
                        <div style="margin:0 auto; width:90%">
                            <select id="select_movie" data-placeholder="Search các tập khác trong Season" class="chosen-select" tabindex="2">
                                <option value=""></option>
                                <?php
                                    foreach ($relatedEpisode as $episode) {
                                        $curEpisode = '';
                                        if ($episode->ID == $post->ID) {
                                            $curEpisode = 'disabled style="background: #E9C341; color:#000;"';
                                        }
                                        echo '<option value="' . $episode->ID . '"' . $curEpisode . '>';
                                        echo $episode->post_title;
                                        echo '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <?php
                            $currentLink = $linkFbComment . str_replace(home_url(), '', get_permalink());
                            include(locate_template('share_this.php'));
                        ?>
                        <div style="margin: 15px auto; width: 90%;">
                            <div class="fb-comments" data-href="<?php echo $currentLink; ?>" data-numposts="7" data-colorscheme="light"></div>
                        </div>
                    </div>
                </div>
                <a class="comments_template"><?php comments_template('', true); ?></a>
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
<?php get_footer(); ?>

<script>
    var $ = jQuery;
</script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom/select_search/prism.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom/select_search/chosen.jquery.min.js"></script>
<script type="text/javascript">    
    var config = {
        '.chosen-select'           : {},
        '.chosen-select-deselect'  : {allow_single_deselect:true},
        '.chosen-select-no-single' : {disable_search_threshold:10},
        '.chosen-select-no-results': {no_results_text:'Không tìm thấy!'},
        '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
        $(selector).chosen(config[selector]);
    }
    $('#select_movie').chosen().change(function() {
    id = $(this).val();
        $(this).parent().html('Đang tải, xin đợi một chút... <img src="<?php bloginfo('stylesheet_directory'); ?>/css/img/ajax_loader_blue_32.gif" />').css('text-align', 'center');
        $(this).parent().find('.chosen-container-single').remove();
        window.location.href = "<?php echo home_url() . '/?p=';?>" + id;
    });
        
    $('#bigger_screen').click(function() {
        var text = $(this).text();
        if (text === 'Xem với kích thước lớn') {
            $('#sidebar').hide();
            $('#content .top-content').animate({width:'100%'}, 500);
            text = 'Xem với kích thước nhỏ';
        } else {
            $('#content .top-content').animate({width:'70%'}, 500);
            $('#sidebar').show();
            text = 'Xem với kích thước lớn';
        }
        $(this).text(text);
    });
</script>