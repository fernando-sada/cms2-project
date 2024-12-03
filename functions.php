<?php
function primary_stylesheet(){
    //PRIMARY WAY OF LOADING STYLESHEETS ON WORDPRESS
    wp_enqueue_style(
        'new_york_tourism_stylesheet',      //has to be unique. name of your stylesheet.
        get_stylesheet_uri(),               //use to get the URL of the stylesheet           
        array(),                            //dependencies, none here
        wp_get_theme() -> get('version'),   //used for cache busting
        'all'                               //media type (use for all types. can be all, print, or screen)
    );
};

function load_tailwind(){ 
    wp_enqueue_script(
        'tailwind-js',
        get_theme_file_uri('assets/tailwind.js'),       
        '', //version
        true //true > loads script before closing body tag
    );
};

function google_fonts() {  
    wp_enqueue_style(
        'wpb-google-fonts',
        'https://fonts.googleapis.com/css2?family=Carlito:wght@400;700&display=swap',
        array(), //no dependencies
        wp_get_theme() -> get('version'),
        false
    ); 
}

function font_awesome(){
    wp_enqueue_style(
        'font_awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css',
        array(), //no dependencies
        wp_get_theme() -> get('version'),
        false
    ); 
}

function register_menus(){
	register_nav_menus(
		array(
			'footer_nav_1' => __('Footer Navigation 1'),
			'footer_nav_2' => __('Footer Navigation 2'),
			'footer_nav_3' => __('Footer Navigation 3'),
            'primary' => __('Primary Navigation')
		)
	);
}

function header_news(){
	register_sidebar(
		array(
			'id' => 'header',
			'name' => 'News Header Bar',
			'description' => 'A space in the header to write down news, promotions and discounts',
			'before_widget' => '<div id="%1$s" class="widget-%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget_title">',
			'after_title' => '</h3>'
		)
	);
};

function footer_faq(){
	register_sidebar(
		array(
			'id' => 'footer',
			'name' => 'Footer Faq Bar',
			'description' => 'A space in the footer to write down faqs',
			'before_widget' => '<div id="%1$s" class="widget-%2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget_title">',
			'after_title' => '</h3>'
		)
	);
};

/* SHORTCODE BUTTON with LABEL and URL as Arguments*/
function contact_us($atts, $content){
    $named_atts = shortcode_atts(
        array(
            'link' => '',
            'button_name' => '',
            'class' => '',
            'target' => '',
        ),
        $atts,
        'button_shortcode'
    );
    $content = '<a target="'.$named_atts['target'].'" class="'.$named_atts['class'].'" href="'.$named_atts['link'].'">'.$named_atts['button_name'].'</a>';
    return $content;
};

/* Custom Menu for WP Admin Dashboard */
function custom_admin_setting(){
    //Adds a top-level menu page
    add_menu_page(
        'Header Phone Number', //page title
        'Header Phone Number', //menu title
        'manage_options', //capability
        'custom_admin_setting', //Slug
        'callback_admin_setting', //Callback function to display admin page content, when you click the setting, this function will be called and will display  its content
        'dashicons-phone', //Icon for the menu OR dashicons on google
        100 //position
    );
}

//callback function
function callback_admin_setting(){
    ?>
    <div class="wrap">
        <h1>Admin Settings</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields('theme-settings-group');
            do_settings_sections('custom_admin_setting');
            submit_button('Save Settings');
            ?>
        </form>
    </div>
    <?php
}

//Register and Show Settings
function custom_admin_fields_settings(){
    //register settings
    register_setting('theme-settings-group', 'theme_phone');
    //create a username section (can create multiple sections like this)
    add_settings_section(
        'theme_setting_section', //Section ID
        'Header Phone Number', //Section Title
        'theme_settings_section_callback', //Callback function for display section content
        'custom_admin_setting' //Page Slug (where the section belongs)
    );
    add_settings_field(
        'theme_user_name', //Field ID
        'Phone Number', //Field Title
        'theme_admin_name_field_callback', //Callback function to display the field
        'custom_admin_setting', //Page Slug (where the field appears)
        'theme_setting_section' //Section ID (where the field belongs)
    );
}

function theme_settings_section_callback(){
    echo '<p>Enter the phone number to display in Header Section of the page:</p>';
}

function theme_admin_name_field_callback(){
    $user_phone = get_option('theme_phone');
    echo '<input type="tel" id="phone" name="theme_phone" placeholder="343-001-0123" value="' . esc_attr($user_phone) . '" />';    
}

add_action('admin_init', 'custom_admin_fields_settings'); 

add_action('admin_menu', 'custom_admin_setting'); //Adds a new admin menu to the WP Dashboard

add_shortcode('button_shortcode', 'contact_us'); //ADD SHORTCODE CONTACT US

add_action('widgets_init', 'header_news'); //REGISTER HEADER WIDGET
add_action('widgets_init', 'footer_faq'); //REGISTER HEADER WIDGET

add_action('init','register_menus'); //REGISTER MENUS

add_theme_support('post-thumbnails'); //ADDED THUMBNAIL SUPPORT FOR POSTS

add_action('wp_enqueue_scripts','primary_stylesheet'); //LOAD STYLES WHEN WORDPRESS IS LOADING SCRIPTS
add_action('wp_enqueue_scripts','load_tailwind');  //LOAD TAILWIND
add_action('wp_enqueue_scripts', 'google_fonts'); //LOAD FONTS
add_action('wp_enqueue_scripts', 'font_awesome'); //LOAD FONT AWESOME ICONS

