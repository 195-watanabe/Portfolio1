  <footer>
    <div class="footer_logo">
      <a href="index.html">
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="ロゴ画像">
      </a>
    </div>
    <!-- <ul class="footer_list">
      <li class="footer_item">
        <a href="html/service.html">Service</a>
      </li>
      <li class="footer_item">
        <a href="html/about.html">About</a>
      </li>
      <li class="footer_item">
        <a href="html/news.html">News</a>
      </li>
      <li class="footer_item">
        <a href="html/contact.html">Contact</a>
      </li>
    </ul> -->
    <?php
        $args = array(
          'menu' => 'footer-nav',
          'menu_class' => 'footer_list',
          'container' => false,
        );

        wp_nav_menu($args);
        ?>
    <ul class="footer_sns">
      <li class="sns_icon1">
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/twitter.png" alt="Twitterアイコン"></a>
      </li>
      <li class="sns_icon2">
        <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/instagram.png" alt="Instagramアイコン"></a>
      </li>
    </ul>
    <small class="footer_txt">&copy;Losta Inc.All Right Reserved.</small>
  </footer>
  <?php wp_footer(); ?>
  <script src="<?php echo get_template_directory_uri();?>/https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/common.js"></script>
</body>
</html>
