
<?php get_header()?>
<div class="blog-head single">
  <div class="blog-head__bg" >

  </div>

  <div class="blog-head__content" style="background-image: url(<?php the_field("title__img"); ?>) ;">

  </div>

   <h1 class="f-ryu blog-head__text">

          <span class="blog-head__time">
              <time datetime="<?php echo get_the_date( 'Y/m/d' ); ?>">
                                <?php the_time('Y年m月d日'); ?>
                              </time>
         </span>
         <?php the_title(); ?>
        </h1>



  <?php echo breadcrumb_func(); ?>

</div>

<?php if ( has_category() ) : ?>
<div class="blog-page-content__category-wrap">
<span class="blog-page-content__category">


<?php
$cats = $sort = array();
$post_cats = get_the_category();
foreach ($post_cats as $cat) {
$layer = count(get_ancestors($cat->term_id, 'category'));
$cats[] = array(
'name' => $cat->name,
'id' => $cat->term_id
);
$sort[] = $layer;
}
array_multisort($sort, SORT_ASC, $cats);
foreach ($cats as $cat) {
echo '<a href="'.get_category_link( $cat['id'] ).'">'.$cat['name'].'</a>';
}
?>




</span>
</div>
<?php endif; ?>



<section class="blog-page">
<div class="blog-page__inner">


<div class="blog-page__main">


<div class="blog-page-content">

  <?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php remove_filter('the_content', 'wpautop'); ?>
    <?php the_content(); ?>

     <!-- タグ出力 -->
         <?php the_tags('<ul class="tab-list tab-list--single"><li class="tab-list__item tab-list__item--single">','</li><li class="tab-list__item tab-list__item--single">','</li></ul>'); ?>
  <?php endwhile; endif; ?>

</div>
<!-- ./blog-content -->


 <?php // 現在の投稿に隣接している前後の投稿を取得する
                  $prev_post = get_previous_post(); // 前の投稿を取得
                  $next_post = get_next_post(); // 次の投稿を取得
                  if( $prev_post || $next_post ): // どちらか一方があれば表示
                ?>
                        <div class="single-page-nav">
                          <?php if( $prev_post ): // 前の投稿があれば表示 ?>
                              <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="single-page-nav__link single-page-nav__link--prev-link">
                               <p class="single-page-nav__text">前の記事へ</p>
                              <div class="single-page-nav__left">

                             <?php echo get_the_post_thumbnail( $prev_post->ID, 'full'); ?>
                             <p class="single-page-nav__ttl"><?php echo get_the_title( $prev_post->ID ); ?></p>
                              </div>

                                 <div class="single-page-nav__text-wrap">


                                 </div>
                                <!-- ./single-page-nav__text-wraps -->
                              </a>
                          <?php endif; ?>
                          <?php if( $next_post ): // 次の投稿があれば表示 ?>
                                  <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="single-page-nav__link single-page-nav__link--next-link">
                                    <p class="single-page-nav__text single-page-nav__text--next">次の記事へ</p>
                                  <div class="single-page-nav__left single-page-nav__left--next">
                                <?php echo get_the_post_thumbnail( $next_post->ID, 'full'); ?>
                                    <p class="single-page-nav__ttl single-page-nav__ttl--next"><?php echo get_the_title( $next_post->ID ); ?></p>
                                  </div>
                                <div class="single-page-nav__text-wrap">


                                </div>
                                <!-- ./single-page-nav__text-wraps -->


                            </a>
                          <?php endif; ?>
                        </div>
                <?php endif; ?>


</div>

<div class="blog-page__sidebar">
<ul class="widget">

<?php dynamic_sidebar('blog-sidebar'); ?>

</ul>






</div>







</div>
<!--inner END-->

</section>

<?php wp_footer(); ?>
<?php get_footer();?>
