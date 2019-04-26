<?php

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
		default:
			$class = 'col-sm-4';
			break;
	}
	return $class;
}

global $msg_feedback;

?>