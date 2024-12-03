<div id="sidebar-primary" class="flex flex-wrap flex-col items-start text-left p-10 md:p-10 gap-4 text-white max-w-[1200px] mx-auto">
		<h2 class="text-2xl font-bold">F.A.Q</h2>
		<?php if ( is_active_sidebar( 'footer' ) ) : ?>
		<?php dynamic_sidebar( 'footer' ); ?>
	<?php else : ?>
		<!-- Time to add some widgets! -->	
        <h3 class="font-bold">Footer FAQ Widget Area</h3>
        <p>This widget doesn't have any content yet. Add content on wordpress dashboard to display it here.</p>
	<?php endif; ?>


<p class="border-t border-white py-4">If you have any questions that aren't addressed here, please don't hesitate to reach out to us!</p>

<!-- SHORTCODE -->
<?php echo do_shortcode('[button_shortcode link="contact-us" button_name="Contact Us" class="flex bg-lightblue p-4 rounded-lg hover:bg-black"]');?>
<!-- END SHORTCODE -->

</div>