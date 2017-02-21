<?php get_header(); ?>

	<div class="row">.
			

		<div class="col-sm-8 blog-main">
			<button class="hamburger" id="open_nav_1" onclick="openNav()">&#9776;</button>
		
	
			<?php get_template_part( 'content', get_post_format() ); ?>


		

	</div> <!-- /.row -->

<?php get_footer(); ?>