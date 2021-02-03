<?php

/* Template Name: PFC
 */

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">PFC治療</h1>
  <?php echo breadcrumb_func(); ?> </div>

  <div class="container">
<main>
<?php while (have_posts()): the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
</main>

<?php get_footer();?>
