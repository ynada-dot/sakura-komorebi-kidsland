<?php get_header(); ?>
<div>
            <section class="inner">
                <div class="fv fv__inner">
                    <div class="fv__img-area">
                        <img class="fv__img-area--img" src="<?php echo get_template_directory_uri(); ?>/img/ANJU16040317IMG_1087_TP_V 1.webp" alt="花を渡す女の子" width="1280" height="540">
                        <img class="fv__img-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/spANJU16040317IMG_1087_TP_V 1.webp" alt="花を渡す女の子" width="1280" height="540">
                        <div class="fv__ttl">
                            <div class="fv__ttl--area fadeUpTarget">
                                <img class="fv__ttl--img" src="<?php echo get_template_directory_uri(); ?>/img/Vector.webp" alt="fvの文字専用画像">
                                <h2 class="fv__ttl--text">
                                    一人ひとりの輝きが、<br>
                                    <span class="fv__ttl--text-under">未来を彩る</span>
                                </h2>
                            </div>
                        </div>
                        <div class="fv__news  fadeOutTarget">
                            <?php
                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'post_type' => 'information',
                                    'posts_per_page' => 1,
                                    'paged' => $paged,
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        ?>
                            <a class="fv__news-area" href="<?php echo esc_url(get_permalink()); ?>">
                                <h3 class="fv__news--ttl">お知らせ</h3>
                                <p class="fv__news--txt"><?php the_title(); ?></p>
                                <time class="fv__news--time"><?php echo get_the_date(); ?></time>
                            </a>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="welcom welcom__inner">
                    <div class="welcom__logo fadeUpTarget">
                        <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/section-heading__icon.webp" alt="各セクションの画像" width="108" height="108">
                    </div>
                    <div class="welcom__body">
                        <h2 class="welcom__ttl  fadeUpTarget">
                            桜のこもれびキッズランドへ<br>
                            ようこそ
                        </h2>
                        <p class="welcom__ttl-en  fadeUpTarget">
                            Welcome
                        </p>
                        <div class="welcom__txt-area ">
                            <p class="welcom__txt-area--txt fadeUpTarget">
                                「こもれび」とは<br>
                                風に揺れる木の葉によって生み出される光と影の揺らめきを表すことばです。<br>
                                それはその瞬間に一度だけ存在します。
                            </p>
                            <p class="welcom__txt-area--txt fadeUpTarget">
                                桜のこもれびキッズランドは、<br>
                                子どもたち一人ひとりが独自の輝きを放つように、<br>
                                大切な個性を伸ばす場所です。温かく包み込むような雰囲気の中で、安心して成長できる環境を提供し、<br>
                                笑顔あふれる毎日をお約束します。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="introduction introduction__inner">
                    <div class="welcom__logo fadeUpTarget">
                        <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/section-heading2__icon.webp" alt="各セクションの画像" width="108" height="108">
                    </div>
                    <div class="welcom__body">
                        <h2 class="welcom__ttl  fadeUpTarget">
                            各園のご紹介
                        </h2>
                        <p class="welcom__ttl-en  fadeUpTarget">
                            Introduction
                        </p>
                        <div class="introduction__body ">
                            <a class="introduction__place fadeUpTarget" href="<?php echo esc_url(home_url('/place_category/tokyo')); ?>">東京都</a>
                            <a class="introduction__place fadeUpTarget" href="<?php echo esc_url(home_url('/place_category/kanagawa')); ?>">神奈川県</a>
                            <a class="introduction__place fadeUpTarget" href="<?php echo esc_url(home_url('/place_category/saitama')); ?>">埼玉県</a>
                            <a class="introduction__place fadeUpTarget" href="<?php echo esc_url(home_url('/place_category/chiba')); ?>">千葉県</a>
                            <a class="introduction__place fadeUpTarget" href="<?php echo esc_url(home_url('/place_category/osaka')); ?>">大阪府</a>
                            <a class="introduction__place fadeUpTarget" href="<?php echo esc_url(home_url('/place_category/kyoto')); ?>">京都府</a>
                        </div>
                    </div>
                    <a class="introduction__archive-link  fadeUpTarget" href="<?php echo esc_url(home_url('/introduction')); ?>">
                        <p class="introduction__archive-link--txt">一覧ページへ</p>
                    </a>
                </div>
            </section>
            <section>
                <div class="letter letter__inner">
                    <div class="letter__tti-area ">
                        <div class="welcom__logo fadeUpTarget">
                            <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/top-letters__icon.webp" alt="各セクションの画像" width="108" height="108">
                        </div>
                        <h2 class="welcom__ttl fadeUpTarget">
                            こもれびだより
                        </h2>
                        <p class="welcom__ttl-en fadeUpTarget">
                            Letter
                        </p>
                    </div>
                    <div class="letter__body">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'letter',
                            'posts_per_page' => 6,
                            'paged' => $paged,
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <li class="archive-letter__item fadeUpTarget">
                                    <a href="<?php echo esc_url(get_permalink()); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full', array('class' => 'archive-letter__item--img','loading' => 'lazy', 'alt' => get_the_title()));
                                        }
                                    
                                        $custom_img_id = SCF::get('letter_image');
                                        if ($custom_img_id) {
                                            // 画像のalt属性を取得
                                            $custom_img_alt = get_post_meta($custom_img_id, '_wp_attachment_image_alt', true);
                                            // 画像を表示
                                            echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'archive-letter__item--img','loading' => 'lazy', 'alt' => esc_attr($custom_img_alt)));
                                        } else {
                                            // Smart Custom Fieldsで画像が設定されていない場合、img/thumbnail.webpを表示
                                            echo '<img loading="lazy" src="' . esc_url(get_template_directory_uri() . '/img/thumbnail.webp') . '" class="archive-letter__item--img" alt="デフォルトのサムネイル">';
                                        }
                                        ?>
                                        <div class="archive-letter__item--txt-area">
                                            <h2 class="archive-letter__item--ttl"><?php echo esc_html(SCF::get('letter_place')); ?>からのおたより</h2>
                                            <p class="archive-letter__item--txt"><?php the_title(); ?></p>
                                            <time class="archive-letter__item--time"><?php echo esc_html(SCF::get('letter_post-day')); ?></time>
                                        </div>
                                    </a>

                                </li>
                            <?php
                                }
                            } else {
                                echo '<p>投稿が見つかりませんでした。</p>';
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                    <a class="introduction__archive-link fadeUpTarget " href="<?php echo esc_url(home_url('/letter')); ?>">
                        <p class="introduction__archive-link--txt">もっと見る</p>
                    </a>
                </div>
            </section>
            <?php get_template_part('button'); ?>
        </div>
        <div id="page-top">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
<?php get_footer(); ?>