
 <?php get_header(); ?>

<section class="download">

 <div class="container">
   
    <div class="row">
    <h2>DOWNLOAD A BROCHURE</h2>
    	<div class="col-md-12">
    	 
    	 <p>To book a viewing simply complete the form below and we’ll get in touch <br> to discuss a suitable date and time.</p>

    	 <?php if(have_posts()): while(have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>	
		<span class="test"></span>
    		<p class="required pull-right"> * Required fields.</p>
    	</div>
    </div>

</div>    
</section>


 


 <?php get_footer(); ?>