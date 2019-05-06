
<!--Slider-->
<section class="pa-section pa-fullscreen" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <div class="pa-fullscreen-child" style="background-color: rgba(0,0,0,0.5);">
        <div class="container-fluid">
            <div class="row" style="text-align: <?= $instance['textAlign']; ?>">
                <div class="col-sm-10 col-sm-offset-1">
                    <?php if($instance['title']): ?>
                        <h1 class="pa-caption" style="color: <?= $instance['captionColor']; ?>">
                            <?= $instance['title']; ?>
                        </h1>
                    <?php endif; ?>
                    <?php if($instance['footnote']): ?>
                        <summary><?= $instance['footnote']; ?></summary><br/>
                    <?php endif; ?>
                    
                    <?php if($instance['callToActionButtonText']): ?>
                    <div class="row text-center">
                        <div class="col-sm-12">
                            <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                            <a href="<?= $link; ?>" class="btn btn-primary <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
