<?php if (have_posts()): while (have_posts()) : the_post(); ?>
 <?php echo category_description( $category_id ); ?>
  <!-- sponsor -->
  <div class="sponsor" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="sponsor-logo">
      <!-- sponsor link -->
      <?php if ( get_field('link_des_sponsors')) : ?>
        <a href='<?php echo get_field('link_des_sponsors') ?>' target='_blank'>
      <?php endif; ?>

      <!-- sponsor logo -->
      <?php if ( get_field('logo_des_sponsors')) :
        $image = get_field('logo_des_sponsors');
        $size = 'medium'; // (thumbnail, medium, large, full or custom size)
        if( $image ) {
          echo wp_get_attachment_image( $image, $size );
        }
      ?>
      <?php endif; ?>
      <!-- /sponsor logo -->

      <?php if ( get_field('link_des_sponsors')) : ?>
        </a>
      <?php endif; ?>
      <!-- /sponsor link -->
    </div>

    <div class="sponsor-name">
      <!-- sponsors name -->
      <h1><?php the_title(); ?></h1>
      <!-- /sponsors name -->
    </div>

    <div class="clear"></div>
    <?php edit_post_link(); ?>

   </div>
   <!-- /sponsor -->

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>
    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
  </article>
  <!-- /article -->

<?php endif; ?>
