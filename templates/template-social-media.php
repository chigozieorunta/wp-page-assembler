
<!--Social Media-->
<section class="widgetify-section widgetify-social-media hidden-xs text-center <?= $instance['widgetClass']; ?>" id="<?= $instance['widgetId']; ?>">
    <div class="fullscreen">
        <div class="fullscreen-child">
            <div class="row">
                <div class="col-sm-12">
                    <?php if($instance['facebookLink']): ?>
                        <a target="_blank" href="<?= $instance['facebookLink']; ?>" class="wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="0ms">
                            <div class="widgetify-facebook">
                                <div class="fullscreen">
                                    <div class="fullscreen-child">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if($instance['twitterLink']): ?>
                        <a target="_blank" href="<?= $instance['twitterLink']; ?>" class="wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="100ms">
                            <div class="widgetify-twitter">
                                <div class="fullscreen">
                                    <div class="fullscreen-child">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if($instance['instagramLink']): ?>
                        <a target="_blank" href="<?= $instance['instagramLink']; ?>" class="wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="200ms">
                            <div class="widgetify-instagram">
                                <div class="fullscreen">
                                    <div class="fullscreen-child">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if($instance['youtubeLink']): ?>
                        <a target="_blank" href="<?= $instance['youtubeLink']; ?>" class="wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="300ms">
                            <div class="widgetify-youtube">
                                <div class="fullscreen">
                                    <div class="fullscreen-child">
                                        <i class="fa fa-youtube"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                    <?php if($instance['linkedinLink']): ?>
                        <a target="_blank" href="<?= $instance['linkedinLink']; ?>" class="wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="400ms">
                            <div class="widgetify-linkedin">
                                <div class="fullscreen">
                                    <div class="fullscreen-child">
                                        <i class="fa fa-linkedin"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
