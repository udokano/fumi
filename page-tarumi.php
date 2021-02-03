<?php
/*
Template Name: たるみ治療
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">たるみ治療</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="ope-top-desc gosic">
  <p class="tc pc">当院では溶ける糸を用いたリフトアップやヒアルロン酸注入<br>
    によるリフトアップをおすすめしています。<br>
    お顔のタイプによっておすすめの治療が変わるため、<br>
    診察でより適切な治療をご提案させていただきます。</p>
  <p class="tc sp">当院では溶ける糸を用いたリフトアップやヒアルロン酸注入によるリフトアップをおすすめしています。
    お顔のタイプによっておすすめの治療が変わるため、診察でより適切な治療をご提案させていただきます。</p>
        <nav><ul class="ancor-box">
            <li><a href="#area1">ヒアルロン酸</a></li>
            <li><a href="#area2">スレッドリフト</a></li>
            <li><a href="#area3">ボトックスリフト</a></li>
            <li> <a href="#area4">ウルトラセルQプラス</a></li>
</ul></nav>
</section>
<section class="ope-intro bg-cp" id="area1">
  <div class="inner flex al-cent">
    <div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/thumb02.jpg" alt="サムネイル"> </div>
    <div class="text box-size">
      <h2>ヒアルロン酸注入</h2>
      <p class="ls1 gosic">ほうれい線やマリオネットライン、ゴルゴライン(目の下のくぼみ)などはたるみになるしわといえます。ヒアルロン酸でお顔全体をリフトアップさせたり、気になるしわやくぼみを埋めることで、自然な印象でたるみが改善し若々しい仕上がりとなります。</p>
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
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point04.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h4 class="gd ls1">自然な仕上がり</h4>
        <p class="gosic">いかにも、ヒアルロンを注入したような不自然なバランスになることはなく、患者様お一人お一人のお顔にあった自然な仕上がりを目指しています。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/point05.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h4 class="gd ls1">顔全体のバランスを<br>
          整える</h4>
        <p class="gosic">気になる部位にヒアルロン酸を注入して、お顔全体を黄金バランスにより近づくようにします。</p>
      </div>
    </div>
  </div>
</section>
<?php if (have_rows('ope_tarumi_hel', 155)): ?>
<section class="case">
  <div class="inner">
    <h3 class="tc hx3">症例</h3>
    <div class="case-wrap flex">
      <?php while (have_rows('ope_tarumi_hel', 155)) : the_row(); ?>
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
<section class="price native__mt" id="hel__price">
  <div class="inner-box2">
    <h3 class="tc ls1 hx3">ヒアルロン酸注入料金</h3>
    <p class="p-desc gosic tc mb60 pc">当院では厚生省の承認を取得したジュビダームボリューマ、ジュビダームボリフト、ジュビダームボルベラを特におすすめしています。<br>
      ジュビダームビスタ認定医の院長が全てのヒアルロン酸治療を行います。</p>
    <p class="p-desc gosic tc mb60 sp">当院では厚生省の承認を取得したジュビダームボリューマ、ジュビダームボリフト、ジュビダームボルベラを特におすすめしています。ジュビダームビスタ認定医の院長が全てのヒアルロン酸治療を行います。</p>
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">ボリューマ、ボリフト</th>
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
<!--<tr class="flex">
<td>2本<</td>
<td>¥180,000</td>
</tr>-->
<tr class="flex">
<td>4本目以降</td>
<td>1本あたりプラス¥60,000</td>
</tr>
</table>
</div>
    
<div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">ボルベラ</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>0.1cc</td>
<td>¥10,000</td>
</tr>
</table>
</div>
<div class="price-list gosic mb45">
    <table>
<tr class="flex">
<th class="fw600">クレビエルコントア(あご形成)</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>0.1cc</td>
<td>¥10,000</td>
</tr>
</table>
</div>
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
  <div class="inner-box2 hx">
    <h3 class="cp gosic tc ls1">スレッドリフトの特徴</h3>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point01.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h4 class="gd ls1">お肌のハリ向上</h4>
        <p class="gosic">挿入した糸が周囲の組織を活性化させ自身のコラーゲンが増生されることによって、お肌のハリが向上します。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point02.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h4 class="gd ls1">小顔効果</h4>
        <p class="gosic">コラーゲンの増生による、お肌の引き締め効果で小顔に近づけることが可能です。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point03.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h4 class="gd ls1">リフトアップ効果</h4>
        <p class="gosic">糸の挿入によって、お肌の引き上げ効果（リフティング効果）で、リフトアップが期待できます。</p>
      </div>
    </div>
  </div>
</section>
<?php if (have_rows('ope_tarumi_lift', 155)): ?>
<section class="case">
  <div class="inner">
    <h3 class="tc hx3">症例</h3>
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
    <h3 class="tc ls1 hx3">スレッドリフト料金</h3>
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">シルエットソフト(3Dリフト)</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>2本</td>
<td>¥195,000(1本あたり¥97,500)</td>
</tr>
<tr class="flex">
<td>4本</td>
<td>¥296,000(1本あたり¥74,000)</td>
</tr>
<tr class="flex">
<td>6本</td>
<td>¥378,000(1本あたり¥63,000)</td>
</tr>
<tr class="flex">
<td>8本</td>
<td>¥400,000(1本あたり¥50,000)</td>
</tr>
</table>
</div>
    
    <!-- ./price-list -->
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">Gコグリフト</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>1本</td>
<td>¥60,000</td>
</tr>
</table>
</div>
    <!-- ./price-list -->
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">VOVリフトプレミアム</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>1本</td>
<td>¥60,000</td>
</tr>
<tr class="flex">
<td>5本目以降</td>
<td>1本あたり¥30,000<br>Gコグリフトとの併用の場合1本30000円</td>
</tr>
</table>
</div>
    <!-- ./price-list -->
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">セルフロック</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>1本</td>
<td>¥20,000</td>
</tr>
</table>
</div>
    <!-- ./price-list -->
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">セルフロック</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>20本</td>
<td>¥66,000</td>
</tr>
<tr class="flex">
<td>40本</td>
<td>¥102,000</td>
</tr>
<tr class="flex">
<td>60本</td>
<td>¥138,000</td>
</tr>
<tr class="flex">
<td>80本</td>
<td>¥174,000</td>
</tr>
</table>
</div>
    <!-- ./price-list -->
    <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">スレッドアイリフト(Gグロス)</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex">
<td>10本</td>
<td>¥47,000</td>
</tr>
<tr class="flex">
<td>20本</td>
<td>¥69,000</td>
</tr>
</table>
</div>
    <!-- ./price-list -->
  </div>
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



<section class="ope-intro bg-cp" id="area3">
<div class="inner flex al-cent">
<div class="thumb-sq"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/siwa/thumb01.jpg" alt="サムネイル"> </div>
<div class="text box-size">
  <h2>ボトックスリフト</h2>
  <p class="ls1 gosic">引き締めを目的としてボトックスを細かく注射する方法です。表情じわを改善するボトックスと違い、ボトックスを皮膚のごく表面に浅く細かく注入する事でお顔を引き締めたり引き上げる治療です。1週間から10日おきに数回行うとより効果的です。 </p>
</div>
</section>
<section class="features layout1">
  <div class="inner-box2 hx">
    <h3 class="cp gosic tc ls1">ボトックスリフトの特徴</h3>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point04.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h4 class="gd ls1">たるみとシワ解消</h4>
        <p class="gosic">小顔効果だけではなく、自然な表情を保ちながらたるみとシワを和らげることが可能です。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point05.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h4 class="gd ls1">お肌を滑らかに</h4>
        <p class="gosic">ボトックスを注入することで、筋肉の表面繊維だけの働きを弱めて、皮膚の表面を滑らかにします。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/point06.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h4 class="gd ls1">フェイスラインを<br>
          美しくする</h4>
        <p class="gosic">アゴから首に、ほうれいせんの横の肉、眼の下のたるみに対するリフトアップ効果が期待できます。</p>
      </div>
    </div>
  </div>
</section>
<section class="infu-point">
  <div class="inner">
    <h3 class="cp tc goisc ls1 ">注入部位</h3>
    <div class="img"> <img src="<?php echo get_template_directory_uri(); ?>/img/operation/kogao/img02.png" alt="注入部位"> </div>
  </div>
</section>
<?php if (have_rows('ope_kogao_btxlift', 155)): ?>
<section class="case">
  <div class="inner">
    <h3 class="tc hx3">症例</h3>
    <div class="case-wrap flex">
      <?php while (have_rows('ope_kogao_btxlift', 155)) : the_row(); ?>
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
      <p>・個人差がありますが、腫れなどが発生する場合がございます。</p>
    </div>
  </div>
</section>
<?php else: ?>
<?php endif; ?>
<section class="price native__mt" id="btx_lift__price">
  <div class="inner-box2">
    <h3 class="tc ls1 hx3">ボトックスリフト料金</h3>
    <p class="p-desc gosic tc mb60 pc">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。<br>ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
 <!--      <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。
      ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>-->
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
    <h3 class="tc ls1 hx3">よくある質問</h3>
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
  <div class="inner-box2 hx">
    <h3 class="cp gosic tc ls1">ウルトラセルQプラスの特徴</h3>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point01_hifu.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.1</div>
        <h4 class="gd ls1">リフトアップ効果</h4>
        <p class="gosic">緩んだお顔の深層に照射された熱エネルギーがタンパク質に届き、コラーゲンが新形成されることで照射部にハリが生まれ、リフトアップへと導きます。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point02_hifu.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.2</div>
        <h4 class="gd ls1">美白・美肌効果</h4>
        <p class="gosic">リニア・カートリッジ2.0mmを高出力・広範囲にわたり照射することによって、美白美肌効果が期待できます。</p>
      </div>
    </div>
    <div class="box">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point03_hifu.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.3</div>
        <h4 class="gd ls1">二重アゴの改善</h4>
        <p class="gosic">リニアカートリッジ4.5mmを使用して、気になる二重アゴを改善します。</p>
      </div>
    </div>
    <div class="box cf">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/tarumi/point02.jpg" alt="ポイントエリアサムネイル"></div>
      <div class="desc box-size bg-grade">
        <div class="points f-ryu cw">Point.4</div>
        <h4 class="gd ls1">小顔効果</h4>
        <p class="gosic">顔の小顔治療は、顔全体への照射、特に目元（目のキワ）などの細かい部分へ照射を行う事によって引き締めます。</p>
      </div>
    </div>
  </div>
</section>

<section class="price native__mt" id="">
  <div class="inner-box2">
    <h3 class="tc ls1 hx3">ウルトラセルQプラス料金</h3>
   <!--  <p class="p-desc gosic tc mb60 pc">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。<br>ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>
    <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタをおすすめしています。ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p> -->
 <!--      <p class="p-desc gosic tc mb60 sp">当院では全てのボトックス治療に、国内で唯一厚生省の承認を取得しているアラガン社のボトックスビスタを使用しています。
      ボトックスビスタ認定医の院長が全てのボトックス治療を行います。</p>-->
      <div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">リフトアップカートリッジ</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex bd-bottom-none">
<td>顔全体</td>
<td>¥140,000</td>
</tr>
<tr class="flex">
<td>※7ヶ月以内の再施術</td>
<td>¥126,000</td>
</tr>
<tr class="flex bd-bottom-none">
<td>顔全体+あご下</td>
<td>¥160,000</td>
</tr>
<tr class="flex">
<td>※7ヶ月以内の再施術</td>
<td>¥144,000</td>
</tr>
<tr class="flex bd-bottom-none">
<td>頬のみ</td>
<td>¥80,000</td>
</tr>
<tr class="flex">
<td>※7ヶ月以内の再施術</td>
<td>¥72,000</td>
</tr>
<tr class="flex bd-bottom-none">
<td>ハイフアイ</td>
<td>¥40,000</td>
</tr>
<tr class="flex">
<td>※7ヶ月以内の再施術</td>
<td>¥36,000</td>
</tr>
</table>
</div>
<div class="price-list gosic">
    <table>
<tr class="flex">
<th class="fw600">リニアカートリッジ</th>
<th class="f-bold">税別</th>
</tr>
<tr class="flex bd-bottom-none">
<td>4.5mm 二重あご解消</td>
<td>¥50,000</td>
</tr>
<tr class="flex bd-bottom-none">
<td>※1ヶ月以内の再施術</td>
<td>¥45,000</td>
</tr>
<!--  <tr class="flex bd-bottom-none">
<td>※リフトアップカートリッジの顔全体・頬のみと併用の場合</td>
<td>¥20,000</td>
</tr>-->
<tr class="flex bd-bottom-none">
<td>2.0mm 美肌・美白</td>
<td>¥50,000</td>
</tr>
<tr class="flex">
<td>※1ヶ月以内の再施術</td>
<td>¥45,000</td>
</tr>
</table>
</div>
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
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow05.jpg" alt="施術開始"></div>
          <p class="gosic ls1">施術の前にお会計をお願いいたします。<br>
            当院は、下記のクレジットカードのご利用が可能です。</p>
          <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/common/card.png?0918" alt="カード"></div>
        </div>
        <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow05.jpg" alt="施術開始"></div>
      </li>
      <li class="box-size flex">
        <div class="left">
          <div class="top">
            <div class="step points f-ryu cw">STEP 04</div>
            <h3 class="f-bold">施術開始</h3>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow03_1.jpg" alt="施術終了・お会計"></div>
          <p class="gosic ls1">痛みを極力に抑え、安全第一に責任を持って施術いたします。施術は全て有資格者が行うので、ご安心くださいませ。</p>
        </div>
        <div class="thumb pc"><img src="<?php echo get_template_directory_uri(); ?>/img/operation/common/flow03_1.jpg" alt="施術終了・お会計"></div>
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
        "name": "スレッドリフト：一度糸を入れれば、どれくらい効果が持続するのですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "使用する糸の種類によりますが、リフトアップ効果は半年から1,2年持続します。リフトアップ効果がなくなった後もコラーゲン増生による引き締め効果は持続するといわれます。"
        }
      }, {
        "@type": "Question",
        "name": "ボトックスリフト：効果はどれくらい続きますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "１回でも効果が分かることが多いですが、最初のうちは持続期間が短いことも多いため、最初は１週間から１０日に１回程度で数回続けることがおすすめです。その後は数か月から半年に１回程度で効果が継続できます。"
        }
      }]
    }
    </script>
<?php get_footer();?>
