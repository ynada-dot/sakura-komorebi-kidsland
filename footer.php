</main>
    <footer>
        <div class="footer">
            <div class="footer__logo">
                <a href="<?php echo esc_url(home_url('')); ?>">
                    <h1>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="footerのロゴ" width="240" height="70">
                    </h1>
                </a>
            </div>
            <div class="footer__body">
                <nav>
                    <ul class="footer__item-area">
                        <li class="footer__item-area--item">
                            <a class="footer__item-area--link" href="<?php echo esc_url(home_url('/about')); ?>">私たちのこと</a>
                        </li>
                        <li class="footer__item-area--item">
                            <a class="footer__item-area--link" href="<?php echo esc_url(home_url('/introduction')); ?>">各園のご紹介</a>
                        </li>
                        <li class="footer__item-area--item">
                            <a class="footer__item-area--link" href="<?php echo esc_url(home_url('/letter')); ?>">こもれびだより</a>
                        </li>
                        <li class="footer__item-area--item">
                            <a class="footer__item-area--link" href="<?php echo esc_url(home_url('/recruit')); ?>">採用情報</a>
                        </li>
                        <li class="footer__item-area--item">
                            <a class="footer__item-area--link" href="<?php echo esc_url(home_url('/information')); ?>">お知らせ</a>
                        </li>
                        <li class="footer__item-area--item">
                            <a class="footer__item-area--link" href="<?php echo esc_url(home_url('/contact')); ?>">お問い合わせ</a>
                        </li>
                        <li class="footer__item-area--item">
                            <a class="footer__item-area--link" href="<?php echo esc_url(home_url('/site-map')); ?>">サイトマップ</a>
                        </li>
                        <li class="footer__item-area--item">
                            <a class="footer__item-area--link" href="<?php echo esc_url(home_url('/privacy')); ?>">プライバシーポリシー</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <p class="footer__foot">©桜のこもれびキッズランド All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--自作のJS-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>