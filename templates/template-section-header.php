
<?php if(trim($instance['title']) || trim($instance['footnote'])): ?>
<div class="row row-spacer text-center">
    <div class="col-sm-12">
        <h2 class="pa-caption" style="color: <?= $instance['captionColor']; ?>"><?= $instance['title']; ?></h2>
        <summary class="pa-summary"><?= $instance['footnote']; ?></summary>
    </div>
</div>
<?php endif; ?>