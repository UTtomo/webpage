<?php
//サイドバーを1つ設置する
register_sidebar(array(
			'name'=>'サイドバー',
			'before_widget'=>'<div class="sidebar-wrapper">',
			'after_widget'=>'</div>',
			'before_title' => '<h4 class="sidebar-title">',
			'after_title' => '</h4>'
));



/*
 * 投稿にアーカイブ(投稿一覧)を持たせるようにします。
 */
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'post-all'; // ページ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 100, 100, true );
// the_post_thumbnail('post-thumbnails',100,50));





// settings for blog-card

// 記事IDを指定して抜粋文を取得する
function ltl_get_the_excerpt($post_id){
	global $post;
	$post_bu = $post;
	$post = get_post($post_id);
	$output = get_the_excerpt();
	$post = $post_bu;
	return $output;
  }
  
  //内部リンクをはてなカード風にするショートコード
  function nlink_scode($atts) {
	  extract(shortcode_atts(array(
		  'url'=>"",
		  'title'=>"",
		  'excerpt'=>""
	  ),$atts));
  
	  $id = url_to_postid($url);//URLから投稿IDを取得
  
	  $img_width ="90";//画像サイズの幅指定
	  $img_height = "90";//画像サイズの高さ指定
	  $no_image = 'noimageに指定したい画像があればここにパス';//アイキャッチ画像がない場合の画像を指定
  
	  //タイトルを取得
	  if(empty($title)){
		  $title = esc_html(get_the_title($id));
	  }
	  //抜粋文を取得
	  if(empty($excerpt)){
		  $excerpt = esc_html(ltl_get_the_excerpt($id));
	  }
  
	  //アイキャッチ画像を取得
	  if(has_post_thumbnail($id)) {
		  $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),array($img_width,$img_height));
		  $img_tag = "<img src='" . $img[0] . "' alt='{$title}' width=" . $img[1] . " height=" . $img[2] . " />";
	  }else{ 
	  $img_tag ='<img src="'.$no_image.'" alt="" width="'.$img_width.'" height="'.$img_height.'" />';
	  }
  
	  $nlink .='
  <div class="blog-card-post">
	<a href="'. $url .'">
		<div class="blog-card-thumbnail">'. $img_tag .'</div>
		<div class="blog-card-content">
			<div class="blog-card-title">'. $title .' </div>
			<div class="blog-card-excerpt">'. $excerpt .'<br></div>
		</div>
		<div class="clear">近未来テクノロジー研究所</div>
		
	</a>
  </div>';
  
	  return $nlink;
  }
  
  add_shortcode("nlink", "nlink_scode");
?>