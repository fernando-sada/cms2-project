<div id="footer-nav" class="flex sm:flex-row flex-col p-4 justify-center max-w-[1200px] mx-auto gap-10">

<?php  
// FOOTER NAV 1
wp_nav_menu(
    array(
        'theme_location'       => 'footer_nav_1',
        'container'            => 'ul',   
        'menu_class'           => 'font-medium flex flex-col sm:flex-row sm:gap-10 py-4 sm:py-0 gap-4 w-full sm:w-auto text-center'
    )
);
// FOOTER NAV 2
wp_nav_menu(
    array(
        'theme_location'       => 'footer_nav_2',
        'container'            => 'ul',   
        'menu_class'           => 'font-medium flex flex-col sm:flex-row sm:gap-10 py-4 sm:py-0 gap-4 w-full sm:w-auto text-center'
    )
);
// FOOTER NAV 3
wp_nav_menu(
    array(
        'theme_location'       => 'footer_nav_3',
        'container'            => 'ul',   
        'menu_class'           => 'font-medium flex flex-col sm:flex-row sm:gap-10 py-4 sm:py-0 gap-4 w-full sm:w-auto text-center'
    )
);
?>


</div>