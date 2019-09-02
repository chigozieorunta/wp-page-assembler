<?php

add_action('widgets_init', create_function('', 'return register_widget("widgetify_social_media");'));

class widgetify_social_media extends WP_Widget {
    /**
     * WordPress Widget Constructor Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function __construct() {
		parent::__construct(
			'widgetify_social_media',
			__('Widgetify Social Media', 'widget_name'),
			array('description' => __('Display Social Media icons...'))
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
        require(WPWIDGETIFY.'templates/template-social-media.php');
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
        global $wpPages;
        $widgetControls = array(
            "title"                     => "text",
            "footnote"                  => "text",
            "facebookLink"              => "text",
            "twitterLink"               => "text",
            "instagramLink"             => "text",
            "youtubeLink"               => "text",
            "linkedinLink"              => "text"
        );
        $widgetControl = new wpWidgetifyControl($this, $instance);
        foreach($widgetControls as $key=>$value) {
            $widgetControl->getControl($key, $value);
        }
	}
}

?>