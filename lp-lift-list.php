<?php
/*
Template Name: ランディングページスレッドリフト リスティング用
*/

?>
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo( 'name' ); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lp.css">

<!-- Global site tag (gtag.js) - Google Ads: 710940797 --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-710940797"></script> 
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-710940797');
</script>
<?php wp_head(); ?>
</head>
<body id="lp3" class="lps">
<div class="wrapper">
  <?php if ( wp_is_mobile() ) : ?>
  <header class="fv-sp"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp3/sp/fv_sp.jpg" alt="メイン画像"> </header>
  <?php else: ?>
  <header class="lp-header">
    <div class="header-inner flex al-cent">
      <div class="logo tc"><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="FMUI BEAUTY CLINIC"></a></div>
      <div class="lp-cv-btn flex"> <a class="" href="https://fumibeauty.jp/reserve/lp-lift.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/header_btn01.png" alt="来院予約"></a> <a class="btn2" href="<?php echo home_url( '/' ); ?>contact-list" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/header_btn02.png" alt="お問合わせ"></a> </div>
    </div>
  </header>
  <div class="lp-fv cf">
    <div class="fv-inner">
      <div class="box">
        <p class="cach"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/fv_cach01.png" alt="年齢に負けないお肌に頬、顎のたるみ改善"></p>
        <h1><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/fv_h1.png" alt="溶ける糸で切らずに
リフトアップ&鼻隆"></h1>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/fv_img.png" alt="即効性が
ある少ないダウンタイム自然な仕上がり"></div>
      </div>
    </div>
  </div>
  <!--FV END-->
  
  <?php endif; ?>
  <?php if ( wp_is_mobile() ) : ?>
  <?php else: ?>
  <section class="area2 area-bgs" id="bg1">
    <div class="lp-inner cf">
      <div class="box">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area2_h2.png" alt="こんなことでお悩みの方"></h2>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area2_img.png" alt="ほうれい線顔のしわ"></div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="area3 area-bgs" id="bg2">
    <div class="lp-inner">
      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_img.png" alt="点滴"></div>
      <h2 class="gd tc ls2">スレッドリフトなら</h2>
      <ul class="thumbs flex mb40">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area3_thumb01.jpg" alt="眉間や目尻など
表情じわの解消"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area3_thumb02.jpg" alt="エラ張り解消・
小顔治療"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area3_thumb03.jpg" alt="しわ・たるみの解消"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area3_thumb04.jpg" alt="汗の抑制"></li>
      </ul>
      <h2 class="gd tc ls2">鼻スレッドなら</h2>
      <ul class="thumbs flex">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area3_thumb01_1.jpg" alt="眉間や目尻など
表情じわの解消"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area3_thumb01_2.jpg" alt="エラ張り解消・
小顔治療"></li>
      </ul>
    </div>
  </section>
  <div class="lp-cv">
    <div class="top">
      <h2 class="cw ls1 tc">ご予約・お問合わせはこちらから</h2>
    </div>
    <div class="lp-inner">
      <div class="top-cont flex al-cent"> <a href="https://fumibeauty.jp/tel/lp-lift.html" class="cw ls2 tel">06-6372-2323</a>
        <p class="sm tc cw time">受付時間<br>
          10:00～18:00 </p>
      </div>
      <div class="lp-cv-btn flex"> <a href="https://fumibeauty.jp/reserve/lp-lift.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/cv_btn01.png" alt="来院予約
"></a> <a href="<?php echo home_url( '/' ); ?>contact-list" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/cv_btn2.png" alt="お問合わせ
"></a> </div>
    </div>
  </div>
  <section class="area7 bg-blue">
    <div class="lp-inner">
      <h2 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_h2.png" alt="治療も短時間、痛みも少なく、跡も残りくく術後すぐ実感いただけます"></h2>
      <p class="cach tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_cach01.png" alt="スレッドリフトたるみの状態を厳密に診断し、適切本数をご提案します。"></p>
      <div class="box mb40 box-size">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_cach03.png" alt="スレッドリフトによるシワ、たるみの抑制"></h3>
        <div class="cont flex">
          <div class="desc gosic gd">スレッドリフトは、専用の特殊な糸をたるみが気になる部位に挿入して内側からたるみを引上げます。フェイスラインなどお顔はもちろん、首などでも使用することができ、たるみ改善効果の他、小顔効果もあります。 <br>
            <br>
            また、ほうれい線やマリオネットラインも目立たなくなります。</div>
          <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_thumb01.png" alt="画像"> </div>
        </div>
      </div>
      <div class="box box-size">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_cach02.png" alt="スレッドリフトでお肌のハリ・弾力をアップ"></h3>
        <div class="img">
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_thumb02.png" alt="画像"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="area7 bg-gr">
    <div class="lp-inner">
      <h2 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_h2.png" alt="当院ではただヒアルロン酸を注入するだけではありませんお顔全体のバランスが整うように"></h2>
      <p class="cach tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_1_cach01.png" alt="より自然に、より美しくトータルフェイシャルトリートメントを行います。"></p>
      <div class="box mb40 box-size">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_1_cach02.png" alt="長年気になっていた表情じわたった数分の治療で解消します"></h3>
        <div class="cont flex">
          <div class="desc gosic gd">当院の鼻リフトはGメッシュやGコグノーズを用いて行います。
            だんご鼻・低い鼻・少しスッキリさせたいなどのお悩みの方に適した治療法です。
            メスを使わずに吸収糸を使用して、鼻先の形を整えていきます。
            FDA・CEの承認を得た医療用の素材PCLでつくられた信頼性の高い糸を用いて治療を行っています。</div>
          <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_1_thumb01.jpg" alt="画像"> </div>
        </div>
      </div>
      <div class="box box-size">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_1_cach03.png" alt="スレッドリフトでお肌のハリ・弾力をアップ"></h3>
        <div class="img">
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/area7_1_thumb04.png" alt="画像"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="area10 area-bgs" id="bg5">
    <div class="lp-inner cf">
      <div class="box">
        <h2 class="cp ls2">安心・安全な治療をご提案いたします。</h2>
        <p class="gosic">日本の厚生労働省にあたる機関であるアメリカFDAの認可の承認を得ている安全性の確立された製品を仕様しております。また、糸の素材であるPDOは、韓国の韓国食品医薬品安全庁であるMFDSの認可も得ています。<br>
          人体に優しく、世界でも認められている糸を用いて施術しますので安心して
          ご利用いただけます。</p>
      </div>
    </div>
  </section>
  <?php if( have_rows('pr3',155) ): ?>
  <section class="case area-bgs" id="bg6">
    <div class="lp-inner">
      <h2 class="gd tc">症例写真</h2>
      <div class="case-photos flex">
        <?php while ( have_rows('pr3',155) ) : the_row(); ?>
        <div class="case-box">
          <div class="ba-box flex">
            <div class="box">
              <div class="thumb"> <img src="<?php the_sub_field('befor_p',155); ?>" alt=""> </div>
              <p class="gd tc">
                <?php the_sub_field('befor_title',155); ?>
              </p>
            </div>
            <div class="box">
              <div class="thumb"> <img src="<?php the_sub_field('after_p',155); ?>" alt=""> </div>
              <p class="gd tc">
                <?php the_sub_field('after_title',155); ?>
              </p>
            </div>
            <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/case_arrow.png" alt=">"></div>
          </div>
          <?php if( get_sub_field('text',155) ): ?>
          <div class="comment cp gosic box-size">
            <?php the_sub_field('text',155); ?>
          </div>
          <?php endif; ?>
        </div>
        <?php endwhile; ?>
        <div class="note box-size">
          <h4 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/note.png" alt="注意事項"></h4>
          <p class="gosic tc pc">ごく稀に、術後は多少の腫れや突っ張り感を感じることもありますが、<br>
            通常数日で落ち着きます。</p>
          <p class="gosic tc sp">ごく稀に、術後は多少の腫れや突っ張り感を感じることもありますが、通常数日で落ち着きます。</p>
        </div>
      </div>
    </div>
  </section>
  <?php else: ?>
  <?php endif; ?>
  <section class="infu">
    <div class="lp-inner">
      <h2 class="gd tc ls2">リフトアップで改善される部位</h2>
      <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp3/infu_img.png" alt="注入可能部位"> </div>
    </div>
  </section>
  <section class="price">
    <div class="lp-inner">
      <h2 class="gd tc">料金</h2>
      <!-- <table class="gosic">
        <thead>
          <tr>
            <th scope="col">施術名</th>
            <th scope="col">本数</th>
            <th scope="col">値段</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>シルエットソフト</td>
            <td>2本</td>
            <td>¥160,000(1本あたり¥80,000)</td>
          </tr>
          <tr>
            <td>シルエットソフト</td>
            <td>4本</td>
            <td>¥280,000(1本あたり¥70,000)</td>
          </tr>
          <tr>
            <td>シルエットソフト</td>
            <td>6本</td>
            <td>¥360,000(1本あたり¥60,000)</td>
          </tr>
          <tr>
            <td>シルエットソフト</td>
            <td>8本</td>
            <td>¥400,000(1本あたり¥50,000)</td>
          </tr>
         
        </tbody>
      </table>-->
      
      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">施術名</th>
            <th scope="col">本数</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="4"style="background-color: #e4f6fd; vertical-align: middle;" class="left">シルエットソフト</td>
            <td class="cent">2本</td>
            <td class="right">¥195,000<br>
              (1本あたり¥97,500)</td>
          </tr>
          <tr>
            <td class="cent">4本</td>
            <td>¥296,000<br>
              (1本あたり¥74,000)</td>
          </tr>
          <tr>
            <td class="cent">6本</td>
            <td>¥378,000<br>
              (1本あたり¥63,000)</td>
          </tr>
          <tr>
            <td class="cent">8本</td>
            <td>¥400,000<br>
              (1本あたり¥50,000)</td>
          </tr>
        </tbody>
      </table>
      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">施術名</th>
            <th scope="col">本数</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="4"style="background-color: #e4f6fd; vertical-align: middle;" class="left">Gコグ</td>
            <td>1本</td>
            <td class="right">¥60,000</td>
          </tr>
        </tbody>
      </table>
      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">施術名</th>
            <th scope="col">本数</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2"style="background-color: #e4f6fd; vertical-align: middle;" class="left">VOVリフト</td>
            <td>1本</td>
            <td class="right">¥40,000</td>
          </tr>
          <tr>
            <td>5本目以降</td>
            <td class="right">1本あたり¥30,000<br>
              Gコグとの併用の場合1本30000円</td>
          </tr>
        </tbody>
      </table>
      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">施術名</th>
            <th scope="col">本数</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="3"style="background-color: #e4f6fd; vertical-align: middle;" class="left">引き締め系ショートスレッド</td>
            <td>10本</td>
            <td class="right">¥40,000</td>
          </tr>
          <tr>
            <td>20本</td>
            <td class="right">¥70,000</td>
          </tr>
          <tr>
            <td>30本</td>
            <td class="right">¥90,000</td>
          </tr>
        </tbody>
      </table>
      <table class="pt2 gosic mb35">
        <thead>
          <tr class="td-bgthead">
            <th scope="col">施術名</th>
            <th scope="col">本数</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="tb-bgreen">
            <td rowspan="2"style="vertical-align: middle;" class="left t-c-g ">Gコグノーズ</td>
            <td class="t-c-g ">1本目</td>
            <td class="t-c-g  right">¥40,000</td>
          </tr>
          <tr class="tb-bgreen2">
            <td class="t-c-g ">2本目以降</td>
            <td class="t-c-g right">¥30,000</td>
          </tr>
        </tbody>
      </table>
      <table class="pt2 gosic mb35">
        <thead>
          <tr class="td-bgthead">
            <th scope="col">施術名</th>
            <th scope="col">本数</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr class="tb-bgreen">
            <td rowspan="2"style="vertical-align: middle;" class="left t-c-g ">Gメッシュ</td>
            <td class="t-c-g ">1本目</td>
            <td class="t-c-g  right">¥40,000</td>
          </tr>
          <tr class="tb-bgreen2">
            <td class="t-c-g ">2本目以降</td>
            <td class="t-c-g right">¥30,000</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
  <div class="lp-cv">
    <div class="top">
      <h2 class="cw ls1 tc">ご予約・お問合わせはこちらから</h2>
    </div>
    <div class="lp-inner">
      <div class="top-cont flex al-cent"> <a href="https://fumibeauty.jp/tel/lp-lift.html" class="cw ls2 tel">06-6372-2323</a>
        <p class="sm tc cw time">受付時間<br>
          10:00～18:00 </p>
      </div>
      <div class="lp-cv-btn flex"> <a href="https://fumibeauty.jp/reserve/lp-lift.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/cv_btn01.png" alt="来院予約"></a> <a href="<?php echo home_url( '/' ); ?>contact-list" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/cv_btn2.png" alt="お問い合わせ"></a> </div>
    </div>
  </div>
  <section class="flow bg-blue">
    <div class="lp-inner">
      <h2 class="gd tc">施術の流れ</h2>
      <ul class="steps">
        <li class="box-size flex">
          <div class="text">
            <h3 class="cblue ls1">予約</h3>
            <p class="gosic ls1 cblue"> お電話・予約システムにてご予約をよろしくお願いいたします。来院前のご不明な点があれば、お気軽にご相談下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step1_thumb.png" alt="予約"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/step1.png" alt="1"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex">
          <div class="text">
            <h3 class="ls1 cblue">ご来院</h3>
            <p class="gosic ls1 cblue"> ご予約された、日時でのご来院をお願いいたします。カウンセリングでお客様のお悩みをお聞かせ下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step3_thumb.png" alt="ご来院"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/step2.png" alt="2"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex">
          <div class="text">
            <h3 class="cblue ls1">診察・カウンセリング</h3>
            <p class="gosic cblue ls1"> 経験豊富な医師が診察致します。治療について些細なことでもご納得のいくまでご相談下さい。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step2_thumb.png" alt="診察・カウンセリング"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/step3.png" alt="3"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
          <li class="box-size flex">
          <div class="text">
            <h3 class="cblue ls1">お会計</h3>
            <p class="gosic cblue ls1">施術の前にお会計をお願いいたします。<br>
当院は、下記のクレジットカードのご利用が可能です。</p>
              <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/common/card.png?0918" alt="カード"></div>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step5_thumb.png" alt="診察・カウンセリング"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/step4.png" alt="4"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex mb0">
          <div class="text">
            <h3 class="cblue ls1">施術</h3>
            <p class="gosic cblue ls1"> 痛みを極力に抑え、安全第一に責任を持って施術いたします。施術は全て有資格者が行いますのでご安心下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step4_thumb.png" alt="施術"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp3/step5.png" alt="4"></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="lp-qa">
    <div class="lp-inner">
      <h2 class="gd tc">よくある質問</h2>
      <div class="swiper-container slide-p2 swiper5 cont">
        <div class="swiper-wrapper gosic">
          <?php
          $args = array(
            'post_type' => 'faq',
            'tax_query' => array(
              array(
                'taxonomy' => 'faq_kind',
                'field' => 'slug',
                'terms' => array( 's_lift', 'nose' )
              )
            ),
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $the_query = new WP_Query( $args );
          while ( $the_query->have_posts() ): $the_query->the_post();
          ?>
          
          <!-- Slides -->
          
          <div class="qas gd box-size swiper-slide">
            <p class="qa-txt mb15 cblue"><span class="q">Q</span>
              <?php the_title(); ?>
            </p>
            <div class="qa-txt text-over gd"><span class="a">A</span>
              <?php remove_filter('the_content', 'wpautop'); ?>
              <?php the_content(); ?>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="swiper-button-prev prev2"></div>
        <div class="swiper-button-next next2"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <section class="lp-doctor">
    <div class="lp-inner">
      <div class="box flex">
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/doctor.png" alt="先山 史先生"></div>
        <div class="desc">
          <h2 class="cp3 ls2"> <span>fumi beauty clinic 院長</span> 先山 史 </h2>
          <dl class="gosic gd flex">
            <dt>経歴</dt>
            <div>
              <dd><span class="year">2003年</span>帝京大学医学部　卒業</dd>
              <dd><span class="year">2003年</span>帝京大学病院形成外科　入局</dd>
              <dd><span class="year">2011年</span>市立旭川病院皮膚科　入局</dd>
              <dd><span class="year">2015年</span>トキコクリニク　淀屋橋院長　就任</dd>
              <dd><span class="year">2016年</span>トキコクリニク　梅田院長　就任</dd>
              <dd><span class="year">2019年</span>fumi beauty clinic　院長　就任</dd>
            </div>
          </dl>
          <dl class="gosic gd flex">
            <dt>所属</dt>
            <div>
              <dd>ジュビダームビスタ認定医、
                日本形成外科学会、日本抗加齢学会、日本美容皮膚科学会</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <section class="info">
    <div class="lp-inner">
      <h2 class="gd tc ls1">クリニック情報</h2>
      <div class="box flex">
        <div class="map-cont">
          <div class="map" id="map"> </div>
          <a href="https://www.google.com/maps/place/%E3%80%92530-0012+%E5%A4%A7%E9%98%AA%E5%BA%9C%E5%A4%A7%E9%98%AA%E5%B8%82%E5%8C%97%E5%8C%BA%E8%8A%9D%E7%94%B0%EF%BC%92%E4%B8%81%E7%9B%AE%EF%BC%98%E2%88%92%EF%BC%93%EF%BC%93+%E8%8A%9D%E7%94%B0%E3%83%93%E3%83%AB/@34.7071032,135.4959917,17z/data=!4m2!3m1!1s0x6000e68fc13f248b:0xc11dcd33c073a9ec" target="_blank" class="cp gosic">Google Mapで見る</a> </div>
        <div class="desc gosic">
          <div class="clinic-info gd mb10"> 大阪市北区芝田2丁目8-33 芝田ビル3F<br>
            <span>TEL 06-6372-2323</span><br>
            FAX 06-6372-2324<br>
          </div>
          <p class="cp time">営業時間</p>
          <table>
            <tbody>
              <tr>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th>日</th>
              </tr>
              <tr>
                <td>〇<br>
                  10-18時</td>
                <td>〇<br>
                  10-18時</td>
                <td>〇<br>
                  10-18時</td>
                <td>-<br>
                  定休日</td>
                <td>〇<br>
                  10-18時</td>
                <td>〇<br>
                  10-17時</td>
                <td>-<br>
                  定休日</td>
              </tr>
            </tbody>
          </table>
          <div class="clinic-info gd"> 月、火、水、金  10時～18時<br>
            土  10時～17時<br>
            木、日、祝が定休日になります。 </div>
        </div>
      </div>
    </div>
  </section>
  <!--MAP END-->
  
  <footer class="lp-footer">
    <div class="inner">
      <p class="copy cp"><small>fumi beauty cinic(ふみビューティクリニック梅田)美容皮膚科・形成外科・皮膚科<br>
        Copyright(C) fumi beauty clinic All Rights Reserved.</small></p>
    </div>
  </footer>
  <a href="#" class="page-top bounce"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_up.svg" alt="scrool-up"></a> </div>
<!--WRAPPER END--> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script> 
<script>
    function initMap() {
        var latlng = new google.maps.LatLng( 34.707103, 135.495992 );
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: latlng
        });
			
             var marker = new google.maps.Marker({
          position: latlng,
          map: map
        });
			
        /*=========ここから追加=========*/
        var mapStyle = [ {
            "stylers": [ {
            "saturation": -100
            } ]
        } ];
        var mapType = new google.maps.StyledMapType(mapStyle);
            map.mapTypes.set( 'GrayScaleMap', mapType);
            map.setMapTypeId( 'GrayScaleMap' );
        /*=========ここまで追加=========*/
      }
</script> 
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBwr6DPo5X5S4CbkcKpSV5atpzNnKAifI&callback=initMap"></script>
<?php wp_footer(); ?>
</body>
</html>