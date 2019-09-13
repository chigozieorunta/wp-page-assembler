
<!--Slider-->
<section class="widgetify-section widgetify-fullscreen widgetify-slider" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="widgetify-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="widgetify-fullscreen-child">
        <div class="container-fluid">
            <div class="row">
                <?php
                    if($instance['textAlign'] == 'left'):
                ?>
                <div class="col-sm-5 col-sm-offset-1 text-left">
                <?php endif; ?>
                <?php
                    if($instance['textAlign'] == 'center'):
                ?>
                <div class="col-sm-6 col-sm-offset-3 text-center">
                <?php endif; ?>
                <?php
                    if($instance['textAlign'] == 'right'):
                ?>
                <div class="col-sm-5 col-sm-offset-6 text-right">
                <?php endif; ?>
                    <?php if(trim($instance['title'])): ?>
                        <div class="widgetify-hero wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="0" style="color: <?= $instance['captionColor']; ?>"><?= $instance['title']; ?></div>
                    <?php endif; ?>
                    <?php if(trim($instance['footnote'])): ?>
                        <div class="widgetify-text wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="300ms"><?= $instance['footnote']; ?></div><br/>
                    <?php endif; ?>
                    
                    <?php if($instance['callToActionButtonText']): ?>
                    <div class="row wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="600ms">
                        <div class="col-sm-12">
                            <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                            <a href="<?= $link; ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
