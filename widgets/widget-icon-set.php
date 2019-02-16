<?php

add_action('widgets_init', create_function('', 'return register_widget("pa_icon_set");'));

class pa_icon_set extends WP_Widget {
	function __construct() {
		parent::__construct(
			'pa_icon_set',
			__( 'Page Assembler (Icon Set)', 'widget_name' ),
			array( 'description' => __( 'A widget for displaying a group of posts titles with icons and their footnotes.', 'widget_name' ), )
		);
	}
	
	function widget($args, $instance) {
        extract($args);
        
        //Generic
    	$title = $instance['title'];
    	$footnote = $instance['footnote'];
    	$textColor = $instance['textColor'];
    	$captionColor = $instance['captionColor'];
    	$numberOfColumns = $instance['numberOfColumns'];
    	
    	//Icon (Top/Side)
    	$iconPosition = $instance['iconPosition'];
    	
    	//Background
    	$backgroundColor = $instance['backgroundColor'];
    	$backgroundImage = $instance['backgroundImage'];
    	$backgroundImageVeilColor = $instance['backgroundImageVeilColor'];
    	
    	//Posts
    	$postsCategory = $instance['postsCategory'];
    	$postsSortType = $instance['postsSortType'];
    	$postsSortOrder = $instance['postsSortOrder'];
    	
    	//Generate Template
        require_once(WPPAPATH.'/templates/template-icon-set.php');
    }
	
	function update($new_instance, $old_instance) {
        $instance = $old_instance;
        //Generic
		$instance['title'] = strip_tags($new_instance['title']);
    	$instance['footnote'] = strip_tags($new_instance['footnote']);
    	$instance['captionColor'] = strip_tags($new_instance['captionColor']);
    	$instance['textColor'] = strip_tags($new_instance['textColor']);
    	$instance['numberOfColumns'] = strip_tags($new_instance['numberOfColumns']);
    	
    	//Icon (Top/Side)
    	$instance['iconPosition'] = strip_tags($new_instance['iconPosition']);
    	
    	//Background
    	$instance['backgroundColor'] = strip_tags($new_instance['backgroundColor']);
    	$instance['backgroundImage'] = strip_tags($new_instance['backgroundImage']);
    	$instance['backgroundImageVeilColor'] = strip_tags($new_instance['backgroundImageVeilColor']);
    	
    	//Posts
    	$instance['postsCategory'] = strip_tags($new_instance['postsCategory']);
    	$instance['postsSortType'] = strip_tags($new_instance['postsSortType']);
    	$instance['postsSortOrder'] = strip_tags($new_instance['postsSortOrder']);
        return $instance;
    }
	
	function form($instance) {
		$defaults = array('title' => '');
		$instance = wp_parse_args((array) $instance, $defaults);
        require_once(WPPAPATH.'/forms/form-icon-set.php');
	}
}

?>