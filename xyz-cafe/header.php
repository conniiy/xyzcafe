<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>XYZ Cafe</title>
    <meta
      name="description"
      content=""
    />
    <meta name="format-detection" content="telephone=no" />

    <!-- favicon/web-clip-icon -->
    <link rel="icon" href="favicon.ico" type="image/ico" />
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="icon" href="favicon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="webclip.png" />

    <!-- ogp -->
    <meta property="og:site_name" content="" />
    <meta
      property="og:url"
      content=""
    />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta
      property="og:description"
      content=""
    />
    <meta
      property="og:image"
      content=""
    />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta
      name="twitter:description"
      content=""
    />
    <meta
      name="twitter:image:src"
      content=""
    />

    <?php wp_head(); ?>
  </head>








  <body class="js_body">
    <header class="l_header js_header">
    
      <h1 class="l_header-logo">
        <a href="<?php echo esc_url(home_url()); ?>" class="l_header-logo-link">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/img/header-logo.webp' ); ?>" alt="" class="l_header-logo-img" width="666" height="143">
        </a>
      </h1>
      <nav class="l_header-nav js_navigation">
        <ul class="l_header-nav_list ">
          <li class="l_header-nav_item ">
            <a href="<?php echo esc_url(home_url()); ?>" class="l_header-nav_link ">TOP</a>
          </li>
          <li class="l_header-nav_item ">
            <a href="<?php echo esc_url(home_url('/menu')); ?>" class="l_header-nav_link ">MENU</a>
          </li>
          <li class="l_header-nav_item ">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="l_header-nav_link  ">CONTACT</a>
          </li>

          <div class="l_header_sns-icon_list">
            <div class="l_header_sns-icon_item">
              <a href="https://www.instagram.com/tomapinc/" class="l_header_sns-link">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/Instagram_Glyph_White.png' ); ?>" alt="" class="l_header_sns-icon">
              </a>
            </div>
            <div class="l_header_sns-icon_item l_header_sns-icon_item__x">
              <a href="https://twitter.com/ZeroPlus_Japan" class="l_header_sns-link">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/img/x_logo-white.png' ); ?>" alt="" class="l_header_sns-icon">
              </a>
            </div>
          </div>
        </ul>
      </nav>

      <button class="m_hamburger js_hamburger">
        <span class="m_hamburger-bar"></span>
        <span class="m_hamburger-bar"></span>
        <span class="m_hamburger-bar"></span>
      </button>

   
</header>