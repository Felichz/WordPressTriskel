<?php
/**
 * Plugin Name:       Triskel Stuff
 * Description:       Contains Triskel custom features
 * Version:           1.0
 * Requires at least: 5.0
 * Requires PHP:      7.0
 * Author:            edouh
 * Author URI:        https://anderssonfelix.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       triskel-plugin
 * Domain Path:       /languages
 */

include 'functions/add_role_ebanista.php';

include 'functions/post_type_cursos_init.php';
include 'functions/add_field_group_cursos.php';

include 'functions/post_type_muebles_init.php';
include 'functions/add_field_group_muebles.php';

add_action( 'init', 'add_role_ebanista' );

add_action( 'init', 'post_type_cursos_init' );
add_action( 'init', 'add_field_group_cursos' );

add_action( 'init', 'post_type_muebles_init' );
add_action( 'init', 'add_field_group_muebles' );