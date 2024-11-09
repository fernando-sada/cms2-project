<!-- HEADER -->
<?php get_header();?> 

<!-- HERO BANNER -->
<?php get_template_part("template-parts/part", "hero")?> 

<!-- CONTENT -->
<div id="the_content" class="max-w-[1200px] mx-auto">   
    <?php the_content();?>     
</div>

<!-- TESTIMONIALS -->
<?php get_template_part("template-parts/part", "testimonials")?> 

<!-- FOOTER -->
<?php get_footer();?> 


