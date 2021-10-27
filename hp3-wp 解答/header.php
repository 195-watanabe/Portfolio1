<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0, viewport-fit=cover" />
  <title>〇〇〇〇</title>
  <meta name="description" content="" />
  <!--PC：１２０文字以内 スマホ：70文字以内-->
  <meta property="og:url" content="https://〇〇.com/" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:image" content=" https://〇〇.com/images/〇〇" />
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="Twitterのアカウントをいれる">
  <meta name="robots" content="INDEX,FOLLOW">
  <link rel="icon" type="image/x-icon" href="">
  <link rel="apple-touch-icon" sizes="180×180" href="">
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" /> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

</head>
<body>
  <!-- モック モバイル-->
  <img src="" alt="" class="mock" />

  <!-- ハンバーガーメニューopen -->
  <!-- <img src="" alt="" class="mock" /> -->



  <!-- モック タブレット-->
  <!-- <img src="" alt="" class="mock" /> -->

  <!-- モック パソコン -->
  <!-- <img src="" alt="" class="mock" /> -->
  <div class="container">
    <!-- ヘッダー -->
    <header class="header">
      <h1 class="header_ttl">
        <a href="index.html">
          <img src="" alt="">
        </a>
      </h1><!-- /.header_ttl -->
      <!-- ナビ -->
      <nav class="nav" id="js-nav">
      <?php
                $args = array(
                    'menu' => 'menus', // 管理画面で作成したメニュー名
                    'menu_class' => '', // メニューを構成するulタグのクラス名
                    'container' => false, // <ul>タグを囲んでいる<div>タグを削除
                );

                // カスタムメニューを表示
                wp_nav_menu($args);

                ?>

      </nav>
      <!-- /.nav -->
    </header>
