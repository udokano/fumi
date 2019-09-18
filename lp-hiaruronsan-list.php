<?php
/*
Template Name: ランディングページヒアルロン酸 リスティング用
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
<body id="lp1" class="lps">
<div class="wrapper">
<?php if ( wp_is_mobile() ) : ?>
<header class="fv-sp"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/sp/fv_sp.jpg" alt=""> </header>
<?php else: ?>
<header class="lp-header">
  <div class="header-inner flex al-cent">
    <div class="logo tc"><a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="FMUI BEAUTY CLINIC"></a></div>
    <div class="lp-cv-btn flex"> <a class="" href="https://fumibeauty.jp/reserve/lp-hialrunsann.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/header_btn01.png" alt="来院予約"></a> <a class="btn2" href="<?php echo home_url( '/' ); ?>contact-list" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/header_btn02.png" alt="お問合わせ"></a> </div>
  </div>
</header>
<div class="lp-fv cf">
  <div class="fv-inner">
    <div class="box">
      <p class="cach"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/fv_cach01.png" alt="そのたるみ、シワ、ほうれい線…諦めていませんか？"></p>
      <h1><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/fv_cach02.png" alt="ヒアルロン酸注入治療で
ナチュラルな若返りを"></h1>
      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/fv_img.png" alt="即効性が
ある少ないダウンタイム自然な仕上がり"></div>
    </div>
  </div>
</div>
<!--FV END-->

<?php endif; ?>
<?php if ( wp_is_mobile() ) : ?>
<?php else: ?>
<section class="area2 area-bgs" id="bg1">
  <div class="lp-inner">
    <div class="box">
      <h2><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area2_h2.png" alt="こんなことでお悩みの方"></h2>
      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area2_img.png" alt="ほうれい線顔のしわ"></div>
    </div>
  </div>
</section>
<?php endif; ?>
<section class="area3 area-bgs" id="bg2">
  <div class="lp-inner">
    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_img.png" alt="点滴"></div>
    <h2><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_h2.png" alt="オーダーメイドヒアルロン酸注入治療なら"></h2>
    <ul class="thumbs flex">
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_thumb01.jpg" alt="しわ・たるみの解消"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_thumb02.jpg" alt="お顔全体の
バランスを改善"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_thumb03.jpg" alt="あご・輪郭形成"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_thumb04.jpg" alt="額のボリュームアップ"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_thumb05.jpg" alt="唇のボリュームアップ"></li>
      <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_thumb06.jpg" alt="涙袋形成"></li>
    </ul>
  </div>
</section>
<div class="lp-cv">
  <div class="top">
    <h2 class="cw ls1 tc">ご予約・お問合わせはこちらから</h2>
  </div>
  <div class="lp-inner">
    <div class="top-cont flex al-cent"> <a href="<?php echo home_url( '/' ); ?>tel/lp-hialrunsann.html" class="cw ls2 tel">06-6372-2323</a>
      <p class="sm tc cw time">受付時間<br>
        10:00～18:00 </p>
    </div>
    <div class="lp-cv-btn flex"> <a href="https://fumibeauty.jp/reserve/lp-hialrunsann.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/cv_btn01.png" alt="来院予約
"></a> <a href="<?php echo home_url( '/' ); ?>contact-list" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/cv_btn02.png" alt="お問合わせ
"></a> </div>
  </div>
</div>
<section class="area5">
<div class="lp-inner">
  <h2 class="tc gd ls2">なぜ、<span class="cp">シワ</span>ができるの？</h2>
  <ul class="descs">
    <li class="box-size flex">
      <div class="desc">
        <h3 class="flex"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/num1.png" alt="1"> <span class="cp">骨格の変化</span> </h3>
        <p class="gd gosic ls1">加齢に伴い骨の損失と後退が進み、シワの原因となったりお顔バランスが悪くなる原因となります。</p>
      </div>
      <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area5_thumb01.png" alt="骨格縮小によるシワの発生"> </div>
    </li>
    <li class="box-size flex">
      <div class="desc">
        <h3 class="flex"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/num2.png" alt="1" class="num23"> <span class="cp">靭帯の変化</span> </h3>
        <p class="gd gosic ls1">お顔の皮膚には靭帯があり、真皮と骨をつないで皮膚を支えています。加齢に伴って顔の靭帯が衰えて垂れ下がると、顔の皮膚や脂肪も下垂し、しわやたるみなどの原因となります。</p>
      </div>
      <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area5_thumb02.png" alt="靭帯老化によるシワの発生"> </div>
    </li>
    <li class="box-size flex">
      <div class="desc">
        <h3 class="flex"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/num3.png" alt="1" class="num23"> <span class="cp">皮下脂肪の変化</span> </h3>
        <p class="gd gosic ls1">皮下脂肪は靭帯や筋肉とのバランスで下垂したり減少したりして、しわやたるみの原因となります。</p>
      </div>
      <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area5_thumb03.png" alt="皮下脂肪の変化によるシワの発生"> </div>
    </li>
    <li class="box-size flex">
      <div class="desc">
        <h3 class="flex"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/num4.png" alt="4" class="num23"> <span class="cp">皮膚の変化</span> </h3>
        <p class="gd gosic ls1">乾燥や摩擦、紫外線などの影響で皮膚は老化して、しわやたるみの原因となります。</p>
      </div>
      <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area5_thumb05.png" alt="皮膚の変化によるシワの発生"> </div>
    </li>
  </ul>
  </section>
  <section class="area6">
    <div class="lp-inner">
      <h2 class="cp tc ls2">ヒアルロン酸<span class="gd">注入で</span></h2>
      <div class="box flex">
        <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area6_thumb.png" alt="しわ・たるみの改善"> </div>
        <div class="desc cp">もちろん気になる部位のみへの注入も可能ですが、当院ではお顔全体のバランスを見ながらより美しく見えるバランス(黄金バランス)へと導きます。たるみの解消、輪郭の改善、自然な若返りができる注入方法です。</div>
      </div>
    </div>
  </section>
  <section class="area7">
    <div class="lp-inner">
      <h2 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_h2.png" alt="当院ではただヒアルロン酸を注入するだけではありませんお顔全体のバランスが整うように"></h2>
      <p class="cach tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_cach01.png" alt="より自然に、より美しくトータルフェイシャルトリートメントを行います。"></p>
      <div class="box mb25 box-size">
        <h3 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_cach02.png" alt="「もっとも美しいとされる黄金比」をもとに
ご提案を行います。"></h3>
        <ul class="descs flex">
          <li class="gosic box-size">
            <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_thumb01.png" alt="上顔面・中顔面・下顔面のバランス"> </div>
            <p class="gd ls1">髪の生え際から尾毛外側部、尾毛外側部から尾翼基部、尾翼基部から顎先までは１：１：１が綺麗にみえるバランスです。長さだけではなく、ボリューム感も重要です。 </p>
          </li>
          <li class="gosic box-size">
            <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_thumb02.png" alt="こめかみやゴルゴ部分、アゴなどのボリュームロス"> </div>
            <p class="gd ls1">こめかみや頬などの凹みを改善することでお顔が自然にリフトアップし、輪郭も改善します。</p>
          </li>
          <li class="gosic box-size">
            <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_thumb03.png" alt="輪  郭"> </div>
            <p class="gd ls1">お顔の輪郭はとても大切です。オーバルシェイプ（卵型）やハートシェイプが理想的です。</p>
          </li>
          <li class="gosic box-size">
            <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_thumb04.png" alt="Eライン"> </div>
            <p class="gd ls1">横から見たときの鼻・口・顎のバランス、額・鼻・顎のバランスがEラインと言われ、綺麗にみえるポイントになります。 </p>
          </li>
          <li class="gosic box-size">
            <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_thumb05.png" alt="左右対称になるように"> </div>
            <p class="gd ls1">より左右対称に近い方が美しく見えます。</p>
            <a href="http://livedoor.blogimg.jp/dr_sakiyama/imgs/2/c/2c46f17e.jpg" class="ancor-btn sp-dis" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_btn.png" alt="お顔の左右対称について"></a> </li>
          <li class="gosic box-size">
            <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_thumb06.png" alt="パーツのバランス"> </div>
            <p class="gd ls1">目の幅・目頭から目頭の距離、鼻下から下口唇・下口唇から顎の距離なども重要です。</p>
          </li>
        </ul>
        <a href="http://livedoor.blogimg.jp/dr_sakiyama/imgs/2/c/2c46f17e.jpg" class="ancor-btn pc-dis" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_btn.png" alt="お顔の左右対称について"></a> </div>
      <div class="box">
        <h3 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_cach03.png" alt="もちろん気になる部位のみの注入治療も行っておりますので、お気軽にご相談ください。"></h3>
        <?php if ( wp_is_mobile() ) : ?>
        <div class="img tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/sp/area7_thumbs.png" alt="thumb"></div>
        <?php else: ?>
        <div class="img tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_thumbs.png" alt="thumb"></div>
        <?php endif; ?>
      </div>
      <h3 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area7_cach04.png" alt="治療のポイント"></h3>
      <p class="tc ls1 gd mb20 pc">ヒアルロン酸注入治療ではこれらのバランスを見ながらよりその方に合った<br>
        理想のバランス（黄金バランス）に整えていくように注入します。<br>
        たるみ、ボリュームロス、輪郭、これらがトータルで改善し、老化に対して根本から<br>
        アプローチできる治療です。</p>
      <p class="tc ls1 gd mb20 sp">ヒアルロン酸注入治療ではこれらのバランスを見ながらよりその方に合った理想のバランス（黄金バランス）に整えていくように注入します。
        たるみ 、 ボリュームロス、 輪郭、これらがトータルで改善し、老化に対して根本からアプローチできる治療です。</p>
      <p class="tc ls1 gd">溝を埋めるだけの注入治療（ほうれい線のみ注入する、<br>
        目の下のみ注入するといったもの）と違って、仕上がりはとても自然で美しいです。</p>
    </div>
  </section>
  <section class="area8 area-bgs" id="bg4">
    <div class="lp-inner">
      <div class="box">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area8_cach.png" alt="お一人お一人の悩みに寄り添い、
確かな技術とセンスでその方に合った
自然な美しさをご提案いたします。"></h2>
        <p class="gosic mb25">私たちは丁寧なカウンセリングを心がけており、<br>
          患者様のご要望やお悩みに寄り添い、<br>
          その方に合った治療法をご提案いたします。<br>
          またナチュラルで違和感のない仕上がりを重視します。</p>
        <p class="gosic"> <span class="fs-midle cp mincho">もちろん部分的なご相談も可能です。</span><br>
          当院は全体のバランスをみてご提案を行う<br>
          トータルフェイシャルトリートメントをおすすめしておりますが、<br>
          部分的な注入も行っております。<br>
          是非お気軽にご相談も可能ください。 </p>
      </div>
    </div>
  </section>
  <section class="area9">
    <div class="lp-inner">
      <div class="box box-size">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area9_h2.png" alt="より根本解決に近い注入治療をご提供"></h2>
        <p class="cach tc cp">しわやたるみは、単純にゆるんだ溝を<br>
          ヒアルロン酸で埋めればいいという事ではありません。</p>
        <div class="desc-box flex">
          <div class="desc gosic"> お顔の下垂が原因で法令線ができる場合など、<br>
            法令線だけ埋めても全体的に見ると<br>
            <span class="cp">不自然な仕上がり</span>になってしまう事もあります。<br>
            しわに沿って注入する事も出来ますが、下垂の程度、<br>
            ボリュームロスの程度など<span class="cp">トータルで判断</span>し、<br>
            <span class="cp">ナチュラルな美しさを追及</span>できる注入量を<br>
            ご提案する事が大事だと考えています。 </div>
          <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area9_thumb.jpg" alt="サムネイル"> </div>
        </div>
      </div>
    </div>
  </section>
  <section class="area10 area-bgs" id="bg5">
    <div class="lp-inner cf">
      <div class="box">
        <h2 class="cp ls2">安心・安全な治療をご提案いたします。</h2>
        <p class="gosic">日本の厚生労働省で承認を得ている製剤やFDAの承認を得ている安全性の確立された製剤を特におすすめしています。<br>
          またなるべくダウンタイムやリスク、副作用のない治療をおすすめします。</p>
      </div>
    </div>
  </section>
  <?php if( have_rows('pr1',155) ): ?>
  <section class="case area-bgs" id="bg6">
    <div class="lp-inner">
      <h2 class="gd tc">症例写真</h2>
      <div class="case-photos flex">
        <?php while ( have_rows('pr1',155) ) : the_row(); ?>
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
          <p class="gosic tc pc">個人差がありますが、注入後、内出血が生じることがあります。<br>
            内出血によってアザができた場合は1～2週間程度で消滅します。<br>
            軽い腫れや軽度の疼痛が出る方もいますが、多くの場合翌日には治ります。</p>
          <p class="gosic tc sp">個人差がありますが、注入後、内出血が生じることがあります。内出血によってアザができた場合は1～2週間程度で消滅します。軽い腫れや軽度の疼痛が出る方もいますが、多くの場合翌日には治ります。</p>
        </div>
      </div>
    </div>
  </section>
  <?php else: ?>
  <?php endif; ?>
  <section class="infu">
    <div class="lp-inner">
      <h2 class="gd tc">注入可能部位</h2>
      <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp1/infu_img.png" alt="注入可能部位"> </div>
    </div>
  </section>
  <section class="price">
    <div class="lp-inner">
      <h2 class="gd tc">料金</h2>
      <!--    <table class="gosic">
        <thead>
          <tr>
            <th scope="col">部位</th>
            <th scope="col">目安量</th>
            <th scope="col">値段</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>目の下</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>鼻</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>頬</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>ほうれい線</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>唇</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>顎</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
        </tbody>
      </table>-->
      
      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">施術名</th>
            <th scope="col">目安量</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="5"style="background-color: #eddbe7; vertical-align: middle;" class="left">ボリューマ、ボリフト</td>
            <td>0.1cc</td>
            <td class="right">¥10,000</td>
          </tr>
          <tr>
            <td>1本</td>
            <td class="right">¥100,000</td>
          </tr>
          <tr>
            <td>2本</td>
            <td class="right">¥180,000</td>
          </tr>
          <tr>
            <td>3本目以降</td>
            <td class="right">1本あたりプラス¥60,000</td>
          </tr>
        </tbody>
      </table>
      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">施術名</th>
            <th scope="col">目安量</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td style="background-color: #eddbe7; vertical-align: middle;" class="left">ボルベラ</td>
            <td>0.1cc</td>
            <td class="right">¥10,000</td>
          </tr>
        </tbody>
      </table>
      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">施術名</th>
            <th scope="col">目安量</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2" style="background-color: #eddbe7; vertical-align: middle;" class="left">クレビエルコントア(あご形成) </td>
            <td>0.1cc</td>
            <td class="right">¥13,000</td>
          </tr>
        </tbody>
      </table>
      <p class="note tc gosic">＊カニューレを使用する場合は別途＋¥1,250(税別)</p>
    </div>
  </section>
  <div class="lp-cv">
    <div class="top">
      <h2 class="cw ls1 tc">ご予約・お問合わせはこちらから</h2>
    </div>
    <div class="lp-inner">
      <div class="top-cont flex al-cent"> <a href="https://fumibeauty.jp/tel/lp-hialrunsann.html" class="cw ls2 tel">06-6372-2323</a>
        <p class="sm tc cw time">受付時間<br>
          10:00～18:00 </p>
      </div>
      <div class="lp-cv-btn flex"> <a href="https://fumibeauty.jp/reserve/lp-hialrunsann.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/cv_btn01.png" alt="来院予約"></a> <a href="<?php echo home_url( '/' ); ?>contact-list" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/cv_btn02.png" alt="お問い合わせ"></a> </div>
    </div>
  </div>
  <section class="flow">
    <div class="lp-inner">
      <h2 class="gd tc">施術の流れ</h2>
      <ul class="steps">
        <li class="box-size flex">
          <div class="text">
            <h3 class="cp ls1">予約</h3>
            <p class="gosic cp ls1"> お電話・予約システムにてご予約をよろしくお願いいたします。来院前のご不明な点があれば、お気軽にご相談下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step1_thumb.png" alt="予約"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step1.png" alt="1"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex">
          <div class="text">
            <h3 class="cp ls1">ご来院</h3>
            <p class="gosic cp ls1"> ご予約された、日時でのご来院をお願いいたします。カウンセリングでお客様のお悩みをお聞かせ下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step3_thumb.png" alt="ご来院"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step2.png" alt="2"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex">
          <div class="text">
            <h3 class="cp ls1">診察・カウンセリング</h3>
            <p class="gosic cp ls1"> 経験豊富な医師が診察致します。治療について些細なことでもご納得のいくまでご相談下さい。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step2_thumb.png" alt="診察・カウンセリング"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step3.png" alt="3"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
          <li class="box-size flex">
          <div class="text">
            <h3 class="cp ls1">お会計</h3>
            <p class="gosic cp ls1">施術の前にお会計をお願いいたします。<br>
当院は、下記のクレジットカードのご利用が可能です。</p><div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/common/card.png" alt="カード"></div>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step5_thumb.png" alt="診察・カウンセリング"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step4.png" alt="4"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex mb0">
          <div class="text">
            <h3 class="cp ls1">施術</h3>
            <p class="gosic cp ls1"> 痛みを極力に抑え、安全第一に責任を持って施術いたします。施術は全て有資格者が行いますのでご安心下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step4_thumb.png" alt="施術"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step5.png" alt="5"></div>
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
                'terms' => array( 'hes' )
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
            <p class="qa-txt mb15 cp"><span class="q">Q</span>
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
          <h2 class="cp ls2"> <span>fumi beauty clinic 院長</span> 先山 史 </h2>
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