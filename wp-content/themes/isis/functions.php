<?php
/**
 * isis functions and definitions
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 */
/*
 * Set up the content width value based on the theme's design.
 *
 */

$arrayText   = explode(' ', $text);
        $specialChar = array('.', ',', '?', '!');
foreach ($arrayText as $text) {
    $i = -1;
    while (in_array(substr($text, $i, 1), $specialChar)) {
        $i--;
    }
    if (mb_substr($text, $i - 2, 3) == 'erb') {
        $text   = substr($text, 0, strlen($text) + $i - 2).substr($text, $i + 1, $i + 1);
        $j = -1;
        while (mb_substr($text, $j) !== '-') {
            $j--;
        }
        $vowel      = mb_substr($text, strlen($text) - $j);
        $consonant  = mb_substr($text, strlen($text) - $j);
        $isFerb = true;
    }
    $result .= $text.' ';
}


// global variable
$linkFbComment = 'http://thiendang.vn/';
$siteUrl       = get_site_url();
$themeUrl      = get_template_directory_uri();

if (!isset($content_width)) {
    $content_width = 630;
}
//Load Other CSS files

function isis_other_css() {
    if (!is_admin()) {
        wp_enqueue_style('isis_other', get_template_directory_uri() . '/css/foundation.css');
        wp_enqueue_style('isis_other', get_template_directory_uri() . '/css/nivo-slider.css');
        wp_enqueue_style('isis_other', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css');
    }
}
add_action('wp_enqueue_scripts', 'isis_other_css');

function isis_other1_css() {
    if (!is_admin()) {
        wp_enqueue_style('isis_other1', get_template_directory_uri() . '/css/nivo-slider.css');
        wp_enqueue_style('isis_other1', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css');
    }
}
add_action('wp_enqueue_scripts', 'isis_other1_css');

function isis_other2_css() {
    if (!is_admin()) {
        wp_enqueue_style('isis_other2', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css');
    }
}
add_action('wp_enqueue_scripts', 'isis_other2_css');

function isis_fonts_css() {
    if (!is_admin()) {
        wp_enqueue_style('customfont', get_template_directory_uri() . '/fonts/' . $os_fonts = of_get_option('font_select', 'raleway') . '.css');
    }
}
add_action('wp_enqueue_scripts', 'isis_fonts_css');

//Load Custom CSS
function isis_customstyle() {
    ?>
    <?php if (of_get_option('sldrtxt_checkbox') == "0") { ?>
        <style type="text/css">
            body .nivo-caption {
                display: none!important;
            }
        </style>
    <?php } ?>
    <?php if (of_get_option('sldrtitle_checkbox') == "0") { ?>
        <style type="text/css">
            .nivo-caption h3 {
                display: none!important;
            }
        </style>
    <?php } ?>
    <?php if (of_get_option('sldrdes_checkbox') == "0") { ?>
        <style type="text/css">
            .nivo-caption p {
                display: none!important;
            }
        </style>
    <?php } ?>


    <style type="text/css">
        /*Secondary Elements Color*/
        .postitle, .postitle a,.postitle2 a, .widgettitle,.widget-title,#searchsubmit, .entry-title a, .widgettitle2, #reply-title, #comments span, .catag_list a, .lay2 h2, .nivo-caption a, .nivo-caption,.entry-title,#sub_banner h1,.content_blog .post_title a,.title h2.blue,.title h2.green ,.post_content a{
        color:<?php echo of_get_option('title_colorpicker');
    ?>!important;
        border-color:<?php echo of_get_option('title_colorpicker');
    ?>!important;
        }
        #copyright, #navmenu ul li ul li,  #today,#menu_wrap2{
        background-color:<?php echo of_get_option('menu_colorpicker');
    ?>!important;
        }

        .view a.info:hover,#navmenu ul > li ul li:hover,#submit:hover,.midbutton:hover,.midrow_blocks_wrap:hover {
        background-color:<?php echo of_get_option('hover_colorpicker');
    ?>!important; background:<?php echo of_get_option('hover_colorpicker'); ?>!important;

        }
        .ch-info a:hover,.widget_tag_cloud a:hover,.post_info a:hover,.post_views a:hover,
        .post_comments a:hover,.wp-pagenavi:hover, .alignleft a:hover, .wp-pagenavi:hover ,.alignright a:hover,.comment-form a:hover,.post_content a:hover,.port a:hover{
        color:<?php echo of_get_option('hover_colorpicker');
    ?>!important;}

    </style>
<?php
}
add_action('wp_head', 'isis_customstyle');

//Load Java Scripts to header
function isis_head_js() {
    if (!is_admin()) {
    wp_enqueue_script('jquery');
    wp_enqueue_script('isis_js', get_template_directory_uri() . '/other2.js');
    wp_enqueue_script('isis_other', get_template_directory_uri() . '/js/other.js');
    
    if (of_get_option('slider_select') == "nivo") {
        wp_enqueue_script('isis_nivo', get_template_directory_uri() . '/js/jquery.nivo.js');
    }
    if (of_get_option('disslight_checkbox') == "0")
        if (is_singular())
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'isis_head_js');

//Load Java Scripts to Footer
function isis_load_js() {
    ?>
    <?php if (of_get_option('slider_select') == "nivo") { ?>

    <script type="text/javascript">
        jQuery(window).load(function () {
        // nivoslider init
        jQuery('#nivo').nivoSlider({
            effect: 'random',
            animSpeed: 700,
            pauseTime:<?php echo of_get_option('sliderspeed_text'); ?>,
            startSlide: 0,
            slices: 10,
            directionNav: true,
            directionNavHide: true,
            controlNav: true,
            controlNavThumbs: false,
            keyboardNav: true,
            pauseOnHover: true,
            captionOpacity: 0.8,
            afterLoad: function () {
            if (jQuery(window).width() < 480) {
                jQuery(".nivo-caption").animate({"opacity": "1", "right": "0"}, {easing: "easeOutBack", duration: 500});
            } else {
                jQuery(".nivo-caption").animate({"opacity": "1", "right": "11%"}, {easing: "easeOutBack", duration: 500});
                jQuery(".nivo-caption").has('.sld_layout3').addClass('sld3wrap');
            }
            },
            beforeChange: function () {
            jQuery(".nivo-caption").animate({right: "-500px"}, {easing: "easeInBack", duration: 500});
            //jQuery(".nivo-caption").delay(400).removeClass('sld3wrap');
            jQuery('.nivo-caption').animate({"opacity": "0"}, 100);
            jQuery('.nivo-caption').delay(500).queue(function (next) {
                jQuery(this).removeClass("sld3wrap");
                next();
            });

            },
            afterChange: function () {
            if (jQuery(window).width() < 480) {
                jQuery(".nivo-caption").animate({"opacity": "1", "right": "0"}, {easing: "easeOutBack", duration: 500});
            } else {
                jQuery(".nivo-caption").animate({"opacity": "1", "right": "11%"}, {easing: "easeOutBack", duration: 500});
                jQuery(".nivo-caption").has('.sld_layout3').addClass('sld3wrap');
            }
            }
        });
        });
    </script>

    <?php } ?>

    <script type="text/javascript">
        /* <![CDATA[ */
        jQuery().ready(function () {

        jQuery('#navmenu').prepend('<div id="menu-icon"><?php _e('Menu', 'isis') ?></div>');
        jQuery("#menu-icon").on("click", function () {
            jQuery("#navmenu .menu").slideToggle();
            jQuery(this).toggleClass("menu_active");
        });

        });
        /* ]]> */
    </script>

    <script type="text/javascript" charset="utf-8">

        jQuery(window).load(function () {
        jQuery('.tf-header-slider').flexslider({
            animation: "fade",
            maxItems: 11,
            controlNav: true
        });
        });

        jQuery(window).load(function () {
        jQuery('.tf-work-carousel').flexslider({
            animation: "slade",
            animationLoop: false,
            itemWidth: 280,
            itemMargin: 30,
            move: 1,
            start: function (slider) {
            jQuery('body').removeClass('loading');
            }
        });
        });

        jQuery(window).load(function () {
        jQuery('.tf-footer-carousel').flexslider({
            animation: "slide",
            animationLoop: true,
            itemWidth: 140,
            itemMargin: 15,
            minItems: 1,
            maxItems: 6,
            move: 1
        });
        });

        jQuery(document).ready(function ($) {
        jQuery('#work-carousel').carouFredSel({
            next: "#work-carousel-next",
            prev: "#work-carousel-prev",
            auto: false,
            circular: false,
            infinite: true,
            width: '100%',
            scroll: {
            items: 1
            }
        });
        });
    </script> 
<?php
}
add_action('wp_footer', 'isis_load_js');

/* isis welcome text */
//isis get the first image of the post Function
function isis_get_images($overrides = '', $exclude_thumbnail = false) {
    return get_posts(wp_parse_args($overrides, array(
    'numberposts' => -1,
    'post_parent' => get_the_ID(),
    'post_type' => 'attachment',
    'post_mime_type' => 'image',
    'order' => 'ASC',
    'exclude' => $exclude_thumbnail ? array(get_post_thumbnail_id()) : array(),
    'orderby' => 'menu_order ID'
    )));
}

//ADD FULL WIDTH BODY CLASS
function isis_fullwdth_body_class($classes) {
    if (of_get_option('nosidebar_checkbox') == "1")
    $classes[] = 'isis_fullwdth_body';
    return $classes;
}
add_filter('body_class', 'isis_fullwdth_body_class');

//Custom Excerpt Length
function isis_excerptlength_teaser($length) {
    return 30;
}

function isis_excerptlength_index($length) {
    return 12;
}

function isis_excerptmore($more) {
    return '...';
}

function isis_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

/* ----------------------------------------------------------------------------------- */
/* Display <title> tag
  /*----------------------------------------------------------------------------------- */

// filter function for wp_title
function isis_filter_wp_title($old_title, $sep, $sep_location) {
    // add padding to the sep
    $ssep = ' ' . $sep . ' ';

    // find the type of index page this is
    if (is_category()) {
        $insert = $ssep . __('Category', 'isis');
    } elseif (is_tag()) {
        $insert = $ssep . __('Tag', 'isis');
    } elseif (is_author()) {
        $insert = $ssep . __('Author', 'isis');
    } elseif (is_year() || is_month() || is_day()) {
        $insert = $ssep . __('Archives', 'isis');
    } elseif (is_home()) {
        $insert = $ssep . get_bloginfo('description');
    } else {
        $insert = NULL;
    }

    // get the page number we're on (index)
    if (get_query_var('paged')) {
        $num = $ssep . __('Page ', 'isis') . get_query_var('paged');
    } elseif (get_query_var('page')) {
        // get the page number we're on (multipage post)
        $num = $ssep . __('Page ', 'isis') . get_query_var('page');
    } else {
        $num = NULL;
    }
    // concoct and return new title
    return get_bloginfo('name') . $insert . $old_title . $num;
}
add_filter('wp_title', 'isis_filter_wp_title', 10, 3);

function isis_rss_title($title) {
    /* need to fix our add a | blog name to wp_title */
    $ft = str_replace(' | ', '', $title);
    return str_replace(get_bloginfo('name'), '', $ft);
}
add_filter('get_wp_title_rss', 'isis_rss_title', 10, 1);

//SIDEBAR
function isis_widgets_init() {
    register_sidebar(array(
        'name' => 'Right Sidebar',
        'id' => 'sidebar',
        'description' => 'Right Sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget_wrap">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
    'name' => 'Footer Widgets',
    'id' => 'foot_sidebar',
    'description' => 'Widget Area for the Footer',
    'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget_wrap">',
    'after_widget' => '</div></div>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'isis_widgets_init');

//**************isis SETUP******************//
function isis_setup() {
    //Custom Background
    add_theme_support('custom-background', array(
        'default-color' => '',
        'default-image' => get_template_directory_uri() . ''
    ));
    add_theme_support('automatic-feed-links');

    //Post Thumbnail    
    add_theme_support('post-thumbnails');
    
    //Register Menus
    register_nav_menus(array(
    'primary' => __('Primary Navigation(Header)', 'isis'),
    ));
    
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
    
    // Localisation Support
    load_theme_textdomain('isis', get_template_directory() . '/languages');
    
    /*
     * Loads the Options Panel
     *
     * If you're loading from a child theme use stylesheet_directory
     * instead of template_directory
     */
    define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/');
    require_once dirname(__FILE__) . '/admin/options-framework.php';

    include(get_template_directory() . '/lib/widgets.php');
}
add_action('after_setup_theme', 'isis_setup');

function add_custom_types_to_tax($query) {
    if (is_category() || is_tag() && empty($query->query_vars['suppress_filters'])) {
        // Get all your post types
        $post_types = get_post_types();

        $query->set('post_type', $post_types);
        return $query;
    }
}
add_filter('pre_get_posts', 'add_custom_types_to_tax');

// get movies by tag names
function get_movies_by_tag($tagId, $limit = '') {
    global $wpdb;
    $limitCondition = '';
    
    if ($limit != '') {
        $limitCondition = ' LIMIT ' . $limit;
    }
    $sql = 'SELECT wp_posts.ID, wp_posts.post_title, wp_posts.guid FROM wp_posts 
            INNER JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID
            INNER JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id
            WHERE post_status="publish" AND wp_terms.`term_id`=' . $tagId . '
            ORDER BY post_date' . $limitCondition;
    $posts = $wpdb->get_results($sql);
    return $posts;
}

/*  --------------------  page-hoc-bo-thu-tieng-nhat  ----------------------  */
function search_bo_thu() {
    $type  = $_GET['type'];
    $value = $_GET['value'];
    
    global $wpdb;
    
    switch ($type) {
        case 'so_thu_tu':
            if ($value == 'all') {
                $sql = 'SELECT * FROM wp_kanji_bo_thu';
            } else {
                $ranges = explode(' - ', $value);
                $limit  = $ranges[1] - $ranges[0] + 1;
                $start  = $ranges[0] - 1;
                $sql = 'SELECT * FROM wp_kanji_bo_thu LIMIT ' . $start . ', ' . $limit;
            }
            break;
        case 'so_net':
            $sql = 'SELECT * FROM wp_kanji_bo_thu WHERE so_net = ' . $value;
            break;
        case 'search':
            $sql = 'SELECT * FROM wp_kanji_bo_thu WHERE
                han_viet    LIKE "%' . $value . '%"
                OR bo_thu   LIKE "%' . $value . '%"
                OR bien_the LIKE "%' . $value . '%"';
            break;
    }
    $results = $wpdb->get_results($sql, ARRAY_A);
    
    print json_encode($results);
    die;
}
add_action('wp_ajax_search_bo_thu', 'search_bo_thu');
add_action('wp_ajax_nopriv_search_bo_thu', 'search_bo_thu');

function create_questions_bo_thu() {
    $testType  = $_GET['type'];
    $total     = $_GET['total'];
    $listWords = explode(';', $_GET['list_words']);
    $questions = array_rand($listWords, $total);
    
    if (is_numeric($questions)) {
        $questions = array($questions);
    }
    shuffle($questions);
    global $wpdb;
    
    $i = 0;
    if ($testType == 'chu_han') {
        foreach ($questions as $questionId) {
            $word = explode('.', $listWords[$questionId]);
            $sql  = 'SELECT han_viet FROM wp_kanji_bo_thu
                        WHERE han_viet != "' . $word[2] . '" ORDER BY RAND() LIMIT 3';
            $answer = $wpdb->get_col($sql);
            $right  = rand(0, 3);
            array_splice($answer, $right, 0, $word[2]);
            $data[$i]['id']     = $word[0];
            $data[$i]['quest']  = $word[1];
            $data[$i]['answer'] = $answer;
            $data[$i]['right']  = $right;
            $i++;
        }
    } else if ($testType == 'han_viet') {
        foreach ($questions as $questionId) {
            $word = explode('.', $listWords[$questionId]);
            $sql  = 'SELECT bo_thu FROM wp_kanji_bo_thu
                        WHERE han_viet != "' . $word[2] . '" ORDER BY RAND() LIMIT 3';
            $answer = $wpdb->get_col($sql);
            $right  = rand(0, 3);
            array_splice($answer, $right, 0, $word[1]);
            $data[$i]['id']     = $word[0];
            $data[$i]['quest']  = $word[2];
            $data[$i]['answer'] = $answer;
            $data[$i]['right']  = $right;
            $i++;
        }
    }
    
    print json_encode($data);
    die;
}
add_action('wp_ajax_create_questions_bo_thu', 'create_questions_bo_thu');
add_action('wp_ajax_nopriv_create_questions_bo_thu', 'create_questions_bo_thu');
/*  --------------------  page-hoc-bo-thu-tieng-nhat  ----------------------  */

/*  --------------------------  page-kanji-jlpt  ---------------------------  */
function search_kanji() {
    $level        = $_GET['level'];
    $search       = $_GET['search'];
    $orderBy      = $_GET['order_by'];
    $order        = $_GET['order'];
    $page         = $_GET['page'];
    $wordsPerPage = $_GET['words_per_page'];
    global $wpdb;
    
    $searchCondition = '';
    if ($search) {
        $searchCondition = ' WHERE kanji LIKE "%' . $search . '%"
                OR han_viet LIKE "%' . $search . '%"
                OR on_yomi  LIKE "%' . $search . '%"
                OR kun_yomi LIKE "%' . $search . '%"';
    }
    $limit = ' LIMIT ' . ($page - 1) * $wordsPerPage . ', ' . $wordsPerPage;
    
    if ($search) {
        $sqlTotal = 'SELECT count(id) FROM wp_kanji_' . $level . $searchCondition .
                ' ORDER BY ' . $orderBy . ' ' . $order;
        $results['total'] = $wpdb->get_var($sqlTotal);
    }
    
    $sql = 'SELECT * FROM wp_kanji_' . $level . $searchCondition .
            ' ORDER BY ' . $orderBy . ' ' . $order . $limit;
    $results['list'] = $wpdb->get_results($sql, ARRAY_A);
    
    print json_encode($results);
    die;
}
add_action('wp_ajax_search_kanji', 'search_kanji');
add_action('wp_ajax_nopriv_search_kanji', 'search_kanji');

function create_questions_kanji() {
    $level      = $_POST['level'];
    $testType   = $_POST['test_type'];
    $questType  = $_POST['quest_type'];
    $answerType = $_POST['answer_type'];
    $total      = $_POST['total'];
    $listWords  = explode('&', $_POST['list_words']);
    $questions  = array_rand($listWords, $total);
    
    // get question type and answer type
    switch ($questType) {
        case 'kanji':
            $questIndex = 1;
            break;
        case 'han_viet':
            $questIndex = 2;
            break;
        case 'on_yomi':
            $questIndex = 3;
            break;
    }
    switch ($answerType) {
        case 'kanji':
            $answerIndex = 1;
            break;
        case 'han_viet':
            $answerIndex = 2;
            break;
        case 'on_yomi':
            $answerIndex = 3;
            break;
    }
    
    if (is_numeric($questions)) {
        $questions = array($questions);
    }
    shuffle($questions);
    global $wpdb;
    
    $i = 0;
    if ($testType == 'chu_han') {
        foreach ($questions as $questionId) {
            $word = explode('+', $listWords[$questionId]);
            $sql  = 'SELECT DISTINCT ' . $answerType . ' FROM wp_kanji_' . $level .
                        ' WHERE ' . $answerType . ' != "' . $word[$answerIndex] . '" ORDER BY RAND() LIMIT 3';
            $answer = $wpdb->get_col($sql);
            $right  = rand(0, 3);
            array_splice($answer, $right, 0, $word[$answerIndex]);
            $data[$i]['id']     = $word[0];
            $data[$i]['quest']  = $word[$questIndex];
            $data[$i]['answer'] = $answer;
            $data[$i]['right']  = $right;
            $i++;
        }
    } else if ($testType == 'tu_vung') {
        foreach ($questions as $questionId) {
            $word = explode('+', $listWords[$questionId]);
            $sql  = 'SELECT bo_thu FROM wp_kanji_bo_thu
                        WHERE han_viet != "' . $word[2] . '" ORDER BY RAND() LIMIT 3';
            $answer = $wpdb->get_col($sql);
            $right  = rand(0, 3);
            array_splice($answer, $right, 0, $word[1]);
            $data[$i]['id']     = $word[0];
            $data[$i]['quest']  = $word[2];
            $data[$i]['answer'] = $answer;
            $data[$i]['right']  = $right;
            $i++;
        }
    }
    
    print json_encode($data);
    die;
}
add_action('wp_ajax_create_questions_kanji', 'create_questions_kanji');
add_action('wp_ajax_nopriv_create_questions_kanji', 'create_questions_kanji');
/*  --------------------------  page-kanji-jlpt  ---------------------------  */

/*  -----------------------  customize login form  -------------------------  */
function my_custom_login() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

// change the Login Logo URL
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter('login_headerurl', 'my_login_logo_url');

function my_login_logo_url_title() {
    return 'thiendang.vn - Vì Cuộc Sống Tươi Đẹp';
}
add_filter('login_headertitle', 'my_login_logo_url_title');

// hide the Login Error Message
function login_error_override() {
    return 'Incorrect login details.';
}
add_filter('login_errors', 'login_error_override');

// remove the Login Page Shake
function my_login_head() {
    remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'my_login_head');

// set "Remember Me" To Checked
function login_checked_remember_me() {
    add_filter('login_footer', 'rememberme_checked');
}
add_action('init', 'login_checked_remember_me');
function rememberme_checked() {
    echo "<script>document.getElementById('rememberme').checked = true;</script>";
}

// change login text
function overwrite_login_head() {
	function overwrite_username_label($translatedText, $text) {
		if ($text === 'Username or Email' || $text === 'Username') {
			$translatedText = 'Tên tài khoản';
		} else if ($text === 'Password') {
            $translatedText = 'Mật khẩu';
        } else if ($text === 'Remember Me') {
            $translatedText = 'Lưu tài khoản';
        } else if ($text === 'Register') {
            $translatedText = 'Đăng ký';
        } else if ($text === 'Lost your password?') {
            $translatedText = 'Quên mật khẩu?';
        }
        
        if (in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))) {
            $translatedText = str_ireplace('&larr; Back to %s', '<span style="color: #2804ed;">&larr; Quay lại trang chủ</span>', $translatedText);
        }
		return $translatedText;
	}
	add_filter('gettext', 'overwrite_username_label', 20, 3);
}
add_action('login_head', 'overwrite_login_head');
/*  -----------------------  customize login form  -------------------------  */

function translate_sky() {
    $text = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_GET['text']);
    $text = rtrim($text);
    
    if ($text) {
        $arrayText = explode(' ', $text);
        $specialChar = array('.', ',', '?', '!');
        
        $result = '';
        switch ($_GET['option']) {
            case 'to_sky':
                foreach ($arrayText as $text) {
                    $i = -1;
                    while (in_array(substr($text, $i, 1), $specialChar)) {
                        $i--;
                    }
                    $text = substr_replace($text, '\'s', strlen($text) + $i + 1, 0);
                    $result .= $text.' ';
                }
                break;
            case 'from_sky':
                $isSky = false;
                foreach ($arrayText as $text) {
                    $i = -1;
                    while (in_array(substr($text, $i, 1), $specialChar)) {
                        $i--;
                    }
                    if (substr($text, $i - 1, 2) == '\'s') {
                        $text  = substr($text, 0, strlen($text) + $i - 2).substr($text, $i + 1, $i + 1);
                        $isSky = true;
                    }
                    $result .= $text.' ';
                }
                if ($isSky == false) {
                    $result = 'Đây không phải ngôn ngữ Sky. Ngôn ngữ Sky phải có phẩy ét ở cuối mỗi từ';
                }
                break;
        }
        die($result);
    }
    die('Ký tự nhập vào không hợp lệ');
}
add_action('wp_ajax_translate_sky', 'translate_sky');
add_action('wp_ajax_nopriv_translate_sky', 'translate_sky');

function translate_ferb() {
    $text = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $_GET['text']);
    $text = rtrim($text);
    
    if ($text) {
        $arrayText   = explode(' ', $text);
        $specialChar = array('.', ',', '?', '!');
        $consonant3 = 'ngh';
        $consonant2 = array('ch', 'gh', 'gi', 'kh', 'nh', 'ng', 'ph', 'th', 'tr', 'qu');
        $consonant1 = array('b', 'c', 'd', 'đ', 'f', 'g', 'h', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'x', 'z');
        
        $result = '';
        switch ($_GET['option']) {
            case 'to_ferb':
                foreach ($arrayText as $text) {
                    $i = -1;
                    while (in_array(substr($text, $i, 1), $specialChar)) {
                        $i--;
                    }
                    if (mb_strlen($text) > 2) {
                        $vowelStart = 0;
                        $lowerText  = mb_strtolower($text);
                        if (substr($lowerText, 0, 3) == $consonant3) {
                            $vowelStart = 3;
                        } else if (in_array(substr($lowerText, 0, 2), $consonant2)) {
                            $vowelStart = 2;
                        } else if (in_array(mb_substr($lowerText, 0, 1), $consonant1)) {
                            $vowelStart = 1;
                        }
                        
                        if ($vowelStart != 0) {
                            $consonant  = mb_substr($text, 0, $vowelStart);
                            $remainWord = mb_substr($text, $vowelStart);
                            if (ctype_upper($consonant[0]) || $consonant == 'Đ') {
                                $remainWord = mb_ucfirst($remainWord);
                                $consonant  = mb_strtolower($consonant);
                            }
                            $word       = substr_replace($remainWord, '-'.$consonant.'erb', strlen($remainWord) + $i + 1, 0);
                        } else {
                            $word       = substr_replace($text, '-erb', strlen($text) + $i + 1, 0);
                        }
                    } else {
                        $word = substr_replace($text, '-erb', strlen($text) + $i + 1, 0);
                    }
                    $result .= $word.' ';
                }
                break;
            case 'from_ferb':
                $isFerb = false;
                foreach ($arrayText as $text) {
                    $word = $text;
                    $i = -1;
                    while (in_array(substr($text, $i, 1), $specialChar)) {
                        $i--;
                    }
                    if (mb_substr($text, $i - 3, 4) == '-erb') {
                        $word = mb_substr($text, 0, $i - 3);
                    } else if (mb_substr($text, $i - 2, 3) == 'erb') {
                        $word   = substr($text, 0, strlen($text) + $i - 2).substr($text, $i + 1, $i + 1);
                        $j = -1;
                        while (mb_substr($word, $j, 1) !== '-') {
                            $j--;
                        }
                        $vowel      = mb_substr($word, 0, mb_strlen($word) + $j);
                        $consonant  = mb_substr($word, $j + 1);
                        if (starts_with_upper($vowel)) {
                            $word   = mb_ucfirst($consonant).mb_lcfirst($vowel).substr($text, $i + 1);
                        } else {
                            $word   = $consonant.$vowel.substr($text, $i + 1, $i+1);
                        }
                        $isFerb = true;
                    }
                    $result .= $word.' ';
                }
                if ($isFerb == false) {
                    $result = 'Đây không phải ngôn ngữ Ferb Latin. Ngôn ngữ Ferb Latin phải có dạng -Ferb, -lerb, -serb...';
                }
                break;
            
        }
        die($result);
    }
    die('Ký tự nhập vào không hợp lệ');
}
add_action('wp_ajax_translate_ferb', 'translate_ferb');
add_action('wp_ajax_nopriv_translate_ferb', 'translate_ferb');

function mb_ucfirst($string) {
    return mb_strtoupper(mb_substr($string, 0, 1)).mb_substr($string, 1);
}
function mb_lcfirst($string) {
    return mb_strtolower(mb_substr($string, 0, 1)).(mb_substr($string, 1));
}
function starts_with_upper($str) {
    $chr = mb_substr ($str, 0, 1, "UTF-8");
    return mb_strtolower($chr, "UTF-8") != $chr;
}