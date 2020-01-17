<?php

function post_type_cursos_init() {
    $labels = array(
        'name'              => _x( 'Cursos', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Cursos', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis cursos', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Cursos', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', 'curso', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nuevo curso', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nuevo curso', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar curso', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver curso', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos los cursos', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar cursos', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Cursos padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado cursos.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado cursos en la papelera', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'            => $labels,
        'description'       => __('Description', 'your-plugin-textdomain'),
        'public'            => true,
        'public_queryable'  => true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'curso' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'dashicons-welcome-learn-more',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'curso', $args );
}