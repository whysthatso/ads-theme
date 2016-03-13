<!-- sidebar -->
<aside class="sidebar" role="complementary">

  <div id="sidebar-search"> <?php get_template_part('searchform'); ?> </div>

  <div class="sidebar-widget">
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
  </div>

</aside>
<!-- /sidebar -->
