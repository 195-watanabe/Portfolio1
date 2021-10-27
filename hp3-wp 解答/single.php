<?php get_header(); the_post();?>
  <main>
    <div class="details">
      <div class="details_inner">
        <div class="details_imgbox">
        <?php the_post_thumbnail(); ?><!-- <img src="images/spring/Cherry blossoms2.jpg" alt=""> -->
        </div><!-- /.details_imgbox -->

        <div class="details_txtbox">
          <div class="details_ttlbox">
            <p class="details_date"><?php echo the_time(); ?></p><!-- /.details_date -->
            <h2 class="details_ttl"><?php echo the_title(); ?></h2><!-- /.details_ttl -->
          </div><!-- /.details_ttlbox -->
          <div class="details_txtinner">
            <?php the_content(); ?>
            <!-- <p class="details_txt">
              仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
              仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
              仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
              仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
              仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
              仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章仮の文章
            </p> -->
          </div><!-- /.details_txtinner -->
        </div><!-- /.details_txtbox -->
      </div><!-- /.details_inner -->

      <?php
    $next_post = get_next_post();
    $prev_post = get_previous_post();
    $cat = get_the_category();
    $cat_id = $cat[0]->cat_ID;
    $link = get_category_link($cat_id);
    if ($prev_post) :
    ?>

      <div class="details_page">
        <div class="details_prev">
          <a href="<?php echo get_permalink($prev_post->ID); ?>" class="details_prevlink">preview</a>
        </div><!-- /.details_prev -->
        <?php endif; ?>
        <a href="<?php echo $link; ?>" class="details_title">
          BLOG
        </a><!-- /.details_title -->

        <?php if($next_post): ?>
        <div class="details_next">
          <a href="<?php echo get_permalink($next_post->ID); ?>" class="details_nextlink">next</a>
        </div><!-- /.details_next -->
        <?php endif; ?>
      </div><!-- /.details_page -->
    </div><!-- /.details -->


  </main>
  <!-- フッター -->
<?php get_footer(); ?>