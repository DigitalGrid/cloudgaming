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
    <article class="page">
      <h2><?php the_title(); ?></h2>
      <div class="border-line"></div>
      <?php the_content(); ?>
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