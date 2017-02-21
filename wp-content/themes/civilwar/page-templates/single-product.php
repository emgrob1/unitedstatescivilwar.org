
<?php
 /*
 
   Template Name: Hotels
   Description: Page template to display hotels custom post types
    
 */
 
 
get_header(); ?>
 
<div id="primary">
 
    <div id="content" role="main">
 
<header> <?php the_title( '<h3>', '</h3>' ); ?> </header>
    single-product.php
    <?php
    
    $hotelspost = array( 'post_type' => 'product', );
    $loop = new WP_Query( $hotelspost );
    
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
 
    <?php endwhile; ?>
    
    </div>
    
</div>
 
<?php get_footer(); ?>