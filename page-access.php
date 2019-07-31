<?php/*
Template Name: アクセス 
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/access/h1_txt.png" alt="アクセス"></h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="access-info">
  <div class="inner">
    <div class="cont flex">
      <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/access/noimg01.jpg" alt=""></div>
      <div class="text box-size gosic">
        <h2 class="gd tc">fumi beauty clinic</h2>
        <dl class="flex">
          <dt class="gd">院長</dt>
          <dd>先山 史</dd>
        </dl>
        <dl class="flex">
          <dt class="gd">所在地</dt>
          <dd>大阪府大阪市◯◯◯</dd>
        </dl>
        <dl class="flex">
          <dt class="gd">電話番号</dt>
          <dd>0120-000-000</dd>
        </dl>
        <dl class="flex">
          <dt class="gd">診療時間</dt>
          <dd>0120-000-000</dd>
        </dl>
        <dl class="flex">
          <dt class="gd">休診日</dt>
          <dd>◯曜日</dd>
        </dl>
      </div>
    </div><!--Cont END-->
      
      
      <!-- add test -->
      
      <div class="map">
      
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2803.247522339175!2d135.49375498422734!3d34.7010965294239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e68d95e3a70b%3A0x1baec822e859c84a!2z5aSn6Ziq6aeF!5e0!3m2!1sja!2sjp!4v1562905173218!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      
      
      </div><!--MAP END-->
      
      <dl class="info gosic">
          <dt>電車でご来院の方へ</dt>
          <dd>
              <p>◯◯線◯◯駅から◯◯口から徒歩◯分</p>
              <p>◯◯線◯◯駅から◯◯口から徒歩◯分</p>
          </dd>
      </dl>
      
      
       <dl class="info gosic">
          <dt>お車でご来院の方へ</dt>
          <dd>
              <p>お近くのコインパーキングをご利用ください</p>
              
              <div class="box flex">
              
                  <figure>
                  
                      <img src="<?php echo get_template_directory_uri(); ?>/img/access/noimg02.jpg" alt="">
                      
                      <figcaption>◯◯パーク</figcaption>
                  
                  </figure>
                  
                   <figure>
                  
                      <img src="<?php echo get_template_directory_uri(); ?>/img/access/noimg02.jpg" alt="">
                      
                      <figcaption>◯◯パーク</figcaption>
                  
                  </figure>
                  
              </div>
              
          </dd>
      </dl>
      
      
  </div><!--Inner END-->
</section>

<?php get_footer();?>
