<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
      });
    </script>
  </head>

  <body <?php body_class(); ?>>
    <!-- wrapper -->
    <div class="wrapper">
      <!-- header -->
      <header class="header clear" role="banner">

        <!-- logo -->
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
            <?php
              if ( is_front_page() || is_home() || is_page( array( 27, 43 ) ) || in_category( array (73, 22 ) ) || cat_is_ancestor_of( array( 73, 22 ), $cat ) )
                { $color = 'rot'; }
              elseif ( is_page( array( 58, 64, 134, 66 ) )  ||  in_category( array( 61, 74, 75 ) ) )
                { $color = 'blau'; }
              elseif ( is_page( array( 146 ) ) || in_category( 72 ) )
                { $color = 'orange'; }
              elseif ( is_page( array( 78 ) ) )
                { $color = 'violett'; }
              elseif ( is_page( array( 88 ) ) )
                { $color = 'gruen'; }
              elseif ( is_page( array( 92 ) ) )
                { $color = 'gelb'; }
              elseif ( is_page( array( 2086 ) ) )
                { $color = 'tuerkis'; }
              else
                { $color = 'rot'; }
            ?>

            <img src="<?php echo get_template_directory_uri(); ?>/img/logo/ads_logo_<?php echo $color ?>.png" alt="Logo" class="logo-img">
          </a>
        </div>
        <!-- /logo -->

        <!-- slogan -->
        <div class="slogan">
           wenn die sonne der kultur niedrig steht,<br />
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;werfen selbst zwerge lange schatten... (karl kraus)
        </div>
        <!-- /slogan -->

        <!-- nav -->
        <nav class="nav" role="navigation">
          <?php html5blank_nav(); ?>
        </nav>
        <!-- /nav -->

      </header>
      <!-- /header -->
