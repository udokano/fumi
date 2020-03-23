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
<body <?php body_class(); ?>>
<div class="wrapper">
<header class="site-header front">
  <div class="header-inner flex al-cent">
    <div class="logo tc"><a href="<?php echo home_url('/'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo_re.png?<?php echo filemtime(get_template_directory() . '/img/common/logo_re.png');?>" alt="FMUI BEAUTY CLINIC"></a></div>
    <nav class="navi pc-dis">
      <ul>
        <li><a href="<?php echo home_url('/'); ?>concept">当院について</a></li>
        <li class="navi-parent"><a>施術・料金</a>
          <ul class="nav-child">
              <li><a href="<?php echo home_url('/'); ?>tarumi">たるみ治療</a></li>
            <li><a href="<?php echo home_url('/'); ?>siwa">しわ治療</a></li>
              <li><a href="<?php echo home_url('/'); ?>medikaru">美肌治療</a></li>
            <li><a href="<?php echo home_url('/'); ?>kogao">小顔治療</a></li>
            <li><a href="<?php echo home_url('/'); ?>nose-lift">鼻の糸</a></li>
            <li><a href="<?php echo home_url('/'); ?>keiseigeka">形成外科治療</a></li>
            <li><a href="<?php echo home_url('/'); ?>cosmetics">ドクターズコスメ</a></li>
            <li><a href="<?php echo home_url('/'); ?>shoshin">初診料・再診料</a></li>
          </ul>
        </li>
        <li><a href="<?php echo home_url('/'); ?>access">アクセス</a></li>
        <li><a href="<?php echo home_url('/'); ?>doctor">ドクター紹介</a></li>
         <li><a href="<?php echo home_url('/');?>case-list">症例写真</a></li>
        <li><a href="http://blog.livedoor.jp/dr_sakiyama" target="_blank">院長ブログ</a></li>
      </ul>
    </nav>
    <div class="top-cv-btn"> <a class="bg-rs cv-btns" href="https://fumibeauty.reserve.ne.jp/" target="_blank"><span>来院予約</span></a> <a class="bg-ct cv-btns" href="<?php echo home_url('/'); ?>contact"><span>お問合わせ</span></a> <a class="bg-line cv-btns" href="https://line.me/R/ti/p/%40304ngjfp" target="_blank"><span>LINEで<br>簡単予約</span></a> </div>
  </div>
</header>
