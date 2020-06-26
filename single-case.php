
<?php get_header()?>
<div class="page-head single">
 <h1 class="f-ryu"><?php the_title(); ?></h1>
  <?php echo breadcrumb_func(); ?>

</div>




<section class="singe__case">
<div class="inner">

<div class="select__content box-size">
  <h2 class="tc gd gosic">施術の種類</h2>
 <?php
  $args = array(
     'post_type' => array('case'),
    );

$my_terms = get_terms('faq_kind', $args);
  echo '<select id="tax__change" onchange="location.href=value;">';

foreach ($my_terms as $term) {
    echo '<option value="' . get_term_link($term->slug, "faq_kind") .'?cat=' .$term->slug . '">' . $term->name . '</option>';
}
   echo '</select>';
?>
  </div><!-- ./ select__content-->

	<?php if (have_posts()): while (have_posts()): the_post(); ?>

  <?php if (have_rows('photo')): ?>
  <div class="photo__area">

        <?php while (have_rows('photo')) : the_row(); ?>
         <div class="case-box">
         <div class="case__photo">
         <div class="thumb">
         <img src="<?php the_sub_field('sigle_photo');?>" alt="症例写真">
         </div>

         <div class="text">
          <p class="bf"><?php the_sub_field('bf_txt');?>
</p>
          <p class="af"><?php the_sub_field('af_txt');?>
</p>
         </div>

         </div>
           </div>
         <!--  <div class="ba-box flex">
            <div class="box">
              <div class="thumb"> <img src="<?php the_sub_field('p_bf');?>" alt="施術前"> </div>
              <p class="gd tc">施術前</p>
            </div>
                <div class="arw"></div>
            <div class="box">
              <div class="thumb"> <img src="<?php the_sub_field('p_bf');?>" alt="施術後"> </div>
              <p class="gd tc">施術後</p>
            </div>
          </div> </div> -->
        <?php endwhile; ?>

  </div>
  <?php else: ?>
  <?php endif; ?>

   <?php if (get_field('ope_desc')): ?>
          <div class="risk text__box gosic box-size">

          <dl>
            <dt>施術内容・説明</dt>
            <dd><?php the_field('ope_desc');?></dd>
          </dl>
          </div>
  <?php endif; ?>

   <?php if (get_field('risk')): ?>
          <div class="risk text__box gosic box-size">

          <dl>
            <dt>リスク・副作用</dt>
            <dd><?php the_field('risk');?></dd>
          </dl>
          </div>
  <?php endif; ?>

   <?php if (get_field('comment')): ?>
          <div class="comment text__box gosic box-size">
            <dl>
              <dt>コメント</dt>
              <dd> <?php the_field('comment'); ?></dd>
            </dl>

          </div>
  <?php endif; ?>

<?php endwhile; endif; ?>





</div>
<!--inner END-->

</section>

<?php wp_footer(); ?>
<?php get_footer();?>
