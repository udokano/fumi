<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?0216">
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


</head>
<body <?php body_class(); ?>>
<div class="wrapper">
  <header class="site-header front">
    <div class="header-inner flex al-cent">
      <div class="logo tc"><a href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_re.png" alt="FMUI BEAUTY CLINIC"></a></div>
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
