<?php
/*
Template Name: 初診料・再診料 
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">初診料・再診料</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="ope-top-desc shoshin gosic">
  <p class="tc">診察料として、初めての方には2,000円<br>
2回目以降の方には1,000円をお支払いいただいてます。</p>
  <ul class="price-box tc">
    <li class="box-size tc">
      <h2 class="">初診料</h2>
      <p class="cp">¥2,000</p>
    </li>
    <li class="box-size tc">
      <h2 class="">再診料</h2>
      <p class="cp">¥1,000</p>
    </li>
  </ul>
</section>
<?php get_footer();?>
