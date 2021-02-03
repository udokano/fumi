<?php get_header();?>
<div class="page-head">
  <h1 class="tc f-ryu">症例写真一覧</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="archive new_archive">
  <div class="inner">





  <div class="select__content box-size">
  <h2 class="tc gd gosic">施術の種類</h2>
 <?php
  $args = array(
     'post_type' => array('case'),
     'orderby' => 'description',
     'order' => 'ASC'
    );

$my_terms = get_terms('faq_kind', $args);
  echo '<select id="tax__change" onchange="location.href=value;">';
          echo '<option value="' . home_url('/') . 'case-list">'."選択してください".'</option>';
foreach ($my_terms as $term) {
   echo '<option value="' . get_term_link($term->slug, "faq_kind") . '" data-value="' . $term->slug . '">' . $term->name . '</option>';
}
   echo '</select>';

?>
  </div><!-- ./ select__content-->

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="new_archive_list">
      <h2>
        <?php the_title();?>
      </h2>
      <?php if (have_rows('photo')): ?>
      <div class="photo__area">
        <?php while (have_rows('photo')) : the_row(); ?>
        <div class="case-box">
          <div class="case__photo">
            <div class="thumb"> <img src="<?php the_sub_field('sigle_photo');?>" alt="症例写真"> </div>
            <div class="text">
              <p class="bf">
                <?php the_sub_field('bf_txt');?>
              </p>
              <p class="af">
                <?php the_sub_field('af_txt');?>
              </p>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
      </div><!--./photo__area-->
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

  <p class="read__single">
<<<<<<< HEAD
    <a href="<?php the_permalink();?>?cat=<?php //所属タクソノミースラック表示
                $terms = wp_get_object_terms($post->ID, 'faq_kind');
                foreach ($terms as $term) {
                    echo $term->slug;
                    break;
                }?>">詳しく見る</a>
=======
    <a href="<?php the_permalink();?>">詳しく見る</a>
>>>>>>> cd3661fdbeeb610adc944c857af9ef78b8951c7c
  </p>

    </div><!--./new_archive_list-->
    <?php endwhile; endif; ?>

    <!--ページネーション追加-->
      <div class="pagination">
        <?php echo paginate_links(array(
          'type' => 'list',
          'mid_size' => '2',
          'prev_text' => '&laquo;',
          'next_text' => '&raquo;'
          )); ?>
      </div>
        <?php wp_reset_query(); ?>

  </div>
  <!--inner END-->

</section>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "https://fumibeauty.jp","name": "ホーム"}},
	{"@type": "ListItem","position": 2,"item":{"@id": "https://fumibeauty.jp/case-list/","name": "症例写真一覧"}}
  ]
}
</script>
<?php get_footer();?>
