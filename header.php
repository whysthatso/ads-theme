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
           werfen selbst zwerge lange schatten... (karl kraus)
        </div>
        <!-- /slogan -->

        <!-- nav -->
        <nav class="nav" role="navigation">
          <?php html5blank_nav(); ?>
        </nav>
        <!-- /nav -->

        <!-- breadcrumbs -->
        <div class="breadcrumbs">
          <?php
            $bc_args = array(
              'container'       => 'div',
              'before'          => 'Du bist hier: ',
              'show_on_front'   => true,
              'show_title'      => true,
              'show_browse'     => false,
              'echo'            => true,
              'labels' => array(
                'browse'              => esc_html__( 'Browse:',                               'breadcrumb-trail' ),
                'aria_label'          => esc_attr_x( 'Breadcrumbs', 'breadcrumbs aria label', 'breadcrumb-trail' ),
                'home'                => esc_html__( 'Home',                                  'breadcrumb-trail' ),
                'error_404'           => esc_html__( '404 Not Found',                         'breadcrumb-trail' ),
                'archives'            => esc_html__( 'Archives',                              'breadcrumb-trail' ),
                // Translators: %s is the search query. The HTML entities are opening and closing curly quotes.
                'search'              => esc_html__( 'Search results for &#8220;%s&#8221;',   'breadcrumb-trail' ),
                // Translators: %s is the page number.
                'paged'               => esc_html__( 'Page %s',                               'breadcrumb-trail' ),
                // Translators: Minute archive title. %s is the minute time format.
                'archive_minute'      => esc_html__( 'Minute %s',                             'breadcrumb-trail' ),
                // Translators: Weekly archive title. %s is the week date format.
                'archive_week'        => esc_html__( 'Week %s',                               'breadcrumb-trail' ),
                // "%s" is replaced with the translated date/time format.
                'archive_minute_hour' => '%s',
                'archive_hour'        => '%s',
                'archive_day'         => '%s',
                'archive_month'       => '%s',
                'archive_year'        => '%s',
              )
	    );
          if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail($bc_args); ?>
        </div>
        <!-- /breadcrumbs -->

			</header>
			<!-- /header -->
