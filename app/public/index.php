<?php

$CONF = require_once '../config.php';

include $CONF['DIR']['APP_ROOT'] . '/src/Controller/indexController.php';

$controller = 'indexController';
$action = 'init';

$object = new $controller;
$object->$action();