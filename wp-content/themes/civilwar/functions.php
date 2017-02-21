<?php
/**
 * _s functions and definitions
 *
 * @package civilwar
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 730; /* pixels */
}

// 
// function mobiel_informatie_widgets_init() {
    // register_sidebar( array(
        // 'name'          => __( 'Sidebar next to content', 'civilwar' ),
        // 'id'            => 'sidebar-menu',
        // 'description'   => __( 'Wordt naast een single post weergegeven.', 'civilwar' ),
        // 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        // 'after_widget'  => '</aside>',
        // 'before_title'  => '<h3 class="widget-title">',
        // 'after_title'   => '</h3>',
    // ) );
// }
// add_action( 'widgets_init', 'mobiel_informatie_widgets_init' );

//Register your sidebar
add_action( 'widgets_init', 'my_widgets_init' );
function my_widgets_init() {
    register_sidebar( array(
    'name' => __( 'Sidebar Menu', 'curioso' ),
    'id' => 'sidebar-menu',
    'description' => 'An optional widget area for my sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3>',
    'after_title' => '</h3>',
 ) );
}
//for pages
add_filter( 'page_template', 'My_custom_page_template' );
function My_custom_page_template( $page_template )
{
    if ( is_page( 'my-custom-page-slug' ) ) {
        $page_template = 'page-templates/home_template.php';
    }
    return $page_template;
}

/*
 * Custom Post Types
 * Generals
 */

function my_custom_post_generals() {
  $labels = array(
    'name'               => _x( 'Generals', 'post type general name' ),
    'singular_name'      => _x( 'General', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New General' ),
    'edit_item'          => __( 'Edit General' ),
    'new_item'           => __( 'New General' ),
    'all_items'          => __( 'All Generals' ),
    'view_item'          => __( 'View General' ),
    'search_items'       => __( 'Search General' ),
    'not_found'          => __( 'No Generals found' ),
    'not_found_in_trash' => __( 'No Generals found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Generals'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Stores the generals who fought during the American Civil War',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
    'has_archive'   => false,
  );
  register_post_type( 'generals', $args ); 
}
add_action( 'init', 'my_custom_post_generals' );


/*
 * Custom Post Types
 * Battle Maps
 */

function my_custom_post_battle_map() {
  $labels = array(
    'name'               => _x( 'Battle Maps', 'post type general name' ),
    'singular_name'      => _x( 'Battle Map', 'post type singular name' ),
    'add_new'            => _x( 'Add Battle Map', 'battle_map' ),
    'add_new_item'       => __( 'Add New Battle Map' ),
    'edit_item'          => __( 'Edit Battle Map' ),
    'new_item'           => __( 'New Battle Map' ),
    'all_items'          => __( 'All Battle Maps' ),
    'view_item'          => __( 'View Battle Map' ),
    'search_items'       => __( 'Search Battle Maps' ),
    'not_found'          => __( 'No Battle Maps found' ),
    'not_found_in_trash' => __( 'No Battle Maps found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Battle Map'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Stores the Battle Maps of the American Civil War',
    'public'        => true,
    'menu_position' => 6,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
    'has_archive'   => false,
  );
  register_post_type( 'battle_map', $args ); 
}
add_action( 'init', 'my_custom_post_battle_map' );



/*
 * Custom Post Types
 * Weapons
 */

function my_custom_post_weapons() {
  $labels = array(
    'name'               => _x( 'Weapons', 'post type general name' ),
    'singular_name'      => _x( 'Weapons', 'post type singular name' ),
    'add_new'            => _x( 'Add Weapons', 'weapons' ),
    'add_new_item'       => __( 'Add New Weapons' ),
    'edit_item'          => __( 'Edit Weapon' ),
    'new_item'           => __( 'New Weapon' ),
    'all_items'          => __( 'All Weapons' ),
    'view_item'          => __( 'View Weapons' ),
    'search_items'       => __( 'Search Weapons' ),
    'not_found'          => __( 'No Weapons found' ),
    'not_found_in_trash' => __( 'No Weapons found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Weapons'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Stores the Weapons of the American Civil War',
    'public'        => true,
    'menu_position' => 7,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
    'has_archive'   => false,
  );
  register_post_type( 'weapons', $args ); 
}
add_action( 'init', 'my_custom_post_weapons' );


