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

add_shortcode('button_shortcode', 'contact_us'); //ADD SHORTCODE CONTACT US

add_action('widgets_init', 'header_news'); //REGISTER HEADER WIDGET
add_action('widgets_init', 'footer_faq'); //REGISTER HEADER WIDGET

add_action('init','register_menus'); //REGISTER MENUS

add_theme_support('post-thumbnails'); //ADDED THUMBNAIL SUPPORT FOR POSTS

add_action('wp_enqueue_scripts','primary_stylesheet'); //LOAD STYLES WHEN WORDPRESS IS LOADING SCRIPTS
add_action('wp_enqueue_scripts','load_tailwind');  //LOAD TAILWIND
add_action('wp_enqueue_scripts', 'google_fonts'); //LOAD FONTS
add_action('wp_enqueue_scripts', 'font_awesome'); //LOAD FONT AWESOME ICONS

