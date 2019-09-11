
<!--Google Map-->
<section class="widgetify-section widgetify-google-map wow <?= $instance['widgetAnimation']; ?> <?= $instance['widgetClass']; ?>" style="background-color: #131313; <?php if($instance['widgetPadding']): ?>padding: <?= $instance['widgetPadding']; ?>px 0;<?php endif; ?>; height: <?= $instance['height']; ?>px" id="<?= $instance['widgetId']; ?>">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="<?= $instance['height']; ?>" id="gmap_canvas" src="https://maps.google.com/maps?q=<?= $instance['location']; ?>&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <script src="http://www.embedgooglemap.net/mapscript.js"></script>
        </div>
        <style>
            .mapouter {
                overflow: hidden;
                height: <?= $instance['height']; ?>px;
                width: 100%;
            }
            .gmap_canvas {
                background: none !important;
                height: <?= $instance['height']; ?>px; 
                width: 100%;
            }
        </style>
    </div>
</section>
