<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Optimoz</title>
	 <?php wp_head(); ?> 
</head>
<?php 
  if(is_front_page()){
	  $optimoz_classes = array('optimoz-class', 'my-class');
      } 
	  else {
		$optimoz_classes = array('no-optimoz-class');  
	  }
  ?>
<body <?php body_class('optimoz_class');?> >
   <header class="site_header">
	    <div class="head_social_icons">
	 
		  <div class="wrapper"> 
	          <!-- <span><i class="fa fa-facebook-official fa-3x" style="color: #ffff;" aria-hidden="true"></i></span>
			  <span><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></span>
			  <span><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></span>  -->
			  <span class="fb_logo hide"><a href ="#"><img src="<?php echo get_theme_file_uri('/images/LOGOF2-SECTION4.png')?>"></a></span>  
		   </div>	  
		</div>   
	<div class="nav_wrapper">	
	 <div class="wrapper">
         <div class="header_logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('images/Optimoz-Logo.png'); ?>"></a>
	     </div>
	     <nav>
		  <ul>
		     <li><a href="#">Home</a></li>
		     <li><a href="#">Services</a></li>
		     <li><a href="#">Porfolio</a></li>
		     <li><a href="#">About Us</a></li>
			 <li><a href="#">Blog</a></li>
			 <li><a href="#">Request</a></li>  
		   </ul>
		 </nav>    
	  </div>
	</div>
</header>					

 