<?php

class postController
{
    public $data;
    public $posts;

    public function __construct()
    {
        $this->data = file_get_contents('http://triskel.test/wp-json/wp/v2/curso');
        $this->data = json_decode( $this->data );
    }

    public function render()
    {
        //var_dump( $this->data );

        foreach ( $this->data as $k => $post ) {

            printf('
                <h2 style="display:inline-block;">%s</h2>
                <i>%s</i>
                %s
                <b>Nombre de curso:</b> %s <br>
                <b>Clases:</b> %s <br>
                <b>Precio:</b> %s <br>
                <b>Dificultad:</b> %s <br>
                <hr>

            ',
            $post->title->rendered,
            date('d/m/y', strtotime($post->date)),
            $post->content->rendered,
            $post->acf->curso_nombre,
            $post->acf->curso_cantidad_clases,
            $post->acf->curso_precio,
            $post->acf->curso_dificultad
            );
        }

    }

}