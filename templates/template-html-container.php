
<!--HTML Container-->
<section class="widgetify-section widgetify-html-container wow <?= $instance['widgetAnimation']; ?> <?= $instance['widgetClass']; ?>" style="<?php if($instance['widgetPadding']): ?>padding: <?= $instance['widgetPadding']; ?>px 0;<?php endif; ?>" id="<?= $instance['widgetId']; ?>">
<?= $instance['html']; ?>
</section>
