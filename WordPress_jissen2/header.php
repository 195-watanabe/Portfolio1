<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="keywords" content="IT,プログラミング,コミュニティ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="プログラミング教材「WithCode+」">
  <meta property="og:type" content="article">
  <meta property="og:url" content="https://withcode-plus.tech">
  <meta property="og:image" content="img/logo.png">
  <meta property="og:description" content="「人生をコードと共に」というビジョンを達成するべく、皆さんのプログラミング学習をサポートします。">
  <meta property="og:site_name" content="プログラミング教材">
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
  <link rel="apple-touch-icon" sizes="180×180" href="img/logo.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/common1.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet">
</head>
<body>
  <header>
    <div class="header_all">
      <a href="<?php echo home_url(); ?>" class="logo">
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="ロゴ画像">
      </a>
      <nav class="navbar">
        <!-- <ul>
          <li><a href="index.html" class="respons">TOP</a></li>
          <li><a href="html/service.html">SERVICE</a></li>
          <li><a href="html/about.html">ABOUT</a></li>
          <li><a href="html/news.html">NEWS</a></li>
          <li><a href="html/contact.html">CONTACT</a></li>
        </ul> -->
        <?php
        $args = array(
          'menu' => 'menu',
          'menu_class' => '',
          'container' => false,
        );

        wp_nav_menu($args);
        ?>
      </nav>
    </div>
    <p class="drawer"></p>
  </header>