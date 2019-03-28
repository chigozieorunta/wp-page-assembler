<?php
/*
 * Filename:      wp-page-assembler.php
 * Plugin Name:   wp-page-assembler
 * Plugin URI:    https://github.com/chigozieorunta/wp-page-assembler
 * Description:   The Page Assember WordPress Plugin is a collection of WordPress widgets designed to help web designers build sections of their web pages easily
 * Domain Path:   ./
 * Description:   The parent class - wpPageAssembler
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/02/01
*/

//Define Plugin Path
define("WPPAGEASSEMBLER", plugin_dir_path(__FILE__));

//Custom Functions
require_once('inc/wp-form-control.php');

wpPageAssembler::getInstance();

/**
 * Class wpPageAssembler
 */
class wpPageAssembler {
    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
    public function __construct() {
        add_action('admin_menu', array(get_called_class(), 'registerMenu'));
        add_action('wp_enqueue_scripts', array(get_called_class(), 'registerScripts'));
        self::registerClasses();
    }

    /**
	 * Scans the plugins subfolder and include files.
	 *
	 * @since   05/02/2013
	 * @return  void
	 */
	private static function registerClasses() {
		foreach(glob(__DIR__.'/widgets/*.php') as $path) {
			require_once $path;
		}
	}

    /**
	 * Register Menu Method
	 *
     * @access public 
	 * @since  1.0.0
	 */
    public static function registerMenu() {
        add_menu_page(
            'wp-page-assembler', 
            'wp-page-assembler', 
            'manage_options', 
            'wp-page-assembler', 
            array(get_called_class(), 'registerHTML')
        );
    }

    /**
	 * Register Scripts Method
	 *
     * @access public 
	 * @since  1.0.0
	 */
    public static function registerScripts() {
        if(!wp_style_is('bootstrap.min.css', $list = 'enqueued')) {
            wp_register_style('bootstrap', plugin_dir_url(__FILE__).'css/bootstrap.min.css');
            wp_enqueue_style('bootstrap');
        }
    }

    /**
	 * Register HTML Method
	 *
     * @access public
	 * @since  1.0.0
	 */
    public static function registerHTML() {
        require_once('wp-page-assembler-html.php');
    }

    /**
	 * Points the class, singleton.
	 *
	 * @access public
	 * @since  1.0.0
	 */
    public static function getInstance() {
        static $instance;
        if($instance === null) $instance = new self();
        return $instance;
    }
}

?>