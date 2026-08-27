<?php get_header(); ?>
<div class="archive-letter inner">
            <div class="page__ttl-area">
                <div class="page__ttl-area--area">
                    <img loading="lazy"  class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページタイトルの背景画像" width="1080" height="160">
                    <img loading="lazy"  class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
                    <div class="page__ttl-are--txta-area">
                        <h1 class="page__ttl-are--ttl fadeUpTarget">こもれびだより</h1>
                        <p class="page__ttl-are--en fadeUpTarget">Letter</p>
                    </div>
                </div>
                <?php get_template_part('breadcrumb'); ?>
            </div>
            <div class="archive-letter__body">
                <div class="single-post">
                    <div class="single-post__up fadeUpTarget">
                        <div class="single-post__up--left">
                            <img loading="lazy"  class="single-post__up--img" src="<?php echo get_template_directory_uri(); ?>/img/pencil-solid 1.webp" alt="ペンマーク" width="16" height="16">
                            <p class="single-post__up--txt"><?php echo SCF::get('letter_place'); ?>からのおたより</p>
                        </div>
                        <time class="single-post__up--right"><?php echo SCF::get('letter_post-day'); ?></time>
                    </div>
                    <h2 class="single-post__ttl fadeUpTarget"><?php echo SCF::get('letter_post_ttl'); ?></h2>
                    <div class="single-post__body">
                    <?php
                        
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'single-post__body--img fadeUpTarget', 'loading' => 'lazy', 'alt' => get_the_title()));
                        }
                        $custom_img_id = SCF::get('letter_image'); 
                        if ($custom_img_id) {
                            
                            $custom_img_alt = get_post_meta($custom_img_id, '_wp_attachment_image_alt', true);
                            
                            echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'single-post__body--img fadeUpTarget', 'loading' => 'lazy', 'alt' => esc_attr($custom_img_alt)));
                        } else {
                            
                            echo '<img loading="lazy"  src="' . esc_url(get_template_directory_uri() . '/img/thumbnail.webp') . '" class="single-post__body--img fadeUpTarget" alt="デフォルトのサムネイル">';
                        }
                        
                        $free_item = SCF::get('letter_item');
                        if (!empty($free_item)) {
                            foreach ($free_item as $fields) {
                                if (!empty($fields['letter_second_ttl']) || !empty($fields['letter_second_txt'])) {
                        ?>
                                    <div class="single-post__box fadeUpTarget">
                                        <?php if (!empty($fields['letter_second_ttl'])): ?>
                                            <h3 class="single-post__body--ttl"><?php echo esc_html($fields['letter_second_ttl']); ?></h3>
                                        <?php endif; ?>
                                        <?php if (!empty($fields['letter_second_txt'])): ?>
                                            <p class="single-post__body--txt">
                                                <?php echo esc_html($fields['letter_second_txt']); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>
                    </div>
                    <a class="introduction__single-link fadeUpTarget " href="<?php echo esc_url(home_url('/letter')); ?>">
                        <p class="introduction__single-link--txt">こもれびだより一覧へ</p>
                    </a>
                </div>
                <?php get_template_part('sidebar'); ?>
            </div>
        </div>
        <div id="page-top">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
<?php get_footer(); ?>