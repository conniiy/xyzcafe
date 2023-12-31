<?php

// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');

  // cssの読み込み
  add_action('wp_enqueue_scripts', 'add_styles');
  function add_styles() {
    // google fonts
    wp_enqueue_style('google-fonts_style', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');

    wp_enqueue_style('google-fonts_style__02', 'https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap');

    wp_enqueue_style('fonts_style', 'https://fonts.gstatic.com','crossorigin');
    
    // reset style
    wp_register_style(
      'reset_style', // 登録する識別名
      get_template_directory_uri() . '/css/reset.css', // 登録するCSSのパス
      array(), // CSSの依存先
      '1.0' // パラメータの付与（スタイルの変更に合わせて変更することで、キャッシュを防ぐことができる）
    );


    wp_register_style(
      'swiper_style', // 登録する識別名
      'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', // 登録するCSSのパス
      array(), // CSSの依存先
      '1.0' // パラメータの付与（スタイルの変更に合わせて変更することで、キャッシュを防ぐことができる）
    );

    // blog style（ブログサイトのスタイル）
    wp_enqueue_style(
      'blog_style',
      get_template_directory_uri() . '/css/main.css',
      array('reset_style','swiper_style'),
      '1.0'
    );
  }


  // jsの読み込み
  add_action('wp_enqueue_scripts', 'add_scripts');
  function add_scripts() {
    


    // GSAP3 script
    wp_register_script(
      'gsap_script',
      'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js',
      array(),
      '1.0'
    );

    // GSAP3 ScrollTrigger script
    wp_register_script(
      'gsap-scroll-trigger_script',
      'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js',
      array(),
      '1.0'
    );


    // Swiper
    wp_register_script(
      'swiper_script',
      'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
      array(),
      '1.0'
    );

    // rellax
    wp_register_script(
      'rellax_script',
      'https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js',
      array(),
      '1.0'
    );

    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/js/main.js',
        array('gsap_script', 'gsap-scroll-trigger_script','swiper_script','rellax_script'),
        '1.0'
      );
  }

  /* main.js にdefer属性を付与 */
  add_filter('script_loader_tag', 'add_defer', 10, 2);
  function add_defer($tag, $handle) {
    // 識別名がmain_script以外はそのまま返却
    if ($handle !== 'main_script') {
      return $tag;
    }

    // deferを追加して返却する
    return str_replace(' src=', ' defer src=', $tag);
  }