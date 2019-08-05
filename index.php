<head>
<meta charset="UTF-8">
<title>
<?php bloginfo( 'name' ); ?>
</title>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">
<div class="wrapper">
  <header class="site-header front">
    <div class="header-inner flex al-cent">
      <div class="logo"><a href="<?php echo home_url( '/' ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="FMUI BEAUTY CLINIC"></a></div>
      <nav class="navi pc-dis">
        <ul class="flex">
          <li><a href="<?php echo home_url( '/' ); ?>concept">当院について</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>">施術・料金</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>access">アクセス</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>doctor">ドクター紹介</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>">採用情報</a></li>
        </ul>
      </nav>
      <div class="top-cv-btn"> <a class="bg-rs cv-btns" href="#" target="_blank"><span>来院予約</span></a> <a class="bg-ct cv-btns" href="<?php echo home_url( '/' ); ?>contact"><span>お問合わせ</span></a> </div>
    </div>
  </header>
  <?php if ( wp_is_mobile() ) : ?>
  <div class="fv">
    <h1><img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_sp.jpg" alt="洗練された美容技術で、あなたの美しさを引き出します。"></h1>
    <div class="box-wrap">
      <ul class="menu-link flex">
        <li class="box-size"> <a href="<?php echo home_url( '/' ); ?>concept"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb01.jpg" alt="サムネイル">
          <p class="cp tc ls1">当院について<br>
            <span class="gd">ABOUT</span></p>
          </a> </li>
        <li class="box-size"> <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb02.jpg" alt="サムネイル">
          <p class="cp tc ls1">オーダーメイド治療<br>
            <span class="gd">ORDER MADE</span></p>
          </a> </li>
      </ul>
      <div class="cv-wrap box-size">
        <div class="top cp">
          <div class="tc txt">お電話によるお問い合わせ</div>
          <div class="midle flex al-cent">
            <div class="tel"><a href="#" class="cp">06-6372-2323</a></div>
            <div class="time sm"> 受付時間<br>
              10:00～20:00 </div>
          </div>
        </div>
        <div class="bottom flex"> <a href="#" class="cv-btns bg-rs" target="_blank"><span class="bg-icon">来院予約<br>
          <span class="sm">RESERVATION</span></span></a> <a href="<?php echo home_url( '/' ); ?>contact" class="cv-btns bg-ct"><span class="bg-icon">お問合わせ<br>
          <span class="sm">CONTACT</span></span></a> </div>
      </div>
    </div>
  </div>
  <!--FV END-->
  
  <?php else: ?>
  <div class="fv">
    <div class="inner-box">
      <div class="fv-top-wrap">
        <div class="top flex pc-dis">
          <h1><img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_cach.png" alt="洗練された美容技術で、あなたの美しさを引き出します。"></h1>
          <div class="logos pc-dis"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/fv_logo.png" alt="FMUI BEAUTY CLINIC">
            <div class="band cp tc ls2">注入治療専門クリニック</div>
          </div>
        </div>
      </div>
      <!--FV-top-wrap END-->
      <div class="bottom flex">
        <ul class="menu-link flex">
          <li class="box-size"> <a href="<?php echo home_url( '/' ); ?>concept"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb01.jpg" alt="サムネイル">
            <p class="cp tc ls1">当院について<br>
              <span class="gd">ABOUT</span></p>
            </a> </li>
          <li class="box-size"> <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb02.jpg" alt="サムネイル">
            <p class="cp tc ls1">オーダーメイド治療<br>
              <span class="gd">ORDER MADE</span></p>
            </a> </li>
        </ul>
        <div class="cv-wrap box-size">
          <div class="top flex cp al-cent">
            <div class="left sm">お電話による<br>
              お問い合わせ</div>
            <div class="tel"><a href="#" class="cp">06-6372-2323</a></div>
            <div class="time sm"> 受付時間<br>
              10:00～18:00 </div>
          </div>
          <div class="bottom flex"> <a href="#" class="cv-btns bg-rs" target="_blank"><span class="bg-icon">来院予約<br>
            <span class="sm">RESERVATION</span></span></a> <a href="<?php echo home_url( '/' ); ?>contact" class="cv-btns bg-ct"><span class="bg-icon">お問合わせ<br>
            <span class="sm">CONTACT</span></span></a> </div>
        </div>
      </div>
      <!--BOTTOM END--> 
      
    </div>
    <!--INNER-BOX END--> 
    
    <a href="#contents1" class="bounce scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_down.svg" alt="scroll-down"></a> </div>
  <!--FV END-->
  
  <?php endif; ?>
  <?php if ( wp_is_mobile() ) : ?>
  <?php if( have_rows('bnr_sp',28) ): ?>
  <div class="banner-arwa" id="contents1">
    <div class="swiper-container swiper1 cont">
      <div class="swiper-wrapper">
        <?php while ( have_rows('bnr_sp',28) ) : the_row(); ?>
        <div class="swiper-slide"><a href="<?php the_sub_field('bnr_sp_link',28); ?>" target="_blank"><img src="<?php the_sub_field('bnr_sp_img',28); ?>" alt="注入オーダーメイドカウンセリングで、患者様から要望・お悩みをヒアリングして、
                            多くの製材や治療法の中から最も適したものをご提案いたします。"></a></div>
        <?php endwhile; ?>
                </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
  </div>
  <?php else: ?>
  <?php endif; ?>
  <?php else: ?>
    
    
     <?php if( have_rows('bnr_pc',28) ): ?>
  <div class="banner-arwa" id="contents1">
    <div class="swiper-container swiper1 cont">
      <div class="swiper-wrapper">
        <?php while ( have_rows('bnr_pc',28) ) : the_row(); ?>
        <div class="swiper-slide"><a href="<?php the_sub_field('bnr_pc_link',28); ?>" target="_blank"><img src="<?php the_sub_field('bnr_pc_img',28); ?>" alt="注入オーダーメイドカウンセリングで、患者様から要望・お悩みをヒアリングして、
                            多くの製材や治療法の中から最も適したものをご提案いたします。"></a></div>
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
  <section class="concept area-bgs cf mb0" id="bg1">
    <h2 class="concept-h2 cw">
      <div class="inner-text">CONCEPT <span>コンセプト</span></div>
    </h2>
    <div class="adout-text cp tc">
      <div class="inner-text ls1">
        <p class="tc mb30">大阪府大阪市北区梅田にある美容外科です。</p>
        <p class="tc mb30 pc">患者様の美しさを引き出して、<br>
          豊かな人生を送れるサポートをします。 </p>
        <p class="tc mb30 pc">スタッフ一同、患者様の気持ちに寄り添い、<br>
          患者様との優良な信頼関係を作りあげるように<br>
          日々精進しています。 </p>
        <p class="tc mb30 sp">患者様の美しさを引き出して、豊かな人生を送れるサポートをします。 </p>
        <p class="tc mb30 sp">スタッフ一同、患者様の気持ちに寄り添い、患者様との優良な信頼関係を作りあげるように日々精進しています。 </p>
        <a href="<?php echo home_url( '/' ); ?>concept" class="btn">当院について</a> </div>
    </div>
  </section>
  <!--CONCEPT END-->
  
  <section class="infusion flex cp cf in-view">
    <h2 class="rl">注入治療</h2>
    <div class="contents bg-areas"  id="bg2">
      <div class="top flex">
        <div class="text cp box-size">
          <h3>オーダーメイド治療</h3>
          <span class="sm gd">ORDER MADE</span>
          <p class="pc gosic">カウンセリングで、患者様から、<br>
            要望・悩みをヒアリングして、<br>
            多くの製剤や治療法の中から最も適したものを<br>
            ご提案いたします。</p>
          <p class="sp gosic">カウンセリングで、患者様から、
            要望・悩みをヒアリングして、
            多くの製剤や治療法の中から最も適したものを
            ご提案いたします。</p>
          <a href="<?php echo home_url( '/' ); ?>" class="btn">詳しく見る</a> </div>
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
        <div class="text cp box-size">
          <h3>製剤一覧</h3>
          <span class="sm gd">FORMULATION</span>
          <p class="pc gosic">当院の厳格な審査を通過した、<br>
            優良な品質の製剤のみを使用しております。<br>
            患者様の幅広い悩みを解決するために、<br>
            多種類の製剤を取り扱っています。</p>
          <p class="sp gosic">当院の厳格な審査を通過した、
            優良な品質の製剤のみを使用しております。
            患者様の幅広い悩みを解決するために、
            多種類の製剤を取り扱っています。</p>
          <a href="<?php echo home_url( '/' ); ?>" class="btn">詳しく見る</a> </div>
      </div>
    </div>
  </section>
  <section class="menu area-bgs mb0" id="bg3">
    <h2 class="cw tc">MENU</h2>
    <ul class="munu-link flex">
      <li class="box-size"> <a href="<?php echo home_url( '/' ); ?>concept">
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb05.jpg" alt="サムネイル"></div>
        <h3 class="cw tc">当院について <span class="sm tc cw">ABOUT
          </sapn>
        </h3>
        </a> </li>
      <li class="box-size"> <a href="<?php echo home_url( '/' ); ?>">
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb06.jpg" alt="サムネイル"></div>
        <h3 class="cw tc">施術・料金 <span class="sm tc cw">LIST
          </sapn>
        </h3>
        </a> </li>
      <li class="box-size"> <a href="<?php echo home_url( '/' ); ?>">
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb07.jpg" alt="サムネイル"></div>
        <h3 class="cw tc">採用情報 <span class="sm tc cw">RECRUIT
          </sapn>
        </h3>
        </a> </li>
      <li class="box-size"> <a href="<?php echo home_url( '/' ); ?>" target="_blank">
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/top/thumb08.jpg" alt="サムネイル"></div>
        <h3 class="cw tc">来院予約 <span class="sm tc cw">RESERVE
          </sapn>
        </h3>
        </a> </li>
    </ul>
  </section>
  <section class="doctor area-bgs" id="bg4">
    <div class="inner">
      <div class="text">
        <h2 class="cp">DOCTOR <span class="sm">院長紹介</span></h2>
        <p class="cach gd pc">患者様の美と健康のために<br>
          少しでもお力になれるような<br>
          出会いを大切にしています。</p>
        <p class="cach gd sp">患者様の美と健康のために
          少しでもお力になれるような
          出会いを大切にしています。</p>
        <p class="sm gd gosic">fumi beauty clinic院長　先山 史</p>
        <a href="<?php echo home_url( '/' ); ?>" class="btn">詳しく見る</a> </div>
    </div>
  </section>
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
              'posts_per_page' => -1,
              'orderby' => 'rand',
              'order' => 'DESC',
            );
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ): $the_query->the_post();
            ?>
            <div class="qas gd box-size swiper-slide">
              <h3 class="cat cw tc">
        <?php //所属タクソノミー表示
        $terms = wp_get_object_terms($post->ID,'faq_kind');
        foreach($terms as $term){
          echo $term->name;
        }
      ?></h3>
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
      
      <div class="right-slide slide-area">
        <h2 class="cp tc">症例写真</h2>
        <span class="sm tc gd mb30">SYMPTOM</span>
        <div class="swiper-container slide-p2 swiper3 cont">
          <div class="swiper-wrapper"> 
            <!-- Slides -->
            <?php
            $args = array(
              'post_type' => 'symptom',
              'posts_per_page' => -1,
              'orderby' => 'rand',
              'order' => 'DESC',
            );
            $the_query = new WP_Query( $args );
            while ( $the_query->have_posts() ): $the_query->the_post();
            ?>
            <div class="bas gd box-size swiper-slide">
              <div class="slide-in flex">
                <div class="thumb"><img src="<?php the_field('s_p'); ?>" alt="サムネイル"></div>
                <div class="text">
                  <h3 class="">
                    <?php the_title(); ?>
                  </h3>
                  <div class="ba-txt gosic box-size text-over">
                      <?php remove_filter('the_content', 'wpautop'); ?>
                    <?php the_content()?>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
          <div class="swiper-button-prev prev2"></div>
          <div class="swiper-button-next next2"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!--right slides END--> 
      
    </div>
  </section>
  <!--SLIDES END-->
  
  <section class="map">
    <div class="inner" id="map"></div>
  </section>
  <!--MAP END-->
  
  <footer>
    <div class="inner flex">
      <nav class="navi pc-dis">
        <ul class="flex gosic">
          <li><a href="<?php echo home_url( '/' ); ?>concept">当院について</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>">施術・料金</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>access">アクセス</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>doctor">ドクター紹介</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>">採用情報</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>" target="_blank">来院予約</a></li>
          <li><a href="<?php echo home_url( '/' ); ?>contact">お問合わせ</a></li>
        </ul>
      </nav>
      <p class="copy cp"><small>Copyright(C) fumi beauty clinic All Rights Reserved.</small></p>
    </div>
  </footer>
  <?php if ( wp_is_mobile() ) : ?>
  <nav class="hambargar">
    <ul>
      <li class="menu-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/menu_logo.png" alt="menu-logo"></li>
      <li><a href="<?php echo home_url( '/' ); ?>concept">当院について</a></li>
      <li><a href="<?php echo home_url( '/' ); ?>">施術・料金</a></li>
      <li><a href="<?php echo home_url( '/' ); ?>access">アクセス</a></li>
      <li><a href="<?php echo home_url( '/' ); ?>doctor">ドクター紹介</a></li>
      <li><a href="<?php echo home_url( '/' ); ?>" target="_blank">来院予約</a></li>
      <li class="mb0"><a href="<?php echo home_url( '/' ); ?>contact">お問合わせ</a></li>
      <p class="menu-close"></p>
    </ul>
  </nav>
  <?php else: ?>
  <?php endif; ?>
  <?php if ( wp_is_mobile() ) : ?>
  <div class="fix-bottom">
    <ul class="flex gosic al-cent">
      <li class="box-size"><span href="#" class="cw menu-open">メニュー</span></li>
      <li class="box-size"><a href="<?php echo home_url( '/' ); ?>" class="cw" target="_blank">予約</a></li>
      <li class="box-size"><a href="<?php echo home_url( '/' ); ?>" class="cw">TEL</a></li>
    </ul>
  </div>
  <?php else: ?>
  <?php endif; ?>
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