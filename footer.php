<footer class="pages">
    
    
    <div class="pages-footer-box flex al-cent">
    
        <div class="f-logo">
        
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/footer_logo.png" alt="ふみビューティークリニック梅田">
        
        </div>
        
        <div class="left">
            
            <p class="gosic logo-info">ふみビューティークリニック梅田<span class="cw">美容皮膚科・形成外科・皮膚科</span></p>
        
            <a href="tel:0663722323" class="tel gd mb20">06-6372-2323</a>
            
            <p class="gosic mb20">受付時間 平日 10:00~18:00 土 10:00~17:00<br>
                定休日 木・日・祝</p>
            
            <p class="gosic">〒530-0012　大阪市北区芝田2丁目8-33 芝田ビル3F</p>
        
        </div>
    
    </div>
    
    
    <div class="inner flex">
      <nav class="navi pc-dis">
        <ul class="flex gosic">
          <li><a href="<?php echo home_url( '/' ); ?>concept">当院について</a></li>
          <li><a href="#">施術・料金</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>access">アクセス</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>doctor">ドクター紹介</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>recruit">採用情報</a></li>
          <li><a href="https://fumibeauty.reserve.ne.jp/" target="_blank">来院予約</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>contact">お問合わせ</a></li>
        </ul>
      </nav>
      <p class="copy cp"><small>fumi beauty cinic(ふみビューティクリニック梅田)美容皮膚科・形成外科・皮膚科<br>
Copyright(C) fumi beauty clinic All Rights Reserved.</small></p>
    </div>
  </footer>
    
<?php if ( wp_is_mobile() ) : ?>
    
    <nav class="hambargar">
        
        <ul>
             <li class="menu-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/menu_logo.png" alt="menu-logo"></li>
      <li><a href="<?php echo home_url( '/' ); ?>concept">当院について</a></li>
      <li class="parent"><a href="#" id="ac-txt">施術・料金</a>
            
        <ul class="child" id="ac">
            <li><a href="<?php echo home_url( '/' ); ?>tarumi">たるみ治療</a></li><li><a href="<?php echo home_url( '/' ); ?>siwa">しわ治療</a></li>
            <li><a href="<?php echo home_url( '/' ); ?>kogao">小顔治療</a></li><li><a href="<?php echo home_url( '/' ); ?>nose-lift">鼻の糸</a></li>
            <li><a href="<?php echo home_url( '/' ); ?>keiseigeka">形成外科治療</a></li><li><a href="<?php echo home_url( '/' ); ?>medikaru">美肌治療</a></li>
            <li class="mb0"><a href="<?php echo home_url( '/' ); ?>shoshin">初診料・再診料</a></li>
        </ul>    
            
            
            
        </li>
      <li><a href="<?php echo home_url( '/' ); ?>access">アクセス</a></li>
      <li><a href="<?php echo home_url( '/' ); ?>doctor">ドクター紹介</a></li>
          <li class=""><a href="<?php echo home_url( '/' ); ?>recruit">採用情報</a></li>
      <!--<li><a href="https://fumibeauty.reserve.ne.jp/" target="_blank">来院予約</a></li>-->
      <li class="mb0"><a href="<?php echo home_url( '/' ); ?>contact">お問合わせ</a></li>
            

        </ul>
    
    
    
    </nav>
    
<?php else: ?>
<?php endif; ?>
    
    
  <?php if ( wp_is_mobile() ) : ?>
  <div class="fix-bottom">
    <ul class="flex gosic al-cent">
      <li class="box-size"><span href="#" class="cw menu-open">メニュー</span></li>
      <li class="box-size"><a href="https://fumibeauty.reserve.ne.jp/" class="cw" target="_blank">予約</a></li>
      <li class="box-size"><a href="tel:0663722323" class="cw">TEL</a></li>
    </ul>
  </div>
  <?php else: ?>
  <?php endif; ?>
  <a href="#" class="page-top bounce"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_up.svg" alt="scrool-up"></a> </div>
<!--WRAPPER END--> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

  <script>
  
<?php wp_footer(); ?>
</body>
</html>