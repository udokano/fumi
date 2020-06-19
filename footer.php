<footer class="pages">
    <div class="pages-footer-box flex al-cent">
        <div class="f-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/footer_logo_re.png?1587441" alt="ふみビューティークリニック梅田">
        </div>

        <div class="left">
            <p class="gosic logo-info">ふみビューティークリニック梅田<span class="cw">美容皮膚科・形成外科・皮膚科</span></p>
            <a href="tel:0663722323" class="tel mb20">06-6372-2323</a>
            <p class="gosic mb20">受付時間 平日 10:00~18:00 土 10:00~17:00<br>
                定休日 木・日・祝</p>
            <p class="gosic">〒530-0012　大阪市北区芝田2丁目8-33 芝田ビル3F</p>
        </div>
    </div>


    <div class="inner flex">
      <nav class="navi pc-dis">
        <ul class="flex gosic">
          <li><a href="<?php echo home_url('/'); ?>concept">当院について</a></li>
          <li><a href="<?php echo home_url('/'); ?>#bg3">施術・料金</a></li>
          <li><a href="<?php echo home_url('/'); ?>access">アクセス</a></li>
          <li><a href="<?php echo home_url('/'); ?>doctor">ドクター紹介</a></li>
              <li><a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank">院長ブログ</a></li>
               <li><a href="<?php echo home_url('/');?>case-list" class="c_gray">症例写真</a></li>
          <li><a href="https://fumibeauty.reserve.ne.jp/" target="_blank">来院予約</a></li>
          <li><a href="<?php echo home_url('/'); ?>contact">お問合わせ</a></li>
        </ul>
      </nav>
      <p class="copy cp"><small>fumi beauty cinic(ふみビューティクリニック梅田)美容皮膚科・形成外科・皮膚科<br>
Copyright(C) fumi beauty clinic All Rights Reserved.</small></p>
    </div>
</footer>

<?php if (wp_is_mobile()) : ?>

    <nav class="hambargar">
        <ul>
            <li class="menu-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_logo_re.png?1111111" alt="menu-logo"></li>
            <li><a href="<?php echo home_url('/'); ?>concept">当院について</a></li>
            <li class="parent"><a href="#" id="ac-txt">施術・料金</a>
              <ul class="child" id="ac">
                  <li class="child__price"><a href="<?php echo home_url('/'); ?>price" class="c_gray">料金一覧</a></li>
                      <li><a href="<?php echo home_url('/'); ?>tarumi" class="c_gray">たるみ治療</a></li>
                      <li><a href="<?php echo home_url('/'); ?>siwa" class="c_gray">しわ治療</a></li>
                      <li><a href="<?php echo home_url('/'); ?>medikaru" class="c_gray">美肌治療</a></li>
                      <li><a href="<?php echo home_url('/'); ?>kogao" class="c_gray">小顔治療</a></li>
                      <li><a href="<?php echo home_url('/'); ?>nose-lift" class="c_gray">鼻の糸</a></li>
                      <li><a href="<?php echo home_url('/'); ?>keiseigeka" class="c_gray">形成外科治療</a></li>
                      <li class="mb0"><a href="<?php echo home_url('/'); ?>cosmetics" class="c_gray">ドクターズコスメ</a></li>
                      <li class="mb0"><a href="<?php echo home_url('/'); ?>shoshin" class="c_gray">初診料・再診料</a></li>
              </ul>
            </li>
            <li><a href="<?php echo home_url('/'); ?>access">アクセス</a></li>
            <li><a href="<?php echo home_url('/'); ?>doctor">ドクター紹介</a></li>
                   <li><a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank">院長ブログ</a></li>
                    <li><a href="<?php echo home_url('/');?>case-list" class="c_gray">症例写真</a></li>
            <!--<li><a href="https://fumibeauty.reserve.ne.jp/" target="_blank">来院予約</a></li>-->
            <li class="mb0"><a href="<?php echo home_url('/'); ?>contact">お問合わせ</a></li>
        </ul>
    </nav>

<?php else: ?>
<?php endif; ?>


  <?php if (wp_is_mobile()) : ?>
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
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?6128aaaacddff"></script>

  <script>

<?php wp_footer(); ?>
</body>
</html>
