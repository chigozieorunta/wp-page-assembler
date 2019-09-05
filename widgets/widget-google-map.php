<?php

add_action('widgets_init', create_function('', 'return register_widget("widgetify_google_map");'));

class widgetify_google_map extends WP_Widget {
    /**
     * WordPress Widget Constructor Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function __construct() {
		parent::__construct(
			'widgetify_google_map',
			__('Widgetify Google Map', 'widget_name'),
			array('description' => __('Display Google Map...'))
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
        $instance['height'] = ($instance['height'] ? $instance['height'] : 400);
        require(WPWIDGETIFY.'templates/template-google-map.php');
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
        $widgetControls = array(
            "title"                     => "text",
            "footnote"                  => "text",
            "location"                  => "text",
            "height"                    => "text",
            "widgetId"                  => "text",
            "widgetClass"               => "text",
            "widgetPadding"             => "text",
            "widgetAnimation"           => "text"
        );
        $widgetControl = new wpWidgetifyControl($this, $instance);
        foreach($widgetControls as $key=>$value) {
            $widgetControl->getControl($key, $value);
        }
	}
}

?>