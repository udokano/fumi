<?php get_header();?>

<div class="page-head --head-archive">
  <h1 class="tc f-ryu">
  <!-- カテゴリー一覧の場合 -->
  <?php if ( is_category() ) : ?>
<?php single_cat_title(); ?>
<?php endif; ?><!-- 日付記事一覧の場合 -->
<?php if( is_date() ) : ?>
<?php echo get_the_date('Y年M'); ?>
<?php endif; ?>
<!-- タグ一覧の場合 -->
<?php if( is_tag() ) : ?>
<?php single_tag_title(); ?>
<?php endif; ?>の記事一覧</h1>
  <?php echo breadcrumb_func(); ?>
  </div>
<!-- ./page-head -->

<section class="archive">
  <div class="blog-inner">

  <?php if (have_posts()): ?>
<?php while (have_posts()) : the_post(); ?>
<!-- ここにループ内容 -->

<article class="blog-article ">

 <a href="<?php the_permalink(); ?>" class="blog-article__link ">

  <div class="blog-article__row flex">

          <div class="blog-article__thumb">
                <?php the_post_thumbnail(''); ?>
          </div>
          <!-- ./blog-article__thumb -->


          <div class="blog-article__right">

                      <div class="blog-article__top flex al-cent">

                      <?php if( has_category() ){ ?>
                      <div class="blog-article__category-wrap">
                                <?php
                                $categories = get_the_category();
                                foreach( $categories as $category ) {
                                echo '<span class="blog-article__category">'.$category->name.'</span>';
                                }
                                ?>
                      </div>
                        <?php } ?>

                      </div>
                      <!-- ./blog-article__top -->

                      <h3 class="blog-article__ttl"><?php the_title(); ?></h3>
                      <p class="blog-article__excerpt">
                        <?php remove_filter('the_excerpt', 'wpautop'); ?>
                        <?php the_excerpt(); ?>
                      </p>

                      <div class="blog-article__btm-cont flex al-cent">
                          <span class="blog-article__time">
                                      <time datetime="<?php echo get_the_date( 'Y/m/d' ); ?>">
                                        <?php the_time('Y年m月d日'); ?>
                                      </time>
                        </span>
                        <p class="blog-article__btn arrow">続きを見る</p>
                      </div>


          </div>
          <!-- ./blog-article__right -->
    </div>

    <!-- タグ出力 -->
              <?php
              $posttags = get_the_tags();
              if ($posttags) {
                echo '<ul class="tab-list">';
                foreach($posttags as $tag) {
                echo '<li class="tab-list__item">' . $tag->name . '</li>';
                }
              echo '</ul>';
              }
              ?>

 </a>
</article>

<?php endwhile; ?>
<?php else: ?>
<!-- 投稿が無い場合の内容 -->
<p class="tc">ただいま記事の準備中です</p>
<?php endif; ?>


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
<!-- ./inner -->
</section>

<?php get_footer();?>
