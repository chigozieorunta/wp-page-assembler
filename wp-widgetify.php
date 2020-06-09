<?php
/**
 * Plugin Name: Widgetify
 * Plugin URI:  https://github.com/chigozieorunta/wp-widgetify
 * Description: The Widgetify WordPress Plugin is a collection of WordPress widgets designed to help web designers build sections of their web page easily via widgets.
 * Version:     1.0.0
 * Author:      Chigozie Orunta
 * Author URI:  https://github.com/chigozieorunta
 * License:     MIT
 * Text Domain: wp-widgetify
 * Domain Path: ./
 */

use Widgetify\wpWidgetify as Init;

require_once realpath('vendor/autoload.php');

//Define Plugin Path
define("WPWIDGETIFY", plugin_dir_path(__FILE__));

//Custom Functions
require_once('inc/wp-widgetify-functions.php');
require_once('inc/wp-widgetify-controls.php');
require_once('inc/wp-widgetify-globals.php');

Init::getInstance();

?>
