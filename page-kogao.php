<?php
/*
Template Name: 小顔治療 
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">施術：小顔治療</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="ope-top-desc gosic">
  <p class="tc pc">お顔が大きくみえる原因が脂肪なのか、筋肉のはりなのか、<br>
    たるみなどかによって治療方法が異なります。<br>
    診察でより適切な治療方法をご提案致します。</p>
  <p class="tc sp">お顔が大きくみえる原因が脂肪なのか、筋肉のはりなのか、たるみなどかによって治療方法が異なります。診察でより適切な治療方法をご提案致します。</p>
  <div class="ancor-box"> <a href="#area1">脂肪分解注射</a><a href="#area2">ボトックスリフト</a><a href="#area3">エラボトックス</a> </div>
</section>
<section class="ope-intro bg-cp" id="area1">
  <div class="inner flex al-cent">
    <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/thumb01.png" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>BNLS/脂肪分解注射</h2>
      <p class="ls1 gosic">主に脂肪が原因の場合に効果的な治療です。脂肪の分解と排出を促進させるお薬を気になる部分に注射します。 </p>
    </div>
  </div>
</section>
<section class="features layout1">
  <div class="inner-box2">
    <h2 class="cp gosic tc ls1">BNLS/脂肪分解注射の特徴</h2>
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
    <div class="img"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/img01.png" alt="注入部位"> </div>
  </div>
</section>
<?php if( have_rows('ope_kogao_bnls',155) ): ?>

<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
       <?php while ( have_rows('ope_kogao_bnls',155) ) : the_row(); ?>
            <div class="case-box flex">
           <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('befor_p',155); ?>" alt=""> </div>
          <p class="gosic tc"><?php the_sub_field('befor_txt',155); ?></p>
        </div>
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('after_p',155); ?>" alt=""> </div>
          <p class="gosic tc"><?php the_sub_field('after_txt',155); ?></p>
        </div>
          
          </div>
          
        <?php endwhile; ?>
    </div>
    <div class="note box-size gosic">
      <p>リスク副作用</p>
      <p>・個人差がありますが、赤み、浮腫み感、腫れ、内出血などが発生する場合がございます。</p>
    </div>
  </div>
</section><?php else: ?>
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
    <h2 class="tc ls1">BNLS/脂肪分解注射料金</h2>
   
   
    
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">回数</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt>BNLSneo  1cc</dt>
        <dd>¥9,800</dd>
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
          'terms' => array( 'bnls' )
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
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/thumb01.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>ボトックスリフト</h2>
      <p class="ls1 gosic">引き締めを目的としてボトックスを細かく注射する方法です。表情じわを改善するボトックスと違い、ボトックスを皮膚のごく表面に浅く細かく注入する事でお顔を引き締めたり引き上げる治療です。1週間から10日おきに数回行うとより効果的です。 </p>
    </div>
 
</section>
<section class="features layout1">
  <div class="inner-box2">
    <h2 class="cp gosic tc ls1">ボトックスリフトの特徴</h2>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point04.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">たるみとシワ解消</h3>
        <p class="gosic">小顔効果だけではなく、自然な表情を保ちながらたるみとシワを和らげることが可能です。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point05.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h3 class="gd ls1">お肌を滑らかに</h3>
        <p class="gosic">ボトックスを注入することで、筋肉の表面繊維だけの働きを弱めて、皮膚の表面を滑らかにします。</p>
      </div>
    </div>
 
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point06.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h3 class="gd ls1">フェイスラインを<br>
美しくする</h3>
        <p class="gosic">アゴから首に、ほうれいせんの横の肉、眼の下のたるみに対するリフトアップ効果が期待できます。</p>
      </div>
      </div> </div>
</section>

<section class="infu-point">
  <div class="inner">
    <h2 class="cp tc goisc ls1">注入部位</h2>
    <div class="img"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/img02.png" alt="注入部位"> </div>
  </div>
</section>


<?php if( have_rows('ope_kogao_btxlift',155) ): ?>

<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
       <?php while ( have_rows('ope_kogao_btxlift',155) ) : the_row(); ?>
            <div class="case-box flex">
           <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('befor_p',155); ?>" alt=""> </div>
          <p class="gosic tc"><?php the_sub_field('befor_txt',155); ?></p>
        </div>
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('after_p',155); ?>" alt=""> </div>
          <p class="gosic tc"><?php the_sub_field('after_txt',155); ?></p>
        </div>
          
          </div>
          
        <?php endwhile; ?>
    
    </div>
    <div class="note box-size gosic">
      <p>リスク副作用</p>
      <p>・個人差がありますが、腫れなどが発生する場合がございます。</p>
    </div>
  </div>
</section><?php else: ?>
  <?php endif; ?>
<section class="price">
  <div class="inner-box2">
    <h2 class="tc ls1">ボトックスリフト料金</h2>
    <p class="p-desc gosic tc mb60 pc">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。<br>
ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。
ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
      
       <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">&nbsp;</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt>ボトックスリフト</dt>
        <dd>¥68,000</dd>
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
          'terms' => array( 'bx_lift' )
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
<section class="ope-intro bg-cp" id="area3">
  <div class="inner flex al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/thumb02.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>エラボトックス</h2>
      <p class="ls1 gosic">エラがはって見える場合、咬筋と言われる噛む時に使う筋肉が発達している事がほとんどです。咬筋にボトックスを注射する事で咬筋が小さくなり小顔効果が高い治療です。 </p>
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
<?php if( have_rows('ope_kogao_btxela',155) ): ?>

<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
       <?php while ( have_rows('ope_kogao_btxela',155) ) : the_row(); ?>
            <div class="case-box flex">
           <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('befor_p',155); ?>" alt=""> </div>
          <p class="gosic tc"><?php the_sub_field('befor_txt',155); ?></p>
        </div>
        <div class="box">
          <div class="thumb"> <img src="<?php the_sub_field('after_p',155); ?>" alt=""> </div>
          <p class="gosic tc"><?php the_sub_field('after_txt',155); ?></p>
        </div>
          
          </div>
          
        <?php endwhile; ?>
    
    </div>
    <div class="note box-size gosic">
      <p>リスク副作用</p>
      <p>・個人差がありますが、腫れなどが発生する場合がございます。</p>
    </div>
  </div>
</section><?php else: ?>
  <?php endif; ?>
<section class="price">
  <div class="inner-box2">
    <h2 class="tc ls1">エラボトックス料金</h2>
      <p class="p-desc gosic tc mb60 pc">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。<br>
ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">&nbsp;</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt>エラボトックス</dt>
        <dd>¥50,000</dd>
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
            <h3 class="f-bold">施術開始</h3>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow03_1.jpg" alt="施術開始"></div>
          <p class="gosic ls1">痛みを極力に抑え、安全第一に責任を持って施術いたします。施術は全て有資格者が行うので、ご安心くださいませ。</p>
        </div>
        <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow03_1.jpg" alt="施術開始"></div>
      </li>
      <li class="box-size flex">
        <div class="left">
          <div class="top">
            <div class="step points f-ryu cw">STEP 04</div>
            <h3 class="f-bold">施術終了・お会計</h3>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow04.jpg" alt="施術終了・お会計"></div>
          <p class="gosic ls1">治療が終了したら、お会計をして、そのままお帰りいただけます。</p>
        </div>
        <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow04.jpg" alt="施術終了・お会計"></div>
      </li>
    </ul>
  </div>
</section>
<?php get_footer();?>
