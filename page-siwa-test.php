<?php

/* Template Name: しわ治療 料金修正確認用
 */

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">施術：しわ治療</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="ope-top-desc gosic">
  <p class="tc pc">しわには動的なしわ(お顔の表情によってできる表情じわ)と<br>
    静的なしわ(ほうれい線やマリオネットラインのようなたるみになるしわや、<br>
    皮膚の乾燥や肌老化による小じわ、ちりめんジワ)があり、<br>
    しわの種類によって治療方法が異なります。<br>
    診察によってより適切なしわ治療をご提案させていただきます。</p>
  <p class="tc sp">しわには動的なしわ(お顔の表情によってできる表情じわ)と静的なしわ(ほうれい線やマリオネットラインのようなたるみになるしわや、<br>
    皮膚の乾燥や肌老化による小じわ、ちりめんジワ)があり、しわの種類によって治療方法が異なります。診察によってより適切なしわ治療をご提案させていただきます。</p>
  <div class="ancor-box"> <a href="#area1">ボトックス注射</a><a href="#area2">ヒアルロン酸</a> </div>
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
  <div class="inner-box2">
    <h2 class="cp gosic tc ls1">ボトックス注射の特徴</h2>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point01.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">目尻のシワ改善</h3>
        <p class="gosic">目尻のシワを目立たなくして、シワを気にせずに笑えるような、ハリのある目元に仕上げます。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point02.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h3 class="gd ls1">眉間のシワ</h3>
        <p class="gosic">眉間のシワを改善して、ハリのある眉間に仕上げます。シワが、深くなるのも予防できます。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point03.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h3 class="gd ls1">額のシワ</h3>
        <p class="gosic">生まれつきあるシワも、加齢によって発生したシワにも効果的で、自然な仕上がりで改善することが可能です。</p>
      </div>
    </div>
  </div>
</section>
<?php if( have_rows('ope_siwa_btx',155) ): ?>
<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
      <?php while ( have_rows('ope_siwa_btx',155) ) : the_row(); ?>
      <div class="case-box flex">
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('befor_p',155); ?>" alt=""> </div>
          <p class="gosic tc">
            <?php the_sub_field('befor_txt',155); ?>
          </p>
        </div>
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('after_p',155); ?>" alt=""> </div>
          <p class="gosic tc">
            <?php the_sub_field('after_txt',155); ?>
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
<section class="price">
  <div class="inner-box2">
    <h2 class="tc ls1">ボトックス注入料金</h2>
    <p class="p-desc gosic tc mb60 pc">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。<br>
      ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">スタンダード部位<br>
          目尻、眉間、額、あご、鼻(バニーライン)<br>
          (1ヶ月以内の追加・調整無料、針代無料、再診料無料)</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt>1部位</dt>
        <dd>¥25,000</dd>
      </dl>
      <dl class="flex">
        <dt>2部位</dt>
        <dd>¥40,000</dd>
      </dl>
      <dl class="flex">
        <dt>3部位</dt>
        <dd>¥50,000</dd>
      </dl>
      <dl class="flex">
        <dt>4部位</dt>
        <dd>¥60,000</dd>
      </dl>
      <dl class="flex">
        <dt>5部位</dt>
        <dd>¥70,000</dd>
      </dl>
    </div>
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">アディショナル部位<br>
          口角、目頭、口唇(口すぼめ時のしわ) 、眉下(ブローリフト)、<br>
          アーモンドアイ(たれ目)</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt> スタンダード部位に追加１部位</dt>
        <dd>¥10,000</dd>
      </dl>
      <dl class="flex">
        <dt>アディショナル部位のみ１部位</dt>
        <dd>¥20,000</dd>
      </dl>
    </div>
      <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">その他の部位</dt>
        <dd class="f-bold">税別</dd>
      </dl>
        
      <dl class="flex">
        <dt> エラボトックス</dt>
        <dd>¥50,000</dd>
      </dl>
      <dl class="flex">
        <dt>首(ネフェルティティリフト)</dt>
        <dd>¥65,000</dd>
      </dl>
      <dl class="flex">
        <dt>マイクロボトックス (額＆眉間)</dt>
        <dd>¥50,000</dd>
      </dl>
      <dl class="flex">
        <dt>マイクロボトックス (鼻＆鼻横の頬)</dt>
        <dd>¥50,000</dd>
      </dl>
      <dl class="flex">
        <dt>わき汗</dt>
        <dd>¥65,000</dd>
      </dl>
      <dl class="flex">
        <dt>ガミースマイル</dt>
        <dd>¥30,000</dd>
      </dl>
          <dl class="flex">
        <dt>ボツリヌス・トキシン  アラガン  肩こり両側</dt>
        <dd>¥74,800</dd>
      </dl>
      <dl class="flex">
        <dt>肩こり両側　4回セット</dt>
        <dd>1回あたり　¥49,800<span class="sm tc">(総額¥199,200)</span></dd>
      </dl>
      <dl class="flex">
        <dt>ボツリヌス・トキシン  アラガン 脚痩せ(ふくらはぎ両脚)</dt>
        <dd>¥268,000</dd>
      </dl>
    </div>
    <div class="price-list gosic mb20">
      <dl class="flex">
        <dt class="fw600">ボツリヌス・トキシン</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt> 肩こり両側</dt>
        <dd>¥34,800</dd>
      </dl>
      <dl class="flex">
        <dt>脚痩せ(ふくらはぎ両脚)</dt>
        <dd>¥72,600</dd>
      </dl>
    </div>
      <p class="note tc gd">「アラガン社以外の製剤も取り扱っており、お求めやすい価格でご提供しています。」</p>
   <!-- <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">ボツリヌス・トキシン  アラガン</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt> 肩こり両側</dt>
        <dd>¥74,800</dd>
      </dl>
      <dl class="flex">
        <dt>肩こり両側　4回セット</dt>
        <dd>1回あたり　¥49,800<span class="sm">(総額¥199,200)</span></dd>
      </dl>
      <dl class="flex">
        <dt>脚痩せ(ふくらはぎ両脚)</dt>
        <dd>¥268,000</dd>
      </dl>
    </div>-->
  </div>
</section>
<section class="ope-faq">
  <div class="inner">
    <h2 class="tc ls1">よくある質問</h2>
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
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ): $the_query->the_post();
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
  <div class="inner-box2">
    <h2 class="cp gosic tc ls1">ヒアルロン酸の特徴</h2>
      <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point04.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">リフトアップして<br>
          しわを改善</h3>
        <p class="gosic">お顔のたるみを直して、リフトアップと同時にしわも改善します。</p>
      </div>
    </div>
        <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point05.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h3 class="gd ls1">自然な仕上がり</h3>
        <p class="gosic">いかにも、ヒアルロンを注入したような不自然なバランスになることはなく、患者様お一人お一人のお顔にあった自然な仕上がりを目指しています。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point04.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">顔全体のバランスを<br>
          整える</h3>
        <p class="gosic">気になる部位にヒアルロン酸を注入して、お顔全体を黄金バランスにより近づくようにします。</p>
      </div>
    </div>
  
  </div>
</section>
<?php if( have_rows('ope_siwa_hel',155) ): ?>
<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
      <?php while ( have_rows('ope_siwa_hel',155) ) : the_row(); ?>
      <div class="case-box flex">
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('befor_p',155); ?>" alt=""> </div>
          <p class="gosic tc">
            <?php the_sub_field('befor_txt',155); ?>
          </p>
        </div>
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('after_p',155); ?>" alt=""> </div>
          <p class="gosic tc">
            <?php the_sub_field('after_txt',155); ?>
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
<h2 class="tc ls1">ヒアルロン酸注入料金</h2>
<p class="p-desc gosic tc mb60 pc">当院では厚生省の承認を取得したジュビダームボリューマ、ジュビダームボリフト、ジュビダームボルベラを特におすすめしています。<br>
  ジュビダームビスタ認定医の院長が全てのヒアルロン酸治療を行います。</p>
<p class="p-desc gosic tc mb60 sp">当院では厚生省の承認を取得したジュビダームボリューマ、ジュビダームボリフト、ジュビダームボルベラを特におすすめしています。ジュビダームビスタ認定医の院長が全てのヒアルロン酸治療を行います。</p>
<div class="price-list gosic">
  <dl class="flex">
    <dt class="fw600">ボリューマ、ボリフト</dt>
    <dd class="f-bold">税別</dd>
  </dl>
  <dl class="flex">
    <dt>0.1cc</dt>
    <dd>¥10,000</dd>
  </dl>
  <dl class="flex">
    <dt>1本</dt>
    <dd>¥100,000</dd>
  </dl>
  <dl class="flex">
    <dt>2本</dt>
    <dd>¥180,000</dd>
  </dl>
  <dl class="flex">
    <dt>&nbsp;</dt>
    <dd>3本目以降 1本あたりプラス¥60,000</dd>
  </dl>
</div>
<div class="price-list gosic">
  <dl class="flex">
    <dt class="fw600">ボルベラ</dt>
    <dd class="f-bold">税別</dd>
  </dl>
  <dl class="flex">
    <dt>0.1cc</dt>
    <dd>¥10,000</dd>
  </dl>
</div>
<div class="price-list gosic mb45">
<dl class="flex">
  <dt class="fw600">クレビエルコントア(あご形成)</dt>
  <dd class="f-bold">税別</dd>
</dl>
<dl class="flex">
<dt>0.1cc</dt>
<dd>¥13,000</dd>
</div>
<p class="note gosic">＊カニューレを使用する場合は別途＋¥1,250(税別)</p>
</div>
</section>
<section class="ope-faq">
  <div class="inner">
    <h2 class="tc ls1">よくある質問</h2>
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
    $the_query = new WP_Query( $args );
    while ( $the_query->have_posts() ): $the_query->the_post();
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
<section class="flow">
  <div class="inner">
    <h2 class="tc ls1">施術の流れ</h2>
    <ul>
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
    </ul>
  </div>
</section>
<?php get_footer();?>
