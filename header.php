<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New York Tourism</title>
        <?php wp_head();?>
        <!-- ADDING CUSTOM COLOURS IN TAILWIND CSS -->
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {              
                            // DEFINED COLOUR PALETTE         
                            black: '#000000',
                            white: '#FFFFFF',
                            navyblue: '#00178C',
                            lightblue: '#0083CF',
                            gray: '#E2E8F0'
                        }                             
                    } 
                },
            };
        </script>
    </head>
    <body>          

        <!-- HEADER WIDGET NEWS BAR -->
        <div class="bg-navyblue">
            <?php
            get_sidebar('header');
            ?>
        </div>
        
        <!-- SOCIAL MEDIA ICONS BLACK BAR-->   

        <section class="bg-black">
            <div class="flex max-w-[1200px] mx-auto p-4 gap-4 justify-end items-center">

                <!-- DISPLAY THE PHONE NUMBER SAVED ON CUSTOM ADMIN PAGE DASHBOARD -->
                <div>        
                    <h5 class="text-black bg-lightblue p-1 px-2 rounded-full hover:bg-white cursor-pointer">
                        Phone Number:
                        <a href="tel:<?php echo get_option('theme_phone'); ?>">
                        <i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_option('theme_phone'); ?>
                        </a></h5>
                </div>
                
                <!-- SOCIAL MEDIA ICONS WIDGET -->
                <?php the_widget('WP_Widget_Custom_HTML',
                    array(
                        // 'title' => 'Example',
                        'content' => '  <div class="flex gap-4">
                                            <a href="https://instagram.com/newyorktourism" target="_blank"><i class="fa-brands text-white hover:text-lightblue fa-instagram"></i></a>
                                            <a href="https://facebook.com/newyorktourism" target="_blank"><i class="fa-brands text-white hover:text-lightblue fa-facebook"></i></a>
                                            <a href="https://x.com/newyorktourism" target="_blank"><i class="fa-brands text-white hover:text-lightblue fa-x-twitter"></i></a>
                                            <a href="https://www.youtube.com/watch?v=MtCMtC50gwY" target="_blank"><i class="fa-brands text-white hover:text-lightblue fa-youtube"></i></a>
                                        </div>
                                     '                                    
                        )
                    );
                ?>
            </div> 
        </section>

        <nav class="flex sm:flex-row flex-col p-4 pb-0 justify-between max-w-[1200px] mx-auto items-center">

            <!-- LOGO -->
            <a href="<?php echo get_home_url();?>">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/logo.svg" class="h-10" alt="logo">
            </a>
                      
            <?php  
           // PRIMARY NAV
            wp_nav_menu(
                array(
                    'theme_location'       => 'primary',
                    'container'            => 'ul',   
                    'menu_class'           => 'font-medium flex flex-col sm:flex-row sm:gap-10 py-4 sm:py-0 gap-4 w-full sm:w-auto text-center'
                )
            );
            ?>
            
        </nav>        

        <!-- SEARCH BAR -->
        <div id="search_form_container" class="p-4">
            <?php get_search_form() ?>
        </div>
        