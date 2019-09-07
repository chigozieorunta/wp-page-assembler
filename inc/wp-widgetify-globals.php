<?php

global $wpCategories, $wpPages, $iconPositions, $imagePositions, $imageShapes, $wpSortTypes, $wpSortOrders, $textAlign, $columns, $wpAnimation;

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

$wpPosts = [];
$posts = get_posts('post_type=post&numberposts=-1&posts_per_page=-1&orderby=title&order=ASC');
foreach($posts as $post) {
    $key = $post->ID;
    $value = $post->post_title;
    $wpPosts[$value] = $key;
}

$alternates = array(
    'yes'       => 'yes',
    'no'        => 'no'
);

$iconPositions = array(
    'top'       => 'top',
    'side'      => 'side'
);

$imagePositions = array(
    'top'       => 'top',
    'side'      => 'side'
);

$imageShapes = array(
    'default'       => 'default',
    'square'        => 'square',
    'landscape'     => 'landscape',
    'portrait'      => 'portrait',
    'circle'        => 'circle',
    'diamond'       => 'diamond'
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
    '4'     => 4,
    '6'     => 6
);

$wpAnimation = array(
    'none'              =>  'none',
    'fadeIn'            =>  'fadeIn',
    'fadeInDown'        =>  'fadeInDown',
    'fadeInDownBig'     =>  'fadeInDownBig',
    'fadeInLeft'        =>  'fadeInLeft',
    'fadeInLeftBig'     =>  'fadeInLeftBig',
    'fadeInRight'       =>  'fadeInRight',
    'fadeInRightBig'    =>  'fadeInRightBig',
    'fadeInUp'          =>  'fadeInUp',
    'fadeInUpBig'       =>  'fadeInUpBig',
    'fadeOut'           =>  'fadeOut',
    'fadeOutDown'       =>  'fadeOutDown',
    'fadeOutDownBig'    =>  'fadeOutDownBig',
    'fadeOutLeft'       =>  'fadeOutLeft',
    'fadeOutLeftBig'    =>  'fadeOutLeftBig',
    'fadeOutRight'      =>  'fadeOutRight',
    'fadeOutRightBig'   =>  'fadeOutRightBig',
    'fadeOutUp'         =>  'fadeOutUp',
    'fadeOutUpBig'      =>  'fadeOutUpBig',
    'slideInUp'         =>  'slideInUp',
    'slideInDown'       =>  'slideInDown',
    'slideInLeft'       =>  'slideInLeft',
    'slideInright'      =>  'slideInright',
    'slideOutUp'        =>  'slideOutUp',
    'slideOutDown'      =>  'slideOutDown',
    'slideOutLeft'      =>  'slideOutLeft',
    'slideOutRight'     =>  'slideOutRight',
    'zoomIn'            =>  'zoomIn',
    'zoomInDown'        =>  'zoomInDown',
    'zoomInLeft'        =>  'zoomInLeft',
    'zoomInRight'       =>  'zoomInRight',
    'zoomInUp'          =>  'zoomInUp',
    'zoomOut'           =>  'zoomOut',
    'zoomOutDown'       =>  'zoomOutDown',
    'zoomOutLeft'       =>  'zoomOutLeft',
    'zoomOutRight'      =>  'zoomOutRight',
    'zoomOutUp'         =>  'zoomOutUp',
    'rotateIn'          =>  'rotateIn',
    'rotateInDownLeft'  =>  'rotateInDownLeft',
    'rotateInDownRight' =>  'rotateInDownRight',
    'rotateInUpLeft'    =>  'rotateInUpLeft',
    'rotateInUpRight'   =>  'rotateInUpRight',
    'rotateOut'         =>  'rotateOut',
    'rotateOutDownLeft' =>  'rotateOutDownLeft',
    'rotateOutDownRight'=>  'rotateOutDownRight',
    'rotateOutUpLeft'   =>  'rotateOutUpLeft',
    'rotateOutUpRight'  =>  'rotateOutUpRight',
    'bounceIn'          =>  'bounceIn',
    'bounceInDown'      =>  'bounceInDown',
    'bounceInLeft'      =>  'bounceInLeft',
    'bounceInRight'     =>  'bounceInRight',
    'bounceInUp'        =>  'bounceInUp',
    'bounceOut'         =>  'bounceOut',
    'bounceOutDown'     =>  'bounceOutDown',
    'bounceOutLeft'     =>  'bounceOutLeft',
    'bounceOutRight'    =>  'bounceOutRight',
    'bounceOutUp'       =>  'bounceOutUp',
    'flip'              =>  'flip',
    'flipInX'           =>  'flipInX',
    'flipInY'           =>  'flipInY',
    'flipOutX'          =>  'flipOutX',
    'flipOutY'          =>  'flipOutY',     
    'rollIn'            =>  'rollIn',
    'rollOut'           =>  'rollOut',
    'lightSpeedIn'      =>  'lightSpeedIn',
    'lightSpeedOut'     =>  'lightSpeedOut',
    'hinge'             =>  'hinge',
    'jackInTheBox'      =>  'jackInTheBox',
    'bounce'            =>  'bounce',
    'flash'             =>  'flash',
    'pulse'             =>  'pulse',
    'rubberBand'        =>  'rubberBand',
    'shake'             =>  'shake',
    'swing'             =>  'swing',
    'tada'              =>  'tada',
    'wobble'            =>  'wobble',
    'jello'             =>  'jello',
    'heartBeat'         =>  'heartBeat'
)

?>
