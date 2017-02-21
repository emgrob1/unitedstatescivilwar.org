<?php 

/**
 * Setup the theme and define some custom template tags 
 * Functions are prefixed with 'hereyago', the boilerplate theme Here Ya Go is built upon
 *
 * @package  Here Ya Go
 * @since  Here Ya Go 1.0
 */

// Set content width
if ( ! isset( $content_width ) ) {
	$content_width = 1170;
}

// Theme setup
if ( ! function_exists( 'hereyago_theme_setup' ) ) {
	function hereyago_theme_setup() {
		
		// Make theme available for translation
		load_theme_textdomain( 'hereyago', get_template_directory_uri() . '/lang' );
		
		// Add support for post thumbnails
		add_theme_support( 'post-thumbnails' );

		// Add new image sizes
 		add_image_size( 'post-image', 1200, 700, true );
 		add_image_size( 'slider-image', 1200, 600, true );

		// Add RSS feed links to head
		add_theme_support( 'automatic-feed-links' );
		
		// Switch core search form, comment form and comment list to ouput valid HTML5
		add_theme_support( 'html5', 
			array(
				'search-form', 
				'comment-form', 
				'comment-list',
			) 
		);

		// This theme uses its own gallery styles.
		add_filter( 'use_default_gallery_style', '__return_false' );
		
		// Register nav menus
		register_nav_menus( 
			array(
				'primary'   => __( 'Primary', 'hereyago' ),
			) 
		);		
	}
}
add_action( 'after_setup_theme', 'hereyago_theme_setup' );

// Register Sidebars
if ( ! function_exists( 'hereyago_register_sidebars' ) ) {
	function hereyago_register_sidebars() {
		register_sidebar(array(
			'name' => 'Right Sidebar',
			'id' => 'right-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="heading">',
			'after_title' => '</h3>',
		));
		register_sidebar(array(
			'name' => 'Postscript',
			'id' => 'postscript-sidebar',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="heading">',
			'after_title' => '</h3>',
		));
	}
}
add_action( 'widgets_init', 'hereyago_register_sidebars' );

// Enqueue scripts & styles
if ( ! function_exists( 'hereyago_scripts' ) ) {
	function hereyago_scripts(){

		wp_enqueue_style( 'hereyago-style', get_stylesheet_uri() );

		wp_register_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array( 'jquery' ), '2.7.1', false );
		wp_register_script( 'prettyPhoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', array( 'jquery' ), '3.1.5', true );
		wp_register_script( 'fitvids', get_template_directory_uri() . '/assets/js/jquery.fitvids.js', array( 'jquery' ), '1.0.3', true );
		wp_register_script( 'doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', array( 'jquery' ), '1.0.0', true );
		wp_register_script( 'baseline', get_template_directory_uri() . '/assets/js/baseline.js', array( 'jquery' ), '1.0.0', true );
		wp_register_script( 'flexslider', get_template_directory_uri() . '/flexslider/jquery.flexslider.js', array( 'jquery' ), '2.2.2', false );
		wp_register_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '1.0.0', true );
		wp_register_script( 'hereyago', get_template_directory_uri() . '/assets/js/hereyago.js', array( 'jquery' ), '1.0.0', true );

		wp_enqueue_script( 'modernizr');
		wp_enqueue_script( 'prettyPhoto');
		wp_enqueue_script( 'fitvids');
		wp_enqueue_script( 'doubletaptogo');
		wp_enqueue_script( 'baseline');
	 	wp_enqueue_script( 'flexslider');
	 	wp_enqueue_script( 'imagesloaded');
		wp_enqueue_script( 'hereyago');

		if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );

	}
}
add_action( 'wp_enqueue_scripts', 'hereyago_scripts' );

// Enqueue conditional IE styles for fixed width layout in IE7/IE8

if ( ! function_exists( 'hereyago_ie_styles' ) ) {
	function hereyago_ie_styles() {
	global $is_IE;
		if ( $is_IE ) {
	  	echo '<!--[if lt IE 9]>';
		  echo '<link rel="stylesheet" href="'. get_template_directory_uri() . '/assets/css/ie.css" type="text/css" media="all" />';
		  echo '<![endif]-->';
		}
	}
}
add_action( 'wp_head', 'hereyago_ie_styles' );

// Enqueue Google fonts
 
if ( ! function_exists( 'hereyago_google_fonts' ) ) {
	function hereyago_google_fonts() {
		if ( !is_admin() ) {
			wp_register_style( 'googleFont', '//fonts.googleapis.com/css?family=Holtwood+One+SC|Roboto:400,900|Changa+One' );
			wp_enqueue_style( 'googleFont' );
		}
	}
}
add_action('wp_enqueue_scripts', 'hereyago_google_fonts');

// Enqueue Font Awesome

if ( ! function_exists( 'hereyago_font_awesome' ) ) {
	function hereyago_font_awesome() {
		if ( ! is_admin() ) {
			wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', null, '4.0.3' );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'hereyago_font_awesome', 99 );

//Enqueue Scripts
function displayIn(){
wp_register_script('display',get_template_directory_uri().'/js/displayInSideBar.js', array('jquery'),'1.01');
	 wp_enqueue_script('display');
};
add_action('wp_enqueue_scripts','displayIn');


function register_jquery(){
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
	
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts','register_jquery');

//this goes in functions.php near the top
function my_scripts_method() {
// register your script location, dependencies and version
   wp_register_script('custom_script', get_template_directory_uri() . '/js/jquery_test.js',   array('jquery'),   '1.0' );
 // enqueue the script
  wp_enqueue_script('custom_script');
  }
add_action('wp_enqueue_scripts', 'my_scripts_method');
/**
 * Improve the title element
 * @param  string $title Default title
 * @param  string $sep Seperator 
 * @return The filtered title
 */

if ( ! function_exists( 'hereyago_wp_title' ) ) {
	function hereyago_wp_title( $title, $sep ) {
		global $paged, $page;
		$sep = " | ";

		if ( is_feed() ) {
			return $title;
		}

		// Add the site name.
		$title .= get_bloginfo( 'name' );

		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title = "$title $sep $site_description";
		}

		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 ) {
			$title = "$title $sep " . sprintf( __( 'Page %s', 'hereyago' ), max( $paged, $page ) );
		}

		return $title;
	}
}
add_filter( 'wp_title', 'hereyago_wp_title', 10, 2);

//breadcrumbs
function qt_custom_breadcrumbs() {
  $showOnHome = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter = '&raquo;'; // delimiter between crumbs
  $home = 'Home'; // text for the 'Home' link
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
  global $post;
  $homeLink = get_bloginfo('url');
  if (is_home() || is_front_page()) {
    if ($showOnHome == 1) echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
  } else {
    echo '<div id="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
    if ( is_category() ) {
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) echo get_category_parents($thisCat->parent, TRUE, ' ' . $delimiter . ' ');
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        echo $cats;
        if ($showCurrent == 1) echo $before . get_the_title() . $after;
      }
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
    } elseif ( is_page() && !$post->post_parent ) {
      if ($showCurrent == 1) echo $before . get_the_title() . $after;
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) {
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs)-1) echo ' ' . $delimiter . ' ';
      }
      if ($showCurrent == 1) echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
    echo '</div>';
  }
} // end qt_custom_breadcrumbs()


// Restructure Comments 

if ( ! function_exists( 'hereyago_comment' ) ) {
	function hereyago_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;
		extract($args, EXTR_SKIP);
	
		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
		?>
		
		<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
		<?php if ( 'div' != $args['style'] ) : ?>
		<div id="div-comment-<?php comment_ID() ?>" class="comment-body clearfix">
		<?php endif; ?>
			
			<div class="comment-avatar pull-left">
				<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
			</div>
			
			<div class="comment-content">
				<div class="comment-meta commentmetadata">
					<a class="comment-author" href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a>
					<a class="comment-date" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"> 
					<?php printf( __( '%1$s at %2$s', 'hereyago' ), get_comment_date(),  get_comment_time()) ?></a><span class="comment-edit"><?php edit_comment_link( __('[Edit]', 'hereyago'),'  ','' ); ?></span>
					<div class="comment-reply pull-right"><?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>  
				</div>
		
				<?php comment_text() ?> 
				
				<?php if ( 'div' != $args['style'] ) : ?>
					
				<?php if ($comment->comment_approved == '0') : ?>
						<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'hereyago' ) ?></em>
						<br />
				<?php endif; ?> 
			</div>
				
		</div>
		<?php endif; 
	}
}

// Body Classes 
 
if ( ! function_exists( 'hereyago_body_classes' ) ) {
	function hereyago_body_classes($classes) {
		if ( ! is_active_sidebar( 'right-sidebar' ) || is_page_template( 'page-templates/full-width.php' ) ) {
			$classes[] = 'full-width';
		} 

		if ( is_active_sidebar( 'postscript-sidebar' ) ) {
			$classes[] = 'postscript-sidebar';
		} 

		if ( is_singular() && ! is_front_page() ) {
			$classes[] = 'singular';
		}	

		return $classes;
	}
}
add_filter('body_class', 'hereyago_body_classes');


// Make Gallery default to link file so that prettyPhoto works properly
if ( ! function_exists( 'hereyago_gallery_shortcode' ) ) {
	function hereyago_gallery_shortcode( $atts ) {
	    $atts['link'] = 'file';
	    return gallery_shortcode( $atts );
	}
}
add_shortcode( 'gallery', 'hereyago_gallery_shortcode' );

// Get tag ID
function get_tag_id_by_name( $tag_name ) {
	global $wpdb;
	return $wpdb->get_var( "SELECT term_id FROM " . $wpdb->terms . " WHERE `name` =  '" . $tag_name . "'" );
}

// Add custom template tags
require get_template_directory() . '/inc/theme-functions.php';

require get_template_directory() . '/inc/theme-options.php';



