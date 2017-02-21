<?php get_header(); ?>

<div id="main-content" class="main-content">
	<div class="main-content-inner">
<h3 class="breadcrumb"><?php if (function_exists('qt_custom_breadcrumbs')) qt_custom_breadcrumbs(); ?></h3>

		<?php if ( have_posts() ) : 

			while ( have_posts() ) : the_post(); 
	  
	  		get_template_part( 'content', 'page' ); 

	  		if ( comments_open() ) comments_template(); 

	  	endwhile; else: 
		  	_e('No posts were found. Sorry!', 'hereyago'); 
		 	endif; ?>

	</div>
</div><!-- #main-content" -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
