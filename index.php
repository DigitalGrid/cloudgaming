<?php get_header(); ?>

<div class="container outer-content">
<?php if(is_active_sidebar("sidebar-1")): ?>
  <div class="content col-xs-12 col-sm-8">
<?php else: ?>
  <div class="content col-xs-12 col-sm-12">
<?php endif; ?>

<?php
if(have_posts()):
  while(have_posts()):
    the_post();?>
    <article class="post">
      <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h2>
      <p class="post-info">
        <?php the_time("F j, Y - H:i"); ?> | by
        <?php the_author_posts_link(); ?> | posted in
        <?php the_category; ?>
      </p>
      <?php if(is_single()): ?>
      <p><?php the_content(); ?></p>
      <?php else: ?>
      <p><?php the_excerpt(); ?></p>
      <?php endif; ?>
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


<?php get_footer(); ?>
