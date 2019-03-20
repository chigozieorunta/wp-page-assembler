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
    public function __construct($object, $wpInstance) {
        $this->widgetObject = $object;
        $this->wpInstance = $wpInstance;
    }

    /**
	 * Get Control Method
	 *
     * @access public
	 * @since  1.0.0
	*/
    public function getControl($key, $value) {
        $label = $this->getLabel($key);
        switch($value) {
            case 'text':
                require('wp-form-input-text.php');
                break;
            case 'select':
                //require('wp-form-input-text.php');
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
        /*$name = explode(' ', $name);
        $label = [];
        foreach($name as $nameCharacter) {
            if(strtoupper($nameCharacter) === $nameCharacter) {
                array_push($label, ' ');
            }
            array_push($label, $nameCharacter);
        }
        $label = implode(' ', $label);
        $label = ucwords($label);
        return $label;*/
        return $name;
    }
}

?>