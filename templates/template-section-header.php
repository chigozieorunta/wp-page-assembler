<!-- Header (Caption & Summary) -->
<?php if(trim($instance['title']) || trim($instance['footnote'])): ?>
<div class="row row-spacer text-center">
    <div class="col-sm-10 col-sm-offset-1">
        <!--Caption-->
        <?php if(trim($instance['title'])): ?>
            <div class="widgetify-caption wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="0" style="color: <?= $instance['captionColor']; ?>"><?= $instance['title']; ?></div>
        <?php endif; ?>
        <!--Summary-->
        <?php if(trim($instance['footnote'])): ?>
            <div class="widgetify-summary wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="300ms" style="color: <?= $instance['summaryColor']; ?>"><?= $instance['footnote']; ?></div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>