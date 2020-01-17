<?php

include 'postController.php';

class indexController
{

    public function init()
    {
        $this->posts = new postController;
        $this->posts->render();
    }

}