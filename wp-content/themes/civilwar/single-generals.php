
<?php
 /*
 
   Template Name: Generals Custom
   Description: Page template to display hotels custom post types
    
 */
 
 
?>
<div id="primary">
 
    <div id="content" role="main">

   	<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					
				endwhile;
			?>
    </div>
    
</div>
 
