<!-- HEADER -->
<div class="bg-gray">
    <?php get_header();?>
</div>

<div id="search_results" class="grid grid-cols-1 md:grid-cols-3 m-auto max-w-[1200px] gap-10 p-10">

<!-- SEARCH RESULTS -->
<?php 
    if(have_posts()) :
        while(have_posts()) : the_post();
?> 

<div class="single_result_box items-center flex flex-col gap-4 border border-lightblue p-4">

    <!-- SEARCH RESULTS TEMPLATE TO SHOW -->
    <?php 
        if (has_post_thumbnail()) : 
            echo '<a href="' . get_permalink() . '">';
            the_post_thumbnail('medium', ['class' => 'hover:brightness-125 rounded-lg aspect-square object-cover max-w-[50%] w-[300px] m-auto']); 
            echo '</a>';
        endif;
    ?>

    <h1 class="text-2xl font-bold"><a href="<?php echo get_permalink(); ?>"><?php the_title()?></a></h1>    
    <a class="flex rounded-full hover:bg-black p-4 bg-lightblue text-white" href="<?php echo get_permalink(); ?>">Read more</a>
    <h3 class="text-sm"><?php the_time("F j, o."); ?></h3>
</div>

<?php 
        endwhile;
    endif;
?>

</div>

<!-- FOOTER -->
<?php get_footer();?>