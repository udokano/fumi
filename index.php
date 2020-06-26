<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?<?php echo filemtime(get_stylesheet_directory() . '/css/style.css'); ?>">
<script>
  (function(d) {
    var config = {
      kitId: 'yrq5rir',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<div class="wrapper">
  <header class="site-header front">
    <div class="header-inner flex al-cent">
          <div class="logo tc"><a href="<?php echo home_url('/'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_re.png?02085" alt="FMUI BEAUTY CLINIC"></a></div>
          <nav class="navi pc-dis">
            <ul>
              <li><a href="<?php echo home_url('/'); ?>concept">当院について</a></li>
              <li class="navi-parent"><a>施術・料金</a>
                <ul class="nav-child bg__sub__menu">
                    <li class="nav-price"><a href="<?php echo home_url('/'); ?>price">料金一覧</a></li>
                    <li><a href="<?php echo home_url('/'); ?>tarumi" class="c_gray">たるみ治療</a></li>
                  <li><a href="<?php echo home_url('/'); ?>siwa" class="c_gray">しわ治療</a></li>
                  <li><a href="<?php echo home_url('/'); ?>medikaru" class="c_gray">美肌治療</a></li>
                  <li><a href="<?php echo home_url('/'); ?>kogao" class="c_gray">小顔治療</a></li>
                  <li><a href="<?php echo home_url('/'); ?>nose-lift" class="c_gray">鼻の糸</a></li>
                  <li><a href="<?php echo home_url('/'); ?>keiseigeka" class="c_gray">形成外科治療</a></li>

                  <li><a href="<?php echo home_url('/'); ?>cosmetics" class="c_gray">ドクターズコスメ</a></li>
                  <li><a href="<?php echo home_url('/'); ?>shoshin" class="c_gray">初診料・再診料</a></li>
                </ul>
              </li>
              <li><a href="<?php echo home_url('/'); ?>access">アクセス</a></li>
              <li><a href="<?php echo home_url('/'); ?>doctor">ドクター紹介</a></li>
              <li><a href="<?php echo home_url('/');?>case-list">症例写真</a></li>
              <li><a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank">院長ブログ</a></li>
            </ul>
          </nav>
          <div class="top-cv-btn">
              <a class="bg-rs cv-btns" href="https://fumibeauty.reserve.ne.jp/" target="_blank">
                  <i class="cv-btns__icon  cv-btns__icon--online"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_online.png" alt="オンライン予約"></i>
                  <span class="cv-btns__text">オンライン<br class="sp">予約</span>
              </a>
              <a class="bg-ct cv-btns" href="<?php echo home_url('/'); ?>contact">
                  <i class="cv-btns__icon cv-btns__icon--mail"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_mail03.png" alt="お問合わせ"></i>
                  <span class="cv-btns__text">お問合わせ</span>
              </a>
              <a class="bg-line cv-btns" href="https://line.me/R/ti/p/%40304ngjfp" target="_blank">
                  <i class="cv-btns__icon cv-btns__icon--line"><img src="<?php echo get_template_directory_uri(); ?>/img/common/icon_line03.png" alt="LINEで簡単予約"></i>
                  <span class="cv-btns__text">LINEで<br>簡単予約</span>
              </a>
        </div>
        <!-- ./top-cv-btn -->
    </div>
  </header>
  <div class="fv" id="fv-slide">
    <div class="fv__items">
      <div class="logos"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_logo_re.png?02054" alt="FMUI BEAUTY CLINIC"> </div>
      <!--logos-->

    </div>
    <div class="swiper-container fv-slide" >
      <div class="swiper-wrapper fv-slider-content">
        <div class="fv__slide-wrap swiper-slide slide01 swiper-no-swipng">
          <div class="slide01__texts">
            <div class="band cp tc ls2">注入＆スレッド治療専門クリニック</div>
            <!--band END-->
            <h1> <img src="<?php echo get_template_directory_uri(); ?>/img/top/fv2_cach_re.png?0204" alt="洗練された美容技術であなたの美しさを引き出します。" class="pc"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_cach_sp_re.png?0304" alt="洗練された美容技術であなたの美しさを引き出します" class="sp"> </h1>
          </div>
        </div>

        <!-- fv__slide-wrap slide01 END -->
        <div class="fv__slide-wrap swiper-slide slide02 swiper-no-swipng"> </div>
        <!-- fv__slide-wrap slide02 END -->
        <div class="fv__slide-wrap swiper-slide slide03 swiper-no-swipng"> </div>
        <!-- fv__slide-wrap slide03 END -->
        <div class="fv__slide-wrap swiper-slide slide04 swiper-no-swipng"> </div>
        <!-- fv__slide-wrap slide04 END -->
        <div class="fv__slide-wrap swiper-slide slide05 swiper-no-swipng"> </div>
        <!-- fv__slide-wrap slide05 END -->
        <div class="fv__slide-wrap swiper-slide slide06 swiper-no-swipng"> </div>
        <!-- fv__slide-wrap slide06 END -->
        <div class="fv__slide-wrap swiper-slide slide07 swiper-no-swipng"> </div>
        <!-- fv__slide-wrap slide07 END -->

      </div>
      <!-- swiper-wrapper END-->
    </div>
    <!-- swiper-container END-->
    <a href="#contents1" class="bounce scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_down.svg" alt="scroll-down"></a> </div>
  <!-- fv END-->

  <!--FV END-->

  <div class="top__menu__area">
    <div class="bottom inner-box flex">
      <ul class="menu-link flex">
        <li class="box-size"> <a href="<?php echo home_url('/'); ?>order_made" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb01.jpg" alt="サムネイル">
          <p class="tc">オーダーメイド注入<br>
            <span class="gd">INJECTION</span></p>
          </a> </li>
        <li class="box-size"> <a href="<?php echo home_url('/'); ?>order_made_thread_lift" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb02.jpg" alt="サムネイル">
          <p class="od__thread__lift tc">オーダーメイド<br class="sp">スレッドリフト<br>
         <span class="gd od__thread__lift_sub">THREAD LIFT</span></p>

          </a> </li>
      </ul>
      <div class="cv-wrap box-size">
        <div class="top flex al-cent">
          <div class="left sm">お電話による<br class="pc">
            お問い合わせ</div>
          <div class="tel"><a href="tel:0663722323" class="">06-6372-2323</a></div>
          <div class="time sm"> 平日 10:00～18:00<br>
            土 10:00～17:00</div>
        </div>
        <div class="bottom__btn flex"> <a href="https://fumibeauty.reserve.ne.jp/" class="cv-btns bg-rs c_gray" target="_blank"><span class="bg-icon">来院予約<br>
          <span class="sm">RESERVATION</span></span></a> <a href="<?php echo home_url('/'); ?>contact" class="cv-btns c_gray bg-ct bg__n_ct"><span class="bg-icon">お問合わせ<br>
          <span class="sm">CONTACT</span></span></a> </div>
      </div>
    </div>
    <!--BOTTOM END-->

  </div>
  <!--top__menu__area END-->

  <section class="doctor box-size mb0 area-bgs" id="bg4">
    <div class="inner cf">
      <div class="text">

        <h2 class="aging tc"><img src="<?php echo get_template_directory_uri(); ?>/img/top/beautiful_aging.png?0513" alt="beautiful_aging"></h2>
        <p class="cach gd c_gray tc f-ryu">美しく年齢を重ね輝き続けるために</p>
        <div class="btn-wrap"> <a href="<?php echo home_url('/'); ?>doctor" class="btn fw600 bg__n_rs c_gray gosic">院長紹介</a> <a href="<?php echo home_url('/'); ?>concept" class="btn fw600 bg__n_ct gosic c_gray">当院について</a> </div>
      </div>
      <p class="doctor-name cp c_gray tc"><span class="sm">ふみビューティークリニック梅田院長</span><br>
        先山 史</p>
    </div>
  </section>
  <?php if (wp_is_mobile()) : ?>
  <?php if (have_rows('bnr_sp', 28)): ?>
  <div class="banner-arwa" id="contents1">
    <div class="swiper-container swiper1 cont">
      <div class="swiper-wrapper sp-bnr">
        <?php while (have_rows('bnr_sp', 28)) : the_row(); ?>
        <div class="swiper-slide"><a href="<?php the_sub_field('bnr_sp_link', 28); ?>" target="_blank"><img src="<?php the_sub_field('bnr_sp_img', 28); ?>" alt="キャンペーンバナー"></a></div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
  <?php else: ?>
  <?php endif; ?>
  <?php else: ?>
  <?php if (have_rows('bnr_pc', 28)): ?>
  <div class="banner-arwa" id="contents1">
    <div class="swiper-container swiper1 cont">
      <div class="swiper-wrapper pc-bnr">
        <?php while (have_rows('bnr_pc', 28)) : the_row(); ?>
        <div class="swiper-slide"><a href="<?php the_sub_field('bnr_pc_link', 28); ?>" target="_blank"><img src="<?php the_sub_field('bnr_pc_img', 28); ?>" alt="キャンペーンバナー"></a></div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
  <?php else: ?>
  <?php endif; ?>

  <!--banner-area END-->
  <?php endif; ?>
<section class="infusion infusion__repair cp cf mb0 bg-areas" id="bg2">
    <div class="inner-box">
      <div class="top flex">
        <div class="text text__left tc cp c_gray box-size">
          <div class="tit__box"><h3>注入治療</h3><span class="sm c__l_green">Cosmetic injections</span></div>
          <p class="gosic tc">ヒアルロン酸やボトックスを「どこに」「どのくらい」<br class="pc">注入するかで、大きく効果が違ってきますが、<br class="pc">当院ではお顔全体のバランスをみて<br class="pc">自然な若返りができるようご提案しております。</p>
          <a href="<?php echo home_url('/'); ?>pr1" class="btn fw600 bg__n_rs c_gray" target="_blank">当院のヒアルロン酸注入</a>
        </div>

         <div class="text text__right tc cp c_gray box-size">
           <div class="tit__box"><h3>製剤一覧</h3><span class="sm c__l_green">Available products</span></div>
          <p class="gosic tc">当院では、日本の厚生労働省の認可の製剤を中心に、<br class="pc">優良な品質の製剤のみを使用しております。<br class="pc">注入部位やお客様の肌の状態に合わせて使用する<br class="pc">製剤の種類を使い分けています。
</p>

          <a href="<?php echo home_url('/'); ?>list" class="btn fw600 bg__n_rs c_gray">詳しく見る</a> </div>
      </div>
       <!--  <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/illust01.jpg" alt="イラスト"> </div> -->
      </div>
      <div class="bottom flex cf">
       <!--  <div class="box bg-areas" id="bg-thumb">
          <div class="box-inner flex gd">
            <div class="inner-lr inner-left">
              <div class="txt txt1 box-size">
                <h3>ヒアルロン酸</h3>
                <p class="gosic">ヒアルロン酸を皮膚に注入して、しわを盛り上げ目立たなくします。</p>
              </div>
            </div>
            <div class="inner-lr inner-right">
              <div class="txt txt2 box-size">
                <h3>ボトックス</h3>
                <p class="gosic">ボトックスを皮膚に注入すると、筋肉が弛緩、それを補うように周囲の筋肉が皮膚をひっぱる事により、しわが目立たなくなります。</p>
              </div>
            </div>
          </div>
        </div> -->
       <!--  <div class="text tc cp c_gray box-size">
          <h3>製剤一覧</h3>
          <span class="sm gd c_gray">FORMULATION</span>
          <p class="pc gosic tc">当院の厳格な審査を通過した、<br>
            優良な品質の製剤のみを使用しております。<br>
            患者様の幅広い悩みを解決するために、<br>
            多種類の製剤を取り扱っています。</p>
          <p class="sp gosic tc">当院の厳格な審査を通過した、
            優良な品質の製剤のみを使用しております。
            患者様の幅広い悩みを解決するために、
            多種類の製剤を取り扱っています。</p>
          <a href="<?php echo home_url('/'); ?>list" class="btn fw600 bg__n_rs c_gray">詳しく見る</a> </div>
      </div> -->
    </div>
  </section>
  <section class="menu area-bgs mb0" id="bg3">
    <h2 class="tc cp c_gray">MENU</h2>
    <ul class="munu-link flex">
      <li class="box-size hg-row"> <a href="<?php echo home_url('/'); ?>tarumi">
        <h3 class="tc">たるみ治療</h3>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb05.jpg" alt="サムネイル"></div>
        <ul>
          <li>・ヒアルロン酸</li>
          <li>・スレッドリフト</li>
          <li>・ボトックスリフト</li>
        </ul>
        </a> </li>
      <li class="box-size hg-row"> <a href="<?php echo home_url('/'); ?>siwa">
        <h3 class="tc">しわ治療 </h3>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb06.jpg" alt="サムネイル"></div>
        <ul>
          <li>・ヒアルロン酸</li>
          <li>・ボトックス注射</li>
          <li>・SUNEKOS(スネコス)</li>
        </ul>
        </a> </li>
        <li class="box-size hg-row"> <a href="<?php echo home_url('/'); ?>medikaru">
        <h3 class="cw tc">美肌治療</h3>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb10.jpg" alt="サムネイル"></div>
        <ul class="col">
          <li>・SUNEKOS(スネコス)</li>
          <li>・ダーマペン4/ヴェルヴェットスキン</li>
          <li>・メディカルエステ</li>
          <li>・美容点滴/プラセンタ</li>
        </ul>
        </a> </li>
      <li class="box-size "> <a href="<?php echo home_url('/'); ?>kogao">
        <h3 class="tc">小顔治療 </h3>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb07.jpg" alt="サムネイル"></div>
        <ul class="col">
          <li data-url="<?php echo home_url('/'); ?>kogao#area3" class="js-link">・スレッドリフト</li>
          <li data-url="<?php echo home_url('/'); ?>kogao#area2" class="js-link">・エラボトックス</li>
          <li data-url="<?php echo home_url('/'); ?>kogao#area1" class="js-link">・脂肪溶解注射/BNLSneo、デオリポ(カベルライン)、<br class="pc">チンセラプラス</li>
        </ul>
        </a> </li>
      <li class="box-size"> <a href="<?php echo home_url('/'); ?>nose-lift">
        <h3 class="tc">鼻 <span class="sm">(隆鼻、鼻筋をつくる)</span></h3>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb08.jpg" alt="サムネイル"></div>
        <ul>
          <li>・Gメッシュ</li>
          <li>・Gコグノーズ</li>
        </ul>
        </a> </li>
      <li class="box-size"> <a href="<?php echo home_url('/'); ?>keiseigeka">
        <h3 class="tc">形成外科治療</h3>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb09.jpg" alt="サムネイル"></div>
        <ul class="col">
          <li>・色素性母斑<span class="sm">(黒子、ホクロ)</span></li>
          <li>・皮膚良性腫瘍<span class="sm">(粉瘤、脂漏性角化症、軟繊維種、汗管腫など)</span></li>
          <li>・肥厚性瘢痕/ケロイド</li>
          <li>・巻き爪・陥入爪</li>
        </ul>
        </a> </li>

    </ul>
  </section>
  <div class="cosmetics__bnr">
    <div class="inner">
      <div class="bnr"> <a href="<?php echo home_url('/');?>cosmetics" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/cosmetics_bnr02.jpg?1203" alt="ドクターズサプリメントのバナー"></a> </div>
    </div>
  </div>
  <?php if (have_rows('bnr_cam', 28)): ?>
  <div class="banner-campaign">
    <h2 class="tc c_gray">当院からのお知らせ<br>
    <span class="c__l_green md">information</span></h2>
    <div class="inner02 flex">
      <?php while (have_rows('bnr_cam', 28)) : the_row(); ?>
      <div class="bnr-cam"> <a href="<?php the_sub_field('cam_link', 28);?>" target="_blank"><img src="<?php the_sub_field('cam_img', 28);?>" alt="月別キャンペーンバナー"></a> </div>
      <?php endwhile; ?>
    </div>
    <!-- inner END -->
  </div>
  <!-- banner-campaign END -->
  <?php else: ?>
  <?php endif; ?>

  <section class="slides">
    <div class="inner flex">
      <div class="left-slide slide-area">
        <h2 class="cp tc c_gray">よくある質問</h2>
        <p class="md tc c__l_green mb30 ">frequently asked questions</p>
        <div class="swiper-container slide-p2 swiper2 cont">
          <div class="swiper-wrapper gosic">
            <!-- Slides -->

            <?php
            $args = array(
              'post_type' => 'faq',
              'posts_per_page' => 4,
              'orderby' => 'rand',
              'order' => 'DESC',
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()): $the_query->the_post();
            ?>
            <div class="qas gd box-size swiper-slide c_gray bc__gray">
              <h3 class="cat cw tc bg__gray">
                <?php //所属タクソノミー表示
                $terms = wp_get_object_terms($post->ID, 'faq_kind');
                foreach ($terms as $term) {
                    echo $term->name;
                }
                ?>
              </h3>
              <p class="qa-txt qa-tit pb0"><span class="q">Q</span>
                <?php the_title(); ?>
              </p>
              <div class="qa-txt qa-answer text-over pb0"><span class="a">A</span>
                <?php remove_filter('the_content', 'wpautop'); ?>
                <?php the_content()?>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <div class="swiper-button-prev prev2"></div>
          <div class="swiper-button-next next2"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!--left slides END-->

      <div class="right-slide slide-area">
        <h2 class="cp tc c_gray">症例写真</h2>
        <p class="md tc c__l_green mb30">case photo</p>
        <div class="slide-in">
          <?php
          $args = array(
            'post_type' => 'case',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $the_query = new WP_Query($args);
         if ($the_query->have_posts()) :
  while ($the_query->have_posts()) : $the_query->the_post();
          ?>

          <!--ここにループの中の記述 -->

          <!--記事へのリンクを出力-->
          <a href="<?php the_permalink(); ?>" class="flex posts">
          <div class="thumb">
            <!--サムネイル(アイキャッチ)画像を出力-->
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium');
            }
            ?>
          </div>
          <div class="text">
            <div class="top__cont">

                <?php //所属タクソノミー表示
                $terms = wp_get_object_terms($post->ID, 'faq_kind');
                foreach ($terms as $term) {
                    echo "<div class='tax'>";
                    echo $term->name;
                    echo "</div>";
                    break;
                }
                ?>
                 <time class="article-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"> <?php echo get_the_date(); ?> </time>
              <!--投稿日を表示-->

            </div>
            <!-- ./top__cont -->

            <!--投稿のタイトルを出力-->
            <h3>
              <?php the_title(); ?>
            </h3>

            <p class="content__text">
              <?php the_field('ope_desc');?>

            </p>
          </div>
          <!-- end text -->
          </a>
          <!-- ./posts  -->

          <?php endwhile; wp_reset_postdata(); ?>
          <div class="btn__cont"> <a href="<?php echo get_post_type_archive_link(get_post_type());?>">記事一覧へ</a> </div>
<?php else: ?>
<p class="tc gray gosic">ただいま準備中です<br>公開まで今しばらくお待ちくださいませ</p>

          <?php endif;?>
        </div>
        <!-- ./slide-in -->

      </div>
      <!--right slides END-->

    </div>
  </section>
  <!--SLIDES END-->

  <section class="sns">
    <h3 class="tc">Twitterやブログやインスタグラム・ラインオフィシャルアカウントにて<br class="pc">お得な情報を配信しています</h3>
    <div class="inner flex">
      <div class="bnr"> <a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/blog_bnr.jpg?0310" alt="blog_bnr"> </a> </div>
      <div class="bnr"> <a href="https://line.me/R/ti/p/%40304ngjfp" target="_blank">
        <?php if (wp_is_mobile()) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/line_bnr_sp.jpg?0310" alt="line_bnr">
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/line_bnr_pc.jpg?0310" alt="line_bnr">
        <?php endif; ?>
        </a> </div>
    </div>
    <!-- /.inner -->
    <div class="inner flex">
      <div class="bnr"> <a href="https://www.instagram.com/dr_fumi/" target="_blank">
        <?php if (wp_is_mobile()) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_bnr_sp.jpg?0310" alt="insta_bnr">
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_bnr.jpg?0310" alt="insta_bnr">
        <?php endif; ?>
        </a> </div>
      <div class="bnr"> <a href="https://twitter.com/@_fumibeauty_" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/twitter_bnr.jpg?0310" alt="twitter_bnr"> </a> </div>
    </div>
    <!-- ./inner -->
  </section>


<article class="media">
  <div class="inner">
  <h2 class="media__l-tit">メディア掲載</h2>
  <ul class="media__list flex">
      <li class="media__article">
        <div class="media__thumb">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/article_thumb01.jpg" alt="サムネイル">
        </div>
        <h3 class="media__ttl">
          仕事を楽しむためのwebマガジン<br class="pc">"Bplus"掲載
        </h3>
        <a href="https://www.business-plus.net/interview/1911/k5216.html" class="media__link" target="_blank">詳しく見る</a>
      </li>
      <li class="media__article">
        <div class="media__thumb">
          <img src="<?php echo get_template_directory_uri(); ?>/img/top/article_thumb02.jpg" alt="サムネイル">
        </div>
        <h3 class="media__ttl media__ttl--line01">
          VOCE6月号掲載
        </h3>
        <!-- <a href="http://blog.livedoor.jp/dr_sakiyama/archives/1077336482.html" class="media__link" target="_blank">詳しく見る</a> -->
      </li>
    </ul>
  </div>
<!-- ./inner-box -->
</article>
<!-- ./media -->


  <section class="card">
    <div class="inner">
      <div class="cont tc box-size gosic ls1">
        <?php if (wp_is_mobile()) : ?>
        <h2>クレジットカードの<br>
          ご利用について</h2>
        <?php else: ?>
        <h2>クレジットカードのご利用について</h2>
        <?php endif; ?>
        <p>当院では下記のクレジットカードのご利用が可能です。</p>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/common/card.png?0918" alt="クレジットカード"></div>
      </div>
    </div>
  </section>
  <section class="map">
    <div class="inner" id="map"></div>
  </section>
  <!--MAP END-->

  <footer>
    <div class="inner flex">
      <nav class="navi pc-dis">
        <ul class="flex gosic c_gray">
          <li><a href="<?php echo home_url('/'); ?>concept" class="c_gray">当院について</a></li>
          <li><a href="#bg3" class="c_gray">施術・料金</a></li>
          <li><a href="<?php echo home_url('/'); ?>access" class="c_gray">アクセス</a></li>
          <li><a href="<?php echo home_url('/'); ?>doctor" class="c_gray">ドクター紹介</a></li>
          <li><a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank">院長ブログ</a></li>
          <li><a href="<?php echo home_url('/');?>case-list" class="c_gray">症例写真</a></li>
          <li><a href="https://fumibeauty.reserve.ne.jp/" class="c_gray" target="_blank">来院予約</a></li>
          <li><a href="<?php echo home_url('/'); ?>contact" class="c_gray">お問合わせ</a></li>
        </ul>
      </nav>
      <p class="copy cp c_gray"><small>fumi beauty cinic(ふみビューティクリニック梅田)美容皮膚科・形成外科・皮膚科<br>
        Copyright(C) fumi beauty clinic All Rights Reserved.</small></p>
    </div>
  </footer>
  <?php if (wp_is_mobile()) : ?>
  <nav class="hambargar bg__n_rs">
    <ul>
      <li class="menu-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_logo_re.png?543201" alt="menu-logo"></li>
      <li><a href="<?php echo home_url('/'); ?>concept" class="c_gray">当院について</a></li>
      <li class="parent"><a href="#" id="ac-txt" class="c_gray c_gray_line">施術・料金</a>
        <ul class="child" id="ac">
          <li class="child__price"><a href="<?php echo home_url('/'); ?>price" class="c_gray">料金一覧</a></li>
          <li><a href="<?php echo home_url('/'); ?>tarumi" class="c_gray">たるみ治療</a></li>
          <li><a href="<?php echo home_url('/'); ?>siwa" class="c_gray">しわ治療</a></li>
           <li><a href="<?php echo home_url('/'); ?>medikaru" class="c_gray">美肌治療</a></li>
          <li><a href="<?php echo home_url('/'); ?>kogao" class="c_gray">小顔治療</a></li>
          <li><a href="<?php echo home_url('/'); ?>nose-lift" class="c_gray">鼻の糸</a></li>
          <li><a href="<?php echo home_url('/'); ?>keiseigeka" class="c_gray">形成外科治療</a></li>
          <li class="mb0"><a href="<?php echo home_url('/'); ?>cosmetics" class="c_gray">ドクターズコスメ</a></li>
          <li class="mb0"><a href="<?php echo home_url('/'); ?>shoshin" class="c_gray">初診料・再診料</a></li>
        </ul>
      </li>
      <li><a href="<?php echo home_url('/'); ?>access" class="c_gray">アクセス</a></li>
      <li><a href="<?php echo home_url('/'); ?>doctor" class="c_gray">ドクター紹介</a></li>
      <li><a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank">院長ブログ</a></li>
       <li><a href="<?php echo home_url('/');?>case-list" class="c_gray">症例写真</a></li>
      <!--  <li><a href="https://fumibeauty.reserve.ne.jp/" target="_blank">来院予約</a></li>-->
      <li class="mb0"><a href="<?php echo home_url('/'); ?>contact" class="c_gray">お問合わせ</a></li>
      <p class="menu-close"></p>
    </ul>
  </nav>
  <?php else: ?>
  <?php endif; ?>
  <?php if (wp_is_mobile()) : ?>
  <div class="fix-bottom bg__n_rs">
    <ul class="flex gosic al-cent">
      <li class="box-size"><span href="#" class="cw menu-open c_gray">メニュー</span></li>
      <li class="box-size c_gray_line02"><a href="https://fumibeauty.reserve.ne.jp/" class="cw c_gray" target="_blank">予約</a></li>
      <li class="box-size"><a href="tel:0663722323" class="cw c_gray">TEL</a></li>
    </ul>
  </div>
  <?php else: ?>
  <?php endif; ?>
  <a href="#" class="page-top bounce"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_up.svg?0615" alt="scrool-up"></a> </div>
<!--WRAPPER END-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?0618aaassdd"></script>
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
