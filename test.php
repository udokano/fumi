<?php
/*
Template Name: サブリピートテスト
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">さぶテスト</h1>
  <?php echo breadcrumb_func(); ?> </div>


<section class="ope-intro bg-cp" id="area4">
  <div class="inner">

  <?php if (have_rows('test')): ?>
<?php while (have_rows('test')): the_row(); ?>

<?php if (have_rows('re')): ?>
<?php while (have_rows('re')): the_row(); ?>
<img src="<?php the_sub_field('tet');?>"><img src="<?php the_sub_field('tet_f');?>" alt="">


<?php endwhile; ?>
<?php the_sub_field('saa');?>

<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

  </div>
</section>


<?php get_footer();?>
