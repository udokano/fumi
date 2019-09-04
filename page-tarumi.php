<?php
/*
Template Name: たるみ治療
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">施術：たるみ治療</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="ope-top-desc gosic">
  <p class="tc pc">当院では溶ける糸を用いたリフトアップやヒアルロン酸注入<br>
    によるリフトアップをおすすめしています。<br>
    お顔のタイプによっておすすめの治療が変わるため、<br>
    診察でより適切な治療をご提案させていただきます。</p>
  <p class="tc sp">当院では溶ける糸を用いたリフトアップやヒアルロン酸注入によるリフトアップをおすすめしています。
    お顔のタイプによっておすすめの治療が変わるため、診察でより適切な治療をご提案させていただきます。</p>
  <div class="ancor-box"> <a href="#area1">ヒアルロン酸</a><a href="#area2">スレッドリフト</a> </div>
</section>
<section class="ope-intro bg-cp" id="area1">
  <div class="inner flex al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/thumb01.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>ヒアルロン酸注入</h2>
      <p class="ls1 gosic">ほうれい線やマリオネットライン、ゴルゴライン(目の下のくぼみ)などはたるみになるしわといえます。ヒアルロン酸でお顔全体をリフトアップさせたり、気になるしわやくぼみを埋めることで、自然な印象でたるみが改善し若々しい仕上がりとなります。</p>
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
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point04.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h3 class="gd ls1">自然な仕上がり</h3>
        <p class="gosic">いかにも、ヒアルロンを注入したような不自然なバランスになることはなく、患者様お一人お一人のお顔にあった自然な仕上がりを目指しています。</p>
      </div>
    </div>
      <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point05.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h3 class="gd ls1">顔全体のバランスを<br>
          整える</h3>
        <p class="gosic">気になる部位にヒアルロン酸を注入して、お顔全体を黄金バランスにより近づくようにします。</p>
      </div>
    </div>
  </div>
</section>
          <?php if( have_rows('ope_tarumi_hel',155) ): ?>

<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
       <?php while ( have_rows('ope_tarumi_hel',155) ) : the_row(); ?>
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
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">クレビエルコントア(あご形成)</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt>0.1cc</dt>
        <dd>¥13,000</dd>
      </dl>
      <dl class="flex">
        <dt>&nbsp;</dt>
        <dd>＊カニューレを使用する場合は別途＋¥1,250</dd>
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
<section class="ope-intro bg-cp" id="area2">
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

<?php if( have_rows('ope_tarumi_lift',155) ): ?>

<section class="case">
  <div class="inner">
    <h2 class="tc">症例</h2>
    <div class="case-wrap flex">
       <?php while ( have_rows('ope_tarumi_lift',155) ) : the_row(); ?>
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
      <p>・ごく稀に、術後は多少の腫れや突っ張り感を感じることもありますが、
        通常数日で落ち着きます。</p>
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
    <h2 class="tc ls1">スレッドリフト料金</h2>
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">シルエットソフト</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt> 2本</dt>
        <dd>¥160,000(1本あたり¥80,000)</dd>
      </dl>
      <dl class="flex">
        <dt> 4本</dt>
        <dd>¥280,000(1本あたり¥70,000)</dd>
      </dl>
      <dl class="flex">
        <dt> 6本</dt>
        <dd>¥360,000(1本あたり¥60,000)</dd>
      </dl>
      <dl class="flex">
        <dt> 8本</dt>
        <dd>¥400,000(1本あたり¥50,000)</dd>
      </dl>
    </div>
    <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">Gコグ</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt> 1本</dt>
        <dd>¥60,000</dd>
      </dl>
    </div>
      
      <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">VOVリフト</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt> 1本</dt>
        <dd>¥40,000</dd>
      </dl>
          <dl class="flex">
        <dt> 5本目以降</dt>
        <dd>1本あたり¥30,000<br>
Gコグとの併用の場合1本30000円</dd>
      </dl>
    </div>
      
      <div class="price-list gosic">
      <dl class="flex">
        <dt class="fw600">引き締め系ショートスレッド</dt>
        <dd class="f-bold">税別</dd>
      </dl>
      <dl class="flex">
        <dt> 10本</dt>
        <dd>¥40,000</dd>
      </dl>
          <dl class="flex">
        <dt> 20本</dt>
        <dd>¥70,000</dd>
      </dl>
          <dl class="flex">
        <dt> 30本</dt>
        <dd>¥90,000</dd>
      </dl>
    </div>
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
