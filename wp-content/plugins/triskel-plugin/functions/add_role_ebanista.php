<?php

function add_role_ebanista() {

    // remove_role('ebanista');

    add_role('ebanista', 'Ebanista', [
        'read' => true,
        'edit_posts' => true,
        'upload_files' => true,
        'publish_posts' => true,
        'delete_published_posts' => true,
        'edit_published_posts' => true
    ]);
}