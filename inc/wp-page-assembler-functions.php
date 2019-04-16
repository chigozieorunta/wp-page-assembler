<?php

function fn_theme_date($date) {
	$date = new DateTime($date);
	$theme_date = $date->format('M, j Y');
	return $theme_date;
}

function fn_theme_day($date) {
	$date = new DateTime($date);
	$theme_day = $date->format('j');
	return $theme_day;
}

function fn_theme_month($date) {
	$date = new DateTime($date);
	$theme_month = $date->format('M');
	return $theme_month;
}

function fn_get_height($height) {
	if(!$height) {$height = 300;}
	return $height;
}

function fn_get_alternate($alternate) {
	switch($alternate) {
		case 'left':
			$alternate = 0;
			break;
		case 'right':
			$alternate = 1;
			break;
		default: 
			$alternate = 0;
			break;
	}
	return $alternate;
}

function getImage($post) {
	$image = wp_get_attachment_image_src(get_post_thumbanil_id($post->ID), 'full');
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