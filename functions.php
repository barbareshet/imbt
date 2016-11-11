<?php
/**
 * Ido Modern Business Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ido_Modern_Business_Theme
 */

if ( ! function_exists( 'imbt_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function imbt_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Ido Modern Business Theme, use a find and replace
	 * to change 'imbt' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'imbt', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'imbt' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'imbt_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'imbt_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function imbt_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'imbt_content_width', 640 );
}
add_action( 'after_setup_theme', 'imbt_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function imbt_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'imbt' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'imbt' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Posts', 'imbt' ),
		'id'            => 'sidebar-posts',
		'description'   => esc_html__( 'Add widgets here.', 'imbt' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer left 1', 'imbt' ),
		'id'            => 'footer-left-1',
		'description'   => esc_html__( 'Add widgets here.', 'imbt' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer left 2', 'imbt' ),
		'id'            => 'footer-left-2',
		'description'   => esc_html__( 'Add widgets here.', 'imbt' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer right 3', 'imbt' ),
		'id'            => 'footer-right-3',
		'description'   => esc_html__( 'Add widgets here.', 'imbt' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Footer right 4', 'imbt' ),
		'id'            => 'footer-right-4',
		'description'   => esc_html__( 'Add widgets here.', 'imbt' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'imbt_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function imbt_scripts() {
        //Styles
	//bootstrap css
        wp_enqueue_style('imbt-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('imbt-bootstrap-style', get_stylesheet_directory_uri() . '/assets/css/modern-business.css');
        
        //font-awesome
        wp_enqueue_style('imbt-font-awesome', get_stylesheet_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array(), '4.6.3');
        
        //costomized style
        wp_enqueue_style( 'imbt-style', get_stylesheet_uri() );
        
        //Scripts
        //bootstrap scripts
	wp_enqueue_script( 'imbt-bootstrap-scripts', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.0', true );
        wp_enqueue_script( 'imbt-contact-me-scripts', get_template_directory_uri() . '/assets/js/contact_me.js', array('jquery'), '1.0', true );
        wp_enqueue_script( 'imbt-jqBootstrapValidation-scripts', get_template_directory_uri() . '/assets/js/jqBootstrapValidation.js', array('jquery'), '1.0', true );
        
        //customized scripts
        wp_enqueue_script( 'imbt-main-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'imbt-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'imbt-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'imbt_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * bootstrap nav walker
 */
require_once get_template_directory() . '/inc/wp-bootstrap-navwalker/wp_bootstrap_navwalker.php';

/**
 * Include ACF 
 */
// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/inc/plugins/acf/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/inc/plugins/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');


// 4. Include ACF
//include_once( get_stylesheet_directory() . '/acf/acf.php' );

include_once( get_template_directory() . '/inc/plugins/acf/acf.php' );

	if( function_exists('acf_add_options_page') ) {


		acf_add_options_page(array(
			'page_title' => __('Theme Options', 'click'),
			'menu_title' => __('Theme Options', 'click'),
			'menu_slug' => __('theme-options', 'click')
		));
	}
	add_filter('acf/settings/save_json', 'my_acf_json_save_point');

	function my_acf_json_save_point($path) {
		$path = get_template_directory() . '/inc/plugins/acf_json/';
		return $path;
	}
        
        //acf fields and options
	include_once(get_template_directory() . '/inc/plugins/acf-repeater-editor-accordion/acf-repeater-accordion.php');

//Custom Post Types
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Porfolio Items', 'Post Type General Name', 'imbt' ),
		'singular_name'         => _x( 'Porfolio Item', 'Post Type Singular Name', 'imbt' ),
		'menu_name'             => __( 'Porfolio', 'imbt' ),
		'name_admin_bar'        => __( 'Porfolio', 'imbt' ),
		'archives'              => __( 'Porfolio Items Archives', 'imbt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'imbt' ),
		'all_items'             => __( 'All Porfolio Items', 'imbt' ),
		'add_new_item'          => __( 'Add New Porfolio Item', 'imbt' ),
		'add_new'               => __( 'Add Porfolio Item', 'imbt' ),
		'new_item'              => __( 'New Porfolio Item', 'imbt' ),
		'edit_item'             => __( 'Edit Porfolio Item', 'imbt' ),
		'update_item'           => __( 'Update Porfolio Item', 'imbt' ),
		'view_item'             => __( 'View Porfolio Item', 'imbt' ),
		'search_items'          => __( 'Search Porfolio Item', 'imbt' ),
		'not_found'             => __( 'Porfolio Item Not found', 'imbt' ),
		'not_found_in_trash'    => __( 'Porfolio Item Not found in Trash', 'imbt' ),
		'featured_image'        => __( 'Featured Image', 'imbt' ),
		'set_featured_image'    => __( 'Set featured image', 'imbt' ),
		'remove_featured_image' => __( 'Remove featured image', 'imbt' ),
		'use_featured_image'    => __( 'Use as featured image', 'imbt' ),
		'insert_into_item'      => __( 'Insert into item', 'imbt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'imbt' ),
		'items_list'            => __( 'Porfolio Items list', 'imbt' ),
		'items_list_navigation' => __( 'Porfolio Items list navigation', 'imbt' ),
		'filter_items_list'     => __( 'Filter Porfolio Items list', 'imbt' ),
	);
	$args = array(
		'label'                 => __( 'Porfolio Items', 'imbt' ),
		'description'           => __( 'Porfolio Description', 'imbt' ),
		'labels'                => $labels,
		'supports'              => array('title' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
                'menu_icon'             => 'dashicons-format-gallery',
		'capability_type'       => 'post',
	);
	register_post_type( 'Porfolio Items', $args );
    
    $labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'imbt' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'imbt' ),
		'menu_name'             => __( 'Team', 'imbt' ),
		'name_admin_bar'        => __( 'Team Members', 'imbt' ),
		'archives'              => __( 'Team Members Archives', 'imbt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'imbt' ),
		'all_items'             => __( 'All Team Members', 'imbt' ),
		'add_new_item'          => __( 'Add Team Member', 'imbt' ),
		'add_new'               => __( 'Add Team Member', 'imbt' ),
		'new_item'              => __( 'New Team Member', 'imbt' ),
		'edit_item'             => __( 'Edit Team Member', 'imbt' ),
		'update_item'           => __( 'Update Team Member', 'imbt' ),
		'view_item'             => __( 'View Team Member', 'imbt' ),
		'search_items'          => __( 'Search Team Member', 'imbt' ),
		'not_found'             => __( 'Team Member Not found', 'imbt' ),
		'not_found_in_trash'    => __( 'Team Member Not found in Trash', 'imbt' ),
		'featured_image'        => __( 'Featured Image', 'imbt' ),
		'set_featured_image'    => __( 'Set featured image', 'imbt' ),
		'remove_featured_image' => __( 'Remove featured image', 'imbt' ),
		'use_featured_image'    => __( 'Use as featured image', 'imbt' ),
		'insert_into_item'      => __( 'Insert into Team Member', 'imbt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'imbt' ),
		'items_list'            => __( 'Team Members list', 'imbt' ),
		'items_list_navigation' => __( 'Team Members list navigation', 'imbt' ),
		'filter_items_list'     => __( 'Filter Team Members list', 'imbt' ),
	);
	$args = array(
		'label'                 => __( 'Team Members', 'imbt' ),
		'description'           => __( 'Team Description', 'imbt' ),
		'labels'                => $labels,
		'supports'              => array('title','thumbnail', 'editor', 'excerpt'),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 24,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-groups',
		'capability_type'       => 'page',
	);
	register_post_type( 'Team Members', $args );
  
    $labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'imbt' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'imbt' ),
		'menu_name'             => __( 'Services', 'imbt' ),
		'name_admin_bar'        => __( 'Services', 'imbt' ),
		'archives'              => __( 'Item Archives', 'imbt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'imbt' ),
		'all_items'             => __( 'All Services', 'imbt' ),
		'add_new_item'          => __( 'Add New Service', 'imbt' ),
		'add_new'               => __( 'Add Service', 'imbt' ),
		'new_item'              => __( 'New Service', 'imbt' ),
		'edit_item'             => __( 'Edit Service', 'imbt' ),
		'update_item'           => __( 'Update Service', 'imbt' ),
		'view_item'             => __( 'View Service', 'imbt' ),
		'search_items'          => __( 'Search Service', 'imbt' ),
		'not_found'             => __( 'Service Not found', 'imbt' ),
		'not_found_in_trash'    => __( 'Service Not found in Trash', 'imbt' ),
		'featured_image'        => __( 'Featured Image', 'imbt' ),
		'set_featured_image'    => __( 'Set featured image', 'imbt' ),
		'remove_featured_image' => __( 'Remove featured image', 'imbt' ),
		'use_featured_image'    => __( 'Use as featured image', 'imbt' ),
		'insert_into_item'      => __( 'Insert into item', 'imbt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'imbt' ),
		'items_list'            => __( 'Items list', 'imbt' ),
		'items_list_navigation' => __( 'Items list navigation', 'imbt' ),
		'filter_items_list'     => __( 'Filter items list', 'imbt' ),
	);
	$args = array(
		'label'                 => __( 'Services', 'imbt' ),
		'description'           => __( 'Services Description', 'imbt' ),
		'labels'                => $labels,
		'supports'              => array('title' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 21,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
                'menu_icon'             => 'dashicons-admin-tools',
		'capability_type'       => 'post',
	);
	register_post_type( 'Services', $args );
    
    $labels = array(
		'name'                  => _x( 'Plans', 'Post Type General Name', 'imbt' ),
		'singular_name'         => _x( 'Plan', 'Post Type Singular Name', 'imbt' ),
		'menu_name'             => __( 'Plans', 'imbt' ),
		'name_admin_bar'        => __( 'Plans', 'imbt' ),
		'archives'              => __( 'Item Archives', 'imbt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'imbt' ),
		'all_items'             => __( 'All Plans', 'imbt' ),
		'add_new_item'          => __( 'Add New Plan', 'imbt' ),
		'add_new'               => __( 'Add Plan', 'imbt' ),
		'new_item'              => __( 'New Plan', 'imbt' ),
		'edit_item'             => __( 'Edit Plan', 'imbt' ),
		'update_item'           => __( 'Update Plan', 'imbt' ),
		'view_item'             => __( 'View Plan', 'imbt' ),
		'search_items'          => __( 'Search Plan', 'imbt' ),
		'not_found'             => __( 'Plan Not found', 'imbt' ),
		'not_found_in_trash'    => __( 'Plan Not found in Trash', 'imbt' ),
		'featured_image'        => __( 'Featured Image', 'imbt' ),
		'set_featured_image'    => __( 'Set featured image', 'imbt' ),
		'remove_featured_image' => __( 'Remove featured image', 'imbt' ),
		'use_featured_image'    => __( 'Use as featured image', 'imbt' ),
		'insert_into_item'      => __( 'Insert into item', 'imbt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'imbt' ),
		'items_list'            => __( 'Items list', 'imbt' ),
		'items_list_navigation' => __( 'Items list navigation', 'imbt' ),
		'filter_items_list'     => __( 'Filter items list', 'imbt' ),
	);
	$args = array(
		'label'                 => __( 'Plans', 'imbt' ),
		'description'           => __( 'Plans Description', 'imbt' ),
		'labels'                => $labels,
		'supports'              => array('title' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 22,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-cart',
		'capability_type'       => 'post',
	);
	register_post_type( 'Plans', $args );
    $labels = array(
		'name'                  => _x( 'Customers', 'Post Type General Name', 'imbt' ),
		'singular_name'         => _x( 'Customer', 'Post Type Singular Name', 'imbt' ),
		'menu_name'             => __( 'Customers', 'imbt' ),
		'name_admin_bar'        => __( 'Customers', 'imbt' ),
		'archives'              => __( 'Customers Archives', 'imbt' ),
		'parent_item_colon'     => __( 'Parent Item:', 'imbt' ),
		'all_items'             => __( 'All Customers', 'imbt' ),
		'add_new_item'          => __( 'Add New Customer', 'imbt' ),
		'add_new'               => __( 'Add Customer', 'imbt' ),
		'new_item'              => __( 'New Customer', 'imbt' ),
		'edit_item'             => __( 'Edit Customer', 'imbt' ),
		'update_item'           => __( 'Update Customer', 'imbt' ),
		'view_item'             => __( 'View Customer', 'imbt' ),
		'search_items'          => __( 'Search Customer', 'imbt' ),
		'not_found'             => __( 'Customer Not found', 'imbt' ),
		'not_found_in_trash'    => __( 'Customer Not found in Trash', 'imbt' ),
		'featured_image'        => __( 'Featured Image', 'imbt' ),
		'set_featured_image'    => __( 'Set featured image', 'imbt' ),
		'remove_featured_image' => __( 'Remove featured image', 'imbt' ),
		'use_featured_image'    => __( 'Use as featured image', 'imbt' ),
		'insert_into_item'      => __( 'Insert into Customer', 'imbt' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Customer', 'imbt' ),
		'items_list'            => __( 'Customers list', 'imbt' ),
		'items_list_navigation' => __( 'Customers list navigation', 'imbt' ),
		'filter_items_list'     => __( 'Filter Customers list', 'imbt' ),
	);
	$args = array(
		'label'                 => __( 'Customers', 'imbt' ),
		'description'           => __( 'Customer Description', 'imbt' ),
		'labels'                => $labels,
		'supports'              => array('title','thumbnail' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 22,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-id',
		'capability_type'       => 'post',
	);
	register_post_type( 'Customers', $args );
    }
add_action( 'init', 'custom_post_type', 0 );


/** repalce the excerpt "more" text by a link ****************************/
function new_excerpt_more($more) {
 global $post;
    return '...<a class="moretag" href="'.get_permalink($post->ID) . '">&nbsp;Read More &raquo;</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
    
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Remove ?ver=x.x from css and js
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

//Change the Login Logo
//function my_login_logo() { ?>
    <style type="text/css">
/*
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png);
            padding-bottom: 30px;
        }
*/
    </style>
<?php// }
//add_action( 'login_enqueue_scripts', 'my_login_logo' );
//
//function my_login_logo_url() {
//    return home_url();
//}
//add_filter( 'login_headerurl', 'my_login_logo_url' );
//
//function my_login_logo_url_title() {
//    return get_bloginfo('name');
//}
//add_filter( 'login_headertitle', 'my_login_logo_url_title' );