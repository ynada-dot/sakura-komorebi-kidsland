<?php get_header(); ?>
<div class="single-introduction">
    <div class="single-introduction__area inner">
        <div class="page__ttl-area">
            <div class="page__ttl-area--area">
                <img loading="lazy" class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページのタイトルの背景画像" width="1080" height="160">
                <img loading="lazy" class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
                <div class="page__ttl-are--txta-area ">
                    <h1 class="page__ttl-are--ttl fadeUpTarget">各園のご紹介</h1>
                    <p class="page__ttl-are--en fadeUpTarget">introduction</p>
                </div>
            </div>
            <?php get_template_part('breadcrumb'); ?>
        </div>
    </div>
    <section>
        <div class="page-introduction">
            <div class="letter__tti-area">
                <div class="welcom__logo">
                    <img loading="lazy" class="welcom__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/section-heading2__icon.webp" alt="" width="108" height="108">
                </div>
            </div>
            <div class="page-introduction__body">
                <ul class="page-introduction__tab">
                    <li class="page-introduction__tab--list fadeUpTarget">
                        <a href="#daycare">
                            園の種類<br>
                            <span class="page-introduction__tab--small">から探す</span>
                        </a>
                    </li>
                    <li class="page-introduction__tab--list fadeUpTarget">
                        <a href="#place">
                            都道府県<br>
                            <span class="page-introduction__tab--small">から探す</span>
                        </a>
                    </li>
                </ul>
                <div id="daycare" class="daycare">
                    <ul class="daycare__cat">
                        <?php
                        $parent_term_id = get_term_by('name', '園の種類から探す', 'introduction_category')->term_id;
                        $terms = get_terms(array(
                            'taxonomy' => 'introduction_category',
                            'hide_empty' => false,
                            'parent' => $parent_term_id,
                        ));
                        foreach ($terms as $term) {
                            echo '<li class="daycare__cat--item fadeUpTarget">';
                            echo '<a class="daycare__cat--link" href="' . get_term_link($term) . '">' . $term->name . '</a>';
                            echo '</li>';
                        }
                        ?>
                    </ul>
                    <div>
                        <ul class="daycare__body">
                        <?php
                        $args = array(
                            'post_type' => 'introduction',
                            'posts_per_page' => 9,
                            'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                        );
                        $query = new WP_Query($args);
                        
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                        
                                $background_color = '';
                                $introduction_categories = get_the_terms(get_the_ID(), 'introduction_category');
                                if ($introduction_categories) {
                                    foreach ($introduction_categories as $category) {
                                        if ($category->name == '許可保育所') {
                                            $background_color = '#FFEDF0';
                                        } elseif ($category->name == '小規模保育所') {
                                            $background_color = '#FFF9CB';
                                        } elseif ($category->name == '小規模保育事業　A型') {
                                            $background_color = '#EDF4FF';
                                        }
                                    }
                                }
                        ?>
                            <li class="daycare__list fadeUpTarget" style="background-color: <?php echo $background_color; ?>;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full', array('class' => 'daycare__list--img', 'alt' => get_the_title()));
                                    }
                                    $custom_img_id = SCF::get('introduction_image');
                                    if ($custom_img_id) {
                                        $custom_img_alt = get_post_meta($custom_img_id, '_wp_attachment_image_alt', true);
                                        echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'daycare__list--img', 'alt' => esc_attr($custom_img_alt)));
                                    } else {
                                        echo '<img loading="lazy" src="' . esc_url(get_template_directory_uri() . '/img/thumbnail.webp') . '" class="daycare__list--img" alt="デフォルトのサムネイル">';
                                    }
                                    ?>
                                    <div class="daycare__list-cat">
                                        <?php
                                        if ($introduction_categories) {
                                            foreach ($introduction_categories as $category) {
                                                echo '<p class="daycare__list-cat--txt">' . esc_html($category->name) . '</p>';
                                            }
                                        }
                        
                                        $place_categories = get_the_terms(get_the_ID(), 'place_category');
                                        if ($place_categories) {
                                            foreach ($place_categories as $category) {
                                                echo '<p class="daycare__list-cat--txt">' . esc_html($category->name) . '</p>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <h2 class="daycare__list--ttl"><?php the_title(); ?></h2>
                                </a>
                            </li>
                        <?php
                            } // endwhile
                        } // endif
                        ?>
                        </ul> <!-- ← ulをここで閉じる -->
                        
                        <?php
                        // ページネーションはulの外に出す
                        if ($query->have_posts()) {
                            if (function_exists('wp_pagenavi')) {
                                wp_pagenavi(array('query' => $query));
                            } else {
                                echo paginate_links(array(
                                    'total' => $query->max_num_pages,
                                    'current' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                                ));
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>


                <div id="place" class="daycare">
                    <?php

                    $parent_term = get_term_by('name', '都道府県から探す', 'place_category');
                    if ($parent_term) {
                        $parent_term_id = $parent_term->term_id;


                        $terms = get_terms(array(
                            'taxonomy' => 'place_category',
                            'hide_empty' => false,
                            'parent' => $parent_term_id,
                        ));


                        echo '<ul class="place__cat">';
                        foreach ($terms as $term) {
                            echo '<li class="place__cat--item fadeUpTarget">';
                            echo '<a class="place__cat--link" href="' . get_term_link($term) . '">' . $term->name . '</a>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    } else {
                        echo '親タームが見つかりません。';
                    }
                    ?>
                    <div>
                        <ul class="daycare__body">
                            <?php
                            $args = array(
                                'post_type' => 'introduction',
                                'posts_per_page' => 9,
                            );
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post();


                                    $background_color = '';
                                    $introduction_categories = get_the_terms(get_the_ID(), 'introduction_category');
                                    if ($introduction_categories) {
                                        foreach ($introduction_categories as $category) {
                                            if ($category->name == '許可保育所') {
                                                $background_color = '#FFEDF0';
                                            } elseif ($category->name == '小規模保育所') {
                                                $background_color = '#FFF9CB';
                                            } elseif ($category->name == '小規模保育事業　A型') {
                                                $background_color = '#EDF4FF';
                                            }
                                        }
                                    }
                            ?>
                                    <li class="daycare__list fadeUpTarget" style="background-color: <?php echo $background_color; ?>;">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php

                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('full', array('class' => 'daycare__list--img', 'alt' => get_the_title()));
                                            }


                                            $custom_img_id = SCF::get('introduction_image');
                                            if ($custom_img_id) {

                                                $custom_img_alt = get_post_meta($custom_img_id, '_wp_attachment_image_alt', true);

                                                echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'daycare__list--img', 'alt' => esc_attr($custom_img_alt)));
                                            } else {

                                                echo '<img loading="lazy" src="' . esc_url(get_template_directory_uri() . '/img/thumbnail.webp') . '" class="daycare__list--img" alt="デフォルトのサムネイル">';
                                            }
                                            ?>
                                            <div class="daycare__list-cat">
                                                <?php

                                                if ($introduction_categories) {
                                                    foreach ($introduction_categories as $category) {
                                                        echo '<p class="daycare__list-cat--txt">' . $category->name . '</p>';
                                                    }
                                                }


                                                $place_categories = get_the_terms(get_the_ID(), 'place_category');
                                                if ($place_categories) {
                                                    foreach ($place_categories as $category) {
                                                        echo '<p class="daycare__list-cat--txt">' . $category->name . '</p>';
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <h2 class="daycare__list--ttl"><?php the_title(); ?></h2>
                                        </a>
                                    </li>
                                    <?php
                            } // endwhile
                        } // endif
                        ?>
                        </ul> <!-- ← ulをここで閉じる -->
                        
                        <?php
                        // ページネーションはulの外に出す
                        if ($query->have_posts()) {
                            if (function_exists('wp_pagenavi')) {
                                wp_pagenavi(array('query' => $query));
                            } else {
                                echo paginate_links(array(
                                    'total' => $query->max_num_pages,
                                    'current' => (get_query_var('paged')) ? get_query_var('paged') : 1,
                                ));
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php get_template_part('button'); ?>
</div>
<div id="page-top">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>
<?php get_footer(); ?>