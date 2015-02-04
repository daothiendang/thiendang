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
    <title><?php wp_title('-',true,'left'); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-----------------------  css for japanese ngu phap so cap  ------------------>
    <?php if (is_page_template('page-japanese_ngu_phap_so_cap.php') || is_page_template('page-japanese_ngu_phap_so_cap_2.php')): ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/japanese_ngu_phap_so_cap/popup.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/japanese_ngu_phap_so_cap/style.css" />
    <?php endif;?>
    <!----------------------------------------------------------------------------->
	
    
    <?php wp_head(); ?>

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
    