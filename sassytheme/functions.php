<?php 

/**
 * Remove the panels from the customiser
 */
function remove_customizer_settings( $wp_customize ){

    $wp_customize->remove_panel('colors');
  
  }

/**
 * Registers our main footer widget area.
 * 
 */

function sassy_widgets_init() {

    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
 };


 /**
 * Registers Custom header function
 * 
 */

$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);

add_theme_support( 'custom-header' );

/**
 * Hide editor on specific pages.
 *
 */
function hide_editor() {
  // Get the Post ID.
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  // Hide the editor on the page titled 'Homepage'
  $homepgname = get_the_title($post_id);
  if($homepgname == 'Home'){ 
    remove_post_type_support('page', 'editor');
  }
  // Hide the editor on a page with a specific page template
  // Get the name of the Page Template file.
  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  if($template_file == 'custompage.php' || $template_file == 'boxpage.php' || $template_file == 'boxpage-escape.php'  ){ // the filename of the page template
    remove_post_type_support('page', 'editor');
  }
}

/**
 * Show font size in content editor
 *
 */
function wp_editor_fontsize_filter( $buttons ) {
  array_shift( $buttons );
  array_unshift( $buttons, 'fontsizeselect');
  array_unshift( $buttons, 'formatselect');
  return $buttons;
}    
add_filter('mce_buttons_2', 'wp_editor_fontsize_filter');

add_action( 'customize_register', 'remove_customizer_settings', 20 );
add_action('widgets_init', 'sassy_widgets_init');
add_action( 'admin_init', 'hide_editor' );
?>