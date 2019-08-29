<?php 




//サムネイル画像有効
add_theme_support( 'post-thumbnails', array( 'post' ) );



//投稿サムネイルサイズ指定
add_image_size('thumb300',300,220,true);
add_image_size('thum',600,450,true);






// レスポンシブページネーション

//レスポンシブなページネーションを作成する
function responsive_pagination($pages = '', $range = 4){
  $showitems = ($range * 2)+1;
 
  global $paged;
  if(empty($paged)) $paged = 1;
 
  //ページ情報の取得
  if($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if(!$pages){
      $pages = 1;
    }
  }
 
  if(1 != $pages) {
    echo '<ul class="pagination" role="menubar" aria-label="Pagination">';
    //先頭へ
    echo '<li class="first"><a href="'.get_pagenum_link(1).'"><span>First</span></a></li>';
    //1つ戻る
    echo '<li class="previous"><a href="'.get_pagenum_link($paged - 1).'"><span>Previous</span></a></li>';
    //番号つきページ送りボタン
    for ($i=1; $i <= $pages; $i++)     {
      if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))       {
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
function breadcrumb_func(){
  global $post;
  $str ='';
  if(!is_home()&&!is_admin()){
    $str.= '<ul class="path" itemscope itemtype="http://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $str.= '<a href="'.home_url().'" itemprop="item"><span itemprop="name">'.'HOME'.'</span></a><meta itemprop="position" content="1" /></li>';
     $str.= '<li>&gt;</li>';
    if( is_post_type_archive() ){
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label ).'</span><meta itemprop="position" content="2" /></li>';
    } elseif(is_tax()){
      $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_post_type_archive_link( get_post_type() ).'" itemprop="item"><span itemprop="name">'.esc_html(get_post_type_object(get_post_type())->label ).'</span></a><meta itemprop="position" content="2" /></li>';
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.single_term_title( '' , false ).'</span></a><meta itemprop="position" content="3" /></li>';
    } elseif(is_tag()) {
        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.single_tag_title( '' , false ).'</span></a><meta itemprop="position" content="2" /></li>';
    } elseif(is_category()) {
      $cat = get_queried_object();
      if($cat -> parent != 0){
        $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
        foreach($ancestors as $ancestor){
          $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
        }
      }
      $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
    } elseif(is_page()){
      if($post -> post_parent != 0 ){
        $ancestors = array_reverse(get_post_ancestors( $post->ID ));
        foreach($ancestors as $ancestor){
          $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
          $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
        }
      } else {
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
      }
    } 
      elseif(is_author()){
      if($post -> post_parent != 0 ){
        $ancestors = array_reverse(get_post_ancestors( $post->ID ));
        foreach($ancestors as $ancestor){
          $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'. get_permalink($ancestor).'" itemprop="item"><span itemprop="name">'.get_the_title($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
          $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="3" /></li>';
        }
      } else {
      $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="2" /></li>';
      }
    } 
      
      elseif(is_single()){
      $categories = get_the_category($post->ID);
      $cat = $categories[0];
      if($cat -> parent != 0){
        $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
        foreach($ancestors as $ancestor){
          $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($ancestor).'" itemprop="item"><span itemprop="name">'.get_cat_name($ancestor).'</span></a><meta itemprop="position" content="2" /></li>';
            $str.= '<li>&gt;</li>';
        }
        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$categories[0]->cat_name.'</span></a><meta itemprop="position" content="3" /></li>';
          $str.= '<li>&gt;</li>';
        $str.= '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="#" itemprop="item"><span itemprop="name">'.wp_title('', false).'</span></a><meta itemprop="position" content="4" /></li>';
      } else {
        $str.='<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="'.get_category_link($cat -> term_id).'" itemprop="item"><span itemprop="name">'.$cat-> cat_name.'</span></a><meta itemprop="position" content="2" /></li>';
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
add_action( 'save_post', 'save_default_thumbnail' );
function save_default_thumbnail( $post_id ) {
  $post_thumbnail = get_post_meta( $post_id, $key = '_thumbnail_id', $single = true );
  if ( !wp_is_post_revision( $post_id ) ) {
    if ( empty( $post_thumbnail ) ) {
      update_post_meta( $post_id, $meta_key = '_thumbnail_id', $meta_value = '789' );
    }
  }
}


/*ページ番号取得*/


/*function remove_menus () {
    global $menu;
    var_dump($menu);
}

add_action('admin_menu','remove_menus');*/


//管理画面カスタマイズ(お客様ダッシュボードレイアウト)



function remove_menus () {
    if (!current_user_can('administrator')) { //管理者ではない場合
        
        
    remove_menu_page( 'index.php' );                  // ダッシュボード
    remove_menu_page( 'edit.php' );                   // 投稿
    remove_menu_page( 'upload.php' );                 // メディア
    remove_menu_page( 'edit.php?post_type=page' );    // 固定ページ
    remove_menu_page( 'edit-comments.php' );          // コメント
    remove_menu_page( 'themes.php' );                 // 外観
    remove_menu_page( 'plugins.php' );                // プラグイン
    remove_menu_page( 'users.php' );                  // ユーザー
    remove_menu_page( 'tools.php' );                  // ツール
    remove_menu_page( 'options-general.php' );        // 設定
    remove_menu_page( 'edit.php?post_type=mw-wp-form' );  // お問い合わせ（mw-wp-form）
    //remove_menu_page( 'profile.php' );  // プロフィール

    

        
    }
}
add_action('admin_menu', 'remove_menus');


/*メニューにバナー管理追加*/

function add_page_to_admin_menu() {
  add_menu_page( 'バナー管理', 'バナー管理', 'edit_posts', 'post.php?post=28&action=edit', '', 'dashicons-format-gallery
', 3);
}
add_action( 'admin_menu', 'add_page_to_admin_menu' );


/*メニューにお問い合わせデータ追加*/


function add_page_to_admin_menu2() {
  add_menu_page( 'お問合せデータ', 'お問合せデータ', 'edit_posts', 'edit.php?post_type=mw-wp-form&page=mw-wp-form-save-data', '', 'dashicons-admin-comments', 4);
}
add_action( 'admin_menu', 'add_page_to_admin_menu2' );



/*メニューに症例写真管理追加*/


function add_page_to_admin_menu3() {
  add_menu_page( '症例写真管理', '症例写真管理', 'edit_posts', 'post.php?post=155&action=edit', '', 'dashicons-format-gallery', 4);
}
add_action( 'admin_menu', 'add_page_to_admin_menu3' );


/**
 * 子カテチェックで親カテも
 */
add_action('admin_footer-welcart-shop_page_usces_itemedit', 'super_category_toggler');
add_action('admin_footer-welcart-shop_page_usces_itemnew', 'super_category_toggler');