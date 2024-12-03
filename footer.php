        <?php wp_footer();?>
        <footer class="bg-black text-white pb-4">

        <!-- FOOTER WIDGET FAQ BAR -->
        <div class="bg-navyblue">
            <?php
            get_sidebar('footer');
            ?>
        </div>

        <!-- FOOTER NAV -->
        <?php get_template_part("template-parts/part", "footer-nav")?> 
        <!-- END FOOTER NAV-->

            <div id="footer-content" class="grid grid-cols-1 md:grid-cols-3 max-w-[1200px] mx-auto justify-between py-10 px-6">
                <div id="footer-title" class="p-2">
                    <h1 class="text-xl font-bold">NEWYORK TOURISM</h1>    
                    <p class="text-sm">Copyright Algonquin College CMS II</p>                
                </div>
                <div id="footer-contact" class="p-2">
                    <h5 class="text-lightblue font-bold">Get in Touch</h5>
                    <ul>
                        <li class="flex gap-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-lightblue">
                                <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                            </svg>
                            8819 Ohio St. South Gate, CA 90280
                        </li>
                        <li class="flex gap-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-lightblue">
                            <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                            <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                        </svg>
                        <a href="mailto:ourstudio@example.com" class="hover:text-lightblue">info@newyorktourism.com</a></li>
                        <li class="flex gap-2 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 fill-lightblue">
                            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                        </svg>
                        <a href="tel:+1-847-555-5555" class="hover:text-lightblue">+1-847-555-5555</a>
                        </li>
                    </ul>
                </div>                
                <div id="footer-newsletter" class="p-2 flex flex-col gap-2">
                    <h5 class="text-lightblue font-bold">Join our Newsletter</h5>
                    <p>Your Email</p>
                    <input class="p-2 rounded-lg" type="text" placeholder="Enter your Email">
                    <button class="rounded-full p-2 bg-lightblue hover:bg-navyblue text-white" type="submit">Subscribe</button>
                </div>
            </div>
        </footer>    

</body>
</html>