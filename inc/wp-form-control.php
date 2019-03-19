<?php
/*
 * Filename:      wp-form-control.php
 * Plugin Name:   wp-page-assembler
 * Plugin URI:    https://github.com/chigozieorunta/wp-page-assembler
 * Description:   The Page Assember WordPress Plugin is a collection of WordPress widgets designed to help web designers build sections of their web pages easily
 * Domain Path:   ./inc
 * Description:   The wpFormControl class
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/03/19
*/

/**
 * Class wpFormControl
*/
class wpFormControl {
    /**
	 * Constructor
	 *
	 * @since  1.0.0
	*/
    public function __construct() {}

    /**
	 * Get Control Method
	 *
     * @access public
	 * @since  1.0.0
	*/
    public function getControl($key, $value) {
        switch($key) {
            case 'text':
                $label = $this->getLabel($value);
                require_once('forms/getTextInput.php');
                break;
            case 'select':
                $label = $this->getLabel($value);
                require_once('forms/getSelectInput.php');
                break;
            default:
                break;
        }
    }

    /**
	 * Get Control's Label Method
	 *
     * @access private
	 * @since  1.0.0
	*/
    private function getLabel($name) {
        return $label;
    }
}

?>