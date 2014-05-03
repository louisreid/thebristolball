<?php get_header(); ?>
    
    <header class="site-header">
        <h1>The Bristol Ball</h1>
        <h2>The Summer Masquerade</h2>
    </header> 
    
    <!-- BigVideo Dependencies -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower_components/jquery/jquery.min.js"><\/script>')</script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-ui.min.js"></script>
    <script src="//vjs.zencdn.net/4.3/video.js"></script>

    <!-- BigVideo -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bigvideo.js"></script>

    <script>
        $(function() {
            var BV = new $.BigVideo();
            BV.init();
            if (Modernizr.touch) {
                BV.show('img/video.png');
            } else {
                BV.show('video/dock.mp4',{ambient:true});
            }
        });
    </script>

<?php get_footer(); ?>