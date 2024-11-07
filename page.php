<?php get_header();?>
<?php the_title();?>
<?php the_content();?>

    <?php 
    if (is_page('Contact Us')) {
        get_template_part("template-parts/part", "contact");
    };
    ?>

<?php get_footer();?>