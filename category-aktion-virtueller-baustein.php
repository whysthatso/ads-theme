<?php get_header(); ?>

  <main role="main">
    <!-- section -->
    <section>

      <h1><?php single_cat_title(); ?></h1>

      <?php get_template_part('partials/loop','aktion-virtueller-baustein'); ?>

      <?php get_template_part('pagination'); ?>

    </section>
    <!-- /section -->
  </main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
