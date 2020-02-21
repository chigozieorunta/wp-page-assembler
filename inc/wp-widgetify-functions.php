<?php

/* WIDGETIFY BANNER */

function widgetify_banner_caption($instance) {
?>
	<div class="widgetify-caption wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="0ms" style="color: <?= $instance['captionColor']; ?>">
		<?= $instance['title']; ?>
	</div>
<?
}

function widgetify_banner_summary($instance) {
?>
	<?php if(trim($instance['footnote'])): ?>
		<div class="widgetify-text wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="100ms"><?= $instance['footnote']; ?></div>
<?
}

function widgetify_banner_button($instance) {
?>
	<div class="row wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="200ms" style="margin-top: 1em;">
		<div class="col-sm-12">
			<?php $link = get_page_link($instance['callToActionButtonPage']); ?>
			<a href="<?php echo $link; ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
		</div>
	</div>
<?
}

function widgetify_before_banner_caption() {
	return '';
}

function widgetify_after_banner_caption() {
	return '';
}

function widgetify_before_banner_summary() {
	return '';
}

function widgetify_after_banner_summary() {
	return '';
}

function widgetify_before_banner_button() {
	return '';
}

function widgetify_after_banner_button() {
	return '';	
}

function getDay($date) {
	$date = new DateTime($date);
	$theme_day = $date->format('j');
	return $theme_day;
}

function getMonth($date) {
	$date = new DateTime($date);
	$theme_month = $date->format('M');
	return $theme_month;
}

function getImage($post) {
	$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
	$image = $image[0];
	return $image;
}

function getShortenedText($string, $length) {
	$theme_text = substr($string, 0, $length);
	$theme_text = (strlen($string) > $length) ? $theme_text.'...' : $theme_text;
	return $theme_text;
}

function getColumnClass($columns){
	$class = '';
	switch($columns) {
		case '1':
			$class = 'col-sm-12';
			break;
		case '2':
			$class = 'col-sm-6';
			break;
		case '3':
			$class = 'col-sm-4';
			break;
		case '4':
			$class = 'col-sm-3';
			break;
		case '6':
			$class = 'col-sm-2';
			break;
		default:
			$class = 'col-sm-4';
			break;
	}
	return $class;
}

global $msg_feedback;

?>
