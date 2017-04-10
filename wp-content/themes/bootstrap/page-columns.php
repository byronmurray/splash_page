<?php
/*
  Template Name: 2 Columns
*/

?>
<?php get_header(); ?>
  
  <?php get_hero_image() ?>
  
  <div class="page-header">

  	<div class="container">

  		<h1><?php the_title(); ?></h1>
      
	  </div>

  </div>

  <div class="container page-container">

    <div class="row">
      
      <div class="col-md-6">
		
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          	<?php the_content(); ?>

          <?php endwhile; endif; ?>

      </div>

      <div class="col-md-6">
      
      	<?php echo get_post_meta($post->ID,'custom_wysiwyg', true); ?>
 
  	  </div>

    </div>


  </div>

<?php get_footer(); ?>