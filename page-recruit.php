<?php/*
Template Name: 採用情報 
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/h1_text.png" alt="ドクター紹介"></h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="recruit-intro bg-p">
  <div class="inner flex al-cent">
    <div class="text box-size">
      <h2 class="ls1">スタッフ募集中</h2>
      <p class="gopsic">美容皮膚科・形成外科のクリニックで私たちと共に、
        患者様に美と笑顔を提供しませんか？</p>
      <a href="#recruit-info" class="gosic ls1">詳細を見る</a> </div>
      
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
      <dd> <span>①月給00万</span><span>①月給00万</span><span>①月給00万</span><span>①月給00万</span> </dd>
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
  
     
    <form class="gosic">
      <dl class="kind">
        <dt>希望職種<span class="ra">必須</span></dt>
        <dd>
          <label>
            <input type="radio" name="医師" class="check">
            <span>医師</span></label>
          <label>
            <input type="radio" name="看護師" class="check">
            <span>看護師</span></label>
          <label>
            <input type="radio" name="受付" class="check">
            <span>受付</span></label>
          <label>
            <input type="radio" name="カウンセラー" class="check">
            <span>カウンセラー</span></label>
        </dd>
      </dl>
      <dl class="">
        <dt>お名前<span class="ra">必須</span></dt>
        <dd>
          <input type="text" name="お名前" placeholder="田中　花子">
        </dd>
      </dl>
        
        
         <dl class="">
        <dt>住所<span class="ra">必須</span></dt>
        <dd>
          <label><input type="text" name="000-0000" class="harf" placeholder="000-0000"></label>
             <label><input type="text" name="000-0000" placeholder="都道府県"></label>
             <label><input type="text" name="000-0000" placeholder="市区町村"></label>
             <label><input type="text" name="000-0000" placeholder="丁目番地"></label>
            
            
            
        </dd>
      </dl>
        
        
         <dl class="">
        <dt>ご年齢<span class="ra">必須</span></dt>
        <dd>
          <input type="text" name="ご年齢" class="harf">
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
        <dt class="vt">志望理由<span class="ra">必須</span></dt>
        <dd class="vt">
          <textarea name="志望理由"></textarea>
        </dd>
      </dl>
        
        <dl class="">
        <dt class="vt">職務経歴<span class="ra">必須</span></dt>
        <dd class="vt">
          <textarea name="職務経歴"></textarea>
        </dd>
      </dl>
        
        <dl class="">
        <dt class="vt">資格</dt>
        <dd class="vt">
          <textarea name="資格"></textarea>
        </dd>
      </dl>
        
        <dl class="">
        <dt class="vt">質問</dt>
        <dd class="vt">
          <textarea name="質問"></textarea>
        </dd>
      </dl>
      <div class="send-wrap">
        <input type="submit" value="確認画面へ" class="send btn">
      </div>
     
    </form>
      
      
        <div class="note tc">※ドメイン指定受信を設定されている方は、<br>
        【@fumibeauty.jp】からの受信をできるよう設定お願いします。</div>
      
      
  </div>
</section>



<?php get_footer();?>
