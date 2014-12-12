<?php

// enqueue stuff
wp_enqueue_style('stylesheet', get_stylesheet_directory_uri() . '/style.css', array(), '1.9.2', false);

remove_filter( 'the_content', 'wpautop' );

// custom post type icons
pti_set_post_type_icon( 'map-location', 'map-marker' );
pti_set_post_type_icon( 'portfolio-item', 'th' );


// custom text on admin portfolio-item featured image boxes
add_action('do_meta_boxes', 'portfolio_image_box');

function portfolio_image_box() {

	remove_meta_box( 'postimagediv', 'portfolio-item', 'side' );

	add_meta_box('postimagediv', __('Thumbnail Image<br><span style="font-weight:normal; font-size:13px;">(for orange thumbnail with title, leave this blank and add text below - title above will be displayed)</span>'), 'post_thumbnail_meta_box', 'portfolio-item', 'normal', 'high');

}


// multiple thumbnails for portfolio-image post type
if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'First Slide',
'id' => 'first-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Second Slide',
'id' => 'second-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Third Slide',
'id' => 'third-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Fourth Slide',
'id' => 'fourth-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Fifth Slide',
'id' => 'fifth-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Sixth Slide',
'id' => 'sixth-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Seventh Slide',
'id' => 'seventh-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Eighth Slide',
'id' => 'eighth-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Ninth Slide',
'id' => 'ninth-slide',
'post_type' => 'portfolio-item'
 ) );
 
 new MultiPostThumbnails(array(
'label' => 'Tenth Slide',
'id' => 'tenth-slide',
'post_type' => 'portfolio-item'
 ) );
 
  new MultiPostThumbnails(array(
'label' => 'Eleventh Slide',
'id' => 'eleventh-slide',
'post_type' => 'portfolio-item'
 ) );
 
  new MultiPostThumbnails(array(
'label' => 'Twelfth Slide',
'id' => 'twelfth-slide',
'post_type' => 'portfolio-item'
 ) );
 
   new MultiPostThumbnails(array(
'label' => 'Thirteenth Slide',
'id' => 'thirteenth-slide',
'post_type' => 'portfolio-item'
 ) );
 
   new MultiPostThumbnails(array(
'label' => 'Fourteenth Slide',
'id' => 'fourteenth-slide',
'post_type' => 'portfolio-item'
 ) );
 
   new MultiPostThumbnails(array(
'label' => 'Fifteenth Slide',
'id' => 'fifteenth-slide',
'post_type' => 'portfolio-item'
 ) );

 }



// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{

    // Sidebar Logo Widget
    register_sidebar(array(
        'name' => __('Sidebar Logo widget', 'html5blank'),
        'description' => __('holds the CDW square logo image on left of pages', 'html5blank'),
        'id' => 'widget-sidebar-logo',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Home Page Title Widget
    register_sidebar(array(
        'name' => __('Home Page Title widget', 'html5blank'),
        'description' => __('text on top left of HOME page', 'html5blank'),
        'id' => 'widget-home-title',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define Home Page Blurb Widget
    register_sidebar(array(
        'name' => __('Home Page Blurb widget', 'html5blank'),
        'description' => __('text block on HOME page', 'html5blank'),
        'id' => 'widget-home-blurb',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    
    // Define About Page Title Widget
    register_sidebar(array(
        'name' => __('About Page Title widget', 'html5blank'),
        'description' => __('text on top left of ABOUT page', 'html5blank'),
        'id' => 'widget-about-title',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define About Page Blurb Widget
    register_sidebar(array(
        'name' => __('About Page Blurb widget', 'html5blank'),
        'description' => __('text block on ABOUT page', 'html5blank'),
        'id' => 'widget-about-blurb',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Clients Page Title Widget
    register_sidebar(array(
        'name' => __('Clients Page Title widget', 'html5blank'),
        'description' => __('text on top left of CLIENTS page', 'html5blank'),
        'id' => 'widget-clients-title',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Clients Page Blurb Widget
    register_sidebar(array(
        'name' => __('Clients Page Blurb widget', 'html5blank'),
        'description' => __('text block on CLIENTS page', 'html5blank'),
        'id' => 'widget-clients-blurb',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Contact Page Title Widget
    register_sidebar(array(
        'name' => __('Contact Page Title widget', 'html5blank'),
        'description' => __('text on top left of CLIENTS page', 'html5blank'),
        'id' => 'widget-contact-title',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Contact Page Blurb Widget
    register_sidebar(array(
        'name' => __('Contact Page Blurb widget', 'html5blank'),
        'description' => __('text block on CLIENTS page', 'html5blank'),
        'id' => 'widget-contact-blurb',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));    



}


// THIS GIVES US SOME OPTIONS FOR STYLING THE ADMIN AREA
function custom_colors() {
   echo '<style type="text/css">
   
           #map-location-options tr.ecf-field-container:nth-of-type(1),
           #map-location-options tr.ecf-field-container:nth-of-type(3), 
           #map-location-options tr.ecf-field-container:nth-of-type(4), 
           #map-location-options tr.ecf-field-container:nth-of-type(5), 
           #map-location-options tr.ecf-field-container:nth-of-type(6) { 
           	   display:none; 
           }
           
           .custom-mapping-shell h3:nth-of-type(3), 
           .custom-mapping-shell table.form-table:nth-of-type(3) { 
           	   display:none; 
           }
           
           
         </style>';
}

add_action('admin_head', 'custom_colors');


?>
