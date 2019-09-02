<?php

add_action('widgets_init', create_function('', 'return register_widget("widgetify_html");'));

class widgetify_html extends WP_Widget {
    /**
     * WordPress Widget Constructor Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function __construct() {
		parent::__construct(
			'widgetify_html',
			__('Widgetify HTML Container', 'widget_name'),
			array('description' => __('Display HTML Container...'))
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
        require(WPWIDGETIFY.'templates/template-html-container.php');
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
            $instance[$key] = $value;
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
        global $wpPages;
        $widgetControls = array(
            "title"                     => "text",
            "footnote"                  => "text",
            "html"                      => "multiline"
        );
        $widgetControl = new wpFormControl($this, $instance);
        foreach($widgetControls as $key=>$value) {
            $widgetControl->getControl($key, $value);
        }
	}
}

?>