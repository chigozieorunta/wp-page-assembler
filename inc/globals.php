<?php

global $wpCategories, $iconPositions, $wpSortTypes, $wpSortOrders, $textAlign, $columns;

$wpCategories = [];
$categories = get_categories();
foreach($categories as $categoryItem) {
    $categoryName = $categoryItem->cat_name;
    $wpCategories[$categoryName] = $categoryName;
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