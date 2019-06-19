
<!--Slider-->
<section class="pa-section pa-fullscreen pa-slider" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="pa-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="pa-fullscreen-child">
        <div class="container-fluid">
            <div class="row" style="text-align: <?= $instance['textAlign']; ?>">
                <div class="col-sm-5 col-sm-offset-1">
                    <?php if(trim($instance['title'])): ?>
                        <h1 class="pa-caption" style="color: <?= $instance['captionColor']; ?>">
                            <?= $instance['title']; ?>
                        </h1>
                    <?php endif; ?>
                    <?php if(trim($instance['footnote'])): ?>
                        <summary class="pa-summary"><?= $instance['footnote']; ?></summary><br/>
                    <?php endif; ?>
                    
                    <?php if($instance['callToActionButtonText']): ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                            <a href="<?= $link; ?>" class="btn btn-primary pa-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
