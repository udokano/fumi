<?php
/*
Template Name: ドクター紹介
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">ドクター紹介</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="doctor-intro doctor__intro__repair02">

  <div class="inner">
     <h2 class="doctor__message__tit f-ryu"><span>院長あいさつ</span></h2>
    <div class="contents__wrap flex">
      <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doctor_img.png" alt="院長 先山 史"></div><!-- ./thumb -->
    <div class="text box-size">
        <div class="thumb sp"><img src="<?php echo get_template_directory_uri(); ?>/img/doctor/doctor_img.png" alt="院長 先山 史"></div>
      <p class="ls1 f-ryu"> 私は医師になってから10年間を形成外科医として、<br class="pc">その後の6年間を美容皮膚科医として勤務してまいりました。<br class="pc">その中で「より自分らしく美しく年齢を重ねていくこと」の意義や素晴らしさに出会い、<br class="pc">そのお手伝いをしていくことを一生の仕事にしたいと強く思うようになり、<br class="pc">ふみビューティークリニック梅田を開院することとなりました。<br class="pc">全ての患者さまの「beautiful aging」を目指して、<br class="pc">私自身が受けたい！続けたい！と思う治療のみをご提案いたします。<br class="pc">皆様がより自分らしく美しく年齢を重ね輝き続けるためのお手伝いができたら、<br class="pc">これ以上嬉しいことはありません。</p>
      <div class="blog__name__container cf">
            <!-- ./blog --><div class="doctor__name__as"><h3 class="f-ryu doctor__name__tit__as tc" id="doctor__name"><span class="sm">院長</span>先山 史</h3>
            </div>
            <!-- ./doctor__name -->
      </div>
      <!-- ./blog__name__container -->
    </div>
    <!-- ./text -->
     </div>
     <!-- ./contents__wrap -->
  </div>
  <!-- ./inner -->
</section>
<section class="doctor-carrer career__repair02">
  <div class="inner gosic">
    <div class="career__contents left box-size">
      <h3 class="f-ryu"><span>院長略歴</span></h3>
      <div class="introduction__text box-size">
      <p class="f-ryu">1978年北海道旭川市にて、外科医の祖父 <span class="text-small">故</span>菱山四郎治(元･旭川赤十字病院院長) <br>脳外科医の父 先山隆司(東光中央医院院長)と医師家系の元に生まれる。<br>親戚にも医師が多かったことから自然と医師を志すようになった。<br>1997年帝京大学医学部入学、<br>2003年〜帝京大学医学部附属病院形成外科に入局し形成外科医として勤務。<br>2011年〜市立旭川病院皮膚科勤務。<br>2015年〜トキコクリニック淀屋橋院院長、梅田院院長を務め、<br>2019年9月ふみビューティークリニック梅田開院となった。</p>
      </div><!-- ./introduction__text -->

    </div>
    <div class="career__contents right box-size">
      <h3 class="f-ryu"><span>所属</span></h3>
       <div class="introduction__text box-size">
      <p class="mb0 f-ryu">日本形成外科学会、日本美容外科学会(JSAPS)、日本美容医療協会(JAAM)
<br>日本美容皮膚科学会、日本抗加齢学会、ジュビダームビスタ認定医、ボトックスビスタ認定医</p>
      </div><!-- ./introduction__text -->
    </div>
  </div>
</section>
<?php get_footer();?>
