<!-- HEADER -->
<div class="bg-gray">
    <?php get_header();?>
</div>



<section class="flex flex-col gap-10 max-w-[1200px] mx-auto py-10 place-items-center">
     <!-- MONKEY SEE, MONKEY EATS-->
     <img class="w-[50%] object-cover object-top" src="<?php echo get_theme_file_uri(); ?>/assets/404-error.jpg">

    <h2 class="basis-full text-center font-bold text-3xl">Sorry, you can't travel right now...</h2>
    <h4 class="text-center">A mischievous troop of monkeys is wreaking havoc on the city! <br>It’s probably best to head home and stay safe until the chaos settles. 🐒🚨</h4>
    <a class="rounded-full p-4 px-6 bg-lightblue hover:bg-navyblue text-white" href="<?php echo get_home_url();?>">Go back home</a>
</section>


<!-- FOOTER -->
<?php get_footer();?> 



