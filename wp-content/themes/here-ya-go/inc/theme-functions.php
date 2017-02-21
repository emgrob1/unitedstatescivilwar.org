<?php

/**
 * Custom template tag for displaying meta information on posts & pages
 * Post date, Author, Comment Link
 * Appears in content.php 
 */

if ( ! function_exists( 'hereyago_entry_meta' ) ) {
	function hereyago_entry_meta() {

		$post_format = get_post_format();

		echo '<div class="entry-meta clearfix">';
		echo '<span class="meta-element post-format post-format-' . $post_format . '"><a href="' . esc_url( get_post_format_link( $post_format ) ) . '">' . $post_format . '</a></span>';
		printf( '<span class="meta-element entry-date"><a href="%1$s" rel="bookmark"><time datetime="%2$s">%3$s</time></a></span> <span class="meta-element byline"><span class="author vcard"><a class="url fn n" href="%4$s" rel="author">%5$s</a></span></span>',
			esc_url( get_permalink() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			get_the_author()
		);
		comments_popup_link( 'No comments', ' 1 Comment', ' % Comments', 'meta-element comment-link', ' Comments Disabled' );
		echo '</div>';
	}
}

/**
 * Custom page navigation template tag for archives, categories etc. 
 * Appears in index.php, archive.php, category.php, author.php
 */

if ( ! function_exists( 'hereyago_page_nav' ) ) {
	function hereyago_page_nav() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		echo '<div class="pages-navigation clearfix">';
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
		echo '</div>';
	}
}

/**
 * Custom post navigation template tag for single posts & pages
 * Appears in content.php
 */

if ( ! function_exists( 'hereyago_post_nav' ) ) {
	function hereyago_post_nav() {
	  ?>
	  <nav class="post-navigation clearfix"> 
	  	<span class="post-nav-link previous-post">
				<?php previous_post_link('%link', __( '<span class="previous-post-label">' . __( 'Previous Post', 'hereyago' ) . '</span><br />%title', 'hereyago' ) ); ?>
			</span>
			<span class="post-nav-link next-post">
				<?php next_post_link('%link', __( '<span class="next-post-label">' . __( 'Next Post', 'hereyago' ) . '</label><br />%title', 'hereyago' ) ); ?>
			</span>
		</nav>
		<?php
	}
}

/**
 * Custom post thumbnail template tag
 * Appears in content.php
 */

if ( ! function_exists( 'hereyago_post_thumbnail' ) ) {
	function hereyago_post_thumbnail() {

		global $post;
		$post_thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

		if ( post_password_required() || ! has_post_thumbnail() ) {
			return;
		}
		?>
		<div class="entry-image clearfix">
		  <?php 
		  if ( ! is_singular() ) {
				echo '<a href="' . get_permalink() . '">';
				echo get_the_post_thumbnail($post->ID, 'post-image',  array('class' => 'responsive'));
				echo '</a>';
			} else {
				echo '<a href="' . $post_thumbnail_url . '" data-rel="prettyPhoto" title="' . get_the_title() . '">';
				echo get_the_post_thumbnail($post->ID, 'post-image',  array('class' => 'responsive'));
				echo '</a>';
			}
			?>
		</div>
	<?php
	}
}

