<!-- Header (Caption & Summary) -->
<?php if(trim($instance['title']) || trim($instance['footnote'])): ?>
<div class="row row-spacer text-center">
    <div class="col-sm-12">
        <!--Caption-->
        <?php if(trim($instance['title'])): ?>
            <div class="widgetify-caption" style="color: <?= $instance['captionColor']; ?>"><?= $instance['title']; ?></div>
        <?php endif; ?>
        <!--Summary-->
        <?php if(trim($instance['footnote'])): ?>
            <div class="widgetify-summary" style="color: <?= $instance['summaryColor']; ?>"><?= $instance['footnote']; ?></div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>