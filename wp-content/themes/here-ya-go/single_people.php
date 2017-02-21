<?php 
/*
 * Template Name: single_people
 * 
 */


?>

<?php

?>


      <div id="content">
       
        <?php if (have_posts()) :?>
        <?php while (have_posts()) : the_post();?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
         <h1 class="title"><?php the_title();?></h1>
      
          <div class="entry">
            <?php the_content('<p class="more">Read more &raquo;</p>'); ?>
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));?>
          </div>

        </div>
        <?php endwhile; ?>
        
        <?php else:?>
        
        <div class="notfound">
        <h1>404 Not Found</h1>
        <?php get_search_form();?>
        </div>
        
        <?php endif;?>
       
        <?php if('open' == $post->comment_status):?>
      	<?php //comments_template(); ?>
      	<?php endif; ?>

      </div>
        <?php //get_sidebar('info');?>
      <?php //include 'sidebar-info.php'; ?>



<?php //include 'footer.php'; ?>