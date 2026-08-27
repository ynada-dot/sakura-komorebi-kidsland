<?php get_header(); ?>
<div class="archive-letter inner">
    <div class="page__ttl-area">
        <div class="page__ttl-area--area">
            <img loading="lazy" class="page__ttl-area--img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading.webp" alt="ページのタイトルの背景画像" width="1080" height="160">
            <img loading="lazy" class="page__ttl-area--sp-img" src="<?php echo get_template_directory_uri(); ?>/img/page-heading-sp.webp" alt="ページのタイトルの背景画像" width="345" height="120">
            <div class="page__ttl-are--txta-area">
                <h1 class="page__ttl-are--ttl fadeUpTarget">こもれびだより</h1>
                <p class="page__ttl-are--en fadeUpTarget">Letter</p>
            </div>
        </div>
        <?php get_template_part('breadcrumb'); ?>
    </div>
    <div class="archive-letter__body">
        <div class="archive-letter__body-area">
            <div class="search">
            <?php echo do_shortcode('[searchandfilter fields="letter_each-place,school_name"]'); ?>
            </div>
            <div class="archive-letter__list">
                <ul class="archive-letter__list-area">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $current_term = get_queried_object();
                    $args = array(
                        'post_type' => 'letter',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'letter_category',
                                'field' => 'term_id',
                                'terms' => $current_term->term_id,
                            ),
                        ),
                        'posts_per_page' => 9,
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
                                        the_post_thumbnail('full', array('class' => 'archive-letter__item--img', 'loading' => 'lazy', 'alt' => get_the_title()));
                                    }
                                
                                    $custom_img_id = SCF::get('letter_image');
                                    if ($custom_img_id) {
                                        
                                        $custom_img_alt = get_post_meta($custom_img_id, '_wp_attachment_image_alt', true);
                                        
                                        echo wp_get_attachment_image($custom_img_id, 'full', false, array('class' => 'archive-letter__item--img', 'loading' => 'lazy', 'alt' => esc_attr($custom_img_alt)));
                                    } else {
                                        
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
        <?php get_template_part('sidebar'); ?>
    </div>
</div>
<div id="page-top">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>
<?php get_footer(); ?>
