<?php


//////////////////////////////////////////////
//  DEFAULT SPM_X SUPPORTS
//////////////////////////////////////////////

if ( ! function_exists( 'spm_x_setup' ) ) :

	function spm_x_setup() {


        //////////////////////////////////////////////
        //  LANGUAGE TRANSLATION
        //////////////////////////////////////////////
        load_theme_textdomain( 'spm_x', get_template_directory() . '/languages' );


        //////////////////////////////////////////////
        //  DOCUMENT TITLE HANDLER
        //////////////////////////////////////////////
        add_theme_support( 'title-tag' );


        //////////////////////////////////////////////
        //  POST THUMBNAILS
        //////////////////////////////////////////////
        add_theme_support('post-thumbnails');


        //////////////////////////////////////////////
        //  THUMBNAIL SIZES
        //////////////////////////////////////////////
        add_image_size( 'landscape-mobile', 768, 512, array( 'center', 'center' ) );
        add_image_size( 'landscape-tablet', 1280, 853, array( 'center', 'center' ) );
        add_image_size( 'landscape-desktop', 2560, 1707, array( 'center', 'center' ) );
				add_image_size( 'stories-feed', 640, 360, array( 'center', 'center' ) );
        add_image_size( 'team-member', 470, 470, array( 'center', 'top' ) );
        add_image_size( 'widescreen', 2560, 1097, array( 'center', 'top' ) );


        //////////////////////////////////////////////
        //  EXCERPTS FOR PAGES
        //////////////////////////////////////////////
        add_action( 'init', 'spm_excerpts' );
        function spm_excerpts() {
            add_post_type_support( 'page', 'excerpt' );
            add_post_type_support( 'sample', 'excerpt' );
        }

        //////////////////////////////////////////////
        //  REGISTER MENUS
        //////////////////////////////////////////////
        register_nav_menus( array(
            'mobile' => esc_html__( 'Mobile Menu', 'spm_x' ),
            'header-primary' => esc_html__( 'Primary', 'spm_x' ),
            'header-secondary' => esc_html__( 'Secondary', 'spm_x' ),
            'about' => esc_html__( 'About', 'spm_x' ),
            'footer-primary' => esc_html__( 'Footer Primary', 'spm_x' ),
            'footer-secondary' => esc_html__( 'Footer Secondary', 'spm_x' ),
        ) );

        //////////////////////////////////////////////
        //  HTML5 SUPPORT
        //////////////////////////////////////////////
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );


        //////////////////////////////////////////////
        //  SELECTIVE REFRESH FOR WIDGETS
        //////////////////////////////////////////////
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'spm_x_setup' );




//////////////////////////////////////////////
//  LEGACY CONTENT WIDTH VARIABLE
//////////////////////////////////////////////

function spm_x_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'spm_x_content_width', 1200 );
}
add_action( 'after_setup_theme', 'spm_x_content_width', 0 );

//////////////////////////////////////////////
// REMOVE EMOJIS
//////////////////////////////////////////////
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//////////////////////////////////////////////
// REGISTER SIDEBAR WIDGETS
//////////////////////////////////////////////
function spm_x_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'About Sidebar', 'spm_x' ),
		'id'            => 'sidebar-about',
		'description'   => esc_html__( 'Add widgets here.', 'spm_x' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
		'name'          => esc_html__( 'Services Sidebar', 'spm_x' ),
		'id'            => 'sidebar-services',
		'description'   => esc_html__( 'Add widgets here.', 'spm_x' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );


}
add_action( 'widgets_init', 'spm_x_widgets_init' );

//////////////////////////////////////////////
//  Enqueue Scripts and Styles
//////////////////////////////////////////////
function spm_x_scripts() {
    wp_enqueue_style( 'bootstrap-css', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
    // wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery-3', '//code.jquery.com/jquery-3.4.0.min.js', array(), '3.4', true );
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7', true );
    wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), '1.14.7', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'spm_x_scripts' );


//////////////////////////////////////////////
//  Add Custom Filters
//////////////////////////////////////////////
require get_template_directory() . '/spm-filters/autoversion.php';
require get_template_directory() . '/spm-filters/svg-upload.php';
require get_template_directory() . '/spm-filters/remove-protected.php';
require get_template_directory() . '/spm-filters/hfeed.php';
require get_template_directory() . '/spm-filters/excerpt-length.php';
require get_template_directory() . '/spm-filters/archive-titles.php';
require get_template_directory() . '/spm-filters/body-classes.php';
require get_template_directory() . '/spm-filters/acf-options.php';
require get_template_directory() . '/spm-filters/trim-excerpt.php';
