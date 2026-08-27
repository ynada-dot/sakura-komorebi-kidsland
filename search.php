<?php
get_header();
if (file_exists(get_template_directory() . '/search-result.php')) {
    include(get_template_directory() . '/search-result.php');
} else {

    if (have_posts()) {
        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content', 'search');
        }
    } else {
        echo '検索結果が見つかりませんでした。';
    }
}
get_footer();
