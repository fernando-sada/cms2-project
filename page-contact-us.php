<?php get_header();?>

<h1 class="text-5xl font-bold text-center py-6 bg-lightblue text-white"><?php the_title();?></h1>

<div id="the_content" class="max-w-[1200px] mx-auto">
    <?php the_content();?>
    <?php get_template_part("template-parts/part", "contact");?>
</div>

<!-- Inserting google map into all pages except for home -->
<?php get_template_part("template-parts/part", "map");?>

<?php get_footer();?>