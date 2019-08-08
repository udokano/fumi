<?php/*
Template Name: お問い合わせ 
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">お問合せ</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="contact-tel">
  <div class="inner">
    <h2 class="tc f-ryu">お電話でのお問い合わせ</h2>
    <p class="tel tc cp"><a href="#" class="cp" style="background: none; padding: 0;">0120-000-0000</a></p>
      <?php if ( wp_is_mobile() ) : ?>
    <p class="tc gosic">受付時間 : 10:00 ~ 20:00<br>
休診日 : 木曜日</p>
<?php else: ?>
    <p class="tc gosic">受付時間 : 10:00 ~ 20:00　　休診日 : 木曜日</p>
<?php endif; ?>

  </div>
</section>
<section class="contact-form">
  <div class="inner gosic">
    <p class="text">お肌・お顔・毛髪・痩身・アンチエイジングなど、治療・施術の前に疑問点やご相談がありましたら、お気軽にお問い合わせください。
      安心して治療・施術を受けていただけるよう、どんな小さな疑問点でも医師がお応えします。
      下記のお問い合わせフォームに必要事項をご入力の上送信願います。
      お電話をご希望の方は上記の電話番号へおかけください。</p>
    <div class="contact-flow"> <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow.jpg" alt="流れ"> </div>
      <?php echo do_shortcode('[mwform_formkey key="38"]'); ?>
       <div class="note tc">※ドメイン指定受信を設定されている方は、<br>
        【@fumibeauty.jp】からの受信をできるよう設定お願いします。</div>
  <!--  <form>
      <dl class="kind">
        <dt>お問い合わせの種類<span class="ra">必須</span></dt>
        <dd>
          <label>
            <input type="checkbox" name="注入治療について" class="check">
            <span>注入治療について</span></label>
          <label>
            <input type="checkbox" name="痩身機器について" class="check">
            <span>痩身機器について</span></label>
          <label>
            <input type="checkbox" name="料金について" class="check">
            <span>料金について</span></label>
          <label>
            <input type="checkbox" name="求人について" class="check">
            <span>求人について</span></label>
          <label>
            <input type="checkbox" name="その他" class="check">
            <span>その他</span></label>
        </dd>
      </dl>
      <dl class="">
        <dt>お名前<span class="ra">必須</span></dt>
        <dd>
          <input type="text" name="お名前">
        </dd>
      </dl>
      <dl class="">
        <dt>電話番号<span class="ra">必須</span></dt>
        <dd>
          <input type="text" name="電話番号">
        </dd>
      </dl>
      <dl class="">
        <dt>メールアドレス<span class="ra">必須</span></dt>
        <dd>
          <input type="text" name="メールアドレス">
        </dd>
      </dl>
      <dl class="">
        <dt>ご年齢<span class="ra">必須</span></dt>
        <dd>
          <input type="text" name="ご年齢">
        </dd>
      </dl>
      <dl class="">
        <dt class="vt">ご相談内容</dt>
        <dd class="vt">
          <textarea name="ご相談内容"></textarea>
        </dd>
      </dl>
      <div class="send-wrap">
        <input type="submit" value="確認画面へ" class="send btn">
      </div>
     
    </form>-->
  </div>
</section>
<?php get_footer();?>
