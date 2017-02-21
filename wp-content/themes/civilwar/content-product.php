
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
products

<?php
  $hotelspost = array( 'post_type' => 'product', );
    $loop = new WP_Query( $hotelspost );
    
    ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post();?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
 
    <?php endwhile; ?>
?>


    <?php
    if ( is_single() ) : 
      the_title( '<h1 class="entry-title page"></h1>' ); 
    else:
     the_title( '<h2 class="entry-title page"><a href="" rel="bookmark">', '</a></h2>' );
    endif;
    ?>
    
    <div class="entry-content">
      <?php
      if ( is_search() ):
        the_excerpt();
      else: 
        the_content( __('Continue reading...','hereyago') ); 
        wp_link_pages( array(
          'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'hereyago' ) . '</span>',
          'after'       => '</div>',
          'link_before' => '<span>',
          'link_after'  => '</span>',
        ) );
      endif; 
      ?>
    </div>

    <?php //edit_post_link( __( 'Edit', 'hereyago' ), '<span class="edit-link">', '</span>' ); ?>

</article><!-- #post-## -->

