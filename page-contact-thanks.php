<?php/*
Template Name: お問い合わせ-サンクス
*/

?>
<?php get_header()?>
<div class="page-head mb40">
  <h1 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/contact/h1_thanks_text.png" alt="送信完了"></h1>
</div>
<section class="contact-form">
  <div class="inner gosic">
    <p class="text tc">この度は、当クリニックへお問い合わせいただき誠にありがとうございます。<br>

2〜3診療日以内に折り返しご連絡いたしますので<br>
今しばらくお待ちくださいませ。</p>
      <?php echo do_shortcode('[mwform_formkey key="38"]'); ?>
      
  </div>
</section>
<?php get_footer();?>
