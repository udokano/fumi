<?php
/*
Template Name: Bplus掲載
*/

?>
<?php get_header(); ?>
<div class="page-head">
  <h1 class="tc f-ryu">仕事を楽しむための<br class="sp">webマガジン<br class="sp">"Bplus"掲載</h1>
  <?php echo breadcrumb_func(); ?> </div>


  <style>
  .bplus {

  }

  .bplus__img {
      max-width: 800px;
      margin: 0 auto;
  }
  </style>

<section class="bplus">
  <div class="inner-box2">

            <div class="bplus__img">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top/int_pc.jpg" alt="記事スクショ" class="pc">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/top/int_sp.jpg" alt="記事スクショSP" class="sp">
            </div>
  </div>
</section>

<?php get_footer(); ?>
