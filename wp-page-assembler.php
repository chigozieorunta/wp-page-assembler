<?php

/*
 * Plugin Name: WP Page Assembler
 * Plugin URI: https://github.com/chigozieorunta/wp-page-assembler
 * Description: The Page Assember WordPress Plugin is a collection of 
 * WordPress widgets designed to help web designers build sections of 
 * their web pages easily via drag and drop.
 * Version: 1.0
 * Author: Chigozie Orunta
 * Author URI: https://github.com/chigozieorunta
*/

//Define Plugin Path
define("WPPAPATH", ABSPATH.'wp-content/plugins/wp-page-assembler');

//Register Admin Menu
add_action('admin_menu', 'wp_page_assembler_menu');
function wp_page_assembler_menu() {
    add_menu_page( 'WP Page Assembler', 'WP Page Assembler', 'manage_options', 'wp-page-assembler', 'wp_page_assembler_init' );
}

//Custom Functions
require_once('wp-page-assembler-functions.php');

//Add Widgets...
require_once('widgets/widget-icon-set.php');
require_once('widgets/widget-blog-set.php');
require_once('widgets/widget-slider.php');
require_once('widgets/widget-banner.php');
require_once('widgets/widget-contact-form.php');

//Add Options Page
function wp_page_assembler_init() {
    require_once('wp-page-assembler-html.php');
}

?>