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
    
    <?php
        if (is_single() || is_page()) {
            $title = get_the_title() . ' - Thiendang.vn';
        } else if (is_tag()) {
            $title = single_tag_title('', false) . ' - Thiendang.vn';
        } else {
            $title = 'Thiendang.vn';
        }
        
        global $post;
        $postSlug = $post->post_name;
        $themeUrl = get_template_directory_uri();
    ?>
    <meta property="og:title" content="<?php echo $title;?>" />
    <meta property="og:site_name" content="thiendang.vn"/>
    
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en_US" />
    <meta name="description" content="Welcome to thiendang.vn" />
    <meta name="keywords" content="thiendang" />
        
    <?php if (is_singular('movie')) { ?>
        <meta property="og:description" content="<?php echo strip_tags(get_post_field('post_content', $post->ID)); ?>" />
        <meta property="og:image" content="<?php echo get_post_meta($post->ID, 'movie_image_url', true); ?>" />
    <?php } else if (is_page() || is_single()) { ?>
        <meta property="og:description" content="<?php echo wp_trim_words(strip_tags(get_post_field('post_content', $post->ID)), 100); ?>" />
        <meta property="og:image" content="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" />
    <?php } else { ?>
        <meta property="og:description" content="<?php echo ($title); ?>" />
    <?php } ?>
    
    <meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="fb:app_id" content="682690658535443" />
    
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo get_site_url();?>/icon/favicon.png?v=0.1" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <link rel="stylesheet" href="<?php echo $themeUrl;?>/css/custom/custom.css" />
    <link rel="stylesheet" href="<?php echo $themeUrl;?>/css/custom/select_search/prism.css" />
    <link rel="stylesheet" href="<?php echo $themeUrl;?>/css/custom/select_search/chosen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/bootstrap.min.css" />
    
    <?php //  ------------------  css for list movies P&F  -------------------------------  ?>
    <?php if ($postSlug == 'phineas-and-ferb') { ?>
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
    <?php } else if ($postSlug == 'giao-trinh-50-bai-shin-no-nihongo-dai-hoc-fpt' || $postSlug == 'giao-trinh-50-bai-shin-no-nihongo-dai-hoc-fpt-3'){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/japanese_ngu_phap_so_cap/popup.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/japanese_ngu_phap_so_cap/style.css" />
    
    <?php // ----------------------  css for tag page  -----------------------------------  ?>
    <?php } else if (is_tag()) { ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/custom_tag.css" />
    <?php //  ----------------------------------------------------------------------------  ?>
    <?php } else if ($postSlug == 'bboy-or-die') { ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $themeUrl;?>/css/custom/sliderengine/amazingslider-1.css" />
        
    <?php } ?>
    <?php //  ----------------------------------------------------------------------------  ?>
    
    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php echo $themeUrl; ?>/js/custom/bootstrap.min.js"></script>
    <script type="text/javascript">var siteUrl = '<?php echo get_site_url(); ?>/';</script>
    
    <?php // google analytics ?>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-80428217-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body <?php body_class(); ?>>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId  : '682690658535443',
                xfbml  : true,
                version: 'v2.5'
            });
        };
    </script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vn_VN/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php 
    if( get_option( 'isis' )){
        get_template_part(''.$head = of_get_option('head_select', 'header').'');
    } else {
        get_template_part('dummy/dummy','head1');
    }