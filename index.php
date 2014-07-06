<?php
/*
Template Name: Home 
*/
?>

<?php get_header(); ?>

<!-- <div class="release__wrapper">
    <div class="release">
        <h1>Thank you so much</h1>
    </div>
</div>
 -->

<div class="release__wrapper">
    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-release.jpg" alt="">
    <header class="release">
        <h2>
            <span class="release__title--thank-you">THANK YOU<br></span>
            <span class="release__title--so-much">SO MUCH<br></span>
        </h2>
        <div class="facebook-album">
            <a href="https://www.facebook.com/louisreid/media_set?set=a.10152485219432034.1073741836.698712033&type=3">
                <h2>PHOTOBOOTH <br><span>(Thanks to Sarah Ward)</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/photos-photobooth.jpg" alt="">
            </a>
            <a href="https://www.facebook.com/louisreid/media_set?set=a.10152485206322034.1073741835.698712033&type=3">
                <h2>PHOTOS 1 <br><span>(Thanks to Louis Reid)</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/photos-louis.jpg" alt="">
            </a>
            <a href="https://www.facebook.com/alexsheppard11/media_set?set=a.10154212853780304.1073741960.736170303&type=3">
                <h2>PHOTOS 2 <br><span>(Thanks to Alex Sheppard)</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/photos-alex.jpg" alt="">
            </a>
            <a href="https://www.facebook.com/louisreid/media_set?set=a.10152485232292034.1073741837.698712033&type=3">
                <h2>PHOTOS 3 <br><span>(Thanks to Cheryl Neo)</span></h2>
                <img src="<?php echo get_template_directory_uri(); ?>/img/photos-cheryl.jpg" alt="">
            </a>
        </div>
    </header>
</div>





<?php get_footer(); ?>