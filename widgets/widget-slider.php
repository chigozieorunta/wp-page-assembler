<?php
/*
 * Filename:      widget-slider.php
 * Plugin Name:   wp-page-assembler
 * Plugin URI:    https://github.com/chigozieorunta/wp-page-assembler
 * Description:   The Page Assember WordPress Plugin is a collection of WordPress widgets designed to help web designers build sections of their web pages easily
 * Domain Path:   ./widgets
 * Description:   The wpFormControl class
 * Author:        Chigozie Orunta
 * Version:       1.0.0
 * Licence:       MIT
 * Author URI:    https://github.com/chigozieorunta
 * Last Change:   2019/03/19
*/

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
			__('Page Assembler Slider', 'widget_name'),
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
        $title = apply_filter('widget_title', $instance['title']);
    }

	/**
     * WordPress Update Method
	 *
     * @access public  
	 * @since  1.0.0
    */
	function update($new_instance, $old_instance) {
        $instance = $old_instance;
        foreach($new_instance as $column=>$key) {
            $instance[$column] = strip_tags($key);
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
        $controls = array(
            "title" => "text",
            "footnote" => "text",
            "revolutionSlider" => "text",
            "captionColor" => "text",
            "textColor" => "text",
            "backgroundColor" => "text",
            "backgroundImage" => "text",
            "backgroundOverlay" => "text"
        ); $value = 'title';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id($value); ?>"><?php _e($label) ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id($value); ?>" name="<?php echo $this->get_field_name($value); ?>" value="<?php echo instance[$value]; ?>" />
        </p>
        <?php
        /* $formControl = new wpFormControl($this, $instance);
        foreach($controls as $key=>$value) {
            $formControl->getControl($key, $value);
        } */
	}
}

?>