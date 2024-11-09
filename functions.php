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

function load_bootstrap(){
    wp_enqueue_style(
        'bootstrap-css',
        get_theme_file_uri('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css')        
    );
    wp_enqueue_script(
        'bootstrap-js',
        get_theme_file_uri('assets/bootstrap-5.3.3-dist/js/bootstrap.min.js'),
        array('jquery'),
        '', //version
        true //if true > loads script before closing body tag
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

add_action('wp_enqueue_scripts','primary_stylesheet'); //LOADS STYLES WHEN WORDPRESS IS LOADING SCRIPTS
add_action('wp_enqueue_scripts','load_tailwind');  //LOADS TAILWIND