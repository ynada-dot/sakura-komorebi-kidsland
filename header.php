<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>桜のこもれびキッズランド｜日本全国の認証・認可保育園</title>
    <meta name="description" content="桜のこもれびキッズランドは関東、関西など日本全国各地で保育園を運営しています。子供たちが楽しく学び、成長するための保育環境を提供しています。さまざまな情報やイベント情報をお届けします。">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Kosugi+Maru&family=Marcellus&family=Yusei+Magic&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://test-domein.example.com">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.webp" sizes="any"> 
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.webp" type="image/svg+xml"> 
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.webp">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon.webp">
    <meta property="og:url" content="https://test-domein.example.com/">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/no-image.webp">
    <meta property="og:type" content="website">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div>
            <div class="header">
                <nav>
                    <ul class="header__right">
                        <li class="header__list">
                            <a class="header__list--link" href="<?php echo esc_url(home_url('/about')); ?>">
                                <img loading="lazy" class="header__list--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (3).webp" alt="桜マーク" width="40" height="40">
                                <p class="header__list--jp">わたしたちのこと</p>
                                <p class="header__list--en">About</p>
                            </a>
                        </li>
                        <li class="header__list">
                            <a class="header__list--link" href="<?php echo esc_url(home_url('/introduction')); ?>">
                                <img loading="lazy" class="header__list--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask 16group.webp" alt="木のマーク" width="40" height="40">
                                <p class="header__list--jp">各園のご紹介</p>
                                <p class="header__list--en">introduction</p>
                            </a>
                        </li>
                        <li class="header__list">
                            <a class="header__list--link" href="<?php echo esc_url(home_url('/letter')); ?>">
                                <img loading="lazy" class="header__list--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (5).webp" alt="本のマーク" width="40" height="40">
                                <p class="header__list--jp">こもれびだより</p>
                                <p class="header__list--en">Letter</p>
                            </a>
                        </li>
                        <li class="header__list">
                            <a class="header__list-center--link" href="<?php echo esc_url(home_url('')); ?>">
                                <img loading="lazy" class="header__list--logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="ロゴ" width="280" height="88">
                            </a>
                        </li>
                        <li class="header__list">
                            <a class="header__list--link" href="<?php echo esc_url(home_url('/information')); ?>">
                                <img loading="lazy" class="header__list--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (6).webp" alt="ベルマーク" width="40" height="40">
                                <p class="header__list--jp">お知らせ</p>
                                <p class="header__list--en">Info</p>
                            </a>
                        </li>
                        <li class="header__list">
                            <a class="header__list--link" href="<?php echo esc_url(home_url('/recruit')); ?>">
                                <img loading="lazy" class="header__list--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (7).webp" alt="ペンのマーク" width="40" height="40">
                                <p class="header__list--jp">採用情報</p>
                                <p class="header__list--en">Recruit</p>
                            </a>
                        </li>
                        <li class="header__list">
                            <a class="header__list--link header__list-curcle" href="<?php echo esc_url(home_url('/contact')); ?>">
                                <img loading="lazy" class="header__list--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (8).webp" alt="メールのマーク" width="40" height="40">
                                <p class="header__list--jp">お問い合わせ</p>
                                <p class="header__list--en">Contact</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="sp-header">
            <div class="sp-header__area">
            </div>
            <div class="hum-menu">
                <span></span>
                <span></span>
                <span></span>
                <p>menu</p>
                <p class="hum-menu__close">close</p>
            </div>
            <a class="sp-header__logo" href="<?php echo esc_url(home_url('')); ?>">
                <h1><img loading="lazy" class="sp-header__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="" width="200" height="63"></h1>
            </a>
        </div>
        <div class="hum-list">
            <ul class="hum-list__area">
                <li class="hum-list__area--list">
                    <a href="<?php echo esc_url(home_url('/about')); ?>">
                        <img loading="lazy" class="hum-list__area--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (3).webp" alt="メールのマーク" width="48" height="48">
                        <p class="hum-list__area--jp">わたしたちのこと</p>
                        <p class="hum-list__area--en">About</p>
                    </a>
                </li>
                <li class="hum-list__area--list">
                    <a href="<?php echo esc_url(home_url('/introduction')); ?>">
                        <img loading="lazy" class="hum-list__area--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask 16group.webp" alt="木のマーク" width="48" height="48">
                        <p class="hum-list__area--jp">各園のご紹介</p>
                        <p class="hum-list__area--en">introduction</p>
                    </a>
                </li>
                <li class="hum-list__area--list">
                    <a href="<?php echo esc_url(home_url('/letter')); ?>">
                        <img loading="lazy" class="hum-list__area--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (5).webp" alt="本のマーク" width="48" height="48">
                        <p class="hum-list__area--jp">こもれびだより</p>
                        <p class="hum-list__area--en">Letter</p>
                    </a>
                </li>
                <li class="hum-list__area--list">
                    <a href="<?php echo esc_url(home_url('/information')); ?>">
                        <img loading="lazy" class="hum-list__area--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (6).webp" alt="ベルのマーク" width="48" height="48">
                        <p class="hum-list__area--jp">お知らせ</p>
                        <p class="hum-list__area--en">Info</p>
                    </a>
                </li>
                <li class="hum-list__area--list">
                    <a href="<?php echo esc_url(home_url('/recruit')); ?>">
                        <img loading="lazy" class="hum-list__area--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (7).webp" alt="ペンのマーク" width="48" height="48">
                        <p class="hum-list__area--jp">採用情報</p>
                        <p class="hum-list__area--en">Recruit</p>
                    </a>
                </li>
                <li class="hum-list__area--list">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>">
                        <img loading="lazy" class="hum-list__area--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group (8).webp" alt="メールのマーク" width="48" height="48">
                        <p class="hum-list__area--jp">お問い合わせ</p>
                        <p class="hum-list__area--en">Contact</p>
                    </a>
                </li>
            </ul>
        </div>
    </header>
    <main>