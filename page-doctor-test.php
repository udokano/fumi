<?php
/*
Template Name: ドクター紹介-閲覧テスト用
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">ドクター紹介</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="doctor-intro doctor__intro__repair">
  <div class="inner flex">
    <div class="text box-size">
      <h2 class="doctor__message__tit f-ryu">院長からのメッセージ</h2>
        <div class="thumb sp"><img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doctor_img.png" alt="院長 先山 史"></div>
      <p class="ls1 f-ryu"> 私は医師になってから10年間を形成外科医として、その後の6年間を美容皮膚科医として勤務してまいりました。その中で「より自分らしく美しく年齢を重ねていくこと」の意義や素晴らしさに出会い、そのお手伝いをしていくことを一生の仕事にしたいと強く思うようになり、ふみビューティークリニック梅田を開院することとなりました。全ての患者さまの「beautiful aging」を目指して、私自身が受けたい！続けたい！と思う治療のみをご提案いたします。皆様がより自分らしく美しく年齢を重ね輝き続けるためのお手伝いができたら、これ以上嬉しいことはありません。</p>
      <div class="blog__name__container flex al-cent">
            <div class="blog gosic"><a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank" class="cw">ブログ</a><a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank" class="link-txt">http://blog.livedoor.jp/dr_sakiyama</a>
          </div>
          <!-- ./blog -->
          <div class="doctor__name">
              <h3 class="f-ryu doctor__name__tit tc"><span class="sm">ふみビューティークリニック梅田</span>先山 史</h3>
          </div>
          <!-- ./doctor__name -->
      </div>
      <!-- ./blog__name__container -->
    </div>
    <!-- ./text -->
    <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doctor_img.png" alt="院長 先山 史"></div>
  </div>
</section>
<section class="doctor-carrer career__repair">
  <div class="inner gosic">
    <div class="career__contents left box-size">
      <h3 class="cw">院長略歴</h3>
      <div class="introduction__text box-size">
      <p>1978年北海道旭川市にて、外科医の祖父 故菱山四郎次(旭川赤十字病院院長) 脳外科医の父 先山隆司(東光中央医院院長)と医師家系の元に生まれる。</p>

       <p>親戚にも医師が多かったことから自然と医師を志すようになった。</p><p class="mb0">1997年帝京大学医学部卒業後、同年 帝京大学医学部付属病院形成外科に入局し形成外科医として勤務。<br>2011年〜市立旭川病院皮膚科勤務。<br>2015年〜トキコクリニック淀屋橋院院長、梅田院院長を務め、2019年9月ふみビューティークリニック梅田開院となった。</p>
      </div><!-- ./introduction__text -->

    </div>
    <div class="career__contents right box-size">
      <h3 class="cw">所属</h3>
       <div class="introduction__text box-size">
      <p class="mb0">日本形成外科学会、日本美容皮膚科学会、日本坑加齢学会、<br>ジュビダームビスタ認定医、ボトックスビスタ認定医</p>
      </div><!-- ./introduction__text -->
    </div>
  </div>
</section>
<?php get_footer();?>
