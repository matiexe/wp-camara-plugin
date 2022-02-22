<?php
defined('ABSPATH') or die("Bye bye");
//Top level menu del plugin

function prefijo_menu_administrador()
{
    add_menu_page(PCT_NOMBRE, PCT_NOMBRE, 'manage_options', PCT_RUTA . '/admin/configuration.php');
    add_submenu_page(PCT_RUTA . '/admin/index.php' . 'ejemplo submenu', 'manage_options');
};
add_action('admin_menu', 'prefijo_menu_administrador');
