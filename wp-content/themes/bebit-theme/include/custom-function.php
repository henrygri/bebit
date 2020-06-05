<?php


/* Disable Gutenberg */
add_filter('use_block_editor_for_post', '__return_false', 10);



/* Url logo login  */
function bebit_loginlogo_url($url) {
     return 'https://www.bebit.it';
}
add_filter( 'login_headerurl', 'bebit_loginlogo_url' );



/* Text logo login  */
function bebit_alter_login_headertitle() {
  return 'Powered by Digital Machine srl';
}
add_action('login_headertext','bebit_alter_login_headertitle');



/* Custom Login css */
function bebit_login() {
?>
	<style type="text/css">

	body.login div#login h1 a {
	 	background-image: url('content/logo_bebit_blue.png');
	 	width: 100px;
	 	background-size: 100px;
	 	background-position: center;
	}

	.wp-core-ui .button-primary {
		background: #4eaab0!important;
    	border-color: #4eaab0!important;
	}

	.wp-core-ui .button-secondary, .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover {
		color: #4eaab0!important;
	}

	.login .message, .login .success {
		border-left: 4px solid #4eaab0!important;
	}

	</style>

<?php
}
add_action( 'login_enqueue_scripts', 'bebit_login' );


/* Include custom js */
function include_bebit_js() {
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css', array(),'', 'all' );
	wp_enqueue_style('animate', get_template_directory_uri() . '/static/assets/css/animate.css', array(),'', 'all' );
	wp_enqueue_script('wow-script', get_template_directory_uri() . '/static/assets/js/wow.min.js', array( 'jquery' ),'', 'true' );
	wp_enqueue_script('anime-script', get_template_directory_uri() . '/static/assets/js/anime.min.js', array( 'jquery' ),'', 'true' );
  wp_enqueue_script('isotope-script', get_template_directory_uri() . '/static/assets/js/isotope.pkgd.min.js', array( 'jquery' ),'', 'true' );
  wp_enqueue_script('bootstrap-popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'', 'true' );
	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/static/assets/js/bootstrap.min.js', array( 'jquery' ),'', 'true' );
  if(is_front_page() || is_page_template('pages/home.php')){
      wp_enqueue_script('swipe-script','//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js', array( 'jquery' ),'', 'true' );
      wp_enqueue_script('swipe-my-script',get_template_directory_uri() . '/static/assets/js/carousel-swipe.js', array( 'jquery' ),'', 'true' );
  } elseif(is_page_template('pages/jobs.php')){
      wp_enqueue_script('jobs-script',get_template_directory_uri() . '/static/assets/js/jobs.js', array( 'jquery' ),'', 'true' );
  }
  wp_enqueue_script('cookie-script', get_template_directory_uri() . '/static/assets/js/jquery.divascookies-0.6.min.js', array( 'jquery' ),'', 'true' );
	wp_enqueue_script('custom-script', get_template_directory_uri() . '/static/assets/js/main.js', array( 'jquery' ),'', 'true' );
  wp_localize_script('custom-script','my_vars',array(
      'ajaxurl' => admin_url('admin-ajax.php')
  ));
}
add_action( 'wp_enqueue_scripts', 'include_bebit_js' );



 /* Change path save json custom fields */
function my_acf_json_save_point( $path ) {
    $path = get_stylesheet_directory() . '/include/json';
    return $path;
}
add_filter('acf/settings/save_json', 'my_acf_json_save_point');



 /* Change path load json custom fields */
function my_acf_json_load_point( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/include/json';
    return $paths;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');




/*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Case', 'Case', 'bebit-theme' ),
        'singular_name'       => _x( 'Case', 'Case', 'bebit-theme' ),
        'menu_name'           => __( 'Case', 'bebit-theme' ),
        'parent_item_colon'   => __( 'Parent Case', 'bebit-theme' ),
        'all_items'           => __( 'All Case', 'bebit-theme' ),
        'view_item'           => __( 'View Case', 'bebit-theme' ),
        'add_new_item'        => __( 'Add New Case', 'bebit-theme' ),
        'add_new'             => __( 'Add New', 'bebit-theme' ),
        'edit_item'           => __( 'Edit Case', 'bebit-theme' ),
        'update_item'         => __( 'Update Case', 'bebit-theme' ),
        'search_items'        => __( 'Search Case', 'bebit-theme' ),
        'not_found'           => __( 'Not Found', 'bebit-theme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bebit-theme' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'case-history', 'bebit-theme' ),
        'description'         => __( 'Case news and reviews', 'bebit-theme' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'sector' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-star-filled',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'case-history', $args );

}

add_action( 'init', 'custom_post_type' );



function custom_post_press() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Press', 'Press', 'bebit-theme' ),
        'singular_name'       => _x( 'Press', 'Press', 'bebit-theme' ),
        'menu_name'           => __( 'Press', 'bebit-theme' ),
        'parent_item_colon'   => __( 'Parent Press', 'bebit-theme' ),
        'all_items'           => __( 'All Press', 'bebit-theme' ),
        'view_item'           => __( 'View Press', 'bebit-theme' ),
        'add_new_item'        => __( 'Add New Press', 'bebit-theme' ),
        'add_new'             => __( 'Add New', 'bebit-theme' ),
        'edit_item'           => __( 'Edit Press', 'bebit-theme' ),
        'update_item'         => __( 'Update Press', 'bebit-theme' ),
        'search_items'        => __( 'Search Press', 'bebit-theme' ),
        'not_found'           => __( 'Not Found', 'bebit-theme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bebit-theme' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'press', 'bebit-theme' ),
        'description'         => __( 'Press news and reviews', 'bebit-theme' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        //'taxonomies'          => array( 'sector' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-welcome-add-page',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'press', $args );

}

add_action( 'init', 'custom_post_press' );



function custom_post_services() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Services', 'Services', 'bebit-theme' ),
        'singular_name'       => _x( 'Service', 'Service', 'bebit-theme' ),
        'menu_name'           => __( 'Service', 'bebit-theme' ),
        'parent_item_colon'   => __( 'Parent Service', 'bebit-theme' ),
        'all_items'           => __( 'All Services', 'bebit-theme' ),
        'view_item'           => __( 'View Service', 'bebit-theme' ),
        'add_new_item'        => __( 'Add New Service', 'bebit-theme' ),
        'add_new'             => __( 'Add New', 'bebit-theme' ),
        'edit_item'           => __( 'Edit Service', 'bebit-theme' ),
        'update_item'         => __( 'Update Service', 'bebit-theme' ),
        'search_items'        => __( 'Search Service', 'bebit-theme' ),
        'not_found'           => __( 'Not Found', 'bebit-theme' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bebit-theme' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'services', 'bebit-theme' ),
        'description'         => __( 'Services news and reviews', 'bebit-theme' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-networking',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'services', $args );

}

add_action( 'init', 'custom_post_services' );



add_filter( 'auth_cookie_expiration', 'keep_me_logged_in_for_1_year' );

function keep_me_logged_in_for_1_year( $expirein ) {
    return 31556926; // 1 year in seconds
}


/**
 * Add custom taxonomies
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_taxonomies() {
  $labels = array(
		'name'              => _x( 'Sector', 'taxonomy general name', 'bebit-theme' ),
		'singular_name'     => _x( 'Sector', 'taxonomy singular name', 'bebit-theme' ),
		'search_items'      => __( 'Search Sector', 'bebit-theme' ),
		'all_items'         => __( 'All Sector', 'bebit-theme' ),
		'parent_item'       => __( 'Parent Sector', 'bebit-theme' ),
		'parent_item_colon' => __( 'Parent Sector:', 'bebit-theme' ),
		'edit_item'         => __( 'Edit Sector', 'bebit-theme' ),
		'update_item'       => __( 'Update Sector', 'bebit-theme' ),
		'add_new_item'      => __( 'Add New Sector', 'bebit-theme' ),
		'new_item_name'     => __( 'New Sector Name', 'bebit-theme' ),
		'menu_name'         => __( 'Sector', 'bebit-theme' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'sector' ),
	);

  register_taxonomy( 'sector', array( 'case-history' ), $args );
}
add_action( 'init', 'add_custom_taxonomies', 0 );


function icl_selector_languages(){
     $my_current_lang = apply_filters( 'wpml_current_language', NULL );
     echo "<li class='active-mode'><a>". $my_current_lang."<img src='".site_url()."/content/arrow.png'></a></li>";
     $languages = icl_get_languages('skip_missing=0&orderby=code');
     if(!empty($languages)){
        echo "<ul class='icl_dropdown'>";
         foreach ($languages as $language) {
             if($language['active']) {
                $class = 'active';
             } else {
                $class = 'no-acive';
             }

             echo "<li class='".$class." list_icl'><a href='".  $language['url'] ."'>". $language['code'] ."</a></li>";
          }
        echo '</ul>';
     }
}



add_action( 'template_redirect', 'redirect_cpt_singular_posts' );
function redirect_cpt_singular_posts() {
  if ( is_singular('services')) {
    wp_redirect( site_url().'/cosa-facciamo', 302 );
    exit;
  }
}

function sf_myme_types($mime_types){
$mime_types['json'] = 'application/json';
return $mime_types;
}
add_filter('upload_mimes', 'sf_myme_types', 1, 1);



function myprefix_redirect_attachment_page() {
	if ( is_attachment() ) {
		global $post;
		if ( $post && $post->post_parent ) {
			wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
			exit;
		} else {
			wp_redirect( esc_url( home_url( '/' ) ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'myprefix_redirect_attachment_page' );








?>
