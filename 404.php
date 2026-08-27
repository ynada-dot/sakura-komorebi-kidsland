<?php get_header(); ?>
        <div class="single-introduction">
            <div class="single-introduction__area inner">
                <div class="page__ttl-area">
                    <img loading="lazy" class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページのタイトルの背景画像" width="1080" height="160">
                    <img loading="lazy" class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
                    <div class="page__ttl-are--txta-area">
                        <h1 class="page__ttl-are--ttl fadeUpTarget">各園のご紹介</h1>
                        <p class="page__ttl-are--en fadeUpTarget">introduction</p>
                    </div>
                </div>
                <?php get_template_part('breadcrumb'); ?>
            </div>
            <div class="not-page">
                <p class="not-page__txt fadeUpTarget">
                    申し訳ございません。<br>
                    お探しのページは見つかりませんでした。<br>
                    以下の可能性がございます。
                </p>
                <p class="not-page__txt fadeUpTarget">
                    ・URLが変更された<br>
                    ・ページが存在しない
                </p>
                <p class="not-page__txt fadeUpTarget">
                    恐れ入りますが、以下のリンクからお探しのページにお入りください。
                </p>
            </div>
            <section>
                <div class="site-map">
                    <div class="letter__tti-area">
                        <div class="welcom__logo fadeUpTarget">
                            <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/site-mapicon.webp" alt="各セクションのアイコン" width="108" height="108">
                            <img loading="lazy" class="welcom__site--img" src="<?php echo get_template_directory_uri(); ?>/img/Mask group.webp" alt="各セクションのアイコン">
                        </div>
                    </div>
                    <div class="site-map__body">
                        <div class="site-map__left">
                            <ul class="site-map__list">
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('')); ?>">TOP</a>
                                </li>
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('/about')); ?>">私たちのこと</a>
                                </li>
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('/introduction')); ?>">各園のご紹介</a>
                                </li>
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('/letter')); ?>">こもれびだより</a>
                                </li>
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('/information')); ?>">お知らせ</a>
                                </li>
                            </ul>
                            <ul class="site-map__list">
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
                                </li>
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('/about')); ?>">お問い合わせ</a>
                                </li>
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('site-map')); ?>">サイトマップ</a>
                                </li>
                                <li class="site-map__item fadeUpTarget">
                                    <a class="site-map__item--link" href="<?php echo esc_url(home_url('/privacy')); ?>">プライバシーポリシー</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="page-top">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <?php get_footer(); ?>