<?php


// 管理画面で、アイキャッチ画像を投稿できるようにする
// サムネイル機能の有効化
add_theme_support('post-thumbnails');

// カスタムメニュー機能
add_theme_support('menus');

// add_theme_support( 'editor-styles' );


if (!is_admin()) {

  // reset.cssの読み込み
  wp_enqueue_style(
      'reset-css',
      get_template_directory_uri() . './css/reset.css',
  );

  // style.cssの読み込み
  wp_enqueue_style(
      'main-style',
      get_template_directory_uri() . './css/style.css',
  );
};





