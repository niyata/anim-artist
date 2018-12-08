<?php

add_action('admin_init', 'anim_column');

function anim_column() {
    add_filter('manage_posts_columns', 'anim_column_head');
    add_filter('manage_pages_columns', 'anim_column_head');
    add_filter('manage_edit-product_cat_columns', 'anim_column_head');
    anim_column_custom_post_type();
    add_action('manage_posts_custom_column', 'anim_column_content', 10, 2);
    add_action('manage_pages_custom_column', 'anim_column_content', 10, 2);
    add_action('manage_product_cat_custom_column', 'anim_ctgr_column_content', 10, 3);
}

function anim_column_head($default) {
	$default['featured_image'] = 'รูปโปรเจ็ค';
    return $default;
}

function anim_ctgr_column_content($internal_image, $column, $term_id) {
    if ($column == 'featured_image') {
        $url = get_term_meta($term_id, 'anim_image_url', true);
        if ($url != '')
            echo sprintf('<img src="%s" height="%s"/>', $url, get_option('anim_column_height'));
    } else
        echo $internal_image;
}

function anim_column_content($column, $post_id) {
    if ($column == 'featured_image') {
        $url = anim_main_image_url($post_id);
        if ($url == '')
            $url = wp_get_attachment_url(get_post_thumbnail_id());
        echo sprintf('<img src="%s" height="%s"/>', $url, get_option('anim_column_height'));
    }
}

function anim_column_custom_post_type() {
    for ($i = 0; $i < 10; $i++)
        add_filter('manage_edit-' . get_option('anim_project_sets' . $i) . '_columns', 'anim_column_head');
}

