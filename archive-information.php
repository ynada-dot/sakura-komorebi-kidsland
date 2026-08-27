<?php get_header(); ?>
    <section>
        <div class="archive-info inner">
            <div class="page__ttl-area">
                <div class="page__ttl-area--area">
                    <img loading="lazy" class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページのタイトルの背景画像" width="1080" height="160">
                    <img loading="lazy" class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
                    <div class="page__ttl-are--txta-area">
                        <h1 class="page__ttl-are--ttl fadeUpTarget">お知らせ</h1>
                        <p class="page__ttl-are--en fadeUpTarget">info</p>
                    </div>
                </div>
                <?php get_template_part('breadcrumb'); ?>
            </div>
        </div>
        <div class="archive-post__body">
            <div class="archive-post__cate">
                <?php
                $terms = get_terms(array(
                    'taxonomy' => 'information_category',
                    'hide_empty' => false,
                ));
                echo '<a class="select_back-color archive-post__cate--txt fadeUpTarget" href="?category=all">すべて</a>';
                foreach ($terms as $term) {
                    $term_link = esc_url(get_term_link($term));
                    $term_name = esc_html($term->name);
                    echo '<a class="archive-post__cate--txt fadeUpTarget" href="' . $term_link . '">' . $term_name . '</a>';
                }
                ?>
            </div>
            <div class="archive-post__list-area">
                <ul class="archive-post__list-box">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'paged' => $paged,
                        'posts_per_page' => 10,
                        'post_type' => 'information',
                    );
                    $query = new WP_Query($args);
                    
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            $info_color = SCF::get('info_color');
                    ?>
                        <li class="fadeUpTarget">
                            <a class="archive-post__item" href="<?php echo esc_url(get_permalink()); ?>">
                                <div class="archive-post__item--left" style="background-color: <?php echo esc_attr($info_color); ?>;">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => 'archive-post__left--img'));
                                    }
                                    $custom_img_id = SCF::get('info_image');
                                    if ($custom_img_id) {
                                        echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'archive-post__left--img', 'loading' => 'lazy'));
                                    }
                                    ?>
                                    <p class="archive-post__left--txt">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'information_category');
                                        if ($terms && !is_wp_error($terms)) {
                                            $term_names = wp_list_pluck($terms, 'name');
                                            echo esc_html(join(', ', $term_names));
                                        } else {
                                            echo 'お知らせ';
                                        }
                                        ?>
                                    </p>
                                </div>
                                <time class="archive-post__sp--date"><?php echo get_the_date(); ?></time>
                                <div class="archive-post__right">
                                    <time class="archive-post__right--date"><?php echo get_the_date(); ?></time>
                                    <h2 class="archive-post__right--ttl"><?php the_title(); ?></h2>
                                    <p class="archive-post__right--txt"><?php echo SCF::get('info_txt'); ?></p>
                                </div>
                            </a>
                        </li>
                    <?php
                        } // endwhile
                    } // endif
                    ?>
                    </ul> <!-- ← ここでulを閉じる -->
                    
                    <?php
                    // ページネーションはulの外に出す
                    if ($query->have_posts()) {
                        if (function_exists('wp_pagenavi')) {
                            wp_pagenavi(array('query' => $query));
                        } else {
                            echo paginate_links(array(
                                'total' => $query->max_num_pages,
                                'current' => $paged,
                            ));
                        }
                        wp_reset_postdata();
                    }
                    ?>
            </div>
        </div>
    </section>
    <div id="page-top">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
    <?php get_footer(); ?>