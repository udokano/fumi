<?php
/*
Template Name: お問い合わせ-リスティング用-確認
*/

?>
<?php get_header(2)?>
<div class="page-head mb40">
  <h1 class="tc f-ryu">確認画面</h1></div>

<section class="contact-form">
  <div class="inner gosic">
    <p class="text tc">以下の内容でお間違いがなければ、送信ボタンを押してください。</p>
      <?php echo do_shortcode('[mwform_formkey key="292"]'); ?>
      
  </div>
</section>
<?php get_footer(2);?>
