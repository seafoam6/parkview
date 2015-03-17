<?php
/**
 * parkview functions and definitions
 *
 * @package parkview
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'parkview_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function parkview_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on parkview, use a find and replace
	 * to change 'parkview' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'parkview', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'parkview' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'parkview_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // parkview_setup
add_action( 'after_setup_theme', 'parkview_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function parkview_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'parkview' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'parkview_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function parkview_scripts() {
	wp_enqueue_style( 'parkview-style', get_stylesheet_uri() );

	wp_enqueue_script( 'parkview-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'parkview-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script(
		'site-js',
		get_stylesheet_directory_uri() . '/js/site.js',
		array( 'jquery' )
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'parkview_scripts' );

	



/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

// create custom plugin settings menu
add_action( 'admin_menu', 'parkview_create_menu' );

function parkview_create_menu() {

    //create new top-level menu
    add_menu_page( 'Parkview Options Page', 'Parkview Plugin', 'manage_options', 'parkview_main_menu', 'parkview_settings_page' );

    //call register settings function
    add_action( 'admin_init', 'parkview_register_settings' );

}

function parkview_register_settings() {

    //register our settings
    register_setting( 'parkview-settings-group', 'parkview_options', 'parkview_sanitize_options' );

}

function parkview_sanitize_options( $input ) {

    $input['option_name']  = sanitize_text_field( $input['option_name'] );
    $input['option_email'] = sanitize_email( $input['option_email'] );
    $input['option_url']   = esc_url( $input['option_url'] );

    return $input;

}

function parkview_settings_page() {
?>
	<div class="wrap">
	<h2>Halloween Plugin Options</h2>

	<form method="post" action="options.php">
		<?php settings_fields( 'parkview-settings-group' ); ?>
		<?php $parkview_options = get_option( 'parkview_options' ); ?>
		<table class="form-table">
			<tr valign="top">
			<th scope="row">Name</th>
			<td><input type="text" name="parkview_options[option_name]" value="<?php echo esc_attr( $parkview_options['option_name'] ); ?>" /></td>
			</tr>

			<tr valign="top">
			<th scope="row">Email</th>
			<td><input type="text" name="parkview_options[option_email]" value="<?php echo esc_attr( $parkview_options['option_email'] ); ?>" /></td>
			</tr>

			<tr valign="top">
			<th scope="row">URL</th>
			<td><input type="text" name="parkview_options[option_url]" value="<?php echo esc_url( $parkview_options['option_url'] ); ?>" /></td>
			</tr>
		</table>

		<p class="submit">
			<input type="submit" class="button-primary"	value="Save Changes" />
		</p>

	</form>
	</div>
<?php
}
