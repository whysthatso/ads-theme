<?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <!-- article -->
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
        </div>
      <?php endif; ?>
      <!-- /post thumbnail -->

      <!-- post title -->
      <div class="post-title">
        <h2><?php the_title(); ?></h2>
      </div>
      <!-- /post title -->

      <!-- post excerpt -->
      <div class="post-excerpt">
        <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
      </div>
      <!-- /post excerpt -->
      <div class="clear"></div>

      <?php edit_post_link(); ?>
    </article>
  </a>
  <!-- /article -->

<?php endwhile; ?>

<?php else: ?>

  <!-- article -->
  <article>
    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
  </article>
  <!-- /article -->

<?php endif; ?>
