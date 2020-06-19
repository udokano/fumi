<footer class="pages list-footer">


    <div class="pages-footer-box flex al-cent">

        <div class="f-logo">

            <img src="<?php echo get_template_directory_uri(); ?>/img/common/footer_logo_re.png?1458252" alt="ふみビューティークリニック梅田">

        </div>

        <div class="left">

            <p class="gosic logo-info">ふみビューティークリニック梅田<span class="cw">美容皮膚科・形成外科</span></p>

            <a href="tel:0663722323" class="tel gd mb20">06-6372-2323</a>

            <p class="gosic mb20">受付時間 平日 10:00~18:00 土 10:00~17:00<br>
                定休日 木・日・祝</p>

            <p class="gosic">〒530-0012　大阪市北区芝田2丁目8-33 芝田ビル3F</p>

        </div>

    </div>


    <div class="inner">

      <p class="copy tc cp"><small>fumi beauty cinic(ふみビューティクリニック梅田)美容皮膚科・形成外科・皮膚科<br>
Copyright(C) fumi beauty clinic All Rights Reserved.</small></p>
    </div>
  </footer>




  <a href="#" class="page-top bounce"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_up.svg" alt="scrool-up"></a> </div>
<!--WRAPPER END-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

  <script>

<?php wp_footer(); ?>
	   <?php wp_reset_query(); ?>
<?php if(is_home() || is_front_page()) : ?>
<?php elseif(is_single()): ?>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "<?php echo home_url(); ?>","name": "ホーム"}},
<?php
//パンくずの階層用
 if ( is_home() || is_front_page() ) return false;
$i=1;
//カテゴリーに関する情報を取得
$categories = get_the_category($post->ID);
$cat = $categories[0];
//先祖のカテゴリーがあれば(0でなければ)分岐
if($cat -> parent != 0){
    //先祖のカテゴリーを配列で取得
    $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
    //$ancestorsの配列から一つ一つ$ancestorに取り出してなくなるまでくりかえす
    foreach($ancestors as $ancestor){
        $i++;
        echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. get_category_link($ancestor).'","name": "'. get_cat_name($ancestor). '"}},'.PHP_EOL;
    }
}
//属していてる直接のカテゴリーの情報を出力
$i++;
echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. get_category_link($cat -> term_id). '","name": "'. $cat-> cat_name . '"}},'.PHP_EOL;
//表示されている投稿ページの情報を出力
$i++;
echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. esc_url(get_permalink()). '","name": "'. esc_html(get_the_title()) . '"}}'.PHP_EOL;
?>
  ]
}
</script>

<?php elseif(is_page()): ?>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "<?php echo home_url(); ?>","name": "ホーム"}},
<?php
//ベージごとに必要な情報のベースを取得。先祖の有無判断に利用。
$obj = get_queried_object();
$i=1;
//先祖の固定ページがあれば(0でなければ)分岐
if($obj -> post_parent != 0){
    //先祖の固定ページを配列で取得
    $pageAncestors = array_reverse( $post -> ancestors );
    //$ancestorsの配列から一つ一つ$ancestorに取り出してなくなるまでくりかえす
    foreach ($pageAncestors as $pageAncestor) {
        $i++;
        echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. esc_url(get_permalink($pageAncestor)).'","name": "'. esc_html(get_the_title($pageAncestor)). '"}},'.PHP_EOL;
    }
}
//表示されている固定ページの情報を出力
$i++;
echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. esc_url(get_permalink()). '","name": "'. esc_html(get_the_title()) . '"}}'.PHP_EOL;
?>
  ]
}
</script>

<?php elseif(is_category()): ?>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "<?php echo home_url(); ?>","name": "ホーム"}},
<?php
//パンくずの階層用
$i=1;
//カテゴリーに関する情報を取得
$categories = get_the_category($post->ID);
$cat = $categories[0];
//カテゴリーアーカイブのタイトルを取得
$cattitle = get_the_archive_title();
//先祖のカテゴリーがあれば(0でなければ)分岐
if($cat -> parent != 0){
    //先祖のカテゴリーを配列で取得
    $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
    //$ancestorsの配列から一つ一つ$ancestorに取り出してなくなるまでくりかえす
    foreach($ancestors as $ancestor){
        $i++;
        echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. get_category_link($ancestor).'","name": "'. get_cat_name($ancestor). '"}},'.PHP_EOL;
    }
}
//表示されているカテゴリーの情報を出力
$i++;
echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. get_category_link($cat -> term_id). '","name": "'. $cattitle . '"}}'.PHP_EOL;
?>
  ]
}
</script>

<?php elseif(is_tag()): ?>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "<?php echo home_url(); ?>","name": "ホーム"}},
<?php
$tagName = single_tag_title('', false);
$tag = get_term_by('name', $tagName, 'post_tag');
$link = get_tag_link($tag->term_id);
echo '    {"@type": "ListItem","position": 2,"item":{"@id": "'. esc_url($link). '","name": "'. esc_html($tagName) . '"}}'.PHP_EOL;
?>
  ]
}
</script>

<?php elseif(is_author()): ?>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "<?php echo home_url(); ?>","name": "ホーム"}},
<?php
//執筆者のIDを取得
$userId = get_query_var('author');
//執筆者の名前を取得
$authorName = get_the_author_meta( 'display_name', $userId );
echo '    {"@type": "ListItem","position": 2,"item":{"@id": "'. esc_url(get_author_posts_url($userId)). '","name": "'. esc_html($authorName) . '"}}'.PHP_EOL;
?>
  ]
}
</script>

<?php elseif(is_date()): ?>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "<?php echo home_url(); ?>","name": "ホーム"}},
<?php
//年月日を取得
$y = get_query_var('year');
$m = get_query_var('monthnum');
$d = get_query_var('day');
//年月日のアーカイブのリンクを取得
$linkY = get_year_link($y);
$linkM = get_month_link($y,$m);
$linkD = get_month_link($y,$m,$d);
if(is_day()){
    echo '    {"@type": "ListItem","position": 2,"item":{"@id": "'. esc_url($linkY).'","name": "'. esc_html($y).'年"}},'.PHP_EOL;
    echo '    {"@type": "ListItem","position": 3,"item":{"@id": "'. esc_url($linkM).'","name": "'. esc_html($m).'月"}},'.PHP_EOL;
    echo '    {"@type": "ListItem","position": 4,"item":{"@id": "'. esc_url($linkD).'","name": "'. esc_html($d). '日"}}'.PHP_EOL;
} elseif(is_month()){
    echo '    {"@type": "ListItem","position": 2,"item":{"@id": "'. esc_url($linkY).'","name": "'. esc_html($y).'年"}},'.PHP_EOL;
    echo '    {"@type": "ListItem","position": 3,"item":{"@id": "'. esc_url($linkM).'","name": "'. esc_html($m).'月"}}'.PHP_EOL;
} elseif(is_year()) {
    echo '    {"@type": "ListItem","position": 2,"item":{"@id": "'. esc_url($linkY).'","name": "'. esc_html($y).'年"}}'.PHP_EOL;
}
?>
  ]
}
</script>

<?php elseif(is_search()): ?>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "<?php echo home_url(); ?>","name": "ホーム"}},
<?php
echo '    {"@type": "ListItem","position": 2,"item":{"@id": "'. esc_url(get_search_link()). '","name": "「'. esc_html(get_search_query()) . '」で検索した結果"}}'.PHP_EOL;
?>
  ]
}
</script>

<?php elseif(is_attachment()): ?>
<script type="application/ld+json">
{ "@context":"http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement":
  [
    {"@type": "ListItem","position": 1,"item":{"@id": "<?php echo home_url(); ?>","name": "ホーム"}},
<?php
//パンくずの階層用
$i=1;
//ベージごとに必要な情報のベースを取得。先祖の有無判断に利用。
$obj = get_queried_object();
//先祖の挿入元のページがあれば(0でなければ)分岐
if($obj -> parent != 0){
    $i++;
    echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. esc_url(get_permalink($pageAncestor)).'","name": "'. esc_html(get_the_title($pageAncestor)). '"}},'.PHP_EOL;
}
//表示されている固定ページの情報を出力
$i++;
echo '    {"@type": "ListItem","position": '.$i.',"item":{"@id": "'. esc_url(get_permalink()). '","name": "'. esc_html(get_the_title()) . '"}}'.PHP_EOL;
?>
  ]
}
</script>
<?php endif; ?>
</body>
</html>