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
</style>

<div class="row">
    <div class="columns">
	<div id="content" >
	    <div class="top-content">
		<!--Content-->
		<?php if (have_posts()): ?><?php while (have_posts()): ?><?php the_post(); ?>
	                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">  </div>

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
				    </a></div>
			    </div>

			    <div class="title_area" style="padding-left: 50px;">
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
				<div class="post_comments"><a><span class="comments_number"> <?php comments_popup_link(__('No comments', 'isis'), __('1 Comment', 'isis'), __('% Comments', 'isis')); ?> </span><span class="icon-comment"></span></a></div>  
			    </div>

			    <div class="pic_wrapper image_wrapper">
				<?php the_post_thumbnail('medium'); ?>
			    </div>
				
			    <p><?php the_content(); ?></p>
			    <?php $linkGoogleDrive = get_post_meta($post->ID, 'google_drive_link', true);?>
			    <div class="movie_container">
				<iframe class="movie_iframe" src="https://docs.google.com/file/d/<?php echo $linkGoogleDrive;?>/preview" width="536" height="302" allowfullscreen></iframe>
			    </div>
			    <div class="post_wrap_n"><?php wp_link_pages('<p class="pages"><strong>' . __('Pages:') . '</strong> ', '</p>', 'number'); ?></div>	
				
			    <div class="post_info post_info_3 clearboth">
				<?php if (of_get_option('disscats_checkbox') == "0") { ?>
				<span class="post_tags">
				    <?php if (has_tag()) { ?><span class="tags_label">Tags:</span><?php } ?>
				    <?php if (has_tag()) { ?><a class="tag_link"><?php the_tags('', '  '); ?></a>
				</span><?php } ?><?php } ?>
			    </div>
			    
			    
			    <?php
				if (is_single()) {
				    $tags = wp_get_post_tags($post->ID);
				    if ($tags) {
					$first_tag = $tags[0]->term_id;
					global $wpdb; 

					$sql = 'SELECT wp_posts.ID, wp_posts.post_title, wp_posts.guid FROM wp_posts 
					    INNER JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID
					    INNER JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id
					    WHERE post_status="publish" AND wp_terms.`term_id`=' . $first_tag;

					$posts = $wpdb->get_results($sql);
				    }
				}
			    ?>
			    <div class="wp-pagenavi">
				<?php previous_post_link('<div class="alignleft">%link</div>', '&laquo; %title'); ?>
				<?php next_post_link('<div class="alignright">%link</div>', '%title &raquo; '); ?>
			    </div>
			    <div style="width:100%;">
				<div style="margin:0 auto; width:80%">
				    <?php $currentPostId = get_the_ID();?>
				    <select id="select_movie" data-placeholder="Search các tập khác trong Season" class="chosen-select" tabindex="2">
					<option value=""></option>
					<?php foreach ($posts as $post) { ?>
					    <?php echo get_the_ID(); echo $post->ID;?>
					    <option value="<?php echo $post->ID; ?>" <?php if ($post->ID == $currentPostId) { ?> disabled style="background: #E9C341; color:#000;"<?php }?>>
						<?php echo $post->post_title; ?>
					    </option>
					<?php }?>
				    </select>
				</div>
			    </div>
			    <div class="fb-comments" style="margin: 30px auto;" data-href="<?php echo $linkFbComment . $_SERVER['REQUEST_URI']; ?>" data-numposts="7" data-colorscheme="light"></div>
			    <div class="share">Share this:</div><?php get_template_part('share_this'); ?>
			</div>
		    <?php endwhile ?>
    		<!--POST END--> 
		
    		<a class="comments_template"><?php comments_template('', true); ?></a>
		<?php endif ?></div>


	    <?php if (of_get_option('nosidebar_checkbox') == "0") { ?><?php get_sidebar(); ?><?php } ?>
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
	'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
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
</script>