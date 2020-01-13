<?php
/* 管理画面にサムネイルを表示 */
//サムネイルの画像サイズ
function add_theme_support_cb(){
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(310, 200, array( 'center', 'middle' ));
}
add_action('after_setup_theme', 'add_theme_support_cb');
// サムネイルの表示
add_theme_support( 'post-thumbnails' );


/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'blogs'; //任意のスラッグ名
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );