<?php

add_action('widgets_init', create_function('', 'return register_widget("widgetify_photo_canvas");'));

class widgetify_photo_canvas extends WP_Widget {
    /**
     * WordPress Widget Constructor Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function __construct() {
		parent::__construct(
			'widgetify_photo_canvas',
			__('Widgetify Photo Canvas', 'widget_name'),
			array('description' => __('Display Photo Canvas...'))
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
        $instance['numberOfPosts'] = ($instance['numberOfPosts']? $instance['numberOfPosts'] : -1);
        $columnClass = getColumnClass($instance['numberOfColumns']);
        $posts = get_posts(
            array(
                'category_name' => sanitize_title($instance['category']),
                'orderby'       => $instance['sortType'],
                'order'         => $instance['sortOrder'],
                'numberposts'   => $instance['numberOfPosts']
            )
        );
        global $post; 
        $currentPointer = 0; $currentRow = 1; 
        $numberOfColumns = $instance['numberOfColumns'];
        $numberOfRows = ceil(count($posts)/$numberOfColumns);
        require(WPWIDGETIFY.'templates/template-photo-canvas.php');
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
        global $wpCategories, $wpPages, $wpSortTypes, $wpSortOrders, $columns, $alternates, $imageShapes, $widgetAnimation, $widgetBoxType;
        $widgetControls = array(
            "title"                     => "text",
            "footnote"                  => "text",
            "category"                  => $wpCategories,            
            "numberOfColumns"           => $columns,
            "numberOfPosts"             => "text",
            "sortType"                  => $wpSortTypes,
            "sortOrder"                 => $wpSortOrders,
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
            "widgetAnimation"           => $widgetAnimation,
            "widgetBoxType"             => $widgetBoxType
        );
        $widgetControl = new wpWidgetifyControl($this, $instance);
        foreach($widgetControls as $key=>$value) {
            $widgetControl->getControl($key, $value);
        }
	}
}

?>