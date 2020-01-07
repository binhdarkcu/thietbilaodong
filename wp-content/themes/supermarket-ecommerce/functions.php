<?php
/**
 * supermarket-ecommerce functions and definitions
 *
 * @package WordPress
 * @subpackage supermarket-ecommerce
 * @since 1.0
 */

include_once 'inc/filter-woo.php';
include_once 'inc/ajax.php';

function supermarket_ecommerce_setup() {

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
	));

	add_image_size( 'supermarket-ecommerce-featured-image', 2000, 1200, true );

	add_image_size( 'supermarket-ecommerce-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'supermarket-ecommerce' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	* Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', supermarket_ecommerce_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'supermarket_ecommerce_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'supermarket_ecommerce_setup' );

// Notice after Theme Activation
function supermarket_ecommerce_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
		echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'supermarket-ecommerce' ) .'</h3>';
		echo '<p>'. esc_html__( 'Thank you for choosing Supermarket Ecommerce theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'supermarket-ecommerce' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=supermarket_ecommerce_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'supermarket-ecommerce' ) .'</a></p>';
	echo '</div>';
}

function supermarket_ecommerce_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'supermarket-ecommerce' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'supermarket-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'supermarket-ecommerce' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'supermarket-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'supermarket-ecommerce' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'supermarket-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'supermarket-ecommerce' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'supermarket-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'supermarket-ecommerce' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'supermarket-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'supermarket-ecommerce' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'supermarket-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'supermarket-ecommerce' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'supermarket-ecommerce' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'supermarket_ecommerce_widgets_init' );

function supermarket_ecommerce_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800,800i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Enqueue scripts and styles.
function supermarket_ecommerce_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'supermarket-ecommerce-fonts', supermarket_ecommerce_fonts_url(), array(), null );

	// CUSTOM CSS
	wp_enqueue_style( 'custom-style', get_template_directory_uri().'/assets/css/custom-style.css' );
	wp_enqueue_style( 'custom-login', get_template_directory_uri().'/assets/css/custom-login.css' );




	//Bootstarp

	// Theme stylesheet.
	wp_enqueue_style( 'supermarket-ecommerce-basic-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'supermarket-ecommerce-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'supermarket-ecommerce-style' ), '1.0' );
		wp_style_add_data( 'supermarket-ecommerce-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'supermarket-ecommerce-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'supermarket-ecommerce-style' ), '1.0' );
	wp_style_add_data( 'supermarket-ecommerce-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	// Load the html5 shiv.
	wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'supermarket-ecommerce-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );

	$supermarket_ecommerce_l10n=array();

	if ( has_nav_menu( 'top' ) ) {
		wp_enqueue_script( 'supermarket-ecommerce-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '1.0', true );
		$supermarket_ecommerce_l10n['expand']         = __( 'Expand child menu', 'supermarket-ecommerce' );
		$supermarket_ecommerce_l10n['collapse']       = __( 'Collapse child menu', 'supermarket-ecommerce' );
	}

	wp_enqueue_script( 'supermarket-ecommerce-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'supermarket-ecommerce-skip-link-focus-fix', get_theme_file_uri( '/assets/js/skip-link-focus-fix.js' ), array(), '1.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	/**
	 * Login
	 */
	wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/assets/js/custom.login.js', array('jquery') ,'',true);

	wp_localize_script( 'supermarket-ecommerce-skip-link-focus-fix', 'supermarket_ecommerceScreenReaderText', $supermarket_ecommerce_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


	wp_enqueue_style( 'autoptimize', get_template_directory_uri().'/assets/css/autoptimize.css' );
}
add_action( 'wp_enqueue_scripts', 'supermarket_ecommerce_scripts' );

function supermarket_ecommerce_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'supermarket_ecommerce_front_page_template' );

function supermarket_ecommerce_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function supermarket_ecommerce_sanitize_choices( $input, $setting ) {
    global $wp_customize;
    $control = $wp_customize->get_control( $setting->id );
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

//footer Link
// define('SUPERMARKET_ECOMMERCE_LIVE_DEMO','https://www.luzuk.com/demo/supermarket-ecommerce/','supermarket-ecommerce');
// define('SUPERMARKET_ECOMMERCE_PRO_DOCS','https://www.luzuk.com/demo/supermarket-ecommerce/documentation/','supermarket-ecommerce');
// define('SUPERMARKET_ECOMMERCE_BUY_NOW','https://www.luzuk.com/themes/wordpress-ecommerce-theme/','supermarket-ecommerce');
// define('SUPERMARKET_ECOMMERCE_SUPPORT','https://wordpress.org/support/theme/supermarket-ecommerce/','supermarket-ecommerce');
// define('SUPERMARKET_ECOMMERCE_CREDIT','https://www.luzuk.com/themes/free-wordpress-ecommerce-theme/','supermarket-ecommerce');

define('TEMPLATE_PATH',get_bloginfo('template_url'));
define('HOME_URL',get_home_url());
define('BlOG_NAME',get_bloginfo('blog_name'));
define('SLOGAN', get_bloginfo('description'));

if ( ! function_exists( 'supermarket_ecommerce_credit' ) ) {
	function supermarket_ecommerce_credit(){
		// echo "<a href=".esc_url(SUPERMARKET_ECOMMERCE_CREDIT)." target='_blank'>".esc_html__('Ecommerce WordPress Theme','supermarket-ecommerce')."</a>";
	}
}

/* Excerpt Limit Begin */
function supermarket_ecommerce_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'supermarket_ecommerce_loop_columns');
	if (!function_exists('supermarket_ecommerce_loop_columns')) {
		function supermarket_ecommerce_loop_columns() {
	return 3; // 3 products per row
	}
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );

function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php', 'my-account.php'));
}

/* Custom Post Type Start */
function create_posttype() {
  $supports = array(
    'title', // post title
    'thumbnail', // featured images
    );
	register_post_type( 'ads',
  // CPT Options
  
        array(
        'labels' => array(
        'name' => __( 'ads' ),
        'singular_name' => __( 'Advertisments' )
        ),
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'ads'),
        'supports' => $supports,
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

add_theme_support('post-thumbnails',array('post','page','ads'));

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );


function my_filter_berocket_widget_terms ( $terms ) {
  //your code here
  print_r($terms);
      return $terms;
  }
  
  add_filter( 'berocket_aapf_widget_terms', 'my_filter_berocket_widget_terms' );
// add_action('wp_ajax_myfilter', 'categories_filter_function'); // wp_ajax_{ACTION HERE} 
// add_action('wp_ajax_nopriv_myfilter', 'categories_filter_function');
 
// function categories_filter_function(){
// 	$args = array(
// 		'orderby' => 'date', // we will sort posts by date
// 		'order'	=> $_POST['date'] // ASC or DESC
// 	);
 
// 	// for taxonomies / categories
// 	if( isset( $_POST['categoryfilter'] ) )
// 		$args['tax_query'] = array(
// 			array(
// 				'taxonomy' => 'category',
// 				'field' => 'id',
// 				'terms' => $_POST['categoryfilter']
// 			)
// 		);
 
// 	// create $args['meta_query'] array if one of the following fields is filled
// 	// if( isset( $_POST['price_min'] ) && $_POST['price_min'] || isset( $_POST['price_max'] ) && $_POST['price_max'] || isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
// 		// $args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true
 
// 	// if both minimum price and maximum price are specified we will use BETWEEN comparison
// 	// if( isset( $_POST['price_min'] ) && $_POST['price_min'] && isset( $_POST['price_max'] ) && $_POST['price_max'] ) {
// 		// $args['meta_query'][] = array(
// 		// 	'key' => '_price',
// 		// 	'value' => array( $_POST['price_min'], $_POST['price_max'] ),
// 		// 	'type' => 'numeric',
// 		// 	'compare' => 'between'
// 		// );
// 	// } else {
// 		// if only min price is set
// 		// if( isset( $_POST['price_min'] ) && $_POST['price_min'] )
// 		// 	$args['meta_query'][] = array(
// 		// 		'key' => '_price',
// 		// 		'value' => $_POST['price_min'],
// 		// 		'type' => 'numeric',
// 		// 		'compare' => '>'
// 		// 	);
 
// 		// if only max price is set
// 		// if( isset( $_POST['price_max'] ) && $_POST['price_max'] )
// 		// 	$args['meta_query'][] = array(
// 		// 		'key' => '_price',
// 		// 		'value' => $_POST['price_max'],
// 		// 		'type' => 'numeric',
// 		// 		'compare' => '<'
// 		// 	);
// 	// }
 
 
// 	// if post thumbnail is set
// 	// if( isset( $_POST['featured_image'] ) && $_POST['featured_image'] == 'on' )
// 	// 	$args['meta_query'][] = array(
// 	// 		'key' => '_thumbnail_id',
// 	// 		'compare' => 'EXISTS'
// 	// 	);
// 	// if you want to use multiple checkboxed, just duplicate the above 5 lines for each checkbox
 
// 	$query = new WP_Query( $args );
//     echo '<p>' . $_POST['categories'] . '</p>';
//     echo '<p>' . $_POST['categoryfilter'] . '</p>';
// 	if( $query->have_posts() ) :
// 		while( $query->have_posts() ): $query->the_post();
// 			echo '<h2>' . $query->post->post_title . '</h2>';
// 		endwhile;
// 		wp_reset_postdata();
// 	else :
// 		echo 'No posts found';
// 	endif;
 
// 	die();
// }

// add_action('wp_head','jason_add_gpp_gallery');
// function jason_add_gpp_gallery() {
//     if ( is_single() && 'your_post_type' == get_post_type() ) ){
//         remove_shortcode('gallery', 'gallery_shortcode');
//         add_shortcode('gallery', 'gpp_gallery_shortcode');
//     }
// }
	