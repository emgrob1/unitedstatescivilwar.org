<?php
/*
 * Template Name: Commanders
 * @package WordPress
 * @subpackage civilwar
 * @since Version 1.0 
 */

get_header(); ?>

<div id="main-content" class="main-content">
<button class="hamburger" id="open_nav_1" onclick="openNav()">&#9776;</button>
<?php
	if ( is_front_page()) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">		
		<div id="content" class="site-content" role="main">
		
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				endwhile;
			?>
			<!-- organization chart -->
			<div class="tree">
    <ul>
        <li> <a class="generals" value="163">Commanding General Of The Army of Northern Virginia<br/>Robert E. Lee</a>

           <ul>
                                <li> <a class="generals" value="250">1st Corps<br/>Thomas "Stonewall" Jackson</a>
<li> <a class="generals" value="251">2nd Corps<br/>James Longstreet</a>
                           <li> <a class="generals" value="194">3rd Corps<br/>Ambrose Powell Hill</a>
                            </ul>
                               
                        </li>
                    </ul>
                </li>
            </ul>
              </li>
            </ul>
        </li>
    </ul>
</div>
					</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar('menu'); ?> 
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php

get_footer();