<?php

global $wpCategories, $wpPages, $iconPositions, $wpSortTypes, $wpSortOrders, $textAlign, $columns;

$wpCategories = [];
$categories = get_categories();
foreach($categories as $categoryItem) {
    $categoryName = $categoryItem->cat_name;
    $wpCategories[$categoryName] = $categoryName;
}

$wpPages = [];
$pages = get_pages();
foreach($pages as $page) {
    $key = $page->ID;
    $value = $page->post_title;
    $wpPages[$value] = $key;
}

$iconPositions = array(
    'top'       => 'top',
    'side'      => 'side'
);

$wpSortTypes = array(
    'date'      => 'date',
    'title'    => 'title'
);

$wpSortOrders = array(
    'ASC'      => 'ASC',
    'DESC'    => 'DESC'
);

$textAlign = array(
    'left'      => 'left',
    'center'    => 'center',
    'right'     => 'right',
    'justify'   => 'justify'
);

$columns = array(
    '1'     => 1,
    '2'     => 2,
    '3'     => 3,
    '4'     => 4
);

?>