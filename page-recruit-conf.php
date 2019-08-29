<?php
/*
Template Name: 採用情報-確認 
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">確認画面</h1>
  </div>





<section class="contact-form recruit-form">
  <div class="inner">
      
      
    <p class="text tc">以下の内容でお間違いがなければ、送信ボタンを押してください。</p>
  
       <?php echo do_shortcode('[mwform_formkey key="72"]'); ?>
      
      
  </div>
</section>



<?php get_footer();?>
