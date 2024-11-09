<!-- HEADER -->
<div class="bg-gray">
    <?php get_header();?>
</div> 

<!-- TITLE -->
<h1 class="text-5xl font-bold text-center py-6 bg-lightblue text-white">
    <?php the_title();?>
</h1> 

<!-- CONTENT -->
<div id="the_content" class="max-w-[1200px] mx-auto p-10">
    <?php the_content();?>
    <!-- CONTACT FORM -->
    <?php get_template_part("template-parts/part", "contact");?>
</div>

<!-- GOOGLE MAP, ALL PAGES EXCEPT HOME -->
<?php get_template_part("template-parts/part", "map");?>

<!-- FOOTER -->
<?php get_footer();?>