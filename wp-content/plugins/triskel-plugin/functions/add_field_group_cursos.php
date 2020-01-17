<?php

function add_field_group_muebles() {

    if ( function_exists('acf_add_local_field_group') ) {

        acf_add_local_field_group(array(
            'key' => 'group_5e1fcf632e6aa',
            'title' => 'Campos Muebles',
            'fields' => array(
                array(
                    'key' => 'field_5e1fcf8ad4fb6',
                    'label' => 'Estilo',
                    'name' => 'estilo',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'Antiguedades' => 'Antiguedades',
                        'Escandinavos' => 'Escandinavos',
                        'Design' => 'Design',
                        'Otros' => 'Otros',
                    ),
                    'default_value' => array(
                        0 => 'Otros',
                    ),
                    'allow_null' => 0,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                ),
                array(
                    'key' => 'field_5e1fd6054923c',
                    'label' => 'Imagen del mueble',
                    'name' => 'imagen',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'medium',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => 5,
                    'mime_types' => '.png, .jpg, png, jpg',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'mueble',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
    }
}