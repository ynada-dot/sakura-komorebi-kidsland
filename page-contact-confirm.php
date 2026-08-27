<?php get_header(); ?>
<div class="contact-confirm inner">
            <div class="page__ttl-area">
                <div class="page__ttl-area--area">
                    <img loading="lazy" class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページのタイトルの背景画像" width="1080" height="160">
                    <img loading="lazy" class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
                    <div class="page__ttl-are--txta-area">
                        <h1 class="page__ttl-are--ttl fadeUpTarget">お問い合わせ</h1>
                        <p class="page__ttl-are--en fadeUpTarget">Contact</p>
                    </div>
                </div>
            </div>
            <div class="contact">
                <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="9105e3b" title="保育園へのお問い合わせ　確認"]'); ?>
                </div>
            </div>
        </div>
        <div id="page-top">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <?php get_footer(); ?>