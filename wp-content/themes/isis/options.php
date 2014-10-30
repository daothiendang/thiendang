<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
$number_array = array("1" => "One","2" => "Two","3" => "Three","4" => "Four","5" => "Five", "6" => "Six","7" => "Seven","8" => "Eight","9" => "Nine","10" => "Ten");
$numberfront_array = array("1" => "One","2" => "Two","3" => "Three","4" => "Four","5" => "Five", "6" => "Six","7" => "Seven","8" => "Eight","9" => "Nine","10" => "Ten","11" => "Eleven", "12" => "Twelve");

	// Fonts Array	
	$fonts_array = array(
	"lora"=>"Lora",
	"raleway"=>"Raleway","atomic+Age"=>"Atomic+Age","marck+Script"=>"Marck+Script",
	);
	
	// Test data
	$slider_array = array("nivo" => "Nivo Slider","noslider" => "No Slider");
	
	// Test data
		$head_array = array("head1" => "Head1","head2"=> "Head2");
	
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	// Background Defaults
	
	$background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat','position' => 'top center','attachment'=>'scroll');
	
	// Editor Defaults
		$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'media_buttons' => 'true',
		'tinymce' => array( 'plugins' => 'wordpress' )
	);
	
	
	// Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories();
        foreach ($options_categories_obj as $category) {
                $options_categories[$category->cat_ID] = $category->cat_name;
        }
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/admin/images/';
	
	
	
		
	
	
	
	$options = array();
	
	
	
	
	
	$options[] = array( "name" => __('Front Page', 'isis'),
						"type" => "heading");
	
	$options[] = array(
		'name' => __('layouts', 'isis'),
		'desc' => __('<b>Upgrade to Isis PRO for more 4 Layouts and 4 header layout </b>', 'options_framework_theme'),
		'type' => 'info');
						
	$options[] = array( "name" => __('Front Page Layout', 'isis'),
						"desc" => "Select a front page layout",
						"id" => "layout1_images","layout2_images",
						"std" => "layout1",
						"type" => "images",
						"options" => array(
							'layout1' => $imagepath.'layout1.png',
							'layout2' => $imagepath.'layout2.png',
							
							));
							
							
	$options[] = array( "name" => __('Select header style', 'isis'),
						"desc" => "Select a header layout",
						"id" => "head_select",
						"std" => "head1",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $head_array);
							
$options[] = array( "name" => __('Custom logo image', 'isis'),
						"desc" => __('You can upload custom image for your website logo (optional).', 'isis'),
						
						"id" => "isis_logo_image",
						"type" => "upload");	
		
	
						
	 $options[] = array( "name" => __('Home Page Callout section', 'isis'),
						"id" => "isis_welcome",
                        "desc" => __('If you leave this field empty, the callout section will not be displayed.','isis'),
						"std" => "<h1>Welcome!</h1><h2>You need to configure your Home Page! </h2>Please visit Theme Options Page",
						"type" => "editor", 
						
						'settings' => $wp_editor_settings);
						
	$options[] = array(
         'name' => __('Latest Blog Title', 'isis'),
		'desc' => __('Title For the Latest Blog', 'isis'),
		'id' => 'latest_blog',
		'std' => 'Latest Blog',
		'type' => 'text');
				
						
	$options[] = array( "name" => __('Enable Latest Posts(layout1)', 'isis'),
						"desc" => "Enable the posts under the blocks on homepage. You ca only use options below when this option is tick.",
						"id" => "latstpst_checkbox",
						"std" => "1",
						"type" => "checkbox");
						
	
	
	$options[] = array( "name" => __('Footer Content', 'isis'),
						"desc" => "Footer Text.",
						"id" => "footer_textarea",
						"std" => "",
						"type" => "textarea"); 	

     //Color & Font
		
	$options[] = array( "name" => __('Color & Font', 'isis'),
						"type" => "heading");
						
						
	$options[] = array(
		'name' => __('Color & Font', 'isis'),
		'desc' => __('<b>Upgrade to Isis PRO for 22 awesome fonts and Unlimited Skins- Ability to change the color of any elements </b>', 'options_framework_theme'),
		'type' => 'info');
		
						
	$options[] = array( "name" => __('Select Font', 'isis'),
						"desc" => "",
						"id" => "font_select",
						"std" => "raleway",
						"type" => "select",
						"class" => "mini",
						"options" => $fonts_array);

						
	
	
	$options[] = array( "name" => __('Menu', 'isis'),
						"desc" => "Change footer copyright and header (only for  Head 2)  menu background color",
						"id" => "menu_colorpicker",
						"std" => "#191615",
						"type" => "color");
	
	$options[] = array( "name" => __('Title Color', 'isis'),
						"desc" => "Change all element titel color",
						"id" => "title_colorpicker",
						"std" => "#e54222",
						"type" => "color");
						
	 $options[] = array( "name" => __('Hover Color', 'isis'),
						"desc" => "Change all element hover color",
						"id" => "hover_colorpicker",
						"std" => "#ff4533",
						"type" => "color");
				

						
	
		
		
		
$options[] = array( "name" => __('Services Bloks', 'isis'),
						"type" => "heading");		
		
$options[] = array( "name" => __('Enable Blocks', 'isis'),
						"desc" => "Enable the homepage blocks.",
						"id" => "blocks_checkbox",
						"std" => "1",
						"type" => "checkbox");
						
    $options[] = array( "name" => __('Block 1 Logo', 'isis'),
						"desc" => 'Icon name, for example: fa-heart
List of all avaialable icons and their names can be found at <a target="_blank" style=" color:#10a7d1;" href="http://fontawesome.io/cheatsheet/">FontAwesome</a>.',
						"id" => "block1_logo",
						"std" => "fa-heart",
						"class" => "mini",
						"type" => "text");
						
	$options[] = array( "name" => __('Block 1 Heading', 'isis'),
						"desc" => "",
						"id" => "block1_text",
						"std" => "We Work Efficiently",
						"type" => "text");
							
	$options[] = array( "name" => __('Block 1 Text', 'isis'),
						"desc" => "",
						"id" => "block1_textarea",
						"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac.",
						"type" => "textarea"); 
						
	$options[] = array( "name" => __('Block 1 Link', 'isis'),
						"desc" => "",
						"id" => "block1_link",
						"std" => "http://wordpress.org/",
						"type" => "text");
						
						
			
	
	  $options[] = array( "name" => __('Block 2 Logo', 'isis'),
						"desc" => 'Icon name, for example:  fa-heart
List of all avaialable icons and their names can be found at <a target="_blank" style=" color:#10a7d1;" href="http://fontawesome.io/cheatsheet/">FontAwesome</a>.',
						"id" => "block2_logo",
						"std" => " fa-volume-up",
						"class" => "mini",
						"type" => "text");					
						
	$options[] = array( "name" => __('Block 2 Heading', 'isis'),
						"desc" => "",
						"id" => "block2_text",
						"std" => "24/7 Live Support",
						"type" => "text");
							
	$options[] = array( "name" => __('Block 2 Text', 'isis'),
						"desc" => "",
						"id" => "block2_textarea",
						"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac. Sed ultrices leo.",
						"type" => "textarea"); 
						
	$options[] = array( "name" => __('Block 2 Link', 'isis'),
						"desc" => "",
						"id" => "block2_link",
						"std" => "",
						"type" => "text");
						
						
	$options[] = array( "name" => __('Block 3 Logo', 'isis'),
						"desc" => 'Icon name, for example:  fa-heart
List of all avaialable icons and their names can be found at <a target="_blank" style=" color:#10a7d1;" href="http://fontawesome.io/cheatsheet/">FontAwesome</a>.',
						"id" => "block3_logo",
						"std" => "fa-fighter-jet",
						"class" => "mini",
						"type" => "text");		

	$options[] = array( "name" => __('Block 3 Heading', 'isis'),
						"desc" => "",
						"id" => "block3_text",
						"std" => "Confide",
						"type" => "text");
							
	$options[] = array( "name" => __('Block 3 Text', 'isis'),
						"desc" => "",
						"id" => "block3_textarea",
						"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum, posuere faucibus velit bibendum ac. ",
						"type" => "textarea");
						
	$options[] = array( "name" => __('Block 3 Link', 'isis'),
						"desc" => "",
						"id" => "block3_link",
						"std" => "",
						"type" => "text");
	
	
	$options[] = array( "name" => __('Block 4 Logo', 'isis'),
						"desc" => 'Icon name, for example: fa-heart
List of all avaialable icons and their names can be found at <a target="_blank" style=" color:#10a7d1;" href="http://fontawesome.io/cheatsheet/">FontAwesome</a>.',
						"id" => "block4_logo",
						"std" => "fa-cogs",
						"class" => "mini",
						"type" => "text");		

	$options[] = array( "name" => __('Block 4 Heading', 'isis'),
						"desc" => "",
						"id" => "block4_text",
						"std" => "Gurantee Like No Other",
						"type" => "text");
							
	$options[] = array( "name" => __('Block 4 Text', 'isis'),
						"desc" => "",
						"id" => "block4_textarea",
						"std" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nec rhoncus risus. In ultrices lacinia ipsum.",
						"type" => "textarea"); 
						
	$options[] = array( "name" => __('Block 4 Link', 'isis'),
						"desc" => "",
						"id" => "block4_link",
						"std" => "",
						"type" => "text");		
		
		
//Recent work

$options[] = array( "name" => __('Recent work', 'isis'),
					"desc" => "More recent work option in Pro version",
						"type" => "heading");

$options[] = array( "name" => __('Enable Recent work', 'isis'),
						"desc" => "Enable the homepage recent work.image size 300X222 px(More recent work post option in Pro version)",
						"id" => "recentwork_checkbox",
						"std" => "1",
						
						"type" => "checkbox");
						
$options[] = array(
         'name' => __('Title', 'isis'),
		'desc' => __('Title of the recent work slider', 'isis'),
		'id' => 'recent_work',
		'std' => 'Our Work',
		'type' => 'text');

$options[] = array(
		'name' => __('Image 1', 'isis'),
		'desc' => __('First image', 'isis'),
		'id' => 'recent1',
		'class' => '',
		'std' =>get_template_directory_uri().'/images/demo/bg2.png',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'recenttitle1',
		'std' => 'Beautiful Photo',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'recentdesc1',
		'std' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy.',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'recenturl1',
		'std' => '',
		'type' => 'text');	


$options[] = array(
		'name' => __('Image 2', 'isis'),
		'desc' => __('2nd image', 'isis'),
		'id' => 'recent2',
		'class' => '',
		'std' =>get_template_directory_uri().'/images/demo/bg4.png',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'recenttitle2',
		'std' => 'Beautiful Photo',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'recentdesc2',
		'std' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy.',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'recenturl2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Image 3', 'isis'),
		'desc' => __('3rd image', 'isis'),
		'id' => 'recent3',
		'class' => '',
		'std' =>get_template_directory_uri().'/images/demo/bg5.png',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'recenttitle3',
		'std' => 'Beautiful Photo',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'recentdesc3',
		'std' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy.',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'recenturl3',
		'std' => '',
		'type' => 'text');		
		
		
	
	
	
	$options[] = array(
		'name' => __('Image 4', 'isis'),
		'desc' => __('4th image', 'isis'),
		'id' => 'recent4',
		'std' =>get_template_directory_uri().'/images/demo/bg5.png',
		'class' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'recenttitle4',
		'std' => 'Beautiful Photo',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'recentdesc4',
		'std' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy.',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'recenturl4',
		'std' => '',
		'type' => 'text');		
		
		
	
	$options[] = array(
		'name' => __('Image 5', 'isis'),
		'desc' => __('5th image', 'isis'),
		'id' => 'recent5',
		'class' => '',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'recenttitle5',
		'std' => 'Beautiful Photo',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'recentdesc5',
		'std' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy.',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'recenturl5',
		'std' => '',
		'type' => 'text');	
		
		
//Our Client

$options[] = array( "name" => __('Our Client', 'isis'),
						"type" => "heading");

$options[] = array( "name" => __('Our Client', 'isis'),
	                   'desc' => __('Image size must be 223px*113px. If you leave this field empty, the our client section will not be displayed.(in pro version you can upload more client Logo.If you want !!)', 'isis'),
					   'type' => 'info'
						); 	
						
$options[] = array( "name" => __('Enable our client', 'isis'),
						"desc" => "Enable the homepage Our Client(More Our Client post option in Pro version)",
						"id" => "ourclient_checkbox",
						"std" => "1",
						
						"type" => "checkbox");	
						
	$options[] = array(
         'name' => __('Our Client Title', 'isis'),
		'desc' => __('Title of the Our Client', 'isis'),
		'id' => 'our_client',
		'std' => 'Our Client',
		'type' => 'text');
							
	$options[] = array(
		'name' => __('Client One', 'isis'),
		'desc' => __('Upload image for client one ', 'isis'),
		'id' => 'client1',
		'class' => '',
		'std' =>get_template_directory_uri().'/images/demo/logo1.png',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'clienturl1',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Client 2', 'isis'),
		'desc' => __('Upload image for client 2 ', 'isis'),
		'id' => 'client2',
		'class' => '',
		'std' =>get_template_directory_uri().'/images/demo/logo2.png',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'clienturl2',
		'std' => '',
		
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Client 3', 'isis'),
		'desc' => __('Upload image for client 3 ', 'isis'),
		'id' => 'client3',
		'class' => '',
		'std' =>get_template_directory_uri().'/images/demo/logo3.png',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'clienturl3',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Client 4', 'isis'),
		'desc' => __('Upload image for client 4 ', 'isis'),
		'id' => 'client4',
		'class' => '',
		'std' =>get_template_directory_uri().'/images/demo/logo4.png',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'clienturl4',
		'std' => '',
		'type' => 'text');		
		
											
	
						
	//slider
	
		
						
	$options[] = array( "name" => __('Slider', 'isis'),
						"type" => "heading");
						
	
	$options[] = array(
		'name' => __('Slider', 'options_framework_theme'),
		'desc' => __('<b>Upgrade to Isis PRO for 2 silder with unlimited slider image and customs slider.Full width and box slider option </b>', 'isis'),
		'type' => 'info');	
						
	$options[] = array( "name" => __('Select Slider', 'isis'),
						"desc" => "",
						"id" => "slider_select",
						"std" => "nivo",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $slider_array);
						
						
	$options[] = array( "name" => __('Slider Speed', 'isis'),
						"desc" => "milliseconds",
						"id" => "sliderspeed_text",
						"std" => "5000",
						"class" => "mini",
						"type" => "text");	
						
$options[] = array( "name" => __('Number of Slides', 'isis'),
						"desc" => "",
						"id" => "number_select",
						"std" => "5",
						"type" => "select",
						"class" => "mini", //mini, tiny, small
						"options" => $number_array);						
						
	$options[] = array( "name" => __('Slider Content', 'isis'),
						"desc" => "Show Slider text",
						"id" => "sldrtxt_checkbox",
						"std" => "1",
						"type" => "checkbox");	
	$options[] = array( 
						"desc" => "Show Slider Title",
						"id" => "sldrtitle_checkbox",
						"std" => "1",
						"type" => "checkbox");	
	
	$options[] = array( 
						"desc" => "Show Slider Description ",
						"id" => "sldrdes_checkbox",
						"std" => "1",
						"type" => "checkbox");	
	
						
	

		
	$options[] = array(
		'name' => __('Using the Slider', 'options_framework_theme'),
		'desc' => __('This Slider supports upto 5 Images. To show only 3 Slides in the slider, upload only 3 images. Leave the rest Blank. For best results, upload images of size 1000x500px.upload every slider image in same size.<b>Upgrade to Isis PRO for unlimited slider and customs slider</b>', 'options_framework_theme'),
		'type' => 'info');

	$options[] = array(
		'name' => __('Slider Image 1', 'options_framework_theme'),
		'desc' => __('First Slide', 'options_framework_theme'),
		'id' => 'slide1',
		'class' => '',
		"std" =>'',
		
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'slidetitle1',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'slidedesc1',
		'std' => '',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'slideurl1',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'options_framework_theme'),
		'desc' => __('Second Slide', 'options_framework_theme'),
		'class' => '',
		'id' => 'slide2',
		'type' => 'upload');
	
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'slidetitle2',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'slidedesc2',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'slideurl2',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('Slider Image 3', 'options_framework_theme'),
		'desc' => __('Third Slide', 'options_framework_theme'),
		'id' => 'slide3',
		'class' => '',
		'type' => 'upload');	
	
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'slidetitle3',
		'std' => '',
		'type' => 'text');	
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'slidedesc3',
		'std' => '',
		'type' => 'textarea');	
			
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'slideurl3',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 4', 'options_framework_theme'),
		'desc' => __('Fourth Slide', 'options_framework_theme'),
		'id' => 'slide4',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'text');
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');			
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');		
	
	$options[] = array(
		'name' => __('Slider Image 5', 'options_framework_theme'),
		'desc' => __('Fifth Slide', 'options_framework_theme'),
		'id' => 'slide5',
		'class' => '',
		'type' => 'upload');	
		
	$options[] = array(
		'desc' => __('Title', 'options_framework_theme'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'text');	
	
	$options[] = array(
		'desc' => __('Description or Tagline', 'options_framework_theme'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'desc' => __('Url', 'options_framework_theme'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text');	
											
	
			
	$options[] = array( "name" => __('Social', 'isis'),
						"type" => "heading");						
						
						
	$options[] = array( "name" => __('Facebook', 'isis'),
						"desc" => "Your Facebook url",
						"id" => "fbsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Twitter', 'isis'),
						"desc" => "Your Twitter url",
						"id" => "ttsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Google Plus', 'isis'),
						"desc" => "Your Google Plus url",
						"id" => "gpsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Youtube', 'isis'),
						"desc" => "Your Youtube url",
						"id" => "ytbsoc_text",
						"std" => "",
						"type" => "text");
						
	
						
	$options[] = array( "name" => __('Pinterest', 'isis'),
						"desc" => "Your Pinterest url",
						"id" => "pinsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('vimeo', 'isis'),
						"desc" => "Your vimeo url",
						"id" => "vimsoc_text",
						"std" => "",
						"type" => "text");
	$options[] = array( "name" => __('LinkedIn', 'isis'),
						"desc" => "Your LinkedIn url",
						"id" => "linsoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('flickr', 'isis'),
						"desc" => "Your flickr url",
						"id" => "flisoc_text",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => __('Rss', 'isis'),
						"desc" => "Your RSS url",
						"id" => "rsssoc_text",
						"std" => "",
						"type" => "text");
	
	
		
		
		//misceleneous				

	$options[] = array( "name" => __('Miscelleneous', 'isis'),
						"type" => "heading");
						
	$options[] = array(
		'name' => __('miscellaneous', 'isis'),
		'desc' => __('<b>Upgrade to Isis PRO for more option </b>', 'options_framework_theme'),
		'type' => 'info');					
						
	$options[] = array( "name" => __('Right Sidebar', 'isis'),
						"desc" => "Remove Right sidebar from all the pages and make the site full width.",
						"id" => "nosidebar_checkbox",
						"std" => "0",
						"type" => "checkbox");
  					
	
						
						
	$options[] = array( "name" => __('Post Author Name', 'isis'),
						"desc" => "Hide Post Author Name",
						"id" => "dissauth_checkbox",
						"std" => "0",
						"type" => "checkbox");
						
	$options[] = array( "name" => __('Category & Tags', 'isis'),
						"desc" => "Hide Post Categories and Tags",
						"id" => "disscats_checkbox",
						"std" => "0",
						"type" => "checkbox");
	
	
$options[] = array( "name" => __('Documentation', 'isis'),
						"type" => "heading");	
	
$options[] = array( "name" => __('', 'isis'),

                  'desc' => __('
				  
				  <p style="color:#000;font-size: 18px;">1. Setting up the front  page</p><br>
<p style="color:#000;font-size: 14px;">				  
When you  select &ldquo;Your Latest Posts&rdquo; from Settings&gt; Reading you will be able to  display 7 frontpage elements on your site&rsquo;s frontpage. They are: <br>
<br>
i. Slider<br>
ii. Blocks<br>
iii. Welcome  Text<br>
iv. Frontpage  Posts<br>
v. Call to  Action<br>
vi. Recent work<br>
vii.Our Client</p>
<br />
<br />
</p>
<p><p  style="color:#000;font-size: 16px;">i. Setting up the slider</p>
  From <strong>Isis Theme Options&gt; Slider</strong>  For each slide you should set: 
<p><img src="http://i.imgur.com/4xiTatR.jpg" alt="Create New Slide" width="637" height="493"></p>
  <br>
			
	<p style="color:#000;font-size: 16px;"> a.<strong>Image:</strong> Select/Upload Slide image by  clicking the &ldquo;Upload Image&rdquo; button. If you are using the &ldquo;Full Width&rdquo; mode,  make sure the slider images have at least 1600px of width. If set to fixed, the  slider images should have minimum width of 1200px. If your images are bigger,  you can resize and crop them online using this application: <a target="_blank" href="http://pixlr.com/editor/">http://pixlr.com/editor/</a>. There&rsquo;s also a video tutorial on  youtube on how to resize and crop your images and save them: <a target="_blank" href="https://www.youtube.com/watch?v=WmFjvNlm1E4">https://www.youtube.com/watch?v=WmFjvNlm1E4</a><br>
  b. <strong>Title:</strong> Write a title of your  slide. This is optional; if you don&rsquo;t want to display the title of the slide  you should keep this empty.<br>
   c. <strong>Description:</strong> If you want to display a  little subtext under the title of the slide you should use this field. You can  use HTML tags.<br>
  d. <strong>Url:</strong> If you want your slide  image and title to contain a link, you should put it here.<br>	
  
   <p> 

<p style="color:#000;font-size: 18px;">2. Setting up posts Image Thumbnails</p>
<p style="color:#000;font-size: 14px;">To setup post thumbnails, you should use the "Featured image" option of wordpress. While editing the post, on the right, notice there is a "Featured Image" box. Add your post thumbnail image from here. For best visual appearance, the minimium dimension of the thumbnails should be <b>350px x 235px</b></p>

<p><img src="http://i.imgur.com/kxuiZRz.jpg" alt="Create New Slide" width="250" height="300"></p>


<p  style="color:#000;font-size: 18px;">3. Setting up a Blog Page <p>
<p style="color:#000;font-size: 16px;">If you want to set up a blog page, you should use the "Blog page Template" that comes with the theme. To setup a blog page, follow these steps:</p>
<p >
<ul style="color:#000;font-size: 16px; padding-left:10px;">
<li><b>Step 1:</b> First mark all the posts with a category called "blog" or something.</li>
<li><b>Step 2:</b>	Then create a new page and Give it a title.  While in the post editor page, notice there is a box on right called "Page Attributes". From this box, you can select multiple page templates. Select "Blog Page Template" from the dropdown list and save the page. </li>
<li><b>Step 3:</b>	Then Go to Appearance> Isis options> Misc. and select the category "blog" for "Display Blog Posts from a selected Category" option. </li>
<li><b>Step 4:</b>	Now view the created page, and you will see the page is displaying all the posts from your specified category.</li>
</ul>
</p>
<p><img src="http://i.imgur.com/CoTg2Ac.png" alt="Page Template" width="608" height="308"></p>


<p style="color:#000;font-size: 18px;">4. Setting up the Menu</p>
<p style="color:#000;font-size: 16px;">Setting up a menu is quite easy. Follow these steps to create a menu:</p>
<p style="color:#000;font-size: 14px;">
<b>Step 1:</b> Go to Appearance>Menus and click the "create a new menu" link. Give your menu a name and click the "Create Menu" button.</br>
<b>Step 2:</b> Now add menu items to the newly create menu. You can add menu from your pages and categories. You can also add custom links to your menu. To add a menu item, select the menu item from left and click the "Add to menu" button. </br>
<b>Step 3:</b> You can change the order of menus from right by dragging and dropping them. To create a submenu, drag a menu item and move it to right.</br>
<b>Step 4:</b> After adding all the menu items, select the "Header Navigation" option from the bottom. 
</p>

<p><img src="http://i.imgur.com/BjBddrG.png" alt="Menu Setup" width="608" height="242"></p>
		  
				  
				  '),
				   'type' => 'info'
						); 	
						
						
						
						
						
	
						
$options[] = array( "name" => __('Upgrade to Isis PRO', 'isis'),
						"type" => "heading");
						
									
				
						
$options[] = array( "name" => __('', 'isis'),

	                   'desc' => __('<p style="height:100%;color:#000 "><b>About the theme</b> <br><p style="text-align:justify;font-size:14px;color:#000 !important;">Isis is a Simple, Clean and Responsive Retina Ready WordPress Theme which adapts automatically to your tablets and mobile devices. theme with 2 home page layouts,10 social icons,4 widget ,Slider,3 page templates – Full width page, 4 google fonts, font-awesome service icon,Upload logo option,The theme is translation ready and fully translated into all language. Isis is suitable for any types of website – corporate, portfolio, business, blog.</p></br></br>
					   
					   
					  
					   
	<p style="color:#000;font-size: 18px;">Support</p>	
	<p style="color:#000;font-size: 14px;">The best way to contact me with support questions and bug reports is via the <a target="_blank" href="http://wordpress.org/support/ ">WordPress support forums.</a> or  <a target="_blank" href="http://www.imonthemes.com/?p=124 ">Visite Imon Themes theme page</a>  </p>			   


                
                    
                 
                
                  <p style="padding-bottom: 20px;text-align: center;font-size: 18px;color: #000;">Here are the features comparison between Isis and Isis PRO</p>
 <table id="compare" border="1" cellpadding="0" cellspacing="0">
<tbody>
<tr class="head">
<td valign="top" class="feat_top"><p>Features</p></td>
<td valign="top" class="lite_top" ><p><b>Isis</b></p></td>
<td valign="top" class="pro_top" ><p><b>Isis Pro</b></p></td>

</tr>

<tr>
<td valign="top" class="feat" ><p><b>Skins</b></p></td>
<td valign="top" class="lite" ><p>0</p></td>
<td valign="top" class="pro" ><p><strong>Unlimited</strong><br />
<small>(Ability to change the color of almost all the elements and fonts)</small></p></p></td>

</tr>

<tr>
<td valign="top" class="feat" ><p><b>Fonts</b></p></td>
<td valign="top" class="lite" ><p>4</p></td>
<td valign="top" class="pro" ><p><strong>22</strong></p></td>
</tr>


<tr>
<td valign="top" class="feat" ><p><b>Layouts</b></p></td>
<td valign="top" class="lite" ><p>2</p></td>
<td valign="top" class="pro" ><p><strong>5</strong></p></td>
</tr>

<tr>
<td valign="top" class="feat" ><p><b>Slider</b></p></td>
<td valign="top" class="lite" ><p>1</p></td>
<td valign="top" class="pro" ><p><strong>2 silder with unlimited slider image and customs slider</strong></p></td>
</tr>

<tr>
<td valign="top" class="feat" ><p><b>Header Type(Types of header)</b></p></td>
<td valign="top" class="lite" ><p>2</p></td>
<td valign="top" class="pro" ><p><strong>4</strong></p></td>
</tr>


<tr>
<td valign="top" class="feat" ><p><b>Widgets</b></p></td>
<td valign="top" class="lite" ><p>2</p></td>
<td valign="top" class="pro" ><p><strong>4</strong></p></td>
</tr>


<tr>
<td valign="top" class="feat" ><p><b>Widget Areas</b></p></td>
<td valign="top" class="lite" ><p>Sidebar Widgets/ Footer Widgets</p></td>
<td valign="top" class="pro" ><p><b>Sidebar Widgets/ Footer Widgets</b></p></td>
</tr>


<tr>
<td valign="top" class="feat" ><p><b>Page Templates</b></p></td>
<td valign="top" class="lite" ><p>4</p></td>
<td valign="top" class="pro" ><p>4</p></td>

</tr>

<tr>
<td valign="top" class="feat" ><p><b>Change Titel font size</b></p></td>
<td valign="top" class="lite" ><p class="no">NO</p></td>
<td valign="top" class="pro" ><p class="yes">yes</p></td>

</tr>
<tr>
<td valign="top" class="feat feat_bottom" ><p><b>Call to Action Button</b></p></td>
<td valign="top" class="lite" ><p class="no">NO</p></td>
<td valign="top" class="pro" ><p class="yes">YES</p></td>

</tr>

<tr>
<td valign="top" class="feat" ><p><b>Mobile Friendly version</b></p></td>
<td valign="top" class="lite" ><p class="yes">YES</p></td>
<td valign="top" class="pro" ><p class="yes">YES</p></td>

</tr>

<tr>
<td valign="top" class="feat" ><p><b>Upload LOGO/Favicon</b></p></td>
<td valign="top" class="lite" ><p class="no">NO</p></td>
<td valign="top" class="pro" ><p class="yes">YES</p></td>

</tr>



<tr>
<td valign="top" class="feat" ><p><b>Social Share buttons/Numbered Page Navigation</b></p></td>
<td valign="top" class="lite" ><p class="yes">YES</p></td>
<td valign="top" class="pro" ><p class="yes">YES</p></td>

</tr>


<tr>
<td valign="top" class="feat" ><p><b>Related Posts</b></p></td>
<td valign="top" class="lite" ><p class="no">NO</p></td>
<td valign="top" class="pro" ><p class="yes">Yes</p></td>

</tr>


<tr>
<td valign="top" class="feat" ><p><b>Google Analytics <br />
Integration</b></p></td>
<td valign="top" class="lite" ><p class="no">NO</p></td>
<td valign="top" class="pro" ><p class="yes">Yes</p></td>

</tr>


<tr>
<td valign="top" class="feat" ><p><b>Threaded comments/Separated Comments &amp; Trackbacks</b></p></td>
<td valign="top" class="lite" ><p class="yes">YES</p></td>
<td valign="top" class="pro" ><p class="yes">YES</p></td>
</tr>



<tr>
<td valign="top" class="feat" ><p><b>Full Email support</b></p></td>
<td valign="top" class="lite" ><p class="no">NO</p></td>
<td valign="top" class="pro" ><p class="yes">YES</p></td>

</tr>

<tr>
<td valign="top" class="feat feat_bottom" ><p><b>Live support</b></p></td>
<td valign="top" class="lite" ><p class="no">NO</p></td>
<td valign="top" class="pro" ><p class="yes">YES</p></td>

</tr>

<tr>
<td></td>
<td></td>
<td valign="top" class="download" ><a class="green" href="http://www.imonthemes.com/?p=140" target="_blank">Buy Now</a></td>
</tr>
</tbody>
</table>

 	
  


  
                
                   
                 
                
               



					   
					   
					   
					   <h4 style="text-align:center;color: #000;>About Developer</h4>
<p style="color: #000;> This Theme is designed and devloped by <a target="_blank" style=" color:#10a7d1;" href="http://www.imonthemes.com/"><span>Imon Themes</span></a><br /></p> ', 'isis'),
					   
					   'type' => 'info'
						); 							
	
	
	
						
		
	return $options;
}