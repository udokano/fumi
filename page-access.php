<?php/*
Template Name: アクセス 
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/access/h1_txt.png" alt="アクセス"></h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="access-info bg-cp">
  <div class="inner">
    <div class="cont flex">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/access/clinic_thumbjpg.jpg" alt=""></div>
      <div class="text box-size gosic">
        <h2 class="gd">fumi beauty clinic<br>
           <span class="sm"> (ふみビューティクリニック梅田)</span>
</h2>
        <dl class="flex">
          <dt>院長</dt>
          <dd>先山 史</dd>
        </dl>
        <dl class="flex">
          <dt>所在地</dt>
          <dd>大阪府大阪市◯◯◯</dd>
        </dl>
        <dl class="flex">
          <dt>電話番号</dt>
          <dd>06-6372-2323</dd>
        </dl>
        <dl class="flex">
          <dt>診療時間</dt>
          <dd>平日 10:00~18:00 土 10:00~17:00</dd>
        </dl>
        <dl class="flex">
          <dt>休診日</dt>
          <dd>木・日・祝</dd>
        </dl>
      </div>
    </div><!--Cont END-->
      
      
</section>
    
    
    
    <section class="access-info">
        
        
        <div class="inner">
        
        
                  <div class="page-map" id="map">
      
      </div><!--MAP END-->
      
      <div class="info gosic">
            
          <h3 class="tc">〇〇駅からのアクセス方法</h3> 
          
          
          
          <ul class="flex gosic">
              <li><div class="thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/access/sample_thumb1.jpg" alt="">
                  
                  </div>
              
                  <h4 class="cp tc">順路❶</h4>
                  
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              
              
              </li>
              
              <li><div class="thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/access/sample_thumb2.jpg" alt="">
                  
                  </div>
              
                  <h4 class="cp tc">順路❷</h4>
                  
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              
              
              </li>
              
              <li><div class="thumb">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/access/sample_thumb3.jpg" alt="">
                  
                  </div>
              
                  <h4 class="cp tc">順路❸</h4>
                  
                  <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
              
              
              </li>
          </ul>
          
          
            
            
      </div>
      
      
         <div class="info gosic">
            
          <h3 class="tc">〇〇駅からのアクセス方法</h3> 
        
            <p class="tc note pc">当院には専用駐車場がございませんので、周辺の有料駐車場をご利用ください。<br>
また、fumi beauty clinicご利用時の駐車料金の割引はございません。
</p>
             
               <p class="tc note sp">当院には専用駐車場がございませんので、周辺の有料駐車場をご利用ください。また、fumi beauty clinicご利用時の駐車料金の割引はございません。
</p>
        
        </div>

      </div>
    
      
      
  </div><!--Inner END-->
</section>
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

<?php get_footer();?>
