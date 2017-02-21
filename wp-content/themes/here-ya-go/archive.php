<?php get_header(); ?>

<div id="main-content" class="main-content">
	<div class="main-content-inner">

		<?php if ( have_posts() ) : ?> 

			<h1 class="page-title">
				<?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'hereyago' ), get_the_date() );

					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'hereyago' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'hereyago' ) ) );

					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'hereyago' ), get_the_date( _x( 'Y', 'yearly archives date format', 'hereyago' ) ) );

					else :
						_e( 'Archives', 'hereyago' );

					endif;
				?>
			</h1>

			<?php while ( have_posts() ) : the_post(); 
	  
	  		get_template_part('content', get_post_format()); 

	  		if ( comments_open() ) comments_template(); 

	  	endwhile; else: 
		  	_e('No posts were found. Sorry!', 'hereyago'); 
		 	endif; 

		 	hereyago_page_nav(); ?>
	</div>
</div><!-- #main-content" -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
