<?php
/*
Template Name: 医院について
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu"><?php echo the_title(); ?></h1>
  <?php echo breadcrumb_func(); ?> </div>
  <?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<!-- ここにループ内容 -->
<?php endwhile; ?>
<?php remove_filter('the_content', 'wpautop'); ?>
<?php the_content(); ?>
<?php else: ?>
<!-- 投稿が無い場合の内容 -->
<h2 class="tc">ただいま内容の準備中です。</h2>
<?php endif; ?>
<script type="application/ld+json">
        {
         "@context":"http://schema.org",
         "@type":"MedicalOrganization",
         "name":"ふみビューティークリニック梅田",
         "address":{
          "@type":"PostalAddress",
          "streetAddress":"芝田2丁目8-33 芝田ビル3F",
          "addressLocality":"大阪市北区",
          "addressRegion":"大阪府",
          "postalCode":"530-0012",
          "addressCountry":"JP"
         },
         "geo":{
          "@type":"GeoCoordinates",
          "latitude":"34.707103",
          "longitude":"135.495992"
         },
         "openingHoursSpecification":[
          {
           "@type":"OpeningHoursSpecification",
           "dayOfWeek":[
            "Monday",
            "Tuesday",
            "Wednesday",
            "Friday"
           ],
           "opens":"10:00",
           "closes":"18:00"
          },
          {
           "@type":"OpeningHoursSpecification",
           "dayOfWeek":[
            "Saturday"
           ],
           "opens":"10:00",
           "closes":"17:00"
          }
         ],
         "image":"https://fumibeauty.jp/wp/wp-content/themes/fumi-clinic/img/top/fv2_slide03.jpg?0206",
         "url":"https://fumibeauty.jp/"
        }
        </script>
<?php get_footer();?>
