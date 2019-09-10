
<!--Social Media-->
<section class="widgetify-social-media hidden-xs text-center">
    <div class="fullscreen">
        <div class="fullscreen-child">
            <div class="row">
                <div class="col-sm-12">
                    <?php if($instance['facebookLink']): ?>
                        <a target="_blank" href="<?= $instance['facebookLink']; ?>">
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
                        <a target="_blank" href="<?= $instance['twitterLink']; ?>">
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
                        <a target="_blank" href="<?= $instance['instagramLink']; ?>">
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
                        <a target="_blank" href="<?= $instance['youtubeLink']; ?>">
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
                        <a target="_blank" href="<?= $instance['linkedinLink']; ?>">
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
