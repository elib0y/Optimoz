<?php get_header();
	while(have_posts()) {
	   the_post(); ?>
       <div class="wrapper">
         <?php the_post_thumbnail(); ?>
		   
       </div>    
  <?php }

get_footer(); ?>  