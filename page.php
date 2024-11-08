<?php get_header();?>

<h1 class="text-3xl font-bold text-center py-6 bg-lightblue text-black"><?php the_title();?></h1>

<div class="max-w-[1200px] mx-auto">
<?php the_content();?>
</div>

<!-- Inserting google map into all pages except for home -->
<?php get_template_part("template-parts/part", "map");?>

<?php get_footer();?>