<?php

function add_field_group_cursos() {
    if ( function_exists( 'acf_add_local_field_group' ) ) {
        acf_add_local_field_group(array(
            'key' => 'group_5e0a9740631ae',
            'title' => 'cursos',
            'fields' => array(
                array(
                    'key' => 'field_5e0a9a7612c87',
                    'label' => 'Nombre del curso',
                    'name' => 'curso_nombre',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_5e0a9a9512c88',
                    'label' => 'Cantidad de clases',
                    'name' => 'curso_cantidad_clases',
                    'type' => 'number',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => 0,
                    'max' => '',
                    'step' => '',
                ),
                array(
                    'key' => 'field_5e0a9b1212c89',
                    'label' => 'Precio',
                    'name' => 'curso_precio',
                    'type' => 'number',
                    'instructions' => 'Precio en dólares',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'min' => 0,
                    'max' => '',
                    'step' => '',
                ),
                array(
                    'key' => 'field_5e0a9b4412c8a',
                    'label' => 'Nivel de dificultad',
                    'name' => 'curso_dificultad',
                    'type' => 'select',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'Introductorio' => 'Introductorio',
                        'Básico' => 'Básico',
                        'Medio' => 'Medio',
                        'Alto' => 'Alto',
                    ),
                    'default_value' => array(
                    ),
                    'allow_null' => 1,
                    'multiple' => 0,
                    'ui' => 0,
                    'return_format' => 'value',
                    'ajax' => 0,
                    'placeholder' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'curso',
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