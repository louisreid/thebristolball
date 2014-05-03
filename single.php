<?php ?>
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.7.1.min.js"></script> -->
    <?php wp_head(); ?>
  </head>
  <body>
<main class="page-content page-content--constrained">

    <?php the_post(); ?>
    
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>

    <nav class="nav-below">
        <p>POSTED <?php the_time('m/j/y g:i A') ?> IN <?php the_category(', ') ?></p>
    </nav> 
  </body>
  <script src='//localhost:3000/socket.io/socket.io.js'></script>
  <script src='//localhost:3001/client/browser-sync-client.min.js'></script>
</html>