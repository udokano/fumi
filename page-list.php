<?php
/*
Template Name: 製剤一覧
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu"><?php the_title(); ?></h1>
  <?php echo breadcrumb_func(); ?> </div>
<?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<!-- ここにループ内容 -->
<?php endwhile; ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>
<?php else: ?>
<!-- 投稿が無い場合の内容 -->
<h2 class="tc">ただいま内容の準備中です。</h2>
<?php endif; ?>

<?php get_footer();?>
