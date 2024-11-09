<!-- HEADER -->
<?php get_header();?>

<!-- TITLE -->
<h1 class="text-3xl font-bold text-center py-6 bg-lightblue text-black">
    <?php the_title();?>
</h1>

<!-- CONTENT -->
<div class="max-w-[1200px] mx-auto">
    <?php the_content();?>
</div>

<!-- GOOGLE MAP, ALL PAGES EXCEPT HOME -->
<?php get_template_part("template-parts/part", "map");?>

<!-- FOOTER -->
<?php get_footer();?>