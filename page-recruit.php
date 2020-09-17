<?php
/*
Template Name: 採用情報
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">採用情報</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="recruit-intro bg-p">
  <div class="inner al-cent">


  <div class="text box-size">

    <h2 class="tc">“現在、募集しておりません”</h2>

  <p class="tc mb0">
  当院にご関心をお寄せいただき、誠にありがとうございます。<br class="pc">大変申し訳ありませんが、全ての職種について現在、求人募集は行っておりません。<br class="pc">募集の際は当ページにてご案内いたします。
  </p>



  </div>


<style>

/****************


現在は、募集してにないので非表示


******************/

*/


    <div class="text box-size">
      <h2 class="ls1">スタッフ募集中</h2>
      <p class="gopsic">美容皮膚科・形成外科のクリニックで私たちと共に、
        患者様に美と笑顔を提供しませんか？</p>
          <!--   <a href="#recruit-info" class="gosic ls1">詳細を見る</a>-->
    </div>

      <div class="thumb">
          <img src="<?php echo get_template_directory_uri(); ?>/img/recruit/thumb01.jpg" alt="サムネイル">

      </div>


  </div>
</section>
<section class="recruit-info" id="recruit-info">
  <div class="inner">
    <h2 class="ls1 tc">募集要項</h2>
    <dl class="gosic">
      <dt>募集職種</dt>
      <dd> <span>①医師</span><span>②看護師</span><span>③受付</span><span>④カウンセラー</span> </dd>
    </dl>
    <dl class="gosic">
      <dt>給与</dt>
      <dd> お問い合わせください<!--<span>①月給00万</span><span>①月給00万</span><span>①月給00万</span><span>①月給00万</span> --></dd>
    </dl>
    <dl class="gosic">
      <dt>休日</dt>
      <dd>完全週休2日制 </dd>
    </dl>

        <dl class="gosic">
      <dt>勤務地</dt>
      <dd><span>〒530-0012</span> <span>大阪市北区芝田2丁目8-33 芝田ビル3F</span></dd>
    </dl>


      <dl class="gosic">
      <dt>資格</dt>
      <dd><span>①医師免許</span> <span>②看護師</span> </dd>
    </dl>
      <dl class="gosic">
      <dt>待遇</dt>
      <dd>昇給年１回（査定）／賞与年１回（業績による）／各種社会保険／
各種手当（役職・CS）／制服貸与／定期健康診断 </dd>
    </dl>
  </div>
</section>



<section class="contact-form recruit-form">
  <div class="inner">

      <h2 class="tc ls1">エントリーフォーム</h2>


    <p class="text tc">以下のフォームの必要事項をご記入の上<br>
お申し込みください<br>
採用担当者より折り返しご連絡いたします。</p>
    <div class="contact-flow"> <img src="<?php echo get_template_directory_uri(); ?>/img/contact/flow.jpg" alt="流れ"> </div>

       <?php echo do_shortcode('[mwform_formkey key="72"]'); ?>


        <div class="note tc">※ドメイン指定受信を設定されている方は、<br>
        【@fumibeauty.jp】からの受信をできるよう設定お願いします。</div>



*/
 </style>

 </div>
</section>


<?php get_footer();?>
