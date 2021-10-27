<?php get_header(); ?>
    <div class="fv">
    </div><!-- /.fv -->
    <!-- パンくずリスト -->
    <div class="breadcrumb">
      <ul itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/Listitem">
          <a itemprop="item" href="index.html"><span itemprop="name">HOME</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/Listitem">
          <a itemprop="item" href="mission.html"><span itemprop="name">Mission</span></a>
          <meta itemprop="position" content="2" />
        </li>
      </ul>
    </div>
    <!-- メインコンテンツ -->
    <main>
      <!-- セクション：〇〇 -->
      <section class="">
        <h2 class="section_ttl"></h2>
        <div class="section_inner">
        </div>
      </section>

      <!-- セクション：○○ -->
      <section class="">
        <h2 class="section_ttl"></h2>
        <div class="section_inner">
        </div>
      </section>
    </main>
    <!-- フッター -->
<?php get_footer(); ?>