
<!--Photo Canvas-->
<section class="widgetify-section widgetify-photo-canvas <?= $instance['widgetClass']; ?>" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>); <?php if($instance['widgetPadding']): ?>padding: <?= $instance['widgetPadding']; ?>px 0;<?php endif; ?>" id="<?= $instance['widgetId']; ?>">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="widgetify-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <?php
                    foreach($posts as $post): setup_postdata($post);
                    $delayDuration = $currentPointer * 100;
                    $image = getImage($post);
                ?>
                <?php if(!($currentPointer%$numberOfColumns)): ?>
                <div class="row <?php if($instance['callToActionButtonText']): ?>row-spacer-lg<?php endif; ?>">
                <?php endif; ?>
                <div class="<?= $columnClass; ?> col-xs-6 wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="<?= $delayDuration; ?>ms" style="padding: 0 !important;">
                    <img src="<?= $image; ?>" height="<?= $instance['height']; ?>" class="<?php if($instance['imageUniform'] == 'yes'): ?>unim-<?= $instance['imageShape']; ?><?php else: ?>img-responsive center-block<?php endif; ?>"/>
                </div>
                <?php $currentPointer++; ?>
                <?php if(!($currentPointer%$numberOfColumns) || ($currentPointer == count($posts))): ?>
                <?php $currentRow++; ?>
                </div>
                <?php endif; ?>
                <?php endforeach; wp_reset_postdata(); ?>

                <?php if($instance['callToActionButtonText']): ?>
                <div class="row row-spacer-lg text-center">
                    <div class="col-sm-12">
                        <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                        <a href="<?= $link; ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
