
<!--Contact Form-->
<section class="pa-section pa-section-md" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="pa-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <?php require('template-section-header.php'); ?>
                <form class="form" method="POST" action="/contact-us">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <input class="form-control pa-control" type="text" placeholder="Your Name" />
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <input class="form-control pa-control" type="text" placeholder="Mobile Phone" />
                                <i class="fa fa-phone form-control-feedback"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <input class="form-control pa-control" type="text" placeholder="E-mail Address" />
                                <i class="fa fa-envelope form-control-feedback"></i>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group has-feedback">
                                <input class="form-control pa-control" type="text" placeholder="Subject" />
                                <i class="fa fa-pencil form-control-feedback"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row row-spacer">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <textarea class="form-control pa-control" rows="5" placeholder="Type in message..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="form-group">
                                <button type="submit" class="btn <?= $instance['submitButtonClass']; ?>"><?= $instance['submitButtonText']; ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
