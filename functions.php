<?php

/**
 * Override seed_setup()
 */
function berry_setup() {
	add_theme_support( 'custom-logo', array(
		'width'       => 80, 
		'height'      => 80, 
		'flex-width' => true,
		) );
	set_post_thumbnail_size( 370, 237, TRUE );
}
add_action( 'after_setup_theme', 'berry_setup', 11);

/**
 * Remove / Unregister some sidebars
 */
function berry_remove_sidebar(){
	unregister_sidebar( 'rightbar' );
	unregister_sidebar( 'leftbar' );
	unregister_sidebar( 'shopbar' );
	unregister_sidebar( 'top-right' );
}
add_action( 'widgets_init', 'berry_remove_sidebar', 11 );

/**
 * Anim Enqueue scripts and styles.
 */
function berry_scripts() {

	/*wp_dequeue_style( 'seed-style');*/
	wp_enqueue_style( 'berry-style', get_stylesheet_uri() );
	wp_enqueue_script( 'berry-style', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_script( 'berry-main', get_stylesheet_directory_uri() . '/js/main.js', array(), '2016-1', true );
	wp_enqueue_script( 'berry-main', get_stylesheet_directory_uri() . '/js/sketchfab-viewer-1.3.1.js', array(), '2016-1', true );

}
add_action( 'wp_enqueue_scripts', 'berry_scripts' , 20 );
/* iworn require ACF 5 */
define('ACF_EARLY_ACCESS','5');

/**
 * Put icon before the post title
 * you can create custom field for icon field by category taxonomy
 * @see https://www.engagewp.com/how-to-add-icon-before-post-title-wordpress/ and @see https://www.wp-tweaks.com/put-image-before-the-post-title-wordpress/
 */
function anim_icon_before_title( $title, $id = null ) {

    if(get_post_meta($id, 'icon_before_title_url', true)) {
        $img_source = get_post_meta(get_the_ID(), 'icon_before_title_url', true);
        $title = '<img class="icon_title" src="'. $img_source .'" />' . $title;
   }

    return $title;
}
add_filter( 'the_title', 'anim_icon_before_title', 10, 2 ); /* end put icon */

/**
 * Anim function Allow SVG through WordPress Media Uploader
 */
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

/**
* iWorn Add Function Admin Column Thumbnail 
*/
add_filter('manage_posts_columns', 'posts_columns', 10);
add_action('manage_posts_custom_column', 'posts_custom_columns', 10, 2);

function posts_columns($defaults){
	$defaults['anim_post_thumbs'] = __('รูปปก');
	return $defaults;
}

function posts_custom_columns($column_name, $id){
	if($column_name === 'anim_post_thumbs'){
		echo the_post_thumbnail( 'featured-thumbnail' );
	}
}/* # Thumbnail Column */

/** แก้ปัญหาคุกกี้หน้า wp-login */
setcookie(TEST_COOKIE, 'WP Cookie check', 0, COOKIEPATH, COOKIE_DOMAIN);
if ( SITECOOKIEPATH != COOKIEPATH )
	setcookie(TEST_COOKIE, 'WP Cookie check', 0, SITECOOKIEPATH, COOKIE_DOMAIN);

/**
 * Anim Category private project_name taxonomy
 * @package animdata 
 */
/** anim_private */


/** Apps Custom post type none ACF */
function anim_tax_apps_cptui() {

	/**
	 * Taxonomy: ชื่อโปรแกรม.
	 */

	$labels = array(
		"name" => __( "ชื่อโปรแกรม", "" ),
		"singular_name" => __( "ใส่ชื่อโปรแกรม", "" ),
		"menu_name" => __( "ชื่อโปรแกรม", "" ),
		"all_items" => __( "ชื่อโปรแกรมทั้งหมด", "" ),
		"edit_item" => __( "แก้ไขชื่อโปรแกรม", "" ),
		"view_item" => __( "ดูชื่อโปรแกรม", "" ),
		"update_item" => __( "อัปเดตชื่อโปรแกรม", "" ),
		"add_new_item" => __( "เพิ่มชื่อโปรแกรม", "" ),
		"new_item_name" => __( "ชื่อโปรแกรมใหม่", "" ),
		"parent_item" => __( "โยงชื่อโปรแกรมหลัก", "" ),
		"parent_item_colon" => __( "ชื่อโปรแกรมหลัก:", "" ),
		"search_items" => __( "ค้นหาชื่อโปรแกรม", "" ),
		"popular_items" => __( "ชื่อโปรแกรมยอดนิยม", "" ),
		"separate_items_with_commas" => __( "คั่นแต่ละชื่อด้วยเครื่องหมาย คอมม่า((ตย. -> Maya,Photoshop,Nuke,RealFlow)", "" ),
		"add_or_remove_items" => __( "เพิ่ม-ลบ ชื่อโปรแกรม", "" ),
		"choose_from_most_used" => __( "เลือกจากชื่อโปรแกรมที่ใช้บ่อย", "" ),
		"not_found" => __( "ไม่พบชื่อโปรแกรม", "" ),
		"no_terms" => __( "ไม่มีชื่อโปรแกรม", "" ),
		"items_list_navigation" => __( "ตัวนำทางรายการชื่อโปรแกรม", "" ),
		"items_list" => __( "รายการชื่อโปรแกรม", "" ),
	);

	$args = array(
		"label" => __( "ชื่อโปรแกรม", "" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable => true,
		'hierarchical' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'anim-app-name', 'with_front' => true, ),
		'show_admin_column' => true,
		'show_in_rest' => false,
		'rest_base" => "anim-app-name",
		'rest_controller_class' => "WP_REST_Terms_Controller",
		'show_in_quick_edit' => true,
		);
	register_taxonomy( "anim-app-name", array( "project" ), $args );
}
add_action( 'init', 'anim_tax_apps_cptui' ); /**-- post type Anim App -- */

/* Add CPTs to author archives 
* @see https://gist.github.com/betodasilva/4ad7eb744a20b7599a66ff806fb77ee8 */
function post_types_author_archives($query) {
        if ($query->is_author)
                // Add anim project by field 'project' CPT and the default 'posts' to display in author's archive 
                $query->set( 'post_type', array('project', 'posts') );
        remove_action( 'pre_get_posts', 'custom_post_author_archive' );
    }
    add_action('pre_get_posts', 'post_types_author_archives');
/*author*/


