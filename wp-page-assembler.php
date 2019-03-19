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

//Custom Functions
require_once('wp-page-assembler-functions.php');

//Add Widgets...
/*require_once('widgets/widget-icon-set.php');
require_once('widgets/widget-blog-set.php');
require_once('widgets/widget-slider.php');
require_once('widgets/widget-banner.php');
require_once('widgets/widget-contact-form.php');*/

//Define Plugin Path
define("WPPAGEASSEMBLER", plugin_dir_url( __FILE__ ));

wpPageAssembler::getInstance();

/**
 * Class wpPageAssembler
 */
class wpPageAssembler {
    /**
	 * Private static variables
	 *
	 * @var string
	 */
    private static $pluginName;

    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
    public function __construct() {
        add_action('admin_menu', array(get_called_class(), 'registerMenu'));
        self::registerClasses();
    }

    /**
	 * Scans the plugins subfolder and include files.
	 *
	 * @since   05/02/2013
	 * @return  void
	 */
	private static function registerClasses() {
		foreach (glob( __DIR__ . '/widgets/*.php') as $path) {
			require_once $path;
		}
	}

    /**
	 * Register Menu Method
	 *
     * @access private  
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
	 * Register HTML Method
	 *
     * @access private
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