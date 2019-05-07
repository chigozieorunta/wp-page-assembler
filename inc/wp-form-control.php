<?php

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
        $vartype = gettype($value);
        switch($vartype) {
            case 'string':
                require('wp-form-input-text.php');
                break;
            case 'array':
                require('wp-form-input-select.php');
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
        $name = str_split($name); $label = [];
        foreach($name as $nameCharacter) {
            if(ctype_upper($nameCharacter)) {
                array_push($label, ' ');
            }
            array_push($label, $nameCharacter);
        }
        $label = join('', $label);
        $label = ucwords($label);
        return $label;
    }
}

?>