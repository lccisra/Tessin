<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'CallToAction',
		'id'  => 'calltoaction',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Col-1',
		'id'  => 'col-1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Col-2',
		'id'  => 'col-2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Col-3',
		'id'  => 'col-3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Col-4',
		'id'  => 'col-4',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Col-5',
		'id'  => 'col-5',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Copyright',
		'id'  => 'copyright',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Certificaciones',
		'id'  => 'certificates',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));
	
//thumbnail, medium, large or full
function get_post_image($post_id, $size = 'thumbnail', $echo = true, $class = ''){
	$args = array( 
		'post_parent' => $post_id,
		'post_type'   => 'attachment', 
		'post_mime_type' => 'image',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	);
	$pictures = get_children($args);
	$i = 0;
	if(!empty($pictures)){
		foreach($pictures as $picture_id=>$picture){
			if($i == 0){
				$src = wp_get_attachment_image_src($picture_id, $size, false);
				$src = $src[0];
				$image = '<img src="'.$src.'" alt="'.get_the_title($post_id).'" class="'.$class.'" />';
			}
			$i++;
		}
	}
	if($echo)
		echo $image;
	else
		return $src;
}

function get_post_images($post_id, $size = 'thumbnail'){
	$args = array( 
		'post_parent' => $post_id,
		'post_type'   => 'attachment', 
		'post_mime_type' => 'image',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	);
	$pictures = get_children($args);
	$img = array();
	if(!empty($pictures)){
		foreach($pictures as $picture_id=>$picture){
			$src = wp_get_attachment_image_src($picture_id, $size, false);
			$thumb_src = wp_get_attachment_image_src($picture_id, 'thumbnail', false);
			$thumb_src = $thumb_src[0];
			$src = $src[0];
			$temp = array(
				/*'img' => '<img src="'.$src.'" alt="'.get_the_title($post_id).'" />',*/
				'img' => $src,
				'thumb' => $thumb_src,
				'description' => $picture->post_content,
				'title' => $picture->post_title
			);
			$img[] = $temp;
		}
	}
	return $img;
}

function get_post_attachment($post_id){
	$args = array(
			'post_parent' => $post_id,
			'post_status' => 'inherit',
			'post_type' => 'attachment',
			'post_mime_type' => 'application/pdf',
			'order' => 'ASC',
			'orderby' => 'menu_order ID'
	);
	$attachments = get_children($args);
	$data = array();
	if ($attachments) {
		foreach ($attachments as $attachment) {
			//echo apply_filters('the_title', $attachment->post_title);
			$data[] = wp_get_attachment_url($attachment->ID, false);
		}
	}
	return $data;
}

function register_my_menus() {
	register_nav_menus(
		array('header-menu' => __('Header Menu'), 'mobile-menu' => __('Mobile Menu'), 'footer-menu-col-1' => __('Footer Menu Col 1'), 'footer-menu-col-2' => __('Footer Menu Col 2'))
	);
}
add_action( 'init', 'register_my_menus' );

//Img destacada
function twentytwelve_setup() {
  add_theme_support('post-thumbnails');
 }
add_action( 'after_setup_theme', 'twentytwelve_setup' );

?>