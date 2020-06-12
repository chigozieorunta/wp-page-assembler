<?php
namespace Widgetify;

wpWidgetify::getInstance();

/**
 * Class wpWidgetify
 */
class wpWidgetify {
    /**
	 * Constructor
	 *
	 * @since  1.0.0
	 */
    public function __construct() {
        add_action('init', array(get_called_class(), 'registerGlobals'));
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
	public static function registerGlobals() {
        //Custom Functions
        require_once('inc/wp-widgetify-functions.php');
        require_once('inc/wp-widgetify-controls.php');
        require_once('inc/wp-widgetify-globals.php');
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
            'Widgetify', 
            'Widgetify', 
            'manage_options', 
            'Widgetify', 
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
        if(!wp_style_is('bootstrap-spacer.css', $list = 'enqueued')) {
            wp_register_style('bootstrap-spacer', plugin_dir_url(__FILE__).'css/bootstrap-spacer.css');
            wp_enqueue_style('bootstrap-spacer');
        }
        if(!wp_style_is('uniformimages.css', $list = 'enqueued')) {
            wp_register_style('uniformimages', plugin_dir_url(__FILE__).'css/uniformimages.css');
            wp_enqueue_style('uniformimages');
        }
        if(!wp_style_is('widgetify.css', $list = 'enqueued')) {
            wp_register_style('widgetify-css', plugin_dir_url(__FILE__).'css/widgetify.css');
            wp_enqueue_style('widgetify-css');
        }
        if(!wp_script_is('uniformimages.js', $list = 'enqueued')) {
            wp_register_script('uniformimages-js', plugin_dir_url(__FILE__).'js/uniformimages.js', array('jquery'), '1', true);
            wp_enqueue_script('uniformimages-js');
        }
        if(!wp_script_is('widgetify.js', $list = 'enqueued')) {
            wp_register_script('widgetify-js', plugin_dir_url(__FILE__).'js/widgetify.js', array('jquery'), '1', true);
            wp_enqueue_script('widgetify-js');
        }
    }

    /**
	 * Register HTML Method
	 *
     * @access public
	 * @since  1.0.0
	 */
    public static function registerHTML() {
        require_once('wp-widgetify-html.php');
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
