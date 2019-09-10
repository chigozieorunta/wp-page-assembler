
<!--Content Box-->
<section class="widgetify-section widgetify-section-lg widgetify-content-box" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="widgetify-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row row-col-spacer">
                    <div class="col-sm-6 <?php if($instance['alternate'] == 'yes'): ?>col-sm-push-6<?php endif; ?>">     
                        <img src="<?= $image; ?>" height="<?= $instance['height']; ?>" class="<?php if($instance['imageUniform'] == 'yes'): ?>unim-<?= $instance['imageShape']; ?><?php else: ?>img-responsive center-block<?php endif; ?>"/>
                    </div>
                    <div class="col-sm-6 <?php if($instance['alternate'] == 'yes'): ?>col-sm-pull-6<?php endif; ?>" style="text-align: <?= $instance['textAlign']; ?>">
                        <div class="hidden-xs" style="margin-top: 35px;"></div>
                        <h2 class="widgetify-caption" style="color: <?= $instance['captionColor']; ?>"><?= $post->post_title; ?></h2>
                        <div style="margin-bottom: 20px;">
                            <?= $post->post_content; ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php if($instance['callToActionButtonText']): ?>
                                    <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                                    <a href="<?php echo $link; ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
