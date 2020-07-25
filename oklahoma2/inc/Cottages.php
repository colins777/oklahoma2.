<?php

namespace Oklahoma2;

class Cottages
{

    const POST_TYPE_NAME = 'cottage';
    const TAXONOMY_NAME = 'building';

    public function __construct()
    {
        add_action('init', [$this, 'register_cottage_post_type']);
        add_action('init', [$this, 'register_building_taxonomy']);

        add_filter('manage_edit-' . self::TAXONOMY_NAME . '_columns', [$this, 'add_columns_to_taxonomy_table']);
        add_filter('manage_' . self::TAXONOMY_NAME . '_custom_column', [$this, 'add_column_content_to_taxonomy_table'],10,3);

    }

    public function register_cottage_post_type () {
        $labels = array(
            'name' => _x('Котеджи', 'post type general name'),
            'singular_name' => _x('Котедж', 'post type singular name'),
            'menu_name' => _x('Котеджи', 'admin menu'),
            'name_admin_bar' => _x('Котедж', 'add new on admin bar'),
            'add_new' => _x('Добавить котедж', 'cottage'),
            'add_new_item' => __('Добавить новый котедж'),
            'new_item' => __('Новый котедж'),
            'edit_item' => __('Редактировать котедж'),
            'view_item' => __('Открыть котедж'),
            'all_items' => __('Все котеджы'),
            'search_items' => __('Найти котедж'),
            'parent_item_colon' => __('Parent cottage:'),
            'not_found' => __('Не найдено котеджей'),
            'not_found_in_trash' => __('Не найдено котеджей в корзине')
        );

        $args = array(
            'labels' => $labels,
            'description' => __('Description.'),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'cottage'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies'          => array( 'building' ),
        );

        register_post_type(self::POST_TYPE_NAME, $args);
    }

    public function register_building_taxonomy () {
        $labels = array(
            'name' => 'Строения',
            'singular_name' => 'Строение',
            'search_items' => 'Найти строение',
            'all_items' => 'Все строения',
            'edit_item'  => 'Редактировать строение',
            'update_item'  => 'Сохранить строение',
            'add_new_item'  => 'Добавить строение',
            'new_item_name'  => 'Новое имя строения',
            'menu_name'  => 'Строения'
        );

        $args = array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'building')

        );

        register_taxonomy(self::TAXONOMY_NAME, [ self::POST_TYPE_NAME ], $args);
    }

    public function add_columns_to_taxonomy_table($columns){
        $columns['id_cottage'] = 'ID котеджа';

        return $columns;
    }

    public function add_column_content_to_taxonomy_table( $content,$column_name,$term_id ) {
        if ( 'id_cottage' === $column_name )
            $content = get_field( 'bukding_id', 'term_' . $term_id );

        return $content;
    }

}