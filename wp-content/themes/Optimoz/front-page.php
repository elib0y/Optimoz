<?php get_header(); ?>
  <section class="header_banner" style="background-image: url(<?php echo get_theme_file_uri('/images/HEADER-SECTION.png')?>)" > 
  
      <div class="wrapper">
        <h1 class="banner_header">Let Us Help You</h1>
		 <div class="banner_text"><p>Improved your businness' online presence.</p>
		  <p>reach more customers</p>
		  <p>Grow your businness</p>
		   <h5 class="hero_content_header"><a href="#">Contact Us</a></h5>	 
		</div>	 
	   </div>
	</section> 
     <?php
       $OurServices = new WP_Query(array(
	        'post_per_page' => -1, 
		    'post_type' =>  'service',
		    'order' =>   'ASC'
		  ));
		 ?>

	<!-- Our Services Section -->

     <div class="wrapper">
		<h2 class="section_header">Our Services</h2>
		<hr style="height:1px;border:none;color:#333;background-color:#333;">
		  <section class="services_section"> 
			<?php   
			  while($OurServices->have_posts()){
				$OurServices->the_post(); ?>
			     <div class="services_post_card "><?php the_post_thumbnail('small'); ?>
				    <h2 class="services_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				    </h2>
	                   <p> <?php the_content(); ?></p>
				 </div>
			  <?php } ?>
		  </section>	 
	  </div>
	   
 <?php wp_reset_postdata(); ?>

 <!--Performance Section-->
 <?php 
    $Performance = New WP_Query(array(
             'post_per_page' => 3,
             'post_type'   => 'performance',
              'order'   => 'ASC'
    	));
 ?>

 <section class="section_performance">
      

	   <div class="section_performance_bg" style="background-image: url(<?php echo get_theme_file_uri('/images/BG-SECTION3.png') ?>)">
			 <h1 class="performance_header">Why Optimoz?</h1>
			 <?php 
			  while($Performance->have_posts()){
                       $Performance->the_post(); ?>
			   <div class="wrapper">
			     <div class="performance_list">
			     	<div class="performance_img"><?php the_post_thumbnail(); ?></div>
			     	<div class="performance_content"><h3><?php the_title(); ?></h3> <?php the_content(); ?></div>
			     </div>
           </div>
         <?php } ?>
		</div> 
 </section> 	  
 

<?php get_footer(); ?>
	