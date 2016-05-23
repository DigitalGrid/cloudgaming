<?php get_header(); ?>

<?php
if(have_posts()):
  while(have_posts()):
    the_post();?>
    
<div id="outer-single" <?php if( has_post_thumbnail() ) : ?>style="background-image: linear-gradient(rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.95)), url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>')<?php endif; ?>">    
<div class="container outer-content">
<?php if(is_active_sidebar("sidebar-1")): ?>
  <div class="content col-xs-12 col-sm-8">
<?php else: ?>
  <div class="content col-xs-12 col-sm-12">
<?php endif; ?>

    <article class="post" id="post-single">
      <?php if ( has_post_thumbnail() ) : ?>
        <div class="featured-media">
          <?php the_post_thumbnail('post-image'); ?>
        </div> <!-- /featured-media -->
      <?php endif; ?>
      <h2><?php the_title(); ?></h2>
      <p class="post-info">
        <?php the_time("F j, Y - H:i"); ?> | by
        <?php the_author_posts_link(); ?> 
         | posted in <?php the_category(', ');?>
      </p>
      <p><?php the_content(); ?></p>
    </article>
    <?php
  endwhile;
else:
?>
  <p>No content found!</p>
<?php
endif;
?>


</div> <!-- inner content -->
<?php get_sidebar() ?>
</div> <!-- outer content -->
</div> <!-- outer single -->

<?php get_footer(); ?>