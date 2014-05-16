<?php
/*
Template Name: Home 
*/
?>

<?php get_header(); ?>

<div class="home__wrapper">
    <header class="home__header">
        <h1 class="hidden">THE BRISTOL BALL</h1>
        <h2>
            <span class="title--the">THE<br></span> 
            <span class="title--summer">SUMMER<br></span>
            <span class="title--masquerade">MASQUERADE<br></span>
            <span class="title--ball">BRISTOL&#8217;S BIGGEST EVER CHARITY BALL<br></span>
        </h2>
        <h2 class="title--date">30&nbsp;&nbsp;&nbsp;05</h2>
        <h2>THE STATION, <br>SILVER ST</h2>
        <a href="#more-info"><img class="home__arrow-down" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" alt=""></a>
    </header>
</div>

<div class="tickets-bar__wrapper">
    <section class="tickets-bar">
        <h1 class="tickets-bar__cta">
            <a class="tickets-bar__cta--link" href="https://thebristolball.wufoo.eu/forms/the-summer-masquerade/">
                TICKETS NOW AVAILABLE<br>
                <span class="tickets-bar__cta--sub">BUY FIVE TICKETS FOR A 10% DISCOUNT</span>
            </a>
        </h1>
    </section>
</div>

<div class="trailer__wrapper">
    <section class="trailer">
        <a class="link-trailer fancybox-media" href="https://vimeo.com/93543341" rel="media-gallery">
            <span class="trailer__link"></span>
        </a>
        <a class="link-trailer--mob" href="https://vimeo.com/93543341">
            <span class="trailer__link"></span>
        </a>
    </section>
</div>


<div class="social__wrapper">
    <section class="social">
        <div class="social__block__wrapper">
            <div class="social__twitter">
            <h2>@thebristolball</h2>
                <a class="twitter-timeline" width="385" height="404" href="https://twitter.com/search?q=%40thebristolball" data-widget-id="464830217597362176">Tweets about "@thebristolball"</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
        </div>
        <div class="social__block__wrapper">
            <div class="social__facebook">
            <h2>Join the Facebook Event</h2>
                <a href="https://www.facebook.com/events/1427107737549101">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/facebook-event-thumbnail.png" alt="">
                </a>
            </div>
        </div>
    </section>
</div>

<div class="more-info__wrapper">
    <section id="more-info" class="more-info">
        <div class="more-info__what-to-expect">
            <h1>WHAT TO EXPECT:</h1>
            <p>The Summer Masquerade is Bristol’s biggest EVER charity ball in aid of Bristol charity Unseen.</p>
            <p>On entry you will be greeted with a glass of champagne, complemented by some delicious canapés in The Station’s very own bar-café.</p>
            <p>There will be a bar, an outside courtyard, as well as the main performance area with a stage to the set from Hot Pursuit, Bristols hottest cover band, and DJ sets.</p>
            <p>A photobooth will be open on the night for all your snaps with your friends, or perhaps some cheeky selfies? A photographer will also be there on the night to photograph you looking your best.</p>
            <p>The courtyard will be a chilled place to catch up in the hazy evening sun whilst enjoying acoustic sets. Join the band and DJ sets in the main venue to celebrate finishing another year of uni.</p>
            <p>All profits go to <a href="http://www.unseenuk.org/">Unseen.</a></p>
        </div> 

        <div class="more-info__location">
            <h1>LOCATION:</h1>
            <a href="https://www.google.co.uk/maps/place/The+Station/@51.457385,-2.59271,17z/data=!3m1!4b1!4m2!3m1!1s0x48718e7701da61b5:0x260072af0c4c6c84?hl=en">
                <img src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="">
                <p>The Station, Silver St, BS1 2AG</p>
            </a>
        </div>

        <div class="more-info__questions">
            <h1>QUESTIONS?</h1>
            <p>Hit us up at <a href="http://twitter.com/thebristolball">@thebristolball</a> or <a href="mailto:hey@thebristolball.com">hey@thebristolball.com</a></p>
        </div>
                
    </section>
</div>



<?php get_footer(); ?>