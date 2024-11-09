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
                        },                      
                    },
                },
            };
        </script>
    </head>
    <body>       
        <nav class="flex p-4 justify-between max-w-[1200px] mx-auto items-center">

            <!-- LOGO -->
            <a href="<?php echo get_home_url();?>">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/logo.svg" class="h-10" alt="logo">
            </a>
                      
            <?php  
            //DEFINING ARGUMENTS TO PASS WP_NAV_MENU, SO WE CAN ADD TAILWIND CLASSES TO THE MENU      
            $args = [
                'menu'                 => 'primary',
                'container'            => 'ul',
                'container_class'      => '',
                'container_id'         => '',
                'container_aria_label' => '',
                'menu_class'           => 'font-medium flex gap-10', //ADD Tailwind class to <ul> here
                'menu_id'              => '',
                'echo'                 => true,
                'fallback_cb'          => 'wp_page_menu',
                'before'               => '',
                'after'                => '',
                'link_before'          => '',
                'link_after'           => '',
                'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing'         => 'preserve',
                'depth'                => 0,
                'walker'               => '',
                'theme_location'       => 'primary'     
            ];
            // MENU INSERT
            wp_nav_menu($args);
            ?>
            
        </nav>