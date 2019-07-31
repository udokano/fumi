<?php/*
Template Name: お問い合わせ-確認
*/

?>
<?php get_header()?>
<div class="page-head mb40">
  <h1 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/contact/h1_conf_text.png" alt="確認画面"></h1></div>

<section class="contact-form">
  <div class="inner gosic">
    <p class="text tc">以下の内容でお間違いがなければ、送信ボタンを押してください。</p>
      <?php echo do_shortcode('[mwform_formkey key="38"]'); ?>
      
  </div>
</section>
<?php get_footer();?>
