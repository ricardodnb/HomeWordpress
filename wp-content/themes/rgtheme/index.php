<?php get_header(); ?>

<div id="content" class="container site-content" role="main">

  <div class="col-md-4"><h4>SideBar</h4></div>
  <div class="col-md-8"><h4>Posts:</h4><hr>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
  </div>

</div><!-- #content .site-content -->

<?php get_footer(); ?>
