<?php get_header('page'); ?>

<main class="menu_main l_page-main">

  <div class="m_kv js_slideshow swiper">
    <div class="swiper-wrapper">
      <!-- /.top_kv-slideshow_slide -->
      <!-- <div class="m_kv-slideshow_slide swiper-slide">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/生食パン02.png'); ?>" alt="" />
      </div>
      <div class="m_kv-slideshow_slide swiper-slide">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/生食パン01.png'); ?>" alt="" />
      </div> -->
      <!-- /.top_kv-slideshow_slide -->
      <div class="m_kv-slideshow_slide swiper-slide">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/コーヒー7.png'); ?>" alt="" />
      </div>
      <!-- /.top_kv-slideshow_slide -->
      <div class="m_kv-slideshow_slide swiper-slide">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/ナッツドーナツ.png'); ?>" alt="" />
      </div>
      <div class="m_kv-slideshow_slide swiper-slide">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/チーズフォンデュ.png'); ?>" alt="" />
      </div>
      <div class="m_kv-slideshow_slide swiper-slide">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/スクランブルエッグとベーコン.png'); ?>" alt="" />
      </div>
      <!-- /.top_kv-slideshow_slide -->
    </div>
    <!-- /.swiper-wrapper -->
  </div>
  <!-- /.top_kv-slideshow -->

  <section class="menu_info">
    <div class="l_container-sm">
      <div class="menu_info_body">
        <ul class="menu_info_list">
          <li class="menu_info_item">
            <a href="" class="menu_info_item_link" id="bread">Bread</a>
          </li>
          <li class="menu_info_item">
            <a href="" class="menu_info_item_link " id="morning">Morning</a>
          </li>
          <li class="menu_info_item">
            <a href="" class="menu_info_item_link" id="lunch">Lunch</a>
          </li>
          <li class="menu_info_item">
            <a href="" class="menu_info_item_link" id="others">Others</a>
          </li>
          <li class="menu_info_item">
            <a href="" class="menu_info_item_link" id="dessert">Deserts</a>
          </li>
          <li class="menu_info_item">
            <a href="" class="menu_info_item_link" id="drink">Drink</a>
          </li>
        </ul>
        <div class="menu_section_wrapper">
          <div class="menu_section menu_section_trigger" id="bread">
            <div class="l_contents  ">
              <h2 class="m_menu_section-heading m_menu_section-heading__line">Bread</h2>
              <ul class="m_menu_section-wrapper">
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">生食パン</p>
                  <p class="m_menu_section-price">¥350</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">トースト</p>
                  <p class="m_menu_section-price">¥300</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="menu_section menu_morning_trigger" id="morning">
            <div class="l_contents js_morning">
              <h2 class="m_menu_section-heading m_menu_section-heading__line">Morning</h2>
              <ul class="m_menu_section-wrapper">
                <li class="m_menu_section-list">
                  <div class="m_menu_section-item_wrapper">
                    <p class="m_menu_section-item">生食パン</p>
                    <p class="m_menu_section-item">ジャム</p>
                    <p class="m_menu_section-item">ミニサラダ</p>
                    <p class="m_menu_section-item">スープ</p>
                    <p class="m_menu_section-item">ホットコーヒー</p>
                  </div>
                  <p class="m_menu_section-price">¥850</p>
                </li>
                <li class="m_menu_section-list">
                  <div class="m_menu_section-item_wrapper">
                    <p class="m_menu_section-item">トースト</p>
                    <p class="m_menu_section-item">スクランブルエッグ</p>
                    <p class="m_menu_section-item">ミニサラダ</p>
                    <p class="m_menu_section-item">スープ</p>
                    <p class="m_menu_section-item">ホットコーヒー</p>
                  </div>
                  <p class="m_menu_section-price">¥950</p>
                </li>
              </ul>
            </div>
          </div>

          <div class="menu_section menu_lunch_trigger" id="lunch">
            <div class="l_contents js_lunch">
              <h2 class="m_menu_section-heading m_menu_section-heading__line">Lunch</h2>
              <ul class="m_menu_section-wrapper">
                <li class="m_menu_section-list">
                  <div class="m_menu_section-item_wrapper">
                    <p class="m_menu_section-item">生食パン</p>
                    <p class="m_menu_section-item">チーズフォンデュ</p>
                    <p class="m_menu_section-item">サラダ</p>
                    <p class="m_menu_section-item">スープ</p>
                    <p class="m_menu_section-item">カフェラテ</p>
                  </div>
                  <p class="m_menu_section-price">¥1200</p>
                </li>
                <li class="m_menu_section-list">
                  <div class="m_menu_section-item_wrapper">
                    <p class="m_menu_section-item">生食パン</p>
                    <p class="m_menu_section-item">ホイップチョコレート</p>
                    <p class="m_menu_section-item">サラダ</p>
                    <p class="m_menu_section-item">スープ</p>
                    <p class="m_menu_section-item">アイスカフェモカ</p>
                  </div>
                  <p class="m_menu_section-price">¥1150</p>
                </li>
                <li class="m_menu_section-list">
                  <div class="m_menu_section-item_wrapper">
                    <p class="m_menu_section-item">トースト</p>
                    <p class="m_menu_section-item">カレー</p>
                    <p class="m_menu_section-item">サラダ</p>
                    <p class="m_menu_section-item">スープ</p>
                    <p class="m_menu_section-item">ソフトドリンク</p>
                  </div>
                  <p class="m_menu_section-price">¥1300</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="menu_section menu_others_trigger" id="others">
            <div class="l_contents js_others">
              <h2 class="m_menu_section-heading ">Others</h2>
              <p class="m_menu_section-heading_sub m_menu_section-heading__line">バター＆ソルト付</p>
              <ul class="m_menu_section-wrapper">
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">スクランブルエッグ</p>
                  <p class="m_menu_section-price">¥300</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">チーズフォンデュ</p>
                  <p class="m_menu_section-price">¥350</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">カリカリキャラメル</p>
                  <p class="m_menu_section-price">¥250</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">ハニーシナモン</p>
                  <p class="m_menu_section-price">¥200</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">ホイップチョコレート</p>
                  <p class="m_menu_section-price">¥250</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">ジャム</p>
                  <p class="m_menu_section-price">¥150</p>
                </li>
              </ul>
            </div>
          </div>

          <div class="menu_section menu_desserts_trigger" id="dessert">
            <div class="l_contents js_desserts">
              <h2 class="m_menu_section-heading m_menu_section-heading__line">Desserts</h2>
              <ul class="m_menu_section-wrapper">
                <li class="m_menu_section-list ">
                  <p class="m_menu_section-item">プレーンドーナツ</p>
                  <p class="m_menu_section-price">¥300</p>
                </li>
                <li class="m_menu_section-list ">
                  <p class="m_menu_section-item">ナッツドーナツ</p>
                  <p class="m_menu_section-price">¥350</p>
                </li>
                <li class="m_menu_section-list ">
                  <p class="m_menu_section-item">抹茶ドーナツ</p>
                  <p class="m_menu_section-price">¥340</p>
                </li>
                <li class="m_menu_section-list ">
                  <p class="m_menu_section-item">ラムレーズンドーナツ</p>
                  <p class="m_menu_section-price">¥350</p>
                </li>
                <li class="m_menu_section-list ">
                  <p class="m_menu_section-item">ココアドーナツ</p>
                  <p class="m_menu_section-price">¥320</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">カスタードタルト</p>
                  <p class="m_menu_section-price">¥300</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">ベリーチーズケーキ</p>
                  <p class="m_menu_section-price">¥450</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">チョコレートフォンダン</p>
                  <p class="m_menu_section-price">¥500</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">アップルクランブル</p>
                  <p class="m_menu_section-price">¥420</p>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">ミルクプリン</p>
                  <p class="m_menu_section-price">¥380</p>
                </li>
              </ul>
            </div>
          </div>

          <div class="menu_section menu_drink_trigger" id="drink">
            <div class="l_contents js_drink">
              <h2 class="m_menu_section-heading m_menu_section-heading__line">Drink</h2>
              <ul class="m_menu_section-wrapper">
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">コーヒー</p>
                  <div class="m_menu_section-item_box">
                    <p class="menu_section-cat">hot/ice</p>
                    <p class="m_menu_section-price">¥350</p>
                  </div>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">カフェオレ</p>
                  <div class="m_menu_section-item_box">
                    <p class="menu_section-cat">hot/ice</p>
                    <p class="m_menu_section-price">¥350</p>
                  </div>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">ミルク</p>
                  <div class="m_menu_section-item_box">
                    <p class="menu_section-cat">hot/ice</p>
                    <p class="m_menu_section-price">¥350</p>
                  </div>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">ココア</p>
                  <div class="m_menu_section-item_box">
                    <p class="menu_section-cat">hot/ice</p>
                    <p class="m_menu_section-price">¥300</p>
                  </div>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">カフェモカ</p>
                  <div class="m_menu_section-item_box">
                    <p class="menu_section-cat">hot/ice</p>
                    <p class="m_menu_section-price">¥420</p>
                  </div>
                </li>
                <li class="m_menu_section-list">
                  <p class="m_menu_section-item">ソフトドリンク</p>
                  <div class="m_menu_section-item_box">
                    <p class="m_menu_section-item">hot/ice</p>
                    <p class="m_menu_section-price">¥300</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- /.menu_info_body -->
    </div>
    <!-- /.l_container -->
  </section>
</main>

<footer class=" page_footer">
  <p class="page_footer-copyright">
    <small class="page_footer-copyright_txt">&copy; 2023 xyzcafe</small>
  </p>
</footer>

</body>

</html>