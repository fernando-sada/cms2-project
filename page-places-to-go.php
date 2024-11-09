<!-- HEADER -->
<?php get_header();?>

<!-- TITLE -->
<h1 class="text-5xl font-bold text-center py-6 bg-lightblue text-white">
    <?php the_title();?>
</h1>

<!-- CONTENT -->
<div id="the_content" class="max-w-[1200px] mx-auto p-10">
    <?php the_content();?>
    <!-- CARDS -->
    <?php get_template_part("template-parts/part", "link-cards");?>
</div>

<!-- GOOGLE MAP, ALL PAGES EXCEPT HOME -->
<?php get_template_part("template-parts/part", "map");?>

<!-- FOOTER -->
<?php get_footer();?>