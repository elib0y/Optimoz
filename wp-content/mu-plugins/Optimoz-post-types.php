<?php

function Optimoz_post_types(){
  register_post_type('service',[
	  'supports' => ['title', 'editor','excerpt','thumbnail'],
	  'rewrite'  => ['slug' => 'services'],
	  'has_archive' => true,
	  'public' => true,
	  'labels' => [
		 'name' => 'Services',
		 'add_new_item' => 'Add New Service',
		  'edit_items'  => 'Edit Service',
		  'all_items'  =>  'All Services',
		  'singular_name' => 'Service'
	     ],
	    'menu_icon'  =>  'dashicons-admin-tools'
  ]);

  register_post_type('performance',[
          'supports' => ['title', 'editor', 'thumbnail'],
          'rewrite' => ['slug' => 'performances'],
          'public'  => true,
          'labels'  => [
             'name'  => 'Performances',
             'add_new_item' => 'Add New Performance',
             'edit_items'  =>   'Edit Performance',
             'all_items'  =>    'All Performance',
             'singular_name' => 'Performance'
          ],
          'menu_icon'   =>   'dashicons-hammer'
   ]);	
}
add_action('init', 'Optimoz_post_types');
