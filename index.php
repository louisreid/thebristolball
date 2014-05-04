<?php get_header(); ?>
    
    <div class="homepage__wrapper">
        <section class="homepage">
            <h1>THE BRISTOL BALL</h1>
            <h2>
                <span class="title--the">THE<br></span> 
                <span class="title--summer">SUMMER<br></span>
                <span class="title--masquerade">MASQUERADE<br></span>
                <span class="title--ball">BRISTOLS BIGGEST EVER CHARITY BALL<br></span>
            </h2>
            <h2 class="title--date">30&nbsp;&nbsp;&nbsp;05</h2>
            <h2>THE STATION, <br>SILVER ST</h2>

            <ul class="homepage__links">
                <li>
                    <h3>
                        <a class="link-more-info fancybox-iframe fancybox.iframe" href="<?php echo get_bloginfo('wpurl'); ?>/more-info/">MORE INFO</a>
                        <a class="link-more-info--mob" href="<?php echo get_bloginfo('wpurl'); ?>/more-info/">MORE INFO</a>
                    </h3>
                </li>
                <li>
                    <h3>
                        <!-- <a href="<?php echo get_bloginfo('wpurl'); ?>/tickets/">EARLY BIRD -->
                        <a href="https://thebristolball.wufoo.eu/forms/early-bird-tickets/">EARLY BIRD
                        <span class="text--tickets">TICKETS</span></a>
                    </h3>
                    <h4>(LIMITED STOCK)</h4>
                </li>
                <li>
                    <h3>
                    <a class="link-trailer fancybox-media" href="https://vimeo.com/93543341" rel="media-gallery">TRAILER</a>
                    <a class="link-trailer--mob" href="https://vimeo.com/93543341">TRAILER</a>
                    </h3>
                </li>
            </ul>
        </section> 
    </div>

    <div class="wrapper">
        <div class="screen" id="screen" data-video="<?php echo get_template_directory_uri(); ?>/video/bg-video.mp4">
            <img src="<?php echo get_template_directory_uri(); ?>/img/video.jpg" class="big-image" />
        </div>
    </div>


    
    <!-- BigVideo Dependencies -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.8.1.min.js"><\/script>')</script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-ui.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.imagesloaded.min.js"></script>
    <script src="http://vjs.zencdn.net/c/video.js"></script>

    <!-- BigVideo -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bigvideo.js"></script>

    <!-- BigVideo Background Transit -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.transit.min.js"></script>

    <!-- FancyBox -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.fancybox-media.js"></script>

    <!-- Main.js where all the magic happens -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>


<?php get_footer(); ?>