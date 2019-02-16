<!-- Widget Caption -->
<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" />
</p>

<!-- Widget Footnote -->
<p>
	<label for="<?php echo $this->get_field_id('footnote'); ?>"><?php _e('Footnote:') ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('footnote'); ?>" name="<?php echo $this->get_field_name('footnote'); ?>" value="<?php echo $instance['footnote']; ?>" />
</p>

<!-- Widget Category -->   
<p>
	<label for="<?php echo $this->get_field_id('postsCategory'); ?>"><?php _e('Category:') ?></label>
	<select id="<?php echo $this->get_field_id('postsCategory'); ?>" name="<?php echo $this->get_field_name('postsCategory'); ?>" class="widefat" style="width:100%;">
		<?php
			$categories = get_categories();
			foreach($categories as $category):
				if($category->cat_name == $instance['postsCategory']) {
					$selected = "selected";
				} else $selected = "";
		?>
			<option <?php if($selected): echo $selected; endif; ?> value="<?php echo $category->cat_name; ?>">
				<?php echo $category->cat_name; ?>
			</option>
		<?php endforeach; ?>
	</select>
</p>

<!-- Widget Icon Position -->
<p>
	<label for="<?php echo $this->get_field_id('iconPosition'); ?>"><?php _e('Icon Position:') ?></label>
	<select class="widefat" id="<?php echo $this->get_field_id('iconPosition'); ?>" name="<?php echo $this->get_field_name('iconPosition'); ?>" style="width:100%;">
		<?php 
			$positions = array('top', 'side');
			foreach($positions as $position):
				if($position == $instance['iconPosition']) {
					$selected = "selected";
				} else $selected = "";
		?>
			<option <?php if($selected): echo $selected; endif; ?> value="<?php echo $position; ?>">
   				<?php echo $position; ?>
			</option>
		<?php endforeach; ?>
	</select>
</p>

<!-- Widget Sort Type -->
<p>
	<label for="<?php echo $this->get_field_id('postsSortType'); ?>"><?php _e('Sort Type:') ?></label>
	<select class="widefat" id="<?php echo $this->get_field_id('postsSortType'); ?>" name="<?php echo $this->get_field_name('postsSortType'); ?>" style="width:100%;">
		<?php 
			$sorttypes = array('date', 'title');
			foreach($sorttypes as $sorttype):
				if($sorttype == $instance['postSortType']) {
					$selected = "selected";
				} else $selected = "";
		?>
			<option <?php if($selected): echo $selected; endif; ?> value="<?php echo $sorttype; ?>">
   				<?php echo $sorttype; ?>
			</option>
		<?php endforeach; ?>
	</select>
</p>

<!-- Widget Sort Order -->
<p>
	<label for="<?php echo $this->get_field_id('postsSortOrder'); ?>"><?php _e('Sort Order:') ?></label>
	<select class="widefat" id="<?php echo $this->get_field_id('postsSortOrder'); ?>" name="<?php echo $this->get_field_name('postsSortOrder'); ?>" style="width:100%;">
		<?php 
			$sortorders = array('ASC', 'DESC');
			foreach($sortorders as $sortorder):
				if($sortorder == $instance['postsSortOrder']) {
					$selected = "selected";
				} else $selected = "";
		?>
			<option <?php if($selected): echo $selected; endif; ?> value="<?php echo $sortorder; ?>">
   				<?php echo $sortorder; ?>
			</option>
		<?php endforeach; ?>
	</select>
</p>

<!-- Widget Columns -->
<p>
	<label for="<?php echo $this->get_field_id('numberOfColumns'); ?>"><?php _e('Columns:') ?></label>
	<select class="widefat" id="<?php echo $this->get_field_id('numberOfColumns'); ?>" name="<?php echo $this->get_field_name('numberOfColumns'); ?>" style="width:100%;">
		<?php 
			$columns = array(1, 2, 3, 4);
			foreach($columns as $column):
				if($column == $instance['numberOfColumns']) {
					$selected = "selected";
				} else $selected = "";
		?>
			<option <?php if($selected): echo $selected; endif; ?> value="<?php echo $column; ?>">
   				<?php echo $column; ?>
			</option>
		<?php endforeach; ?>
	</select>
</p>

<!-- Widget Caption Color -->
<p>
	<label for="<?php echo $this->get_field_id('captionColor'); ?>"><?php _e('Caption Color:') ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('captionColor'); ?>" name="<?php echo $this->get_field_name('captionColor'); ?>" value="<?php echo $instance['captionColor']; ?>" />
</p>

<!-- Widget Text Color -->
<p>
	<label for="<?php echo $this->get_field_id('textColor'); ?>"><?php _e('Text Color:') ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('textColor'); ?>" name="<?php echo $this->get_field_name('textColor'); ?>" value="<?php echo $instance['textColor']; ?>" />
</p>

<!-- Widget Background Color -->
<p>
	<label for="<?php echo $this->get_field_id('backgroundColor'); ?>"><?php _e('Background Color:') ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('backgroundColor'); ?>" name="<?php echo $this->get_field_name('backgroundColor'); ?>" value="<?php echo $instance['backgroundColor']; ?>" />
</p>

<!-- Widget Background Image -->
<p>
	<label for="<?php echo $this->get_field_id('backgroundImage'); ?>"><?php _e('Background Image:') ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('backgroundImage'); ?>" name="<?php echo $this->get_field_name('backgroundImage'); ?>" value="<?php echo $instance['backgroundImage']; ?>" />
</p>

<!-- Widget Background Overall -->
<p>
	<label for="<?php echo $this->get_field_id('backgroundImageVeilColor'); ?>"><?php _e('Background Image Overlay Colour:') ?></label>
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('backgroundImageVeilColor'); ?>" name="<?php echo $this->get_field_name('backgroundImageVeilColor'); ?>" value="<?php echo $instance['backgroundImageVeilColor']; ?>" />
</p>