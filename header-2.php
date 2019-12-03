<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?1227">
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149159841-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149159841-1');
</script>

</head>
<body <?php body_class(); ?>>
<div class="wrapper">
  <header class="site-header front">
    <div class="header-inner flex al-cent">
      <div class="logo tc"><a href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="FMUI BEAUTY CLINIC"></a></div>
      <div class="top-cv-btn"> <a class="bg-rs cv-btns" href="https://fumibeauty.reserve.ne.jp/" target="_blank"><span>来院予約</span></a> <a class="bg-ct cv-btns" href="<?php echo home_url('/'); ?>contact-list"><span>お問合わせ</span></a> </div>
    </div>
  </header>
