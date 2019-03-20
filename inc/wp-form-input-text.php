<p>
    <label for="<?php echo $this->widgetObject->get_field_id($value); ?>"><?php _e($label) ?></label>
    <input type="text" class="widefat" id="<?php echo $this->widgetObject->get_field_id($value); ?>" name="<?php echo $this->widgetObject->get_field_name($value); ?>" value="<?php echo $this->wpInstance[$value]; ?>" />
</p>