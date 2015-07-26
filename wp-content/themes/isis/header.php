<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php if (is_single() || is_page()) { ?>
        <title><?php echo get_the_title() . ' - '; echo get_bloginfo(); ?></title>
    <?php } else if (is_tag()) { ?>
        <title><?php echo single_tag_title('', false) . ' - ' . get_bloginfo(); ?></title>
    <?php } else { ?>
        <title><?php echo get_bloginfo(); ?></title>
    <?php } ?>
    
    <?php
        global $post;
        $postSlug = $post->post_name;
        $themeUrl = get_template_directory_uri();
    ?>
    
    <link rel="shortcut icon" href="<?php echo get_site_url();?>/icon/favicon.png?v=0.1" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <link rel="stylesheet" href="<?php echo $themeUrl;?>/css/custom/custom.css" />
    <link rel="stylesheet" href="<?php echo $themeUrl;?>/css/custom/select_search/prism.css" />
    <link rel="stylesheet" href="<?php echo $themeUrl;?>/css/custom/select_search/chosen.css" />
    
    <?php //  ------------------  css for list movies P&F  -------------------------------  ?>
    <?php if ($posts[0]->ID == '121') { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/hover_link_effect/demo.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/hover_link_effect/component.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/hover_link_effect/hover_image.css" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="<?php echo $themeUrl; ?>/js/custom/hover_link_effect/modernizr.custom.js"></script>
	<script>
	    // For Demo purposes only (show hover effect on mobile devices)
	    [].slice.call(document.querySelectorAll('a[href="#"')).forEach(function (el) {
		el.addEventListener('click', function (ev) {
		    ev.preventDefault();
		});
	    });
	</script>
    <?php // ------------  css for japanese ngu phap so cap  -----------------------------  ?>
    <?php } else if ($postSlug == 'giao-trinh-50-bai-shin-no-nihongo-dai-hoc-fpt' || is_page_template('page-japanese_ngu_phap_so_cap_2.php')){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/japanese_ngu_phap_so_cap/popup.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/japanese_ngu_phap_so_cap/style.css" />
    
    <?php // ----------------------  css for tag page  -----------------------------------  ?>
    <?php } else if (is_tag()) { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/custom_tag.css" />
    <?php //  ----------------------------------------------------------------------------  ?>
	
    <?php // ----------------------  css for movie page  -----------------------------------  ?>
    <?php } else if ( is_singular( 'movie' ) ) { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/bootstrap.min.css" />
    <?php } else if ($postSlug == 'bboy-or-die') { ?>
        <script src="<?php echo $themeUrl;?>/sliderengine/jquery.js"></script>
        <script src="<?php echo $themeUrl;?>/sliderengine/amazingslider.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/sliderengine/amazingslider-1.css" />
        <script src="sliderengine/initslider-1.js"></script>
    <?php } ?>
    <?php //  ----------------------------------------------------------------------------  ?>
        
    <?php wp_head(); ?>
        
    <script type="text/javascript" src="<?php echo $themeUrl; ?>/js/custom/bootstrap.min.js"></script>
</head>


<body <?php body_class(); ?>>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!--HEADER START-->


 
 <?php if( get_option( 'isis' )){ ?>
<?php get_template_part(''.$head = of_get_option('head_select', 'header').''); ?>

 <?php }else{ ?>
 
 <?php get_template_part('dummy/dummy','head1'); ?>
        <?php } ?>  
        

 		

    
      







<!--HEADER END-->
    