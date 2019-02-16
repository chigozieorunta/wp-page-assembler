<?php

function fn_theme_substring($string, $length) {
	$theme_text = substr($string, 0, $length); 
	return $theme_text.'...';
}

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

function fn_get_class($columns){
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