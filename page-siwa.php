<?php

/* Template Name: しわ治療
 */

?>
<?php get_header()?>
<main>
<div class="page-head">
  <h1 class="tc f-ryu">しわ治療</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="ope-top-desc gosic">
  <p class="tc pc">しわには動的なしわ(お顔の表情によってできる表情じわ)と<br>
    静的なしわ(ほうれい線やマリオネットラインのようなたるみになるしわや、<br>
    皮膚の乾燥や肌老化による小じわ、ちりめんジワ)があり、<br>
    しわの種類によって治療方法が異なります。<br>
    診察によってより適切なしわ治療をご提案させていただきます。</p>
  <p class="tc sp">しわには動的なしわ(お顔の表情によってできる表情じわ)と静的なしわ(ほうれい線やマリオネットラインのようなたるみになるしわや、<br>
    皮膚の乾燥や肌老化による小じわ、ちりめんジワ)があり、しわの種類によって治療方法が異なります。診察によってより適切なしわ治療をご提案させていただきます。</p>
  <nav><ul class="ancor-box">
     <li><a href="#area1">ボトックス注射</a></li>
     <li><a href="#area2">ヒアルロン酸</a></li>
     <li><a href="#area3">SUNEKOS(スネコス)</a></li>
</ul></nav>
</section>
<section class="ope-intro bg-cp" id="area1">
  <div class="inner flex al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/thumb01.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>ボトックス注射</h2>
      <p class="ls1 gosic">お顔は表情を作るために様々な筋肉で構成され、毎日のお顔の動きによって折り紙の折ジワのように年齢とともに表情じわが刻まれてしまいます。目尻の笑いじわ、眉間や鼻のしわ、額の横じわ、あごの梅干しじわなどがボトックスの適応となります。ボトックスを打つことで表情が柔らかくなりお顔の印象も優しくなるのも利点です。 </p>
    </div>
  </div>
</section>
<section class="features layout1">
  <div class="inner-box2 hx">
    <h3 class="cp gosic tc ls1">ボトックス注射の特徴</h3>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point01.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h4 class="gd ls1">目尻のシワ改善</h4>
        <p class="gosic">目尻のシワを目立たなくして、シワを気にせずに笑えるような、ハリのある目元に仕上げます。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point02.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h4 class="gd ls1">眉間のシワ</h4>
        <p class="gosic">眉間のシワを改善して、ハリのある眉間に仕上げます。シワが、深くなるのも予防できます。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point03.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h4 class="gd ls1">額のシワ</h4>
        <p class="gosic">生まれつきあるシワも、加齢によって発生したシワにも効果的で、自然な仕上がりで改善することが可能です。</p>
      </div>
    </div>
  </div>
</section>
<?php if (have_rows('ope_siwa_btx', 155)): ?>
<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
      <?php while (have_rows('ope_siwa_btx', 155)) : the_row(); ?>
      <div class="case-box flex">
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('befor_p', 155); ?>" alt=""> </div>
          <p class="gosic tc">
            <?php the_sub_field('befor_txt', 155); ?>
          </p>
        </div>
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('after_p', 155); ?>" alt=""> </div>
          <p class="gosic tc">
            <?php the_sub_field('after_txt', 155); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="note box-size gosic">
      <p>リスク副作用</p>
      <p>・ごく稀に、術後は多少の腫れや突っ張り感を感じることもありますが、通常数日で落ち着きます。</p>
    </div>
  </div>
</section>
<?php else: ?>
<?php endif; ?>
<!--<section class="bg-cg2 kuchikomi">
  <div class="inner-box2">
    <div class="kuchikomi-slide slide-area">
      <h2 class="tc gd gosic ls2">施術の感想</h2>
      <div class="swiper-container slide-p2 swiper4">
        <div class="swiper-wrapper">
          <div class="gosic swiper-slide">
            <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/coming.jpg" alt="準備中"></div>
            <p class="tc mt20">準備中</p>
          </div>
            <div class="gosic swiper-slide">
            <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/coming.jpg" alt="準備中"></div>
            <p class="tc mt20">準備中</p>
          </div>
            <div class="gosic swiper-slide">
            <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/coming.jpg" alt="準備中"></div>
            <p class="tc mt20">準備中</p>
          </div>
            <div class="gosic swiper-slide">
            <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/coming.jpg" alt="準備中"></div>
            <p class="tc mt20">準備中</p>
          </div>
        </div>
        <div class="swiper-button-prev prev2"></div>
        <div class="swiper-button-next next2"></div>
          <div class="swiper-pagination"></div>
      </div>
    </div>

  </div>
</section>-->
<section class="price native__mt" id="btx__price">
  <div class="inner-box2">
    <h3 class="tc ls1 hx3">ボトックス（顔）注入料金</h3>
   <p class="p-desc gosic tc mb60 pc">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。<br>ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">スタンダード部位<br class="pc">
          目尻、眉間、額、あご、鼻(バニーライン)<br class="pc">
          (1ヶ月以内の追加・調整無料、針代無料、再診料無料)<span class="sm">※アラガン社ボトックスビスタ使用</span></th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>1部位</td>
<td>¥25,000</td>
</tr>
<tr class="flex">
<td>2部位</td>
<td>¥40,000</td>
</tr>
<tr class="flex">
<td>3部位</td>
<td>¥50,000</td>
</tr>
<tr class="flex">
<td>4部位</td>
<td>¥60,000</td>
</tr>
<tr class="flex">
<td>5部位</td>
<td>¥70,000</td>
</tr>
</table>
</div>
<div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left left">アディショナル部位<br class="pc">
          口角、目頭、口唇(口すぼめ時のしわ) 、眉下(ブローリフト)、<br class="pc">
          アーモンドアイ(たれ目)<span class="sm">※アラガン社ボトックスビスタ使用</span></th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>スタンダード部位に追加１部位</td>
<td>¥10,000</td>
</tr>
<tr class="flex">
<td>アディショナル部位のみ１部位</td>
<td>¥20,000</td>
</tr>
</table>
</div>
<div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">その他の部位<span class="sm">※アラガン社ボトックスビスタ使用</span></th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>エラボトックス</td>
<td>¥50,000</td>
</tr>
<tr class="flex">
<td>首(ネフェルティティリフト)</td>
<td>¥65,000</td>
</tr>
<tr class="flex">
<td>マイクロボトックス(額＆眉間)</td>
<td>¥50,000</td>
</tr>
<tr class="flex">
<td>マイクロボトックス(鼻＆鼻横の頬)</td>
<td>¥50,000</td>
</tr>
<tr class="flex">
<td>わき汗</td>
<td>¥65,000</td>
</tr>
<tr class="flex">
<td>ガミースマイル</td>
<td>¥30,000</td>
</tr>
</table>
</div>
    
       <!--    <dl class="flex">
        <dt>肩こり両側</dt>
        <dd>¥74,800</dd>
      </dl>
      <dl class="flex">
        <dt>肩こり両側4回セット</dt>
        <dd>1回あたり　¥49,800<span class="sm tc">(総額¥199,200)</span></dd>
      </dl>

      <dl class="flex">
        <dt>脚痩せ(ふくらはぎ両脚)</dt>
        <dd>¥268,000</dd>
      </dl> -->

     <!-- <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600 left">ボツリヌス・トキシン <span class="sm">(リジェノックスの場合)</span></dt>
        <dd class="f-bold">税別</dd>
      </dl>

      <dl class="flex">
        <dt>肩こり両側</dt>
        <dd>¥34,800</dd>
      </dl>
      <dl class="flex">
        <dt>脚痩せ(ふくらはぎ両脚)</dt>
        <dd>¥72,600</dd>
      </dl>
    </div> -->
    <h3 class="tc ls1 hx3">ボトックス（身体）注入料金</h3>
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">制汗ボトックス</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>わき汗</td>
<td>¥65,000</td>
</tr>
<tr class="flex">
<td>手あせ（両手）</td>
<td>¥68,000</td>
</tr>
<tr class="flex">
<td>足うら汗（両足）</td>
<td>¥88,000</td>
</tr>
<tr class="flex">
<td>額の汗</td>
<td>¥48,000</td>
</tr>
<tr class="flex">
<td>頭の汗</td>
<td>¥68,000</td>
</tr>
</table>
</div>

    <!-- ./price-list -->
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">ボディボトックス<span class="sm">(アラガン社 ボトックスビスタの場合)</span></th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>肩こり</td>
<td>¥64,800</td>
</tr>
<tr class="flex">
<td>脚痩せ(ふくらはぎ) 小</td>
<td>¥128,000</td>
</tr>
<tr class="flex">
<td>脚痩せ(ふくらはぎ) 大</td>
<td>¥190,000</td>
</tr>
<tr class="flex">
<td>二の腕</td>
<td>¥72,000</td>
</tr>
</table>
</div>

      <!-- ./price-list -->
      <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">ボディボトックス<span class="sm">(リジェノックスの場合)</span></th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>肩こり</td>
<td>¥48,600</td>
</tr>
<tr class="flex">
<td>脚痩せ(ふくらはぎ) 小</td>
<td>¥96,000</td>
</tr>
<tr class="flex">
<td>脚痩せ(ふくらはぎ) 大</td>
<td>¥142,500</td>
</tr>
<tr class="flex">
<td>二の腕</td>
<td>¥54,000</td>
</tr>
</table>
</div>

      <!-- ./price-list -->

  </div>
</section>
<section class="ope-faq">
  <div class="inner">
    <h3 class="tc ls1 hx3">よくある質問</h3>
    <?php
    $args = array(
      'post_type' => 'faq',
      'tax_query' => array(
        array(
          'taxonomy' => 'faq_kind',
          'field' => 'slug',
          'terms' => array( 'bx' )
        )
      ),
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $the_query = new WP_Query($args);
    while ($the_query->have_posts()): $the_query->the_post();
    ?>

    <!--ここにループの中の記述 -->

    <dl class="box-size">
      <dt><span class="q">Q</span><span class="gosic">
        <?php the_title(); ?>
        </span></dt>
      <dd><span class="a">A</span><span class="gosic">
        <?php remove_filter('the_content', 'wpautop'); ?>
        <?php the_content(); ?>
        </span></dd>
    </dl>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<section class="ope-intro bg-cp" id="area2">
  <div class="inner flex al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/thumb02.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>ヒアルロン酸注入</h2>
      <p class="ls1 gosic">ほうれい線やマリオネットライン、ゴルゴライン(目の下のくぼみ)などはたるみになるしわといえます。ヒアルロン酸でお顔全体をリフトアップさせたり、気になるしわやくぼみを埋めることで、自然な印象でたるみが改善し若々しい仕上がりとなります。 </p>
    </div>
  </div>
</section>
<section class="features layout1">
  <div class="inner-box2 hx">
    <h3 class="cp gosic tc ls1">ヒアルロン酸の特徴</h3>
      <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point04.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h4 class="gd ls1">リフトアップして<br>
          しわを改善</h4>
        <p class="gosic">お顔のたるみを直して、リフトアップと同時にしわも改善します。</p>
      </div>
    </div>
        <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point05.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h4 class="gd ls1">自然な仕上がり</h4>
        <p class="gosic">いかにも、ヒアルロンを注入したような不自然なバランスになることはなく、患者様お一人お一人のお顔にあった自然な仕上がりを目指しています。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point04.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h4 class="gd ls1">顔全体のバランスを<br>
          整える</h4>
        <p class="gosic">気になる部位にヒアルロン酸を注入して、お顔全体を黄金バランスにより近づくようにします。</p>
      </div>
    </div>

  </div>
</section>
<?php if (have_rows('ope_siwa_hel', 155)): ?>
<section class="case">
  <div class="inner">
    <h3 class="tc hx3">症例</h3>
    <div class="case-wrap flex">
      <?php while (have_rows('ope_siwa_hel', 155)) : the_row(); ?>
      <div class="case-box flex">
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('befor_p', 155); ?>" alt=""> </div>
          <p class="gosic tc">
            <?php the_sub_field('befor_txt', 155); ?>
          </p>
        </div>
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('after_p', 155); ?>" alt=""> </div>
          <p class="gosic tc">
            <?php the_sub_field('after_txt', 155); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="note box-size gosic">
      <p>リスク副作用</p>
      <p>・注入直後、赤みが出る場合がございます。＊メイクで隠れる程度の赤みです。</p>
    </div>
  </div>
</section>
<?php else: ?>
<?php endif; ?>
<section class="price">
<div class="inner-box2">
<h3 class="tc ls1 hx3">ヒアルロン酸注入料金</h3>
<p class="p-desc gosic tc mb60 pc">当院では厚生省の承認を取得したジュビダームボリューマ、ジュビダームボリフト、ジュビダームボルベラを特におすすめしています。<br>
  ジュビダームビスタ認定医の院長が全てのヒアルロン酸治療を行います。</p>
<p class="p-desc gosic tc mb60 sp">当院では厚生省の承認を取得したジュビダームボリューマ、ジュビダームボリフト、ジュビダームボルベラを特におすすめしています。ジュビダームビスタ認定医の院長が全てのヒアルロン酸治療を行います。</p>
<div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">ボリューマ、ボリフト</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>0.1cc</td>
<td>¥10,000</td>
</tr>
<tr class="flex">
<td>1本</td>
<td>¥80,000</td>
</tr>
<tr class="flex">
<td>4本目以降</td>
<td>1本あたりプラス¥60,000</td>
</tr>
</table>
</div>

<!--2021/2/18 追加↓-->
<div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">ボラックス</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>0.1cc</td>
<td>￥12,000</td>
</tr>
<tr class="flex">
<td>1本</td>
<td>￥96,000</td>
</tr>
</table>
</div>
<!--2021/2/18 追加↑-->
	
<div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">ボルベラ</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>0.1cc</td>
<td>¥10,000</td>
</tr>
</table>
</div>

 <!--  <dl class="flex">
    <dt>2本</dt>
    <dd>¥180,000</dd>
  </dl> -->
	
<!--2021/2/26　削除↓↓
  <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left">クレビエルコントア(あご形成)</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>0.1cc</td>
<td>¥10,000</td>
</tr>
</table>
</div>
-->
<p class="note gosic">＊カニューレを使用する場合は別途＋¥1,250(税別)</p>
</div>
</section>
<section class="ope-faq">
  <div class="inner">
    <h3 class="tc ls1 hx3">よくある質問</h3>
    <?php
    $args = array(
      'post_type' => 'faq',
      'tax_query' => array(
        array(
          'taxonomy' => 'faq_kind',
          'field' => 'slug',
          'terms' => array( 'hes' )
        )
      ),
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $the_query = new WP_Query($args);
    while ($the_query->have_posts()): $the_query->the_post();
    ?>

    <!--ここにループの中の記述 -->

    <dl class="box-size">
      <dt><span class="q">Q</span><span class="gosic">
        <?php the_title(); ?>
        </span></dt>
      <dd><span class="a">A</span><span class="gosic">
        <?php remove_filter('the_content', 'wpautop'); ?>
        <?php the_content(); ?>
        </span></dd>
    </dl>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<section class="ope-intro bg-cp" id="area3">
  <div class="inner flex  al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/thumb13.jpg" alt="サムネイル">  </div>
    <div class="text box-size">
      <h2>SUNEKOS(スネコス)</h2>
      <p class="ls1 gosic">SUNEKOS(スネコス)は、イタリアで生まれたヒアルロン酸とアミノ酸の注射治療です。真皮の細胞外マトリックスにアプローチし、自らの肌再生を促す治療です。一般的な施術で使われるヒアルロン酸と異なりSUNEKOSは、架橋されていないのが特徴です。目元口元の小ジワに効果的で、ハリのある肌を目指すことが可能です。</p>
    </div>
  </div>
</section>
<section class="ope__pr">
<div class="inner-box2 hx">
    <div class="ope__pr__box box-size gosic">
      <div class="pr__top__content flex">

        <div class="thumb">
<img src="<?php echo get_template_directory_uri(); ?>/img/operation/medikaru/sunecos_img.jpg" alt="スネコス症例写真">
        </div><!-- ./thumb -->


        <div class="pr__point">
            <h3 class="cp">SUNEKOS(スネコス)の特徴</h3>
            <ul class="min">
              <li>しわの改善(目元や口元のちりめんじわ・小じわの改善、ほうれい線などの深いしわの改善)</li>
              <li>肌つやの改善</li>
              <li>肌弾力アップ</li>
              <li>お肌の滑らかさの向上</li>
              <li>毛穴の改善</li>
              <li>肌に透明感がでる</li>
              <li>輪郭がすっきりする</li>
            </ul>
        </div><!-- ./pr__point -->

      </div><!-- ./pr__top__content -->
    </div><!-- ./ope__pr__box -->

    <div class="ope__sub__desc tc box-size gosic">
      <p>30代以降、しわが気になる方が適応となります。<br class="pc">すでにしわが刻まれていてボトックスのみでは改善しないしわ、目元の小じわやくぼみ感、<br class="pc">口周りのしわ、ボトックスに抵抗がある場合などにおすすめです。</p>
            <p class="mb5 gd">特に改善したい症状がある場合は、1週間から10日に一度のペースで4回程度の施術がおすすめです。</p><p class="mb0 gd">肌艶や透明感、美肌目的の場合は月に1回程度のペースで数回、または一回のみの治療も可能です。</p>

    </div>
</div><!-- ./inner -->
</section>
<section class="price">
  <div class="inner-box2">
    <h3 class="tc ls1 hx3">料金表</h3>
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left left">SUNEKOS(スネコス)</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>1回</td>
<td>¥50,000</td>
</tr>
<tr class="flex">
<td>1回 ※2回目以降1ヶ月以内の場合</td>
<td>¥45,000</td>
</tr>
</table>
</div>
	  
<!--2021/2/18 追加↓-->
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600 left left">SUNEKOS(スネコス)1200</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>1本</td>
<td>￥100,000</td>
</tr>
</table>
</div>
<!--2021/2/18 追加↑-->
    
  </div>
</section>
<section class="flow">
  <div class="inner">
    <h2 class="tc ls1">施術の流れ</h2>
    <ol>
      <li class="box-size flex">
        <div class="left">
          <div class="top">
            <div class="step points f-ryu cw">STEP 01</div>
            <h3 class="f-bold">ご予約</h3>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow01.jpg" alt="ご予約"></div>
          <p class="gosic ls1">お電話・WEBの予約フォームにて、ご予約をよろしくお願い致します。来院前にご不明点があれば、お気軽にご相談ください。</p>
        </div>
        <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow01.jpg" alt="ご予約"></div>
      </li>
      <li class="box-size flex">
        <div class="left">
          <div class="top">
            <div class="step points f-ryu cw">STEP 02</div>
            <h3 class="f-bold">診察、カウンセリング</h3>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow02.jpg" alt="診察、カウンセリング"></div>
          <p class="gosic ls1">施術前に、患者様の悩みをお伺いします。お身体の状態を診て、治療計画を決めていきます。注意点、リスクについても詳しく説明いたしますので、ご不明な点や不安なことがあれば遠慮せずにご質問ください。</p>
        </div>
        <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow02.jpg" alt="診察、カウンセリング"></div>
      </li>
      <li class="box-size flex">
        <div class="left">
          <div class="top">
            <div class="step points f-ryu cw">STEP 03</div>
            <h3 class="f-bold">お会計</h3>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow05.jpg" alt="お会計"></div>
          <p class="gosic ls1">施術の前にお会計をお願いいたします。<br>
当院は、下記のクレジットカードのご利用が可能です。</p>
            <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/common/card.png?0918" alt="カード"></div>
        </div>
        <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow05.jpg" alt="お会計"></div>
      </li>
      <li class="box-size flex">
        <div class="left">
          <div class="top">
            <div class="step points f-ryu cw">STEP 04</div>
            <h3 class="f-bold">施術開始</h3>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow03_1.jpg" alt="施術終了"></div>
          <p class="gosic ls1">痛みを極力に抑え、安全第一に責任を持って施術いたします。施術は全て有資格者が行うので、ご安心くださいませ。</p>
        </div>
        <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow03_1.jpg" alt="施術終了"></div>
      </li>
    </ol>
  </div>
</section>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "ヒアルロン酸：ヒアルロン酸はどのくらいの量が必要ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "リフトアップやお顔のバランス改善ではある程度の量を注入したほうが効果を実感していただけます。年齢やたるみの程度にもよりますが３㏄以上がおすすめです。リップや涙袋、あごなどのパーツ治療では少量（1㏄以内）で治療する場合もあります。"
        }
      }, {
        "@type": "Question",
        "name": "ヒアルロン酸：持続期間はどのくらいですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "長期持続型のバイクロス製剤の高品質ヒアルロン酸をおすすめしています。注入部位にもよりますが、1年半～2年程で吸収されてなくなります。"
        }
      }, {
        "@type": "Question",
        "name": "ヒアルロン酸：顔のしわ全てに有効ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "ほうれい線やマリオネットラインなどたるみが原因のしわには効果的です。眉間のしわや目じりの笑いジワなどの表情じわにはボトックス治療、小じわやちりめんジワにはダーマペン４やマッサージピール、メディカルエステなどがおすすめです。"
        }
      }, {
        "@type": "Question",
        "name": "ヒアルロン酸：ヒアルロン酸注射の痛みはどれくらいですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "麻酔クリームを塗っていただいてから細い針やカニューレなどを使用して施術を行いますので、我慢できる程度の痛みです。痛みの軽減に最大限配慮してますので、ご不安がある方はご相談ください。"
        }
      }, {
        "@type": "Question",
        "name": "ボトックス注射：ボトックス注射の痛みはどれくらいですか？        ",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "冷却しながら細い針で注射しますが施術中はチクチクっと多少の痛みがあります。特殊な極細の針を使用しますし、ご希望の方には麻酔クリームを塗っていただいてからの施術も可能ですので、ご心配な方は相談してください。"
        }
      }]
    }
    </script>
  </main>
<?php get_footer();?>
