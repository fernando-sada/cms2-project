<div id="sidebar-primary" class="flex flex-wrap text-center p-4 md:p-0 gap-4 text-white items-center justify-center max-w-[1200px] mx-auto">
	<span class="relative flex h-3 w-3">
		<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
		<span class="relative inline-flex rounded-full h-3 w-3 bg-sky-500"></span>
	</span>
	<?php if ( is_active_sidebar( 'header' ) ) : ?>
		<?php dynamic_sidebar( 'header' ); ?>
	<?php else : ?>
		<!-- Time to add some widgets! -->	
        <h3 class="font-bold">Header News Widget Area</h3>
        <p>This widget doesn't have any content yet. Add content on wordpress dashboard to display it here.</p>
	<?php endif; ?>
</div>