<?php get_header(); ?>
<div class="single-introduction">
            <div class="page__ttl-area">
                <div class="page__ttl-area--area">
                    <img loading="lazy" class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページのタイトルの背景画像" width="1080" height="160">
                    <img loading="lazy" class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
                    <div class="page__ttl-are--txta-area">
                        <h1 class="page__ttl-are--ttl fadeUpTarget">桜のこもれびキッズランド</h1>
                        <p class="page__ttl-are--en fadeUpTarget">許可保育所　しぶや園</p>
                    </div>
                </div>
                <?php get_template_part('breadcrumb'); ?>
            </div>
            <div class="single-introduction__body">
                <div class="single-introduction__main">
                <?php
                    
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full', array('class' => 'single-introduction__body--img fadeUpTarget', 'loading' => 'lazy', 'alt' => get_the_title()));
                    }
                    
                    
                    $custom_img_id = SCF::get('introduction_image');
                    if ($custom_img_id) {
                        
                        $custom_img_alt = get_post_meta($custom_img_id, '_wp_attachment_image_alt', true);
                        
                        echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'single-introduction__body--img fadeUpTarget', 'loading' => 'lazy', 'alt' => esc_attr($custom_img_alt)));
                    } else {
                        
                        echo '<img loading="lazy" src="' . esc_url(get_template_directory_uri() . '/img/thumbnail.webp') . '" class="single-introduction__body--img fadeUpTarget" alt="デフォルトのサムネイル">';
                    }
                    ?>

                    <h2 class="single-introduction__ttl fadeUpTarget">
                    <?php echo SCF::get('introduction_detail-txt'); ?>
                    </h2>
                    <p class="single-introduction__txt fadeUpTarget">
                    <?php echo SCF::get('introduction_txt-area'); ?>
                    </p>
                </div>
                <section>
                    <div class="inside">
                        <div class="letter__tti-area">
                            <div class="welcom__logo fadeUpTarget">
                                <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/camera-heading__icon.webp" alt="各セクションのアイコン" width="108" height="108">
                            </div>
                            <h2 class="welcom__ttl fadeUpTarget">
                                園の様子
                            </h2>
                            <p class="welcom__ttl-en fadeUpTarget">
                                inside
                            </p>
                        </div>
                        <div class="inside__body">
                            <ul class="slider">
                            <?php
                                $free_item = SCF::get('slider');
                                foreach ($free_item as $fields) {
                                    if (!empty($fields['introduction_slick_image'])) {
                                        $image_id = $fields['introduction_slick_image'];
                                ?>
                                        <div class="single-post__box fadeUpTarget">
                                            <?php echo wp_get_attachment_image($image_id, 'full', false, array('loading' => 'lazy')); ?>
                                        </div>
                                <?php
                                    } else {
                                ?>
                                        <div class="single-post__box fadeUpTarget">
                                            <img loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/img/thumbnail.webp'); ?>" class="archive-letter__item--img" alt="デフォルトのサムネイル">
                                        </div>
                                <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="message">
                        <div class="ttl-area">
                            <div class="ttl-area__logo fadeUpTarget">
                                <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/massage-heading__icon.webp" alt="各セクションのアイコン" width="108" height="108">
                            </div>
                            <h2 class="ttl-area__ttl fadeUpTarget">
                                園長からのメッセージ
                            </h2>
                            <p class="ttl-area__en fadeUpTarget">
                                Message
                            </p>
                        </div>
                        <div class="massage__body">
                            <div class="massage__img-area fadeUpTarget">
                                <?php
                                    
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => 'massage__img-area--img','loading' => 'lazy',));
                                    }
                                    
                                    
                                    $custom_img_id = SCF::get('introduction_teacher_image');
                                    if ($custom_img_id) {
                                        echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'massage__img-area--img' ,'loading' => 'lazy',));
                                    }
                                    ?>
                            </div>
                            <div class="massage__txt-area fadeUpTarget">
                                <p class="massage__txt-area--txt">
                                <?php echo SCF::get('introduction_message_txt-area'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="about-nursery">
                        <div class="ttl-area">
                            <div class="ttl-area__logo fadeUpTarget">
                                <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/bell-heading__icon.webp" alt="各セクションのアイコン" width="108" height="108">
                            </div>
                            <h2 class="ttl-area__ttl fadeUpTarget">
                                園の概要
                            </h2>
                            <p class="ttl-area__en fadeUpTarget">
                                About Nursery
                            </p>
                        </div>
                        <div class="about-nursery__body">
                            <table class="about-nursery__box">
                                <tr class="about-nursery__line fadeUpTarget">
                                    <th class="about-nursery__head">
                                        所在地
                                    </th>
                                    <td class="about-nursery__txt">
                                        <address>
                                        <?php echo SCF::get('introduction_place'); ?>
                                        </address>
                                    </td>
                                </tr>
                                <tr class="about-nursery__line fadeUpTarget">
                                    <th class="about-nursery__head">TEL / FAX</th>
                                    <td class="about-nursery__txt">
                                        <address>
                                            <span class="tel-number" data-tel="<?php echo SCF::get('introduction_tell'); ?>">
                                                <?php echo SCF::get('introduction_tell'); ?>
                                            </span>
                                            /
                                            <?php echo SCF::get('introduction_fax'); ?>
                                        </address>
                                    </td>
                                </tr>
                                <tr class="about-nursery__line fadeUpTarget">
                                    <th class="about-nursery__head">対象</th>
                                    <td class="about-nursery__txt">
                                        <?php echo SCF::get('introduction_old'); ?><br class="about-nursery__txt--br">
                                        <?php echo SCF::get('introduction_old_detail'); ?>
                                    </td>
                                </tr>
                                <tr class="about-nursery__line fadeUpTarget">
                                    <th class="about-nursery__head">入園日</th>
                                    <td class="about-nursery__txt">
                                        <?php echo SCF::get('introduction_entrance-day'); ?>
                                    </td>
                                </tr>
                                <tr class="about-nursery__line fadeUpTarget">
                                    <th class="about-nursery__head">開園日</th>
                                    <td class="about-nursery__txt">
                                        <div class="about-nursery__date">
                                            <p class="about-nursery__date-txt">月</p>
                                            <p class="about-nursery__date-txt">火</p>
                                            <p class="about-nursery__date-txt">水</p>
                                            <p class="about-nursery__date-txt">木</p>
                                            <p class="about-nursery__date-txt">金</p>
                                            <p class="about-nursery__date-txt">土</p>
                                            <p class="about-nursery__date-txt">日</p>
                                        </div>
                                        <div class="about-nursery__date">
                                            <p class="about-nursery__date-txt">
                                                <?php echo SCF::get('introduction_mark_m'); ?>
                                            </p>
                                            <p class="about-nursery__date-txt">
                                                <?php echo SCF::get('introduction_mark_tue'); ?>
                                            </p>
                                            <p class="about-nursery__date-txt">
                                                <?php echo SCF::get('introduction_mark_w'); ?>
                                            </p>
                                            <p class="about-nursery__date-txt">
                                                <?php echo SCF::get('introduction_mark_thi'); ?>
                                            </p>
                                            <p class="about-nursery__date-txt">
                                                <?php echo SCF::get('introduction_mark_fri'); ?>
                                            </p>
                                            <p class="about-nursery__date-txt">
                                                <?php echo SCF::get('introduction_mark_sa'); ?>
                                            </p>
                                            <p class="about-nursery__date-txt">
                                                <?php echo SCF::get('introduction_mark_sun'); ?>
                                            </p>
                                        </div>
                                        <p class="about-nursery__date--txt">
                                        <?php echo SCF::get('introduction_date-txt'); ?>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="about-nursery__line fadeUpTarget">
                                    <th class="about-nursery__head">保育時間</th>
                                    <td class="about-nursery__txt">
                                        <p class="about-nursery__each-nursery--ttl">保育標準時間認定の方</p>
                                        <table class="about-nursery__each-area">
                                            <tr class="about-nursery__each-nursery--line">
                                                <th class="about-nursery__each-nursery--head">保育標準時間</th>
                                                <td class="about-nursery__each-nursery--txt">
                                                <?php echo SCF::get('introduction_nurse-time'); ?>
                                                </td>
                                            </tr>
                                            <tr class="about-nursery__each-nursery--line">
                                                <th class="about-nursery__each-nursery--head">延長保育</th>
                                                <td class="about-nursery__each-nursery--txt">
                                                    <?php echo SCF::get('introduction_extension-time'); ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <div>
                                            <p class="about-nursery__each-nursery--ttl">保育標準時間認定の方</p>
                                            <table class="about-nursery__each-area">
                                                <tr class="about-nursery__each-nursery--line">
                                                    <th class="about-nursery__each-nursery--head">保育標準時間</th>
                                                    <td class="about-nursery__each-nursery--txt">
                                                        <?php echo SCF::get('introduction_second-time'); ?>
                                                    </td>
                                                </tr>
                                                <tr class="about-nursery__each-nursery--line">
                                                    <th class="about-nursery__each-nursery--head">延長保育</th>
                                                    <td class="about-nursery__each-nursery--txt">
                                                        <?php echo SCF::get('introduction_second-extension-time'); ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="about-nursery__line fadeUpTarget">
                                    <th class="about-nursery__head">定員</th>
                                    <td class="about-nursery__txt">
                                        <div class="about-nursery__people">
                                            <p class="about-nursery__people--all">
                                                定員<br>
                                                <?php echo SCF::get('introduction_headcount'); ?>
                                            </p>
                                            <div class="about-nursery__people-area">
                                                <div class="about-nursery__people-area--block">
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">1歳児</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_one_headcount'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">2歳児</p>
                                                        <p class="about-nursery__people-area--num">
                                                        <?php echo SCF::get('introduction_two_headcount'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">3歳児</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_three_headcount'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">4歳児</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_four_headcount'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">5歳児</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_five_headcount'); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-nursery__warning">
                                            <p class="about-nursery__warning--txt">
                                                ※定員は、開園初年度から数年をかけて102名の定員に変更していきます。
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="about-nursery__line fadeUpTarget">
                                    <th class="about-nursery__head">職員</th>
                                    <td class="about-nursery__txt">
                                        <div class="about-nursery__people">
                                            <p class="about-nursery__people--all">
                                                定員<br>
                                                <?php echo SCF::get('introduction_people_headcount'); ?>
                                            </p>
                                            <div class="about-nursery__people-area">
                                                <div class="about-nursery__people-area--block">
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">園長</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_teacher_headcount'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">保育士</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_childcare_headcount'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">調理師</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_cook_headcount'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">看護師</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_nurse_headcount'); ?>
                                                        </p>
                                                    </div>
                                                    <div class="about-nursery__people-area--box">
                                                        <p class="about-nursery__people-area--old">事務員</p>
                                                        <p class="about-nursery__people-area--num">
                                                            <?php echo SCF::get('introduction_office_headcount'); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="about-nursery__warning">
                                            <p class="about-nursery__warning--txt">
                                                ※嘱託医　１名
                                            </p>
                                            <p class="about-nursery__warning--txt">
                                                ※保育士は認可保育所の基準に準じます
                                            </p>
                                            <p class="about-nursery__warning--txt">
                                                ※保育児童数・年齢に応じたシフトにより、職員を増減します
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="letter letter__inner">
                        <div class="letter__tti-area ">
                            <div class="welcom__logo fadeUpTarget">
                                <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/top-letters__icon.webp" alt="各セクションのアイコン" width="108" height="108">
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
                                'posts_per_page' => 3,
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
                                                echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'archive-letter__item--img','loading' => 'lazy', 'alt' => 'Custom Image'));
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
                        <a class="introduction__single-link fadeUpTarget " href="<?php echo esc_url(home_url('/introduction')); ?>">
                            <p class="introduction__single-link--txt">こもれびだより一覧へ</p>
                        </a>
                    </div>
                </section>
                <?php get_template_part('button-contact'); ?>
            </div>
        </div>
        <div id="page-top">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </div>
<?php get_footer(); ?>