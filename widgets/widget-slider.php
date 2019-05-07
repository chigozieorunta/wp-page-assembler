<?php

add_action('widgets_init', create_function('', 'return register_widget("pa_slider");'));

class pa_slider extends WP_Widget {
    /**
     * WordPress Widget Constructor Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function __construct() {
		parent::__construct(
			'pa_slider',
			__('PA Slider', 'widget_name'),
			array('description' => __('Display Revolution Slider...'))
		);
	}
    
    /**
     * WordPress Widget Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function widget($args, $instance) {
        extract($args);
        require_once(WPPAGEASSEMBLER.'templates/template-slider.php');
    }

	/**
     * WordPress Update Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function update($new_instance, $old_instance) {
        $instance = $old_instance;
        foreach($new_instance as $key=>$value) {
            $instance[$key] = strip_tags($value);
        }
        return $instance;
    }
    
    /**
     * WordPress Form Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function form($instance) {
		$defaults = array('title' => '');
        $instance = wp_parse_args((array) $instance, $defaults);
        global $textAlign, $wpPages;
        $sliderControls = array(
            "title"                     => "text",
            "footnote"                  => "text",
            "revolutionSlider"          => "text",
            "captionColor"              => "text",
            "textColor"                 => "text",
            "backgroundColor"           => "text",
            "backgroundImage"           => "text",
            "backgroundOverlay"         => "text",
            "textAlign"                 => $textAlign,            
            "callToActionButtonPage"    => $wpPages,
            "callToActionButtonText"    => "text",
            "callToActionButtonClass"   => "text"
        );
        $sliderControl = new wpFormControl($this, $instance);
        foreach($sliderControls as $key=>$value) {
            $sliderControl->getControl($key, $value);
        }
	}
}

?>