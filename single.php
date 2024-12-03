<!-- HEADER -->
<div class="bg-gray">
    <?php get_header();?>
</div>

<!-- SINGLE POST -->
<div class="post_container flex flex-col justify-center text-center p-4 gap-4">

    <?php 
        if(have_posts()) :
            while(have_posts()) : the_post();
    ?> 

            <h5 class="font-bold text-2xl uppercase text-white bg-lightblue py-4"><?php the_category('|')?></h5>

            <div class="single_container flex flex-col gap-4">
                <h3><?php the_title()?></h3>
                <p><?php the_content()?></p>
                <div class="post_navigation">
                    <span class="border border-lighblue p-4 bg-lightblue rounded-full my-10 hover:bg-black hover:text-white"><?php previous_post_link('< %link');?></span>
                    <span class="border border-lighblue p-4 bg-lightblue rounded-full my-10 hover:bg-black hover:text-white"><?php next_post_link('%link >');?></span>
                </div>
            </div>
   
<?php 
            endwhile;
        endif;
?>

</div>

<!-- FOOTER -->
<?php get_footer();?> 
