<?php

function post_type_muebles_init() {
    $labels = array(
        'name'              => _x( 'Muebles', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'     => _x( 'Muebles', 'post type general name', 'your-plugin-textdomain' ),
        'menu_name'         => _x( 'Mis muebles', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'    => _x( 'Muebles', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'           => _x( 'Añadir nuevo', 'mueble', 'your-plugin-textdomain' ),
        'add_new_item'      => __( 'Añadir nuevo mueble', 'your-plugin-textdomain' ),
        'new_item'          => __( 'Nuevo mueble', 'your-plugin-textdomain' ),
        'edit_item'         => __( 'Editar mueble', 'your-plugin-textdomain' ),
        'view_item'         => __( 'Ver mueble', 'your-plugin-textdomain' ),
        'all_items'         => __( 'Todos los muebles', 'your-plugin-textdomain' ),
        'search_items'      => __( 'Buscar muebles', 'your-plugin-textdomain' ),
        'parent_item_colon' => __( 'Muebles padre', 'your-plugin-textdomain' ),
        'not_found'         => __( 'No hemos encontrado muebles.', 'your-plugin-textdomain' ),
        'not_found_in_trash'=> __( 'No hemos encontrado muebles en la papelera', 'your-plugin-textdomain' ),
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
        'rewrite'           => array( 'slug' => 'mueble' ),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'hierarchical'      => false,
        'menu_position'     => null,
        'menu_icon'         => 'https://i.imgur.com/08hkfNA.png',
        'supports'          => array( 'title', 'editor', 'author', 'thumbnail' )
    );

    register_post_type( 'mueble', $args );
}