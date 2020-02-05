<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?0115">
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
      <div class="logo tc"><a href="<?php echo home_url('/'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="FMUI BEAUTY CLINIC"></a></div>
      <nav class="navi pc-dis">
        <ul>
          <li><a href="<?php echo home_url('/'); ?>concept">当院について</a></li>
          <li class="navi-parent"><a>施術・料金</a>
            <ul class="nav-child">
              <li><a href="<?php echo home_url('/'); ?>siwa">しわ治療</a></li>
              <li><a href="<?php echo home_url('/'); ?>tarumi">たるみ治療</a></li>
              <li><a href="<?php echo home_url('/'); ?>kogao">小顔治療</a></li>
              <li><a href="<?php echo home_url('/'); ?>nose-lift">鼻の糸</a></li>
              <li><a href="<?php echo home_url('/'); ?>keiseigeka">形成外科治療</a></li>
              <li><a href="<?php echo home_url('/'); ?>medikaru">美肌治療</a></li>
              <li><a href="<?php echo home_url('/'); ?>cosmetics">ドクターズコスメ</a></li>
              <li><a href="<?php echo home_url('/'); ?>shoshin">初診料・再診料</a></li>
            </ul>
          </li>
          <li><a href="<?php echo home_url('/'); ?>access">アクセス</a></li>
          <li><a href="<?php echo home_url('/'); ?>doctor">ドクター紹介</a></li>
          <li><a href="<?php echo home_url('/'); ?>recruit">採用情報</a></li>
        </ul>
      </nav>
      <div class="top-cv-btn">
          <a class="bg-rs cv-btns" href="https://fumibeauty.reserve.ne.jp/" target="_blank"><span>来院予約</span></a>
          <a class="bg-ct cv-btns" href="<?php echo home_url('/'); ?>contact"><span>お問合わせ</span></a>
          <a class="bg-line cv-btns" href="https://line.me/R/ti/p/%40304ngjfp" target="_blank"><span>LINEで<br>
        簡単予約</span></a> 
        </div>
    </div>
  </header>
  <?php if (wp_is_mobile()) : ?>
  <div class="fv">
    <div class="fv-top-wrap">
      <div class="top">
        <div class="logos"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_logo.png" alt="FMUI BEAUTY CLINIC">
          <div class="band cp tc ls2">注入＆スレッド治療専門クリニック</div>
        </div>
        <h1><img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_cach_sp.png" alt="洗練された美容技術であなたの美しさを引き出します。"></h1>
      </div>
    </div>
    <div class="box-wrap">
      <ul class="menu-link flex">
        <li class="box-size"> <a href="<?php echo home_url('/'); ?>siwa"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb01.jpg" alt="サムネイル">
          <p class="cp tc ls1">注入オーダーメイド<br>
            <span class="gd">ORDER MADE</span></p>
          </a> </li>
        <li class="box-size"> <a href="<?php echo home_url('/'); ?>tarumi#area2"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb02.jpg" alt="サムネイル">
          <p class="cp tc ls1">スレッドリフト<br>
            <span class="gd">THREAD LIFT</span></p>
          </a> </li>
      </ul>
      <div class="cv-wrap box-size">
        <div class="top cp">
          <div class="tc txt">お電話によるお問い合わせ</div>
          <div class="midle al-cent">
            <div class="tel"><a href="tel:0663722323" class="cp">06-6372-2323</a></div>
            <div class="time sm">平日 10:00～18:00  土 10:00～17:00</div>
          </div>
        </div>
        <div class="bottom flex"> <a href="https://fumibeauty.reserve.ne.jp/" class="cv-btns bg-rs" target="_blank"><span class="bg-icon">来院予約<br>
          <span class="sm">RESERVATION</span></span></a> <a href="<?php echo home_url('/'); ?>contact" class="cv-btns bg-ct"><span class="bg-icon">お問合わせ<br>
          <span class="sm">CONTACT</span></span></a> </div>
      </div>
    </div>
  </div>
  <!--FV END-->
  
  <?php else: ?>
  <div class="fv">
    <div class="inner-box">
      <div class="fv-top-wrap">
        <div class="top pc-dis">
          <div class="logos pc-dis"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_logo.png" alt="FMUI BEAUTY CLINIC">
            <div class="band cp tc ls2">注入＆スレッド治療専門クリニック</div>
          </div>
          <h1><img src="<?php echo get_template_directory_uri(); ?>/img/top/fv2_cach.png" alt="洗練された美容技術であなたの美しさを引き出します。"></h1>
        </div>
      </div>
      <!--FV-top-wrap END-->
      <div class="bottom flex">
        <ul class="menu-link flex">
          <li class="box-size"> <a href="<?php echo home_url('/'); ?>siwa"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb01.jpg" alt="サムネイル">
            <p class="cp tc ls1">注入オーダーメイド<br>
              <span class="gd">ORDER MADE</span></p>
            </a> </li>
          <li class="box-size"> <a href="<?php echo home_url('/'); ?>tarumi#area2"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb02.jpg" alt="サムネイル">
            <p class="cp tc ls1">スレッドリフト<br>
              <span class="gd">THREAD LIFT</span></p>
            </a> </li>
        </ul>
        <div class="cv-wrap box-size">
          <div class="top flex cp al-cent">
            <div class="left sm">お電話による<br>
              お問い合わせ</div>
            <div class="tel"><a href="tel:0663722323" class="cp">06-6372-2323</a></div>
            <div class="time sm"> 平日 10:00～18:00<br>
              土 10:00～17:00</div>
          </div>
          <div class="bottom flex"> <a href="https://fumibeauty.reserve.ne.jp/" class="cv-btns bg-rs" target="_blank"><span class="bg-icon">来院予約<br>
            <span class="sm">RESERVATION</span></span></a> <a href="<?php echo home_url('/'); ?>contact" class="cv-btns bg-ct"><span class="bg-icon">お問合わせ<br>
            <span class="sm">CONTACT</span></span></a> </div>
        </div>
      </div>
      <!--BOTTOM END--> 
      
    </div>
    <!--INNER-BOX END--> 
    
    <a href="#contents1" class="bounce scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_down.svg" alt="scroll-down"></a> </div>
  <!--FV END-->
  
  <?php endif; ?>
  <section class="doctor mb0 area-bgs" id="bg4">
    <div class="inner cf">
      <div class="text">
        <h2 class="cp tc">CONCEPT <span class="sm">ご挨拶</span></h2>
        <div class="band cp tc ls2">beautiful aging</div>
        <p class="cach gd tc f-ryu">美しく年齢を重ね<br>
          輝き続けるために</p>
        <div class="btn-wrap"> <a href="<?php echo home_url('/'); ?>doctor" class="btn bg-cg">院長紹介</a> <a href="<?php echo home_url('/'); ?>concept" class="btn">当院について</a> </div>
      </div>
      <p class="doctor-name cp tc"><span class="sm">fumi beauty clinic院長</span><br>
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
  <section class="infusion cp cf mb0 bg-areas" id="bg2">
    <div class="inner-box">
      <div class="top flex">
        <div class="text tc cp box-size">
          <h3>注入治療</h3>
          <span class="sm gd">Infusion therapy</span>
          <p class="pc gosic tc">当院の主な注入治療部位です。<br>
            ヒアルロン酸やボトックスを「どこに」「どのくらい」<br>
            注入するかで、効果・効能が大きく効果が<br>
            違ってきますが、当院では<br>
            お顔全体のバランスをみて<br>
            自然な若返りができるようご提案しております。</p>
          <p class="sp gosic tc">当院の主な注入治療部位です。ヒアルロン酸やボトックスを「どこに」「どのくらい」注入するかで、効果・効能が大きく効果が違ってきますが、当院ではお顔全体のバランスをみて自然な若返りができるようご提案しております。</p>
        </div>
        <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/illust01.jpg" alt="イラスト"> </div>
      </div>
      <div class="bottom flex cf">
        <div class="box bg-areas" id="bg-thumb">
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
        </div>
        <div class="text tc cp box-size">
          <h3>製剤一覧</h3>
          <span class="sm gd">FORMULATION</span>
          <p class="pc gosic tc">当院の厳格な審査を通過した、<br>
            優良な品質の製剤のみを使用しております。<br>
            患者様の幅広い悩みを解決するために、<br>
            多種類の製剤を取り扱っています。</p>
          <p class="sp gosic tc">当院の厳格な審査を通過した、
            優良な品質の製剤のみを使用しております。
            患者様の幅広い悩みを解決するために、
            多種類の製剤を取り扱っています。</p>
          <a href="<?php echo home_url('/'); ?>list" class="btn">詳しく見る</a> </div>
      </div>
    </div>
  </section>
  <section class="menu area-bgs mb0" id="bg3">
    <h2 class="tc cp">MENU</h2>
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
        </ul>
        </a> </li>
      <li class="box-size hg-row"> <a href="<?php echo home_url('/'); ?>kogao">
        <h3 class="tc">小顔治療 </h3>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb07.jpg" alt="サムネイル"></div>
        <ul>
          <li data-url="<?php echo home_url('/'); ?>kogao#area1" class="js-link">・BNLS neo</li>
          <li data-url="<?php echo home_url('/'); ?>kogao#area2" class="js-link">・エラボトックス</li>
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
      <li class="box-size"> <a href="<?php echo home_url('/'); ?>medikaru">
        <h3 class="cw tc">美肌治療</h3>
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb10.jpg" alt="サムネイル"></div>
        <ul>
          <li>・美容点滴</li>
          <li>・プラセンタ</li>
          <li>・メディカルエステ</li>
        </ul>
        </a> </li>
    </ul>
  </section>
  <div class="cosmetics__bnr">
  <div class="inner">
    <div class="bnr"> <a href="<?php echo home_url('/');?>cosmetics" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/common/cosmetics_bnr02.jpg?1203" alt="ドクターズサプリメントのバナー"></a> </div>
  </div>
  <?php if (have_rows('bnr_cam', 28)): ?>
  <div class="banner-campaign">
    <h2 class="tc">スタッフのオススメ</h2>
    <div class="inner flex">
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
        <h2 class="cp tc">よくある質問</h2>
        <span class="sm tc gd mb30">Q&A</span>
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
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ): $the_query->the_post();
            ?>
            <div class="qas gd box-size swiper-slide">
              <h3 class="cat cw tc">
                <?php //所属タクソノミー表示
                $terms = wp_get_object_terms( $post->ID, 'faq_kind' );
                foreach ( $terms as $term ) {
                  echo $term->name;
                }
                ?>
              </h3>
              <p class="qa-txt pb0"><span class="q">Q</span>
                <?php the_title(); ?>
              </p>
              <div class="qa-txt text-over"><span class="a">A</span>
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
      
      <?php if (have_rows('top', 155)): ?>
      <div class="right-slide slide-area">
        <h2 class="cp tc">症例写真</h2>
        <span class="sm tc gd mb30">SYMPTOM</span>
        <div class="swiper-container slide-p2 swiper3 cont">
          <div class="swiper-wrapper">
            <?php while (have_rows('top', 155)) : the_row(); ?>
            <div class="bas gd box-size swiper-slide case-wrap mb0">
              <?php if (get_sub_field('ope_tit', 155)): ?>
              <h3 class="tc gd mb15 gosic">
                <?php the_sub_field('ope_tit', 155);?>
              </h3>
              <?php endif; ?>
              <div class="slide-in case-box mb0 flex">
                <div class="box">
                  <div class="thumb"><img src="<?php the_sub_field('befor_p', 155); ?>" alt="サムネイル"></div>
                  <p class="ls1 tc">
                    <?php the_sub_field('befor_txt', 155); ?>
                  </p>
                </div>
                <div class="box">
                  <div class="thumb"><img src="<?php the_sub_field('after_p', 155); ?>" alt="サムネイル"></div>
                  <p class="ls1 tc">
                    <?php the_sub_field('after_txt', 155); ?>
                  </p>
                </div>
              </div>
              <!-- slide-in END -->
              <?php if (get_sub_field('ope_risk', 155)): ?>
              <p class="risk tc gosic box-size">
                <?php the_sub_field('ope_risk', 155);?>
              </p>
              <?php endif; ?>
            </div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-button-prev prev2"></div>
          <div class="swiper-button-next next2"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!--right slides END-->
      
      <?php else: ?>
      <?php endif; ?>
    </div>
  </section>
  <!--SLIDES END-->
  
  <section class="sns">
    <h3 class="tc">Twitterやブログやインスタグラム・ラインオフィシャルアカウントにて<br class="pc">
      お得な情報を配信しています</h3>
    <div class="inner flex">
      <div class="bnr"> <a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/blog_bnr.jpg?0910" alt="blog_bnr"> </a> </div>
      <div class="bnr"><a href="https://line.me/R/ti/p/%40304ngjfp" target="_blank">
        <?php if (wp_is_mobile()) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/line_bnr_sp.jpg" alt="line_bnr">
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/line_bnr_pc.jpg" alt="line_bnr">
        <?php endif; ?>
        </a> </div>
    </div>
    <!-- /.inner -->
    <div class="inner flex">
      <div class="bnr"> <a href="https://www.instagram.com/dr_fumi/" target="_blank">
        <?php if (wp_is_mobile()) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_bnr_sp.jpg?09101" alt="insta_bnr">
        <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/common/insta_bnr.jpg?09101" alt="insta_bnr">
        <?php endif; ?>
        </a> </div>
      <div class="bnr"> <a href="https://twitter.com/@_fumibeauty_" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/twitter_bnr.jpg?0910" alt="twitter_bnr"> </a> </div>
    </div>
    </div>
    <!-- ./inner --> 
  </section>
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
        <ul class="flex gosic">
          <li><a href="<?php echo home_url('/'); ?>concept">当院について</a></li>
          <li><a href="#bg3">施術・料金</a></li>
          <li><a href="<?php echo home_url('/'); ?>access">アクセス</a></li>
          <li><a href="<?php echo home_url('/'); ?>doctor">ドクター紹介</a></li>
          <li><a href="<?php echo home_url('/'); ?>recruit">採用情報</a></li>
          <li><a href="https://fumibeauty.reserve.ne.jp/" target="_blank">来院予約</a></li>
          <li><a href="<?php echo home_url('/'); ?>contact">お問合わせ</a></li>
        </ul>
      </nav>
      <p class="copy cp"><small>fumi beauty cinic(ふみビューティクリニック梅田)美容皮膚科・形成外科・皮膚科<br>
        Copyright(C) fumi beauty clinic All Rights Reserved.</small></p>
    </div>
  </footer>
  <?php if (wp_is_mobile()) : ?>
  <nav class="hambargar">
    <ul>
      <li class="menu-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/menu_logo.png" alt="menu-logo"></li>
      <li><a href="<?php echo home_url('/'); ?>concept">当院について</a></li>
      <li class="parent"><a href="#" id="ac-txt">施術・料金</a>
        <ul class="child" id="ac">
          <li><a href="<?php echo home_url('/'); ?>tarumi">たるみ治療</a></li>
          <li><a href="<?php echo home_url('/'); ?>siwa">しわ治療</a></li>
          <li><a href="<?php echo home_url('/'); ?>kogao">小顔治療</a></li>
          <li><a href="<?php echo home_url('/'); ?>nose-lift">鼻の糸</a></li>
          <li><a href="<?php echo home_url('/'); ?>keiseigeka">形成外科治療</a></li>
          <li><a href="<?php echo home_url('/'); ?>medikaru">美肌治療</a></li>
          <li class="mb0"><a href="<?php echo home_url('/'); ?>cosmetics">ドクターズコスメ</a></li>
          <li class="mb0"><a href="<?php echo home_url('/'); ?>shoshin">初診料・再診料</a></li>
        </ul>
      </li>
      <li><a href="<?php echo home_url('/'); ?>access">アクセス</a></li>
      <li><a href="<?php echo home_url('/'); ?>doctor">ドクター紹介</a></li>
      <li><a href="<?php echo home_url('/'); ?>recruit">採用情報</a></li>
      <!--  <li><a href="https://fumibeauty.reserve.ne.jp/" target="_blank">来院予約</a></li>-->
      <li class="mb0"><a href="<?php echo home_url('/'); ?>contact">お問合わせ</a></li>
      <p class="menu-close"></p>
    </ul>
  </nav>
  <?php else: ?>
  <?php endif; ?>
  <?php if (wp_is_mobile()) : ?>
  <div class="fix-bottom">
    <ul class="flex gosic al-cent">
      <li class="box-size"><span href="#" class="cw menu-open">メニュー</span></li>
      <li class="box-size"><a href="https://fumibeauty.reserve.ne.jp/" class="cw" target="_blank">予約</a></li>
      <li class="box-size"><a href="tel:0663722323" class="cw">TEL</a></li>
    </ul>
  </div>
  <?php else: ?>
  <?php endif; ?>
  <a href="#" class="page-top bounce"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_up.svg" alt="scrool-up"></a> </div>
<!--WRAPPER END--> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?0910"></script> 
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