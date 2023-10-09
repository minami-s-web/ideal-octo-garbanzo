<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="format-detection" content="telephone=no" />
        <!-- meta情報 -->
        <title>渡邉脳神経外科クリニック</title>
        <meta name="“robots”" content="“noindex”" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <!-- ogp -->
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
        <!-- ファビコン -->
        <link rel="shortcut icon" href="#" type="image/x-icon" />
        <!-- フォント -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;600&display=swap"
            rel="stylesheet"
        />
        <!-- css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.css"
        />
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
        <script defer src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <div class="header__inner">
                <h1 class="header__logo">
                    <a href="index.html" class="header__logo-img">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/img/common/header-logo.svg"
                            alt="渡邉脳神経外科クリニック"
                        />
                    </a>
                </h1>
                <button class="header__hamburger js-hamburger hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <nav class="header__nav header-nav js-drawer">
                <?php
                $args = array(
                    // ulタグについて
                    'menu' => 'nav-menu',
                    'menu_class' => 'header-nav__list',
                    // ulタグを囲うdivタグについて
                    'container' => 'div',
                    'container_class' => 'header-nav__wrapper',
                    // liタグにclass名を付けれないためCSSをheader-nav__list liに変更
                );
                wp_nav_menu( $args );
                ?>
                </nav>
            </div>
        </header>
        <div class="header__circle"></div>