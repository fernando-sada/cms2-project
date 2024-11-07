<?php get_header();?> <!-- HEADER -->

<?php get_template_part("template-parts/part", "hero")?> <!-- HERO BANNER -->

<div id="the_content" class="max-w-[1200px] mx-auto">   
    <?php the_content();?> <!-- CONTENT -->    
</div>

<?php get_template_part("template-parts/part", "testimonials")?> <!-- TESTIMONIALS -->

<?php get_footer();?> <!-- FOOTER -->


