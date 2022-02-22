<?php
/*
Plugin Name: Plugin camara de transporte
Plugin URI: [URL del plugin (si la va a tener, si no puedes poner la tuya)]
Description: plugin de gestion de cursos de la camara de transporte
Version: v0.0.1
Author: Urra Gauna Matias
Author URI:[URL del autor del plugin]
License:[El tipo de licencia que le quieras poner. Por ejemplo: GPL]
*/
defined('ABSPATH') or die("Bye bye");
define('PCT_RUTA', plugin_dir_path(__FILE__));
include(PCT_RUTA . 'includes/funciones.php');
include(PCT_RUTA . 'includes/opciones.php');


function pct_nuevosBotones($botones)
{

    $botones[] = 'fontselect';
    $botones[] = 'fontisizeselect';
    $botones[] = 'underline';
    return $botones;
}
add_filter('mce_buttons3', 'pctNuevosBotones');
