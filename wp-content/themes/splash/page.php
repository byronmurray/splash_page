<?php get_header(); ?>
  
  <?php get_hero_image() ?>
  
  <div class="container">
     
	
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          	<?php the_content(); ?>

          <?php endwhile; endif; ?>

  </div>

<?php get_footer(); ?>