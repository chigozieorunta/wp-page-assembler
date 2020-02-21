
<!--Banner-->
<section class="widgetify-section widgetify-section-lg widgetify-banner <?= $instance['widgetClass']; ?>" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>); <?php if($instance['widgetPadding']): ?>padding: <?= $instance['widgetPadding']; ?>px 0;<?php endif; ?>" id="<?= $instance['widgetId']; ?>">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="widgetify-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-8 col-sm-offset-2">
                <?= widgetify_before_banner_caption(); ?>
                <?php if(trim($instance['title'])): ?>
                    <div class="widgetify-caption wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="0ms" style="color: <?= $instance['captionColor']; ?>">
                        <?= $instance['title']; ?>
                    </div>
                <?php endif; ?>
                <?= widgetify_after_banner_caption(); ?>
                <?= widgetify_before_banner_summary(); ?>
                <?php if(trim($instance['footnote'])): ?>
                    <div class="widgetify-text wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="100ms"><?= $instance['footnote']; ?></div>
                <?php endif; ?>
                <?= widgetify_after_banner_summary(); ?>
                <?= widgetify_before_banner_button(); ?>
                <?php if($instance['callToActionButtonText']): ?>
                <div class="row wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="200ms" style="margin-top: 1em;">
                    <div class="col-sm-12">
                        <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                        <a href="<?php echo $link; ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                    </div>
                </div>
                <?php endif; ?>
                <?= widgetify_after_banner_button(); ?>
            </div>
        </div>
    </div>
</section>
