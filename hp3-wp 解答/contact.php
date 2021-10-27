
      <?php get_header(); ?>
      <div class="fv">
      </div><!-- /.fv -->
      <!-- パンくずリスト -->
      <!-- <div class="section_inner"> -->
      <!-- <div class="breadcrumb"> -->
      <!-- <ul itemscope itemtype="https://schema.org/BreadcrumbList"> -->
      <!-- <li itemprop="itemListElement" itemscope itemtype="https://schema.org/Listitem"> -->
      <!-- <a itemprop="item" href="index.html"><span itemprop="name">HOME</span></a> -->
      <!-- <meta itemprop="position" content="1" /> -->
      <!-- </li> -->
      <!-- <li itemprop="itemListElement" itemscope itemtype="https://schema.org/Listitem"> -->
      <!-- <a itemprop="item" href="contact.html"><span itemprop="name">Contact</span></a> -->
      <!-- <meta itemprop="position" content="2" /> -->
      <!-- </li> -->
      <!-- </ul> -->
      <!-- </div> -->
      <!-- </div> -->
      <!-- メインコンテンツ -->
      <main class="contact_main">
        <!-- セクション：contact -->
        <section class="contact">

          <div class="section_inner">
            <h2 class="section_ttl">Contact</h2>

            <!-- お問い合わせフォームここから -->
            <form action="mail.php" class="contact_form" id="form" method="POST">
              <div class="contact_box">
                <label for="name" class="contact_form_ttl">Name</label>
                <input type="text" class="contact_form_box" id="name" name="Name" required="required" placeholder="">
              </div><!-- /.contact_box -->
              <div class="contact_box">
                <label for="email" class="contact_form_ttl">E-mail</label>
                <input type="text" class="contact_form_box" id="email" name="E-mail" required="required" placeholder="">
              </div><!-- /.contact_box -->
              <div class="contact_box">
                <label for="tel" class="contact_form_ttl">Tel</label>
                <input type="text" class="contact_form_box" id="tel" name="Tel" placeholder="">
              </div><!-- /.contact_box -->
              <div class="contact_box __area">
              <label for="message" class="contact_form_ttl __ttl">Message</label>
                <textarea name="Message" class="contact_txtarea" id="message" cols="30" rows="10" required="required"
                  placeholder=""></textarea><!-- /# -->
              </div><!-- /.contact_box -->
              <button type="submit" class="contact_btn button">Send</button>
            </form>
            <!-- お問い合わせフォームここまで -->
          </div><!-- /.section_inner -->
        </section>
      </main>
      <?php get_footer(); ?>
      <!-- フッター -->
