<?php
/*
Template Name: 症例写真記事一覧
*/

?>
<?php get_header()?>
<div class="page-head">
  <h1 class="tc f-ryu">症例写真一覧</h1>
  <?php echo breadcrumb_func(); ?> </div>
<section class="archive">
<div class="inner">

<?php
global $max_num_page;
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$args = array(
'post_type' => 'case',
'posts_per_page' => 4,
'orderby' => 'date',
'order' => 'DESC',
'paged' => $paged,
);
$the_query = new WP_Query($args);
while ($the_query->have_posts()) : $the_query->the_post();
?>

<a href="<?php the_permalink();?>" class="post__list flex">
<div class="thumb">
 <?php
    if (has_post_thumbnail()) {
        the_post_thumbnail('medium');
    }
    ?>
</div>
<!-- ./thumb -->

<div class="post__info">
    <div class="top__info flex">
    <div class="tax__content">
     <?php //所属タクソノミー表示
                $terms = wp_get_object_terms($post->ID, 'faq_kind');
                foreach ($terms as $term) {
                    echo "<div class='tax'>";
                    echo $term->name;
                    echo "</div>";
                }
                ?>

    </div>



      <!--投稿日を表示-->
      <time class="article-date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
        <?php echo get_the_date(); ?>
      </time>


    </div><!-- ./top__cont -->

    <h2><?php the_title(); ?></h2>
<?php if (get_field('comment')): ?>
    <div class="comment pc">
<p><?php the_field('comment');?></p>

    </div>

     <?php endif; ?>
</div>

</a>

<?php endwhile; wp_reset_postdata(); ?>


<!-- ページャー出力 -->
<?php
if ($the_query->max_num_pages > 1) {
                    echo '<div class="pagination">';
                    echo paginate_links(array(
    'base' => get_pagenum_link(1).'%_%',
    'format' => 'page/%#%/',
    'current' => max(1, $paged),
    'total' => $the_query->max_num_pages,
    'type' => 'list',
    'mid_size' => '1',
    'prev_text' => '«',
    'next_text' => '»'
    ));
                    echo '</div>';
                }
?>



</div>
<!--inner END-->

</section>

<?php wp_footer(); ?>
<?php get_footer();?>
