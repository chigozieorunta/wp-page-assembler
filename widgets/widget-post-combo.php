<?php

add_action('widgets_init', create_function('', 'return register_widget("widgetify_post_combo");'));

class widgetify_post_combo extends WP_Widget {
    /**
     * WordPress Widget Constructor Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function __construct() {
		parent::__construct(
			'widgetify_post_combo',
			__('Widgetify Post Combo', 'widget_name'),
			array('description' => __('Display Post Combo...'))
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
        $post = get_post($instance['post']); $image = getImage($post);
        $instance['height'] = ($instance['height'] ? $instance['height'] : 400);
        require(WPWIDGETIFY.'templates/template-post-combo.php');
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
        global $wpPosts, $alternates, $wpPages, $textAlign, $imageShapes;
        $widgetControls = array(
            "title"                     => "text",
            "footnote"                  => "text",
            "post"                      => $wpPosts,            
            "alternate"                 => $alternates,
            "height"                    => "text",
            "textAlign"                 => $textAlign,
            "imageUniform"              => $alternates,
            "imageShape"                => $imageShapes,
            "captionColor"              => "text",
            "textColor"                 => "text",
            "backgroundColor"           => "text",
            "backgroundImage"           => "text",
            "backgroundOverlay"         => "text",
            "callToActionButtonPage"    => $wpPages,
            "callToActionButtonText"    => "text",
            "callToActionButtonClass"   => "text",
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