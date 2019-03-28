<p>
    <label for="<?php echo $this->widgetObject->get_field_id($key); ?>"><?php _e($label) ?></label>
    <select class="widefat" id="<?php echo $this->widgetObject->get_field_id($key); ?>" name="<?php echo $this->widgetObject->get_field_name($key); ?>">
        <?php foreach($value as $column=>$item): ?>
        <?php $selected = (($this->wpInstance['key'] == $item) ? 'selected' : ''); ?>
        <option value="<?= $item ?>" <?= $selected; ?>>
            <?= $selected.$column; ?>
        </option>
        <?php endforeach; ?>
    </select>
</p>