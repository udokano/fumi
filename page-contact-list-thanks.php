<?php
/*
Template Name: お問い合わせ-リスティング用-サンクス
*/

?>
<?php get_header(2)?>
<div class="page-head mb40">
  <h1 class="tc f-ryu">送信完了</h1>
</div>
<section class="contact-form">
  <div class="inner gosic">
    <p class="text tc">この度は、当クリニックへお問い合わせいただき誠にありがとうございます。<br>

2〜3診療日以内に折り返しご連絡いたしますので<br>
今しばらくお待ちくださいませ。</p>
      <?php echo do_shortcode('[mwform_formkey key="292"]'); ?>
      
  </div>
</section>
<?php get_footer(2);?>
