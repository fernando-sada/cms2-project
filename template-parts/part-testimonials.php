<?php
// Define an array of testimonials with quotes, names, and images
$testimonials = [
    [
        'quote' => 'New York City truly lives up to the hype! From the breathtaking views at the top of the Empire State Building to the vibrant energy of Times Square, every corner of the city felt like a scene out of a movie. Can’t wait to come back!',
        'name'  => 'Emily R.',
        'image' => get_theme_file_uri() . '/assets/avatar_3.png',
        'title' => 'Graphic Designer'
    ],
    [
        'quote' => 'This site made our New York adventure seamless! We found amazing tours and insider tips that we’d never have discovered otherwise. Can\'t wait to visit again!',
        'name'  => 'Davil L.',
        'image' => get_theme_file_uri() . '/assets/avatar_2.png',
        'title' => 'Website Developer'
    ],
    [
        'quote' => 'Visiting New York was a dream come true! The website’s recommendations for hidden gems and must-see spots made our trip unforgettable. From the top of the Empire State Building to delicious street food, it was all perfectly planned!',
        'name'  => 'Sarah M.',
        'image' => get_theme_file_uri() . '/assets/avatar_1.png',
        'title' => 'Marketing Consultant'
    ],
];
?>

<section class="flex flex-col gap-10 max-w-[1200px] mx-auto py-10">
    <h2 class="basis-full text-center font-bold text-3xl">Testimonials</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 px-4">

        <?php
            // Loop through the testimonials and display each one
            foreach ($testimonials as $testimonial) {
                echo '
                <div class="flex flex-col gap-4 text-center md:text-left">
                    <div class="flex gap-4 justify-center md:justify-start">
                        <img class="row-span-2 rounded-full w-12" src="' . $testimonial['image'] . '" alt="avatar">
                        <div class="flex flex-col">
                            <h4 class="font-bold">' . $testimonial['name'] . '</h4>
                            <h6>' . $testimonial['title'] . '</h6>
                        </div>
                    </div>
                    <blockquote>' . $testimonial['quote'] . '</blockquote>
                </div>';
            }
        ?>

    </div>
</section>