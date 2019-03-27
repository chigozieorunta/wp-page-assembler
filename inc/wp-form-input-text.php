<p>
    <label for="<?php echo $this->widgetObject->get_field_id($key); ?>"><?php _e($label) ?></label>
    <input type="text" class="widefat" id="<?php echo $this->widgetObject->get_field_id($key); ?>" name="<?php echo $this->widgetObject->get_field_name($key); ?>" value="<?php echo $this->wpInstance[$key]; ?>" />
</p>