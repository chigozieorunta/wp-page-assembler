
<!--Slider-->
<section class="pa-section pa-fullscreen" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <div class="pa-fullscreen-child" style="background-color: rgba(0,0,0,0.5);">
        <div class="container-fluid">
            <div class="row" style="text-align: <?= $instance['textAlign']; ?>">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1 class="pa-caption" style="color: <?= $instance['captionColor']; ?>">
                        <?= $instance['title']; ?>
                    </h1>
                    <summary><?= $instance['footnote']; ?></summary>
                </div>
            </div>
        </div>
    </div>
</section>
