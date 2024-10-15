<?php 
if (!defined('WPINC')) { die; }
// Define Our Constants
define('ITSW_CORE_INC',dirname( __FILE__ ).'/assets/includes/');
define('ITSW_CORE_CSS',plugins_url('assets/css/', __FILE__ ));
define('ITSW_CORE_JS',plugins_url('assets/js/', __FILE__ ));
/*
*  Register CSS
*/
function itsw_register_core_css(){
wp_enqueue_style('itsw-core', ITSW_CORE_CSS . 'jhp_main.css',null,time(),'all');
};
add_action('wp_enqueue_scripts', 'itsw_register_core_css'); 
add_action('admin_enqueue_scripts', 'itsw_register_core_css');   
/*
*  Register JS/Jquery Ready
*/
function itsw_register_core_js(){
// Register Core Plugin JS	
wp_enqueue_script('itsw-core', ITSW_CORE_JS . 'jhp-core.js',null,time(),true);
};
add_action('wp_enqueue_scripts', 'itsw_register_core_js'); 
add_action('admin_enqueue_scripts', 'itsw_register_core_js');  
/*
*  Includes
*/
// Load the Shortcodes
if ( file_exists(ITSW_CORE_INC . 'jhp-shortcodes.php')) {
	require_once ITSW_CORE_INC . 'jhp-shortcodes.php';
}