<?php
/*
Plugin Name: Mis Funcionalidades
Plugin URI: http://www.wangdev.com
Description: Plugin de WangDev para añadir funcionalidades a todos mis sitios.
Version: 1.0.0
Author: j.conti
Author URI: http://www.wangdev.com
License: GPL2
*/

/*  Copyright 2014  WangDev

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Definimos que versión del plugin es
define('MIS_FUNCIONALIDADES', '1.0');

//Anadimos la capacidad que el plugn sea traducible
function mis_funcionalidades_init() {
	if (function_exists('load_plugin_textdomain')) {
		$plugin_dir = basename(dirname(__FILE__));
		load_plugin_textdomain('mis-funcionalidades', false, $plugin_dir . "/languages/" );
	}
}
add_action('init', 'mis_funcionalidades_init');

//Creamos las opciones necesarias para el funcionamiento del plugin.
function mis_funcionalidades_activate() {

//Anadimos todas las opciones que podamos necesitar de momento.
add_site_option('mis_funcionalidades_mensaje_registro','');  //opción por la que la funcionalidad estará activada o no
add_site_option('mis_funcionalidades_mensaje_registro-text',''); //opcion por la que pondremos el texto que querremos mostrar
add_site_option('mis_funcionalidades_mensaje_registro-text-css',''); //opcion por la que pondremos css para dar formato al texto.
update_site_option('mis_funcionalidades_mensaje_registro','1'); //Damos el valor 1 a esta opción y eso quiere decir que estara activada la funcionalidad


}
register_activation_hook( 'mis-funcionalidades/mis-funcionalidades.php', 'mis_funcionalidades_activate' );

?>
