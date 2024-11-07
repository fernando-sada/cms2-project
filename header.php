<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New York Tourism</title>
    <?php wp_head();?>
    <!-- ADDING CUSTOM FONT IN TAILWIND CSS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {                       
                        black: '#000000',
                        blue: '#00178C',
                        grayblue: '#1F4CEF',  
                        lightblue: '#0083CF',
                        gray: '#a6a4a5'
                    },                      
                },
            },
        };
    </script>
</head>
<body>
    <div class="">
        <nav class="flex p-4 justify-between max-w-[1200px] mx-auto items-center">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/logo.svg" class="h-10" alt="logo">
            
            <?php 
        
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
            wp_nav_menu($args);
            ?>
        </nav>

   
    
   