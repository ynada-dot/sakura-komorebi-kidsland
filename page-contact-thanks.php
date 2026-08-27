<?php get_header(); ?>
        <div class="recruit-thanks inner">
            <div class="page__ttl-area">
                <div class="page__ttl-area--area">
                    <img loading="lazy" class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページのタイトルの背景画像" width="1080" height="160">
                    <img loading="lazy" class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
                    <div class="page__ttl-are--txta-area">
                        <h1 class="page__ttl-are--ttl fadeUpTarget">
                            お問い合わせ<br>
                            ありがとうございます。
                        </h1>
                        <p class="page__ttl-are--en fadeUpTarget">
                            Thank You for Contacting Us
                        </p>
                    </div>
                </div>
            </div>
            <p class="recruit-thanks__txt fadeUpTarget">
                数日以内に担当の者からご入力いただいたメールアドレスに返信いたします。
            </p>
            <div class="button-link fadeUpTarget">
                <a class="button-link-txt " href="<?php echo esc_url(home_url('')); ?>">
                    TOPにもどる
                </a>
            </div>
        </div>
        <div id="page-top">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
<?php get_footer(); ?>