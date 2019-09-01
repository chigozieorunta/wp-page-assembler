
<!--Widgetify Banner-->
<section class="widgetify-section widgetify-section-lg widgetify-banner" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="widgetify-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <?php if(trim($instance['title'])): ?>
                    <div class="widgetify-caption" style="color: <?= $instance['captionColor']; ?>">
                        <?= $instance['title']; ?>
                    </div>
                <?php endif; ?>
                <?php if(trim($instance['footnote'])): ?>
                    <div class="widgetify-summary"><?= $instance['footnote']; ?></div>
                <?php endif; ?>
                <?php if($instance['callToActionButtonText']): ?>
                <div class="row" style="margin-top: 1em;">
                    <div class="col-sm-12">
                        <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                        <a href="<?php echo $link; ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
