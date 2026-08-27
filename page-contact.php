<?php get_header(); ?>
<div class="inner">
            <div class="page__ttl-area">
                <div class="page__ttl-area--area">
                    <img loading="lazy" class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページのタイトルの背景画像" width="1080" height="160">
                    <img loading="lazy" class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
                    <div class="page__ttl-are--txta-area">
                        <h1 class="page__ttl-are--ttl  fadeUpTarget">お問い合わせ</h1>
                        <p class="page__ttl-are--en  fadeUpTarget">Contact</p>
                    </div>
                </div>
                <?php get_template_part('breadcrumb'); ?>
            </div>
            <div class="contact">
                <p class="contact__txt  fadeUpTarget">
                    下記フォームにご記入の上、送信してください。折り返し、 弊社担当よりご連絡させて頂きます。
                    また、ご入力頂きました個人に関する情報につきましては、弊社で責任をもって管理し、お問い合わせへのご回答及び弊社のサービス向上のために利用させて頂き、第三者への開示や他の目的で利用は致しません。詳しくは個人情報保護方針をご覧ください。
                </p>
                <p class="contact__txt  fadeUpTarget">
                    弊社への登録に際して、お預かりする個人情報の扱いについて
                </p>
                <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="37dc385" title="保育園へのお問い合わせ"]'); ?>
                </div>
            </div>
        </div>
        <div id="page-top">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
        <?php get_footer(); ?>