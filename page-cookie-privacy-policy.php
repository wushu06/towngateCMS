<?php get_header(); ?>

<section class="leeds">
  <div class="container">
    <div class="row">
      
     <?php 
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        
      
       <?php } 
      } 
      ?>

    </div>
    </div>
</section>

 

 <?php get_footer(); ?>
