<!-- index.php -->
<?php get_header(); ?>
  <main>
    <section class="top">
      <div class="top_bg">
        <p class="top_img">
          <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logo_white" />
        </p>
      </div>
    </section>
    <section class="service">
      <div class="inner">
        <div class="intro">
          <h2 class="section_ttl"><small></small>Service</h2>
          <p class="intro_txt">IT領域に対して、様々なサービスや事業を通じて新たな可能性を見出します。また、お客様が抱えている課題に対して、弊社のシステム開発～運用などの幅広いソリューションを提供します。
          </p>
        </div>
        <div class="service_all">
          <ul class="service_list">
            <li class="service_item _service1">
              <div class="service_img _service"></div>
              <div class="service_inner_txt">
                <p class="service_subttl">IT教育</p>
                <p class="service_ttl"><strong>WithCode</strong></p>
                <p class="service_descript">
                  「人生をコードと共に」というミッションを掲げ、よりプログラミングを学習しやすい環境を提供しています。また、WithCode+の教材を通じて日本社会に優秀なIT人材を排出します。
                </p>
              </div>
            </li>
            <li class="service_item _service2">
              <div class="service_img _service"></div>
              <div class="service_inner_txt">
                <p class="service_subttl">IT教育</p>
                <p class="service_ttl"><strong>WithCode</strong></p>
                <p class="service_descript">
                  「人生をコードと共に」というミッションを掲げ、よりプログラミングを学習しやすい環境を提供しています。また、WithCode+の教材を通じて日本社会に優秀なIT人材を排出します。
                </p>
              </div>
            </li>
            <li class="service_item _service3">
              <div class="service_img _service"></div>
              <div class="service_inner_txt">
                <p class="service_subttl">IT教育</p>
                <p class="service_ttl"><strong>WithCode</strong></p>
                <p class="service_descript">
                  「人生をコードと共に」というミッションを掲げ、よりプログラミングを学習しやすい環境を提供しています。また、WithCode+の教材を通じて日本社会に優秀なIT人材を排出します。
                </p>
              </div>
            </li>
            <li class="service_item _service4">
              <div class="service_img _service "></div>
              <div class="service_inner_txt">
                <p class="service_subttl">IT教育</p>
                <p class="service_ttl"><strong>WithCode</strong></p>
                <p class="service_descript">
                  「人生をコードと共に」というミッションを掲げ、よりプログラミングを学習しやすい環境を提供しています。また、WithCode+の教材を通じて日本社会に優秀なIT人材を排出します。
                </p>
              </div>
            </li>
          </ul>
        </div>
        <div class="btn">
          <a href="<?php echo get_permalink(get_page_by_path('service')->ID); ?>">VIEW MORE</a>
        </div>
      </div>
    </section>
    <section class="about">
      <div class="inner">
        <div class="intro">
          <h2 class="section_ttl"><small></small>About</h2>
          <p class="intro_txt">
            IT領域に対して、様々なサービスや事業を通じて新たな可能性を見出します。また、お客様が抱えている課題に対して、弊社のシステム開発～運用などの幅広いソリューションを提供します。
          </p>
        </div>
        <div class="about_list">
          <div class="about_item">
            <a href="html/about.html" class="top_about_link">
              <p class="about_sub_ttl">企業概要</p>
              <p class="about_sub_txt">About</p>
              <div class="about_arrow">
                <img src="<?php echo get_template_directory_uri();?>/img/arrow.png" alt="矢印の画像" />
              </div>
            </a>
          </div>
          <div class="about_item">
            <a href="html/mission.html" class="top_about_link">
              <p class="about_sub_ttl">企業概要</p>
              <p class="about_sub_txt">About</p>
              <div class="about_arrow">
                <img src="<?php echo get_template_directory_uri();?>/img/arrow.png" alt="矢印の画像" />
              </div>
            </a>
          </div>
          <div class="about_item">
            <a href="html/mission.html" class="top_about_link">
              <p class="about_sub_ttl">企業概要</p>
              <p class="about_sub_txt">About</p>
              <div class="about_arrow">
                <img src="<?php echo get_template_directory_uri();?>/img/arrow.png" alt="矢印の画像" />
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="news">
      <div class="inner">
        <h2 class="section_ttl"><small></small>News</h2>
        <div class="news_all">

          <ul class="news_list">
            <?php if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
              <li class="news_item">
                <a href="<?php the_permalink(); ?>">
                  <div class="news_img">
                    <?php the_post_thumbnail(array(350, 180)); ?>
                    <!-- <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像"> -->
                  </div>
                  <div class="news_txt">
                    <p class="news_ttl"><?php the_title(); ?></p>
                    <p class="news_date"><?php the_time('Y.m.d'); ?></p>
                  </div>
                </a>
              </li>
            <?php endwhile; endif; ?>
            
            <!-- <li class="news_item">
              <a href="html/news.html">
                <div class="news_img">
                  <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像">
                </div>
                <div class="news_txt">
                  <p class="news_ttl">WithCode創設</p>
                  <p class="news_date">2021.01.01</p>
                </div>
              </a>
            </li>
            <li class="news_item">
              <a href="html/news.html">
                <div class="news_img">
                  <img src="<?php echo get_template_directory_uri();?>/img/news.png" alt="ニュース画像">
                </div>
                <div class="news_txt">
                  <p class="news_ttl">WithCode創設</p>
                  <p class="news_date">2021.01.01</p>
                </div>
              </a>
            </li> -->
          </ul>
        </div>
        <div class="btn">
          <a href="<?php echo get_permalink(get_page_by_path('news')->ID); ?>">VIEW MORE</a>
        </div>
      </div>
    </section>
  </main>
<!-- footer.php -->
<?php get_footer(); ?>