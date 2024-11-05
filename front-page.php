<?php get_header();?>

<p>Hello fron front-page.php</p>
<?php the_title();?>
<?php the_content();?>


<?php
//In-class 3 (Week 9) - PLACED 3 IMAGES
$image1 = get_theme_file_uri('assets/newyork_01.jpeg'); //PATH IMAGE 01
$image2 = get_theme_file_uri('assets/newyork_02.jpeg'); //PATH IMAGE 02
$image3 = get_theme_file_uri('assets/newyork_03.jpeg'); //PATH IMAGE 03
$images = [$image1, $image2, $image3]; 

echo "<div id='images'>";
foreach ($images as $image) {
    echo "<img src='{$image}' alt='new york'>"; //3 times
}
echo "</div>"
?>

<?php get_footer();?>


