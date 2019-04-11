<section class="pa-section" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1 class="pa-caption" style="color: <?= $instance['captionColor']; ?>">
                    <?= $instance['title']; ?>
                </h1>
                <summary><?= $instance['footnote']; ?></summary>
            </div>
        </div>
        <!--Top Position-->
        <?php if($instance['iconPosition'] == 'top'): ?>
        <?php 
            foreach($posts as $post): setup_postdata($post);
            $icon = get_post_meta($post->ID, 'icon', true);
        ?>
        <div class="row">
            <div class="col-sm-4 text-center">
                <?php if($icon): ?><i class="<?php echo $icon; ?>"></i><?php endif; ?>
                <h1 class="pa-caption" style="color: <?= $instance['captionColor']; ?>">
                    <?php the_title(); ?>
                </h1>
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>