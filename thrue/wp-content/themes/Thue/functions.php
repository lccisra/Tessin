<?php

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'CTA',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Col1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Col2',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Col3',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Copyright',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
	));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar',
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
		array('header-menu' => __('Header Menu'))
	);
}
add_action( 'init', 'register_my_menus' );

//Img destacada
function twentytwelve_setup() {
  add_theme_support('post-thumbnails');
 }
add_action( 'after_setup_theme', 'twentytwelve_setup' );

//Services
function create_services_post_type() {
	$labels = array (
		'name' => 'Services',
		'singular_name' => 'Services',
		'add_new' => 'Añadir nuevo',
		'add_new_item' => 'Añadir nuevo',
		'edit_item' => 'Editar',
		'new_item' => 'Nuevo',
		'all_items' => 'Todos',
		'view_item' => 'Ver',
		'search_items' => 'Buscar',
		'not_found' => 'No se encontraron resultados',
		'not_found_in_trash' => 'No se encontraron resultados en la papelera',
		'parent_item_colon' => '',
		'menu_name' => 'Servicios',
	);
	//register post type
	register_post_type ( 'services', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'services' ),
	));
}
add_action( 'init', 'create_services_post_type' );

//Testimonials
function create_testimonials_post_type() {
	$labels = array (
		'name' => 'Testimonios',
		'singular_name' => 'Testimonios',
		'add_new' => 'Añadir nuevo',
		'add_new_item' => 'Añadir nuevo',
		'edit_item' => 'Editar',
		'new_item' => 'Nuevo',
		'all_items' => 'Todos',
		'view_item' => 'Ver',
		'search_items' => 'Buscar',
		'not_found' => 'No se encontraron resultados',
		'not_found_in_trash' => 'No se encontraron resultados en la papelera',
		'parent_item_colon' => '',
		'menu_name' => 'Testimonios',
	);
	//register post type
	register_post_type ( 'testimonios', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'testimonios' ),
	));
}
add_action( 'init', 'create_testimonials_post_type' );

//Video Blog
function create_v_blog_post_type() {
	$labels = array (
		'name' => 'VBlog',
		'singular_name' => 'Video-Blog',
		'add_new' => 'Añadir nuevo',
		'add_new_item' => 'Añadir nuevo',
		'edit_item' => 'Editar',
		'new_item' => 'Nuevo',
		'all_items' => 'Todos',
		'view_item' => 'Ver',
		'search_items' => 'Buscar',
		'not_found' => 'No se encontraron resultados',
		'not_found_in_trash' => 'No se encontraron resultados en la papelera',
		'parent_item_colon' => '',
		'menu_name' => 'Video Blog',
	);
	//register post type
	register_post_type ( 'v-blog', array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'v-blog' ),
	));
}
add_action( 'init', 'create_v_blog_post_type' );

?>