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
<body <?php body_class(); ?>>
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