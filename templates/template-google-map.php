
<!--Google Map-->
<section class="theme-inverse widgetify-google-map" style="height: <?php echo $instance['height']; ?>px">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="<?php echo $instance['height']; ?>" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $instance['location']; ?>&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <script src="http://www.embedgooglemap.net/mapscript.js"></script>
        </div>
        <style>.mapouter{overflow:hidden;height:<?php echo $instance['height']; ?>px;width:100%;}.gmap_canvas {background:none!important;height:<?php echo $instance['height']; ?>px;width:100%;}</style>
    </div>
</section>
