<?php

global $wpCategories, $wpPages, $iconPositions, $imagePositions, $imageShapes, $wpSortTypes, $wpSortOrders, $textAlign, $columns;

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
                slideOutUp
                slideOutDown
                slideOutLeft
                slideOutRight
                zoomIn
                zoomInDown
                zoomInLeft
                zoomInRight
                zoomInUp
                zoomOut
                zoomOutDown
                zoomOutLeft
                zoomOutRight
                zoomOutUp
                rotateIn
                rotateInDownLeft
                rotateInDownRight
                rotateInUpLeft
                rotateInUpRight
                rotateOut
                rotateOutDownLeft
                rotateOutDownRight
                rotateOutUpLeft
                rotateOutUpRight
                bounceIn
                bounceInDown
                bounceInLeft
                bounceInRight
                bounceInUp
                bounceOut
                bounceOutDown
                bounceOutLeft
                bounceOutRight
                bounceOutUp
                flip
                flipInX
                flipInY
                flipOutX
                flipOutY
                rollIn
                rollOut
                lightSpeedIn
                lightSpeedOut
                hinge
                jackInTheBox
                bounce
                flash
                pulse
                rubberBand
                shake
                swing
                tada
                wobble
                jello
                heartBeat
)

?>
