<?php get_header(); ?>


    <!-- パンくずリスト -->
    <!-- <div class="breadcrumb"> -->
      <!-- <ul itemscope itemtype="https://schema.org/BreadcrumbList"> -->
        <!-- <li itemprop="itemListElement" itemscope itemtype="https://schema.org/Listitem"> -->
          <!-- <a itemprop="item" href="index.html"><span itemprop="name">HOME</span></a> -->
          <!-- <meta itemprop="position" content="1" /> -->
        <!-- </li> -->
        <!-- <li itemprop="itemListElement" itemscope itemtype="https://schema.org/Listitem"> -->
          <!-- <a itemprop="item" href="mission.html"><span itemprop="name">Mission</span></a> -->
          <!-- <meta itemprop="position" content="2" /> -->
        <!-- </li> -->
      <!-- </ul> -->
    <!-- </div> -->
    <!-- メインコンテンツ -->
    <main>
      <!-- セクション：blog -->
      <section class="blog">
        <h1 class="section_ttl">Blog</h1>
        <div class="section_inner">
        <?php query_posts('posts_per_page=6'); ?>
          <?php

          if (have_posts()) :
              while (have_posts()) :
                  the_post();
                  $cat = get_the_category();
          ?>


            <a href="<?php the_permalink(); ?>" class="blog_content">
              <div class="blog_txtbox">
                  <h2 class="blog_ttl"><?php the_time('Y/m/d'); ?></h2><!-- /.blog_ttl -->
                  <p class="blog_txt"><?php the_title(); ?></p><!-- /.blog_txt -->
              </div><!-- /.blog_txtbox -->
              <div class="blog_imgbox">
              <?php the_post_thumbnail(); ?>
                <!-- <img src="images/other/flower1.jpg" alt=""> -->
              </div><!-- /.blog_imgbox -->
            </a><!-- /.blog_content -->

            <?php endwhile; else:?>
              <p>お探しの記事はありませんでした。</p>
              <?php endif; ?>
        </div>
      </section>
    </main>
    <!-- フッター -->
<?php get_footer(); ?>