// JavaScript Document 



$(function(){
    
    
    $(window).scroll(function(){
        var scp = $(window).scrollTop();                
        var scp2 = 1000;
        
        if(scp > scp2){
            $(".page-top").fadeIn();
        } else {
            $(".page-top").fadeOut();
        }
    
    
    });
    
    
    
	
//ドロワーメニュー切り替え設定
    
   $(".menu-open").click(function(){
      $(".hambargar").toggleClass("open");
      $(".fix-bottom").toggleClass("open");
       var txt = $(".menu-open").text();
       var menutxt = "メニュー"
       if(menutxt == txt){
           $(this).text("閉じる");
       } else {
           $(this).text("メニュー");
       }
       
     
       
   });
           
           

    
//スクロールコンテンツ表示
    
$('.in-view').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
$(this).stop().addClass('fade-in');
});

    
//スライダー
    
var mySwiper = new Swiper ('.swiper1', {
  loop: true,
  initialSlide: 1,
  slidesPerView: 1,

  paginationClickable: true,
     nextButton: '.swiper-button-next',
     prevButton: '.swiper-button-prev',
        breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 0,
        pagination: '.swiper-pagination',

    }
  }

})


var mySwiper2 = new Swiper ('.swiper2', {
  loop: true,
  initialSlide: 1,
  slidesPerView: 2,
spaceBetween: 10,
pagination: '.swiper-pagination',
      paginationClickable: true,
     nextButton: '.next2',
     prevButton: '.prev2',
   
        breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  }

});

    var mySwiper3 = new Swiper ('.swiper3', {
  loop: true,
  initialSlide: 1,
  slidesPerView: 1,
spaceBetween: 10,
pagination: '.swiper-pagination',
paginationClickable: true,

 paginationClickable: true,
     nextButton: '.next2',
     prevButton: '.prev2',
   
        breakpoints: {
    767: {
      slidesPerView: 1,
      spaceBetween: 10
    }
  }

});





    
//Q&A アコーディオン


//よくある質問ページ

$(".qa-out dt").on("click", function() {
$(this).next().slideToggle();
$(this).toggleClass("open");
$(this).next().toggleClass("open");
});


//施術ページ
    
$(".acv dt").on("click", function() {
$(this).next().slideToggle();
//$(this).toggleClass("active");
});
    
//SP SIDE MENU アコーディオン

$(".a1").on("click", function() {
$(".c1").slideToggle();
$(this).toggleClass("open");
});
    
$('.a2').on("click", function() {
$(".c2").slideToggle();
$(this).toggleClass("open");
});
    
    
$(".a3").on("click", function() {
$(".c3").slideToggle();
$(this).toggleClass("open");
});

$(".a4").on("click", function() {
$(".c4").slideToggle();
$(this).toggleClass("open");
});
 
$(".a5").on("click", function() {
$(".c5").slideToggle();
$(this).toggleClass("open");
});
    
$(".a6").on("click", function() {
$(".c6").slideToggle();
$(this).toggleClass("open");
});
 
	
	//スムーススクロール
	 var headerHight = 100; //ヘッダの高さ
 $('a[href^=#]').click(function(){
     var href= $(this).attr("href");
       var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top-headerHight; //ヘッダの高さ分位置をずらす
     $("html, body").animate({scrollTop:position}, 550, "swing");
        return false;
   });

	
	
	
});