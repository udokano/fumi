<?php
function admin_func() {
?>
<script>

jQuery('#widget-tag_cloud-2-taxonomy option').remove();
jQuery('#widget-tag_cloud-2-taxonomy option[value=faq_kind]').remove();
</script>
<?php
}
add_action('admin_head-widgets.php', 'admin_func');

?>


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

$query->set('posts_per_page', 6); //表示件数6件まで
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



<<<<<<< HEAD
/* 症例写真の記事一覧にタクソノミーでソート機能追加 */


/* function my_manage_posts_columns_faq_category($columns) {
  $columns['faq_kind'] = "種類";
  return $columns;
}
function my_add_column_faq_category($column_name, $post_id) {
  if( $column_name == 'faq_kind' ) {
    $tax = wp_get_object_terms($post_id, 'faq_kind');
    $stitle = $tax[0]->name;
  }

  if ( isset($stitle) && $stitle ) {
    echo esc_attr($stitle);
  }
}
function my_add_post_taxonomy_restrict_filter() {
  global $post_type;
  if ( 'case' == $post_type ) {
?>
    <select name="faq_kind">
      <option value="">カテゴリー指定なし</option>
<?php
      $terms = get_terms('faq_kind');
      foreach ($terms as $term) { ?>
        <option value="<?php echo $term->slug; ?>" <?php if ( $_GET['faq_kind'] == $term->slug ) { print 'selected'; } ?>><?php echo $term->name; ?></option>
<?php
      }
?>
    </select>
<?php
  }
}
add_filter( 'manage_edit-case_columns', 'my_manage_posts_columns_faq_category' );
add_action( 'manage_case_posts_custom_column', 'my_add_column_faq_category', 10, 2 );
add_action( 'restrict_manage_posts', 'my_add_post_taxonomy_restrict_filter' ); */


/* よくある質問タクソノミーソートso-to */


/* function my_manage_posts_columns_faq_category02($columns) {
  $columns['faq_kind'] = "種類";
  return $columns;
}
function my_add_column_faq_category02($column_name, $post_id) {
  if( $column_name == 'faq_kind' ) {
    $tax = wp_get_object_terms($post_id, 'faq_kind');
    $stitle = $tax[0]->name;
  }

  if ( isset($stitle) && $stitle ) {
    echo esc_attr($stitle);
  }
}
function my_add_post_taxonomy_restrict_filter02() {
  global $post_type;
  if ( 'faq' == $post_type ) {
?>
    <select name="faq_kind">
      <option value="">カテゴリー指定なし</option>
<?php
      $terms = get_terms('faq_kind');
      foreach ($terms as $term) { ?>
        <option value="<?php echo $term->slug; ?>" <?php if ( $_GET['faq_kind'] == $term->slug ) { print 'selected'; } ?>><?php echo $term->name; ?></option>
<?php
      }
?>
    </select>
<?php
  }
}
add_filter( 'manage_edit-faq_columns', 'my_manage_posts_columns_faq_category02' );
add_action( 'manage_faq_posts_custom_column', 'my_add_column_faq_category02', 10, 2 );
add_action( 'restrict_manage_posts', 'my_add_post_taxonomy_restrict_filter02' );
 */
=======
>>>>>>> cd3661fdbeeb610adc944c857af9ef78b8951c7c
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
                    $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li><li>&gt;</li>';
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
    add_menu_page('ブログサイドバー', 'ブログサイドバー', 'edit_posts', 'widgets.php', '', 'dashicons-editor-table
', 6);
 /* add_menu_page('サイドバーページリンク', 'サイドバーページリンク', 'edit_posts', 'nav-menus.php', '', 'dashicons-editor-table
', 6); */


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



/* 記事タイトルの前に投稿日を表示 */

class WP_Widget_Recent_Posts_Override extends WP_Widget_Recent_Posts{

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
		if ( ! $number )
			$number = 5;
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
		$r = new WP_Query( apply_filters( 'widget_posts_args', array(
			'posts_per_page'      => $number,
			'no_found_rows'       => true,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true
		) ) );
		if ($r->have_posts()) :
		?>
		<?php echo $args['before_widget']; ?>
		<?php if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		} ?>
		<ul>
		<?php while ( $r->have_posts() ) : $r->the_post(); ?>
			<li>

				<a href="<?php the_permalink(); ?>"><?php if ( $show_date ) : ?>
				<span class="post-date"><?php echo get_the_date(); ?></span>
			<?php endif; ?><?php get_the_title() ? the_title() : the_ID(); ?></a>
			</li>
		<?php endwhile; ?>
		</ul>
		<?php echo $args['after_widget']; ?>
		<?php
		wp_reset_postdata();
		endif;
	}

}

function theme_wp_widget_override() {

	// 「最近の投稿」ウィジェットのオーバーライド
	register_widget('WP_Widget_Recent_Posts_Override');


}
add_action('widgets_init', 'theme_wp_widget_override');



/* タグをチェックボックスで選択できるようにする */

/*
 * Meta Box Removal
 */
function rudr_post_tags_meta_box_remove() {
	$id = 'tagsdiv-post_tag'; // you can find it in a page source code (Ctrl+U)
	$post_type = 'post'; // remove only from post edit screen
	$position = 'side';
	remove_meta_box( $id, $post_type, $position );
}
add_action( 'admin_menu', 'rudr_post_tags_meta_box_remove');

/*
 * Add
 */
function rudr_add_new_tags_metabox(){
	$id = 'rudrtagsdiv-post_tag'; // it should be unique
	$heading = 'タグ'; // meta box heading
	$callback = 'rudr_metabox_content'; // the name of the callback function
	$post_type = 'post';
	$position = 'side';
	$pri = 'default'; // priority, 'default' is good for us
	add_meta_box( $id, $heading, $callback, $post_type, $position, $pri );
}
add_action( 'admin_menu', 'rudr_add_new_tags_metabox');

/*
 * Fill
 */
function rudr_metabox_content($post) {

	// get all blog post tags as an array of objects
	$all_tags = get_terms( array('taxonomy' => 'post_tag', 'hide_empty' => 0) );

	// get all tags assigned to a post
	$all_tags_of_post = get_the_terms( $post->ID, 'post_tag' );

	// create an array of post tags ids
	$ids = array();
	if ( $all_tags_of_post ) {
		foreach ($all_tags_of_post as $tag ) {
			$ids[] = $tag->term_id;
		}
	}

	// HTML
	echo '<div id="taxonomy-post_tag" class="categorydiv">';
	echo '<input type="hidden" name="tax_input[post_tag][]" value="0" />';
	echo '<ul>';
	foreach( $all_tags as $tag ){
		// unchecked by default
		$checked = "";
		// if an ID of a tag in the loop is in the array of assigned post tags - then check the checkbox
		if ( in_array( $tag->term_id, $ids ) ) {
			$checked = " checked='checked'";
		}
		$id = 'post_tag-' . $tag->term_id;
		echo "<li id='{$id}'>";
		echo "<label><input type='checkbox' name='tax_input[post_tag][]' id='in-$id'". $checked ." value='$tag->slug' /> $tag->name</label><br />";
		echo "</li>";
	}
	echo '</ul></div>'; // end HTML
}





/* カスタムウィジェット導入 */

function my_theme_widgets_init() {
  register_sidebar( array(
    'name' => 'ブログサイドバー',
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
	unregister_widget('WP_Widget_Pages');            // 固定ページ
	//unregister_widget('WP_Widget_Calendar');         // カレンダー
	//unregister_widget('WP_Widget_Archives');         // アーカイブ
	unregister_widget('WP_Widget_Meta');             // メタ情報
	unregister_widget('WP_Widget_Search');           // 検索
	//unregister_widget('WP_Widget_Text');             // テキスト
	//unregister_widget('WP_Widget_Categories');       // カテゴリー
	//unregister_widget('WP_Widget_Recent_Posts');     // 最近の投稿
	unregister_widget('WP_Widget_Recent_Comments');  // 最近のコメント
	unregister_widget('WP_Widget_RSS');              // RSS
	//unregister_widget('WP_Widget_Tag_Cloud');        // タグクラウド
  unregister_widget('WP_Nav_Menu_Widget');         // カスタムメニュー
  unregister_widget('WP_Widget_Media_Gallery');         // ギャラリー
  unregister_widget('WP_Widget_Custom_HTML');         // カスタムHTML
}
add_action( 'widgets_init', 'unregister_default_widget' );


/* サイドウィジエットタグ編集 */

//カテゴリ・アーカイブウィジェットの投稿数出力場所変更
function remove_post_count_parentheses( $output ) {
  $output = preg_replace('/<\/a>.*\((\d+)\)/','<span class="post-count">（$1）</span></a>',$output);
  return $output;
}
add_filter( 'wp_list_categories', 'remove_post_count_parentheses' );
add_filter( 'get_archives_link',  'remove_post_count_parentheses' );


/* 本文抜粋のを...に変更 */

function twpp_change_excerpt_more( $more ) {
  return '...';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );


function twpp_change_excerpt_length( $length ) {
  return 105;
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );

/* remove_filter('the_content','wpautop'); */


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

function modify_formats($settings){
   $formats = array(
     'bold' => array('inline' => 'b')
    );
    $settings['formats'] = json_encode( $formats );
    return $settings;
}
add_filter('tiny_mce_before_init', 'modify_formats');


//TinyMCE追加用のスタイルを初期化
//http://com4tis.net/tinymce-advanced-post-custom/
if ( !function_exists( 'initialize_tinymce_styles' ) ):
function initialize_tinymce_styles($init_array) {
  //追加するスタイルの配列を作成
  $style_formats = array(

    array(
      'title' => '強調文字',
      'inline' => 'strong',
      'classes' => 'strong-small'
    ),
     array(
      'title' => '太字',
      'inline' => 'b',
      'classes' => 'fw600'
    ),
    array(
      'title' => '小さな文字',
      'inline' => 'span',
      'classes' => 'blog-text-small'
    ),
     array(
      'title' => '少し大きな文字',
      'inline' => 'span',
      'classes' => 'blog-text-medium'
    ),
     array(
      'title' => '大きな文字',
      'inline' => 'span',
      'classes' => 'blog-text-large'
    ),
     array(
      'title' => '紫文字',
      'inline' => 'span',
      'classes' => 'blog-c-purple'
    ),
     array(
      'title' => 'ピンク文字',
      'inline' => 'span',
      'classes' => 'blog-c-pink'
    ),
     array(
      'title' => '青文字',
      'inline' => 'span',
      'classes' => 'blog-c-blue'
    ),
     array(
      'title' => '金色文字',
      'inline' => 'span',
      'classes' => 'blog-c-gold'
    ),
     array(
      'title' => 'グレー下線',
      'inline' => 'span',
      'classes' => 'blog-under-line'
    ),
     array(
      'title' => '下線付き紫文字',
      'inline' => 'span',
      'classes' => 'blog-under-purple'
    ),
     array(
      'title' => '下線付きピンク文字',
      'inline' => 'span',
      'classes' => 'blog-under-pink'
    ),
     array(
      'title' => '下線付き青文字',
      'inline' => 'span',
      'classes' => 'blog-under-blue'
    ),
     array(
      'title' => '下線付き金色文字',
      'inline' => 'span',
      'classes' => 'blog-under-gold'
    ),
     array(
      'title' => 'グレーのテキストボックス',
      'block' => 'div',
      'classes' => 'blog-text-box'
    ),



  );
  //JSONに変換
  $init_array['style_formats'] = json_encode($style_formats);
  return $init_array;
}
endif;
add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);

//TinyMCEにスタイルセレクトボックスを追加
//https://codex.wordpress.org/Plugin_API/Filter_Reference/mce_buttons,_mce_buttons_2,_mce_buttons_3,_mce_buttons_4
if ( !function_exists( 'add_styles_to_tinymce_buttons' ) ):
function add_styles_to_tinymce_buttons($buttons) {
  //見出しなどが入っているセレクトボックスを取り出す
  $temp = array_shift($buttons);
  //先頭にスタイルセレクトボックスを追加
  array_unshift($buttons, 'styleselect');
  //先頭に見出しのセレクトボックスを追加
  array_unshift($buttons, $temp);

  return $buttons;
}
endif;
add_filter('mce_buttons_2','add_styles_to_tinymce_buttons');
