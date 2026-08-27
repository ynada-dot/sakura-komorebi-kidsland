<?php 
function custom_cfs_output($content) {
    return str_replace("\n", "<br />", esc_html($content));
  }
add_filter('wpcf7_autop_or_not', '__return_false');
function custom_auto_post_slug($slug, $post_ID, $post_status, $post_type) {
    if ($post_type == 'your_custom_post_type') {
        $slug = utf8_uri_encode($post_type) . '-' . $post_ID;
    }
    return $slug;
}
add_action('init', 'load_textdomain_function');
function load_textdomain_function() {
    load_plugin_textdomain('smart-custom-fields', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}
add_filter('wp_unique_post_slug', 'custom_auto_post_slug', 10, 4);
function create_custom_post_types() {
    
    register_post_type('introduction',
        array(
            'labels' => array(
                'name' => __('各園のご紹介'),
                'singular_name' => __('introduction')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'rewrite' => array('slug' => 'introduction'),
        )
    );
    register_post_type('letter',
    array(
        'labels' => array(
            'name' => __('こもれびだより'),
            'singular_name' => __('letter')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'letter'),
    )
    );
    register_post_type('information',
        array(
            'labels' => array(
                'name' => __('お知らせ'),
                'singular_name' => __('information')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'rewrite' => array('slug' => 'information'),
        )
    );
}
add_action('init', 'create_custom_post_types');
function create_custom_taxonomies() {
    
    register_taxonomy('introduction_category', 'introduction', array(
        'labels' => array(
            'name' => __('introduction Categories'),
            'singular_name' => __('introduction Category')
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'introduction_category')
    ));
    register_taxonomy('place_category', 'introduction', array(
        'labels' => array(
            'name' => __('place Categories'),
            'singular_name' => __('place Category')
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'place_category')
    ));
    register_taxonomy('letter_category', 'letter', array(
        'labels' => array(
            'name' => __('letter Categories'),
            'singular_name' => __('letter Category')
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'letter_category')
    ));
    register_taxonomy('letter_each-place', 'letter', array(
        'labels' => array(
            'name' => __('都道府県を選ぶ'),
            'singular_name' => __('letter_each-place')
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'letter_each-place')
    ));
    register_taxonomy('school_name', 'letter', array(
        'labels' => array(
            'name' => __('園を選ぶ'),
            'singular_name' => __('school_name')
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'school_name')
    ));
    register_taxonomy('information_category', 'information', array(
        'labels' => array(
            'name' => __('informationsのターム'),
            'singular_name' => __('information Category')
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'information_category')
    ));
}
add_action('init', 'create_custom_taxonomies');