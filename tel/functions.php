<?php




//サムネイル画像有効
add_theme_support('post-thumbnails', array( 'post' ));

//サムネイル画像有効
add_theme_support('post-thumbnails', array( 'case' ));




//投稿サムネイルサイズ指定
add_image_size('thumb300', 300, 220, true);
add_image_size('thum', 600, 450, true);


/*
エディタ内にURL記入用ショートコード
--------------------------------------*/

add_shortcode('url', 'shortcode_url');
function shortcode_url()
{
    return get_template_directory_uri();
}


//タクソノミー 一覧ページメインループ条件変更

function twpp_change_sort_order($query)
{
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    if ($query->is_tax() || $query->is_post_type_archive('case')) { //タクソノミー一覧ページの時
$query->set('post_type', 'case'); //症例写真記事の一覧だけを表示
$query->set('posts_per_page', 4); //表示件数4件まで
    }
}

add_action('pre_get_posts', 'twpp_change_sort_order');


//記事ページ　メインループ条件変更

 function twpp_change_sort_order02($query)
{
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    if ($query->is_tag() || $query->is_category() || $query->is_singular("post") || $query->is_date()) {

$query->set('posts_per_page', 6); //表示件数4件まで
    }
}

add_action('pre_get_posts', 'twpp_change_sort_order02');


//GET terms で投稿タイプ縛り


function hoge_terms_clauses($clauses, $taxonomy, $args)
{
    if (!empty($args['post_type'])) {
        global $wpdb;
        $post_types = array();
        if ($args['post_type']) {
            foreach ($args['post_type'] as $cpt) {
                $post_types[] = "'".$cpt."'";
            }
        }
        if (!empty($post_types)) {
            $clauses['fields'] = 'DISTINCT '.str_replace('tt.*', 'tt.term_taxonomy_id, tt.term_id, tt.taxonomy, tt.description, tt.parent', $clauses['fields']).', COUNT(t.term_id) AS count';
            $clauses['join'] .= ' INNER JOIN '.$wpdb->term_relationships.' AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN '.$wpdb->posts.' AS p ON p.ID = r.object_id';
            $clauses['where'] .= ' AND p.post_type IN ('.implode(',', $post_types).')';
            $clauses['orderby'] = 'GROUP BY t.term_id '.$clauses['orderby'];
        }
    }
//     print_r($clauses);exit;
    return $clauses;
}
add_filter('terms_clauses', 'hoge_terms_clauses', 10, 3);


//GET terms 説明文の001でそーと


function taxonomy_orderby_description( $orderby) {
  if ( $args['orderby'] == 'description' ) {
    $orderby = 'tt.description';
  }
  return $orderby;
}
add_filter( 'get_terms_orderby', 'taxonomy_orderby_description', 10, 1 );



/* function my_admin_script() {
  echo '<script>
  jQuery(".term-description-wrap p").text("aaaaaa");
  
  </script>';
}
add_action('admin_print_scripts-edit-tags.php', 'my_admin_script');


function admin_func() {

"<script>
alert('test');
</script>";

}
add_action('admin_head-edit-tags.php?taxonomy=faq_kind&post_type=case', 'admin_func');
add_action('admin_head-edit-tags.php?taxonomy=faq_kind&post_type=case', 'admin_func');
 */



// レスポンシブページネーション

//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }

    //ページ情報の取得
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
        //先頭へ
        echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
        //1つ戻る
        echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
        //番号つきページ送りボタン
        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems)) {
                echo ($paged == $i)? '<li class="current"><a>'.$i.'</a></li>':'<li><a href="'.get_pagenum_link($i).'" class="inactive" >'.$i.'</a></li>';
            }
        }
        //1つ進む
        echo '<li class="next"><a href="'.get_pagenum_link($paged + 1).'"><span>Next</span></a></li>';
        //最後尾へ
        echo '<li class="last"><a href="'.get_pagenum_link($pages).'"><span>Last</span></a></li>';
        echo '</ul>';
    }
}





// パンくずリスト
function breadcrumb_func()
{
    global $post;
    $str ='';
    if (!is_home()&&!is_admin()) {
        $str.= '<ul class="path" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
        $str.= '<a href="'.home_url().'" itemprop="item"><span itemprop="name">'.'HOME'.'</span></a><meta itemprop="position" content="1" /></li>';
        $str.= '<li>&gt;</li>';
        if (is_post_type_archive()) {
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name"><a href="#" itemprop="item">'.esc_html(get_post_type_object(get_post_type())->label).'</span></a><meta itemprop="position" content="2" /></li>';
        } elseif (is_tax()) {
            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_post_type_archive_link(get_post_type()).'" itemprop="item"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label).'</span></a><meta itemprop="position" content="2" /></li>';
             $str.= '<li>&gt;</li>';
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.single_term_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
        } elseif (is_tag()) {
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.single_tag_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
        } elseif (is_date()) {
            $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.get_the_date('Y年M', false).'</span></a><meta itemprop="position" content="2" /></li>';

        } elseif (is_category()) {
            $cat = get_queried_object();
            if ($cat -> parent != 0) {
                $ancestors = array_reverse(get_ancestors($cat -> cat_ID, 'category'));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                }
            }
            $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
        } elseif (is_page()) {
            if ($post -> post_parent != 0) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
                }
            } else {
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
            }
        } elseif (is_author()) {
            if ($post -> post_parent != 0) {
                $ancestors = array_reverse(get_post_ancestors($post->ID));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
                }
            } else {
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
            }
        }
        elseif (is_singular("case")) {
            $terms = wp_get_object_terms($post->ID, 'faq_kind');
            $term_id = $terms[0];
            if ($cat -> parent != 0) {
                $ancestors = array_reverse(get_ancestors($term_id -> term_ID, 'faq_kind'));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_term_link($ancestor).'" itemprop="item"><span itemprop="name aaaaa">'.$terms[0]->name.'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li>&gt;</li>';
                }
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_term_link($term_id).'" itemprop="item"><span itemprop="name">'.$terms[0]->name.'</span></a><meta itemprop="position" content="3" /></li>';
                $str.= '<li>&gt;</li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="4" /></li>';
            } else {
                $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_term_link($term_id).'" itemprop="item"><span itemprop="name">'.$term_id->name.'</span></a><meta itemprop="position" content="2" /></li>';
                $str.= '<li>&gt;</li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
            }
        }
        elseif (is_single()) {
            $categories = get_the_category($post->ID);
            $cat = $categories[0];
            if ($cat -> parent != 0) {
                $ancestors = array_reverse(get_ancestors($cat -> cat_ID, 'category'));
                foreach ($ancestors as $ancestor) {
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name aaaa">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
                    $str.= '<li>&gt;</li>';
                }
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$categories[0]->cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
                $str.= '<li>&gt;</li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="4" /></li>';
            } else {
                $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name  aaaa">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="2" /></li>';
                $str.= '<li>&gt;</li>';
                $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
            }
        }
        $str.= '</ul>'."\n";
    }
    return $str;
}
add_shortcode('breadcrumb', 'breadcrumb_func');






/* サムネイル自動登録
---------------------------------------------------------- */
add_action('save_post', 'save_default_thumbnail');
function save_default_thumbnail($post_id)
{
    $post_thumbnail = get_post_meta($post_id, $key = '_thumbnail_id', $single = true);
    if (!wp_is_post_revision($post_id)) {
        if (empty($post_thumbnail)) {
            update_post_meta($post_id, $meta_key = '_thumbnail_id', $meta_value = '847');
        }
    }
}


/*ページ番号取得*/


/*function remove_menus () {
    global $menu;
    var_dump($menu);
}

add_action('admin_menu','remove_menus');*/


/* 管理者以外でも外観設定を付与 */


function add_theme_caps(){
    $role = get_role( 'editor' );
    $role->add_cap( 'edit_theme_options' );
}
add_action( 'admin_init', 'add_theme_caps' );


//管理画面カスタマイズ(お客様用ダッシュボードレイアウト)

function remove_menus()
{
    if (!current_user_can('administrator')) { //管理者ではない場合


        remove_menu_page('index.php');                  // ダッシュボード
    //remove_menu_page('edit.php');                   // 投稿
    remove_menu_page('upload.php');                 // メディア
    //remove_menu_page('edit.php?post_type=page');    // 固定ページ
    remove_menu_page('edit-comments.php');          // コメント
    remove_menu_page('themes.php');                 // 外観
    remove_menu_page('plugins.php');                // プラグイン
    remove_menu_page('users.php');                  // ユーザー
    remove_menu_page('tools.php');                  // ツール
    remove_menu_page('options-general.php');        // 設定
    remove_menu_page('edit.php?post_type=mw-wp-form');  // お問い合わせ（mw-wp-form）
    //remove_menu_page( 'profile.php' );  // プロフィール
    add_menu_page('ウィジット', 'ウィジット', 'edit_posts', 'widgets.php', '', 'dashicons-editor-table
', 6);


    }
}
add_action('admin_menu', 'remove_menus');


/*メニューにバナー管理追加*/

function add_page_to_admin_menu()
{
    add_menu_page('バナー管理', 'バナー管理', 'edit_posts', 'post.php?post=28&action=edit', '', 'dashicons-format-gallery
', 3);
}
add_action('admin_menu', 'add_page_to_admin_menu');


/*メニューにお問い合わせデータ追加*/


function add_page_to_admin_menu2()
{
    add_menu_page('お問合せデータ', 'お問合せデータ', 'edit_posts', 'edit.php?post_type=mw-wp-form&page=mw-wp-form-save-data', '', 'dashicons-admin-comments', 4);
}
add_action('admin_menu', 'add_page_to_admin_menu2');



/*メニューに症例写真管理追加*/


function add_page_to_admin_menu3()
{
    add_menu_page('症例写真管理', '症例写真管理', 'edit_posts', 'post.php?post=155&action=edit', '', 'dashicons-format-gallery', 4);
}
add_action('admin_menu', 'add_page_to_admin_menu3');


/**
 * 子カテチェックで親カテも
 */
add_action('admin_footer-welcart-shop_page_usces_itemedit', 'super_category_toggler');
add_action('admin_footer-welcart-shop_page_usces_itemnew', 'super_category_toggler');


/* カスタムウィジェット導入 */

function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'BLOG Sidebar',
    'id' => 'blog-sidebar',
    'class' => 'blog-sidebar',
   /*  'before_widget' => '<li class="widget__list">',
    'after_widget' => '</li>', */
    'before_title' => '<h3 class="widget__ttl">',
    'after_title' => '</h3>'
  ) );
}
add_action( 'widgets_init', 'my_theme_widgets_init' );

/* いらないウィジェット削除 */

function unregister_default_widget() {
	//unregister_widget('WP_Widget_Pages');            // 固定ページ
	//unregister_widget('WP_Widget_Calendar');         // カレンダー
	//unregister_widget('WP_Widget_Archives');         // アーカイブ
	//unregister_widget('WP_Widget_Meta');             // メタ情報
	unregister_widget('WP_Widget_Search');           // 検索
	//unregister_widget('WP_Widget_Text');             // テキスト
	//unregister_widget('WP_Widget_Categories');       // カテゴリー
	//unregister_widget('WP_Widget_Recent_Posts');     // 最近の投稿
	unregister_widget('WP_Widget_Recent_Comments');  // 最近のコメント
	unregister_widget('WP_Widget_RSS');              // RSS
	//unregister_widget('WP_Widget_Tag_Cloud');        // タグクラウド
	unregister_widget('WP_Nav_Menu_Widget');         // カスタムメニュー
}
add_action( 'widgets_init', 'unregister_default_widget' );


/* 本文抜粋のを...に変更 */

function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );


function twpp_change_excerpt_length( $length ) {
  return 105;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

//urlのカテゴリー削除


/*
エディタースタイル読み込み
-----------------------------------*/

// テーマフォルダ直下のeditor-style.cssを読み込み
add_action('admin_init',function(){
    add_editor_style();
});

function default_quicktags($qtInit) {
  $qtInit['buttons'] = 'link';//表示するボタンのIDを羅列
  return $qtInit;
}
add_filter('quicktags_settings', 'default_quicktags', 10, 1);

if ( !function_exists( 'st_add_orignal_quicktags' ) ) {
  /**
   * オリジナルクイックタグ登録
   */
  function st_add_orignal_quicktags() {
    if ( wp_script_is( 'quicktags' ) ) {
      ?>
            <script type="text/javascript">
                QTags.addButton('ed_p', '文章段落', '<div class="blog-text">', '</div>');
                QTags.addButton('ed_b', '太字', '<b>', '</b>');
                 QTags.addButton('ed_strong', '強調文字', '<strong>','</strong>');
                  QTags.addButton('ed_text_small', '小さな文字', '<span class="blog-text-small">','</span>');
                  QTags.addButton('ed_text_medium', '少し大きな文字', '<span class="blog-text-medium">','</span>');
                   QTags.addButton('ed_text_large', '大きな文字', '<span class="blog-text-large">','</span>');
                   QTags.addButton('ed_text_center', 'テキスト中央寄せ', '<p class="blog-text-center">','</p>');
                QTags.addButton('ed_br', '改行', '<br>');
                QTags.addButton('ed_br__pc', '改行PCのみ', '<br class="pc">');
                 QTags.addButton('ed_br__sp', '改行SPのみ', '<br class="sp">');
                 QTags.addButton('purple', '紫文字', '<span class="blog-c-purple">','</span>');
                 QTags.addButton('ed_text_pink', 'ピンク文字', '<span class="blog-c-pink">','</span>');
                 QTags.addButton('ed_text_blue', '青文字', '<span class="blog-c-blue">','</span>');
                 QTags.addButton('ed_text_gold', '金色文字', '<span class="blog-c-gold">','</span>');
                 QTags.addButton('ed_text_underline', 'グレー下線', '<span class="blog-under-line">','</span>');
                 QTags.addButton('ed_text_purple_underline', '下線付き紫文字', '<span class="blog-under-purple">','</span>');
                 QTags.addButton('ed_text_pink_underline', '下線付きピンク文字', '<span class="blog-under-pink">','</span>');
                  QTags.addButton('ed_text_blue_underline', '下線付き青文字', '<span class="blog-under-blue">','</span>');
                 QTags.addButton('ed_text_gold_underline', '下線付き金色文字', '<span class="blog-under-gold">','</span>');
                QTags.addButton('ed_img_center_small', '画像中央寄せ（小さめ）', '<div class="blog-img-center--small">','ここに画像を挿入してください</div>');
                QTags.addButton('ed_img_center_medium', '画像中央寄せ（普通）', '<div class="blog-img-center--medium">','ここに画像を挿入してください</div>');
                QTags.addButton('ed_img_center_large', '画像中央寄せ（大きめ）', '<div class="blog-img-center--large">','ここに画像を挿入してください</div>');
                QTags.addButton('ed_img_center_full', '画像中央寄せ（100%）', '<div class="blog-img-center--full">','ここに画像を挿入してください</div>');
                QTags.addButton('ed_text_box', 'グレーのテキストボックス', '<div class="blog-text-box">','</div>');
			</script>
<?php
}
}
}
add_action( 'admin_print_footer_scripts', 'st_add_orignal_quicktags' );

/* ビジュアルエディタの指定できるフォーマットを変更
* ---------------------------------------- */

add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_formats' );
function custom_tiny_mce_formats( $settings ){
  $settings[ 'block_formats' ] = '段落=p;見出し1=h2;見出し2=h3;見出し3=h4;';
  return $settings;

}
