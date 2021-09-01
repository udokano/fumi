<?php
/*
Template Name: 小顔治療
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">小顔治療</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="ope-top-desc gosic">
  <p class="tc pc">お顔が大きくみえる原因が脂肪なのか、筋肉のはりなのか、<br>
    たるみなどかによって治療方法が異なります。<br>
    診察でより適切な治療方法をご提案致します。</p>
  <p class="tc sp">お顔が大きくみえる原因が脂肪なのか、筋肉のはりなのか、たるみなどかによって治療方法が異なります。診察でより適切な治療方法をご提案致します。</p>
  <div class="ancor-box">
     <a href="#area3">スレッドリフト</a>
     <a href="#area1">脂肪溶解注射</a>
  <a href="#area2">エラボトックス</a>
  <a href="#area4">ウルトラセルQプラス</a>

</div>
</section>
<section class="ope-intro bg-cp" id="area3">
  <div class="inner flex al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/thumb01.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>スレッドリフト</h2>
      <p class="ls1 gosic">溶ける糸を用いて気になるたるみを引き上げます。</p>
    </div>
  </div>
</section>
<section class="features layout1">
  <div class="inner-box2">
    <h2 class="cp gosic tc ls1">スレッドリフトの特徴</h2>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point01.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">お肌のハリ向上</h3>
        <p class="gosic">挿入した糸が周囲の組織を活性化させ自身のコラーゲンが増生されることによって、お肌のハリが向上します。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point02.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h3 class="gd ls1">小顔効果</h3>
        <p class="gosic">コラーゲンの増生による、お肌の引き締め効果で小顔に近づけることが可能です。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point03.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h3 class="gd ls1">リフトアップ効果</h3>
        <p class="gosic">糸の挿入によって、お肌の引き上げ効果（リフティング効果）で、リフトアップが期待できます。</p>
      </div>
    </div>
  </div>
</section>
<?php if (have_rows('ope_tarumi_lift', 155)): ?>
<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
      <?php while (have_rows('ope_tarumi_lift', 155)) : the_row(); ?>
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
      <p>・ごく稀に、術後は多少の腫れや突っ張り感を感じることもありますが、
        通常数日で落ち着きます。</p>
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
    <h2 class="tc ls1">スレッドリフト料金</h2>
<!--2021/2/18　追加↓  -->
	<!-- ./price-list -->
    <div class="price-list gosic " id="silhouette_lift__price">
      <dl class="flex">
<!--2021/3/16　料金税込み価格修正↓  -->
        <dt class="fw600">オーダーメイドスレッドリフト</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt>S</dt>
        <dd>￥418,000</dd>
      </dl>
      <dl class="flex">
        <dt>M</dt>
        <dd>￥616,000</dd>
      </dl>
      <dl class="flex">
        <dt>L</dt>
        <dd>￥792,000</dd>
      </dl>
    </div>
<!--2021/2/18　追加↑  -->
	 <!-- ./price-list -->
    <div class="price-list gosic " id="silhouette_lift__price">
      <dl class="flex">
        <dt class="fw600">シルエットソフト・アンカーDXダブル(3Dリフト)</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt> 2本</dt>
        <dd>¥214,500(1本あたり¥107,250)</dd>
      </dl>
      <dl class="flex">
        <dt> 4本</dt>
        <dd>¥325,600(1本あたり¥81,400)</dd>
      </dl>
      <dl class="flex">
        <dt> 6本</dt>
        <dd>¥415,800(1本あたり¥69,300)</dd>
      </dl>
      <dl class="flex">
        <dt> 8本</dt>
        <dd>¥440,000(1本あたり¥55,000)</dd>
      </dl>
    </div>
    <!-- ./price-list -->
    <div class="price-list gosic " id="gcog_lift__price">
      <dl class="flex">
        <dt class="fw600">Gコグリフト・アンカープラス</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt> 1本</dt>
        <dd>¥66,000</dd>
      </dl>
    </div>
    <!-- ./price-list -->
    <div class="price-list gosic " id="vov_lift__price">
      <dl class="flex">
        <dt class="fw600">VOVリフトプレミアム</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt> 1本</dt>
        <dd>¥44,000</dd>
      </dl>
      <dl class="flex">
        <dt> 5本目以降</dt>
        <dd>1本あたり¥33,000<br>
          Gコグリフトとの併用の場合1本33000円</dd>
      </dl>
    </div>
    <!-- ./price-list -->
     <div class="price-list gosic " id="selfu_rock__price">
      <dl class="flex">
        <dt class="fw600">セルフロック</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt> 1本</dt>
        <dd>¥22,000</dd>
      </dl>
    </div>
    <!-- ./price-list -->
    <div class="price-list gosic " id="shopping_lift__price">
      <dl class="flex">
        <dt class="fw600">ショッピングリフト<br class="sp">(ビューティーエナジー)</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt> 20本</dt>
        <dd>¥72,600</dd>
      </dl>
      <dl class="flex">
        <dt> 40本</dt>
        <dd>¥112,200</dd>
      </dl>
      <dl class="flex">
        <dt> 60本</dt>
        <dd>¥151,800</dd>
      </dl>
      <dl class="flex">
        <dt> 80本</dt>
        <dd>¥191,400</dd>
      </dl>
    </div>
    <!-- ./price-list -->
    <div class="price-list gosic " id="thread_lift__price">
      <dl class="flex">
        <dt class="fw600">スレッドアイリフト(Gグロス)</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt> 10本</dt>
        <dd>¥51,700</dd>
      </dl>
      <dl class="flex">
        <dt> 20本</dt>
        <dd>¥75,900</dd>
      </dl>
    </div>
    <!-- ./price-list -->
  </div>
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
          'terms' => array( 's_lift' )
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
<section class="ope-intro bg-cp" id="area1">
  <div class="inner flex al-cent">
    <div class="thumb-sq">
    <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/thumb03-01.jpg?012544522" alt="サムネイル">
    </div>
    <!-- ./thumb-sq -->
    <div class="text text-wide box-size">
      <h2>脂肪溶解注射/<span class="ttl--small">BNLSneo、<br class="sp">デオリポ(カベルライン)、チンセラプラス</span></h2>
      <div class="bnls-btn bnls-btn--p02">
             <a href="<?php echo home_url( '/' ); ?>list#link-injection01" class="case__btn bnls-btn__link bnls-btn__link--p02" target="_blank">BNLSneo</a>
              <a href="<?php echo home_url( '/' ); ?>list#link-injection02" class="case__btn bnls-btn__link bnls-btn__link--lhauto bnls-btn__link--p02" target="_blank"><span class="bnls-btn__link--text-cent">デオリポ<br>(カベルライン)</span></a>
               <a href="<?php echo home_url( '/' ); ?>list#link-injection03" class="case__btn bnls-btn__link bnls-btn__link--p02" target="_blank">チンセラプラス</a>
           </div>
           <!-- ./bnls-btn -->
      <p class="ls1 gosic mb25">脂肪の分解と排出を促進させるお薬を気になる部分に注射します。<br>
当院ではその方のお顔の状態や来院ペースに合わせBNLSneo、デオリポ(カベルライン)、チンセラプラスの3種類の脂肪溶解注射を扱っております。
</p>

 <div class="case__btn__col2">
             <a href="<?php echo home_url( '/' ); ?>list#youkai" class="case__btn btn__left">製剤一覧へ</a>
              <a href="#bnls__price" class="case__btn">料金はこちら</a>
           </div>
           <!-- ./bnls-btn -->

    </div>
  </div>
</section>
<section class="features layout1">
  <div class="inner-box2">
    <h2 class="cp gosic tc ls1">脂肪溶解注射の特徴</h2>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point01.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">自然な仕上がり</h3>
        <p class="gosic">自然な仕上がりで、明らかに整形したという感じを見せないことが期待できます。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point02.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h3 class="gd ls1">即効性がある</h3>
        <p class="gosic">脂肪吸引とは違い、約1〜2週間ほどで効果を実感できます。＊個人差があります</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point03.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h3 class="gd ls1">メスを使わない</h3>
        <p class="gosic">メスを使わないので、ダウンタイムがほとんどなく、プチ整形のような感じで、お気軽に受けれる施術です。</p>
      </div>
    </div>
  </div>
</section>
<section class="infu-point">
  <div class="inner">
    <h2 class="cp tc goisc ls1">注入部位</h2>
    <div class="img img-wide"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/img01.png" alt="注入部位"> </div>
  </div>
</section>
<?php if (have_rows('ope_kogao_bnls', 155)): ?>
<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
      <?php while (have_rows('ope_kogao_bnls', 155)) : the_row(); ?>
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
      <p>・個人差がありますが、赤み、浮腫み感、腫れ、内出血などが発生する場合がございます。</p>
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
<section class="price " id="bnls__price">
  <div class="inner-box2">
    <h2 class="tc ls1">脂肪分解注射料金</h2>
    <div class="price-list gosic" id="bnls-p">
      <dl class="flex">
        <dt class="fw600">BNLS neo</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt> 1cc<!-- （4ccまで） --></dt>
        <dd>¥9,900</dd>
      </dl>
       <dl class="flex">
        <dt>1cc（5cc以降）</dt>
        <dd>¥6,600</dd>
      </dl>
    </div>
    <!-- ./price-list -->
     <div class="price-list gosic" id="gabel-p">
      <dl class="flex">
        <dt class="fw600">デオリポ(カベルライン)</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt>1cc<!-- （4ccまで） --></dt>
        <dd>¥11,550</dd>
      </dl>
       <dl class="flex">
        <dt>1cc（5cc以降）</dt>
        <dd>¥7,700</dd>
      </dl>
    </div>
    <!-- ./price-list -->
     <div class="price-list gosic" id="tinela-p">
      <dl class="flex">
        <dt class="fw600">チンセラプラス</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt>1cc<!-- （4ccまで） --></dt>
        <dd>¥16,500</dd>
      </dl>
       <dl class="flex">
        <dt>1cc（5cc以降）</dt>
        <dd>¥11,000</dd>
      </dl>
    </div>
    <!-- ./price-list -->
  </div>
</section>
<!--<section class="ope-faq">
  <div class="inner">
    <h2 class="tc ls1">よくある質問</h2>
    <?php
    $args = array(
      'post_type' => 'faq',
      'tax_query' => array(
        array(
          'taxonomy' => 'faq_kind',
          'field' => 'slug',
          'terms' => array( 'bnls' )
        )
      ),
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $the_query = new WP_Query($args);
    while ($the_query->have_posts()): $the_query->the_post();
    ?>

    ここにループの中の記述 -->

    <!--

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
</section>-->

<section class="ope-intro bg-cp" id="area2">
  <div class="inner flex al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/thumb02.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>エラボトックス</h2>
      <p class="ls1 gosic">エラがはって見える場合、咬筋と言われる噛む時に使う筋肉が発達している事がほとんどです。咬筋にボトックスを注射する事で咬筋が小さくなり小顔効果が高い治療です。 </p><br>

    </div>
  </div>
</section>
<section class="features layout1">
  <div class="inner-box2">
    <h2 class="cp gosic tc ls1">エラボトックスの特徴</h2>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point07.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">エラの張りを<br>
          改善して小顔効果</h3>
        <p class="gosic">エラにボトックスを注入して、咬筋を小さくしてエラ張りを縮小し、小顔効果が得られます。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point08.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h3 class="gd ls1">噛み締めの改善</h3>
        <p class="gosic">噛み締めで頭痛・肩こり・歯への負担(噛み締め）がある方は、それらの症状も軽減されます。</p>
      </div>
    </div>
  </div>
</section>
<section class="infu-point">
  <div class="inner">
    <h2 class="cp tc goisc ls1">注入部位</h2>
    <div class="img"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/img03.png" alt="注入部位"> </div>
  </div>
</section>
<?php if (have_rows('ope_kogao_btxela', 155)): ?>
<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
      <?php while (have_rows('ope_kogao_btxela', 155)) : the_row(); ?>
      <div class="case-box flex">
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('befor_p', 155); ?>" alt="img"> </div>
          <p class="gosic tc">
            <?php the_sub_field('befor_txt', 155); ?>
          </p>
        </div>
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('after_p', 155); ?>" alt="img"> </div>
          <p class="gosic tc">
            <?php the_sub_field('after_txt', 155); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="note box-size gosic">
      <p>リスク副作用</p>
      <p>・個人差がありますが、腫れなどが発生する場合がございます。</p>
    </div>
  </div>
</section>
<?php else: ?>
<?php endif; ?>
<section class="price " id="ela_btx__price">
  <div class="inner-box2">
    <h2 class="tc ls1">エラボトックス料金</h2>
    <p class="p-desc gosic tc mb20 pc">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。<br>ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <p class="p-desc gosic tc mb20 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
      <a href="http://blog.livedoor.jp/dr_sakiyama/archives/cat_1215972.html" target="_blank" class="cp tc ls1" style="display: block;">症例写真はこちらから、ご参照ください</a>
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">&nbsp;</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex">
        <dt>エラボトックス</dt>
        <dd>¥55,000</dd>
      </dl>
    </div>
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
          'terms' => array( 'el_bx' )
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

<section class="ope-intro bg-cp" id="area4">
  <div class="inner flex al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/thumb02.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>ウルトラセルQプラス</h2>
      <p class="ls1 gosic">ウルトラセルQプラスは、HIFU（高密度焦点式超音波）というテクノロジーを使用し、短時間で快適に肌のリフトアップやたるみ・しわの改善、引き締めにはたらきかけます。</p>
    </div>
  </div>
</section>
<section class="features layout1">
  <div class="inner-box2">
    <h2 class="cp gosic tc ls1">ウルトラセルQプラスの特徴</h2>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point01_hifu.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">リフトアップ効果</h3>
        <p class="gosic">緩んだお顔の深層に照射された熱エネルギーがタンパク質に届き、コラーゲンが新形成されることで照射部にハリが生まれ、リフトアップへと導きます。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point02_hifu.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h3 class="gd ls1">美白・美肌効果</h3>
        <p class="gosic">リニア・カートリッジ2.0mmを高出力・広範囲にわたり照射することによって、美白美肌効果が期待できます。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point03_hifu.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h3 class="gd ls1">二重アゴの改善</h3>
        <p class="gosic">リニアカートリッジ4.5mmを使用して、気になる二重アゴを改善します。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point02.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.4</div>
        <h3 class="gd ls1">小顔効果</h3>
        <p class="gosic">顔の小顔治療は、顔全体への照射、特に目元（目のキワ）などの細かい部分へ照射を行う事によって引き締めます。</p>
      </div>
    </div>
  </div>
</section>


<section class="price native__mt" id="">
  <div class="inner-box2">
    <h2 class="tc ls1">ウルトラセルQプラス料金</h2>
   <!--  <p class="p-desc gosic tc mb60 pc">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。<br>ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p> -->
 <!--      <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。
      ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>-->
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">リフトアップカートリッジ</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex bd-bottom-none">
        <dt>顔全体</dt>
        <dd>¥154,000</dd>
      </dl>
      <dl class="flex">
        <dt>※7ヶ月以内の再施術</dt>
        <dd>¥138,600</dd>
      </dl>

       <dl class="flex bd-bottom-none">
        <dt>顔全体+あご下</dt>
        <dd>¥176,000</dd>
      </dl>
       <dl class="flex">
        <dt>※7ヶ月以内の再施術</dt>
        <dd>¥158,400</dd>
      </dl>
       <dl class="flex bd-bottom-none">
        <dt>頬のみ</dt>
        <dd>¥88,000</dd>
      </dl>

      <dl class="flex">
        <dt>※7ヶ月以内の再施術</dt>
        <dd>¥79,200</dd>
      </dl>

       <dl class="flex bd-bottom-none">
        <dt>ハイフアイ</dt>
        <dd>¥44,000</dd>
      </dl>

      <dl class="flex">
        <dt>※7ヶ月以内の再施術</dt>
        <dd>¥39,600</dd>
      </dl>
    </div>

     <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">リニアカートリッジ</dt>
        <dd class="f-bold">税込</dd>
      </dl>
      <dl class="flex bd-bottom-none">
        <dt>4.5mm 二重あご解消</dt>
        <dd>¥55,000</dd>
      </dl>

      <dl class="flex bd-bottom-none">
        <dt>※1ヶ月以内の再施術</dt>
        <dd>¥49,500</dd>
      </dl>

      <!--   <dl class="flex">
        <dt>※リフトアップカートリッジの顔全体・頬のみと併用の場合</dt>
        <dd>¥20,000</dd>
      </dl> -->

       <dl class="flex bd-bottom-none">
        <dt>2.0mm 美肌・美白</dt>
        <dd>¥55,000</dd>
      </dl>

       <dl class="flex">
        <dt>※1ヶ月以内の再施術</dt>
        <dd>¥49,500</dd>
      </dl>

    </div>
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
