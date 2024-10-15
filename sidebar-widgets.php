<?php
/*
Plugin Name: i20 Sidebar Widgets
Plugin URI: https://jharaphula.com/demo.php
Description: Free informative Sidebar Widgets to boost user activities. In these widgets links pointing to the Articles are Google Adsense friendly. Supporting 200+ Global Languages and Family Safe.
Version: 2.1.3
Author: Biswabhusan
Author URI: https://jharaphula.com/about-us/
Text Domain: i20_Sidebar_Widgets
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
if (!defined('WPINC')) { die; }

// Let's Initialize Everything
if (file_exists(plugin_dir_path( __FILE__ ) . 'core-init.php')) {
require_once(plugin_dir_path( __FILE__ ) . 'core-init.php');

if (get_option('itsw_how_many_records') === false ) {
	update_option('itsw_how_many_records', 20);
}

if (get_option('itsw_height_of_i20_sidebar') === false ) {
	update_option('itsw_height_of_i20_sidebar', 520);
}

if (get_option('itsw_dropdown_border') === false ) {
	update_option('itsw_dropdown_border', 1);
}
	
ob_end_clean();
}