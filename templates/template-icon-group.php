
<!--Icon Group-->
<section class="pa-section pa-section-md" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="pa-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <?php require('template-section-header.php'); ?>
                <?php
                    foreach($posts as $post): setup_postdata($post);
                    $icon = get_post_meta($post->ID, 'icon', true);
                ?>
                <?php if(!($currentPointer%$numberOfColumns)): ?>
                <div class="row <?php if(($currentRow != $numberOfRows) || $instance['callToActionButtonText']): ?>row-spacer <?php endif; ?>row-col-spacer">
                <?php endif; ?>
                <?php if($instance['iconPosition'] == 'top'): ?>
                    <div class="<?= $columnClass; ?> text-center">
                        <?php if($icon): ?>
                            <i class="<?php echo $icon; ?>" style="margin-bottom: 15px;"></i>
                        <?php endif; ?>
                        <h4 class="pa-caption" style="color: <?= $instance['captionColor']; ?>"><?php the_title(); ?></h4>
                        <div style="margin-top: -7.5px;">
                            <?php if($instance['lengthOfPostText']): ?>
                                <?= getShortenedText(get_the_excerpt(), $instance['lengthOfPostText']) ?>
                            <?php else: ?>
                                <?= get_the_excerpt(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($instance['iconPosition'] == 'side'): ?>
                    <div class="<?= $columnClass; ?>">
                        <div class="row">
                            <div class="col-xs-2 text-right">
                                <?php if($icon): ?><i class="<?php echo $icon; ?>"></i><?php endif; ?>
                            </div>
                            <div class="col-xs-10">
                                <h4 class="pa-caption" style="color: <?= $instance['captionColor']; ?>"><?php the_title(); ?></h4>
                                <?php if($instance['lengthOfPostText']): ?>
                                    <?= getShortenedText(get_the_excerpt(), $instance['lengthOfPostText']) ?>
                                <?php else: ?>
                                    <?= get_the_excerpt(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $currentPointer++; ?>
                <?php if(!($currentPointer%$numberOfColumns) || ($currentPointer == count($posts))): ?>
                <?php $currentRow++; ?>
                </div>
                <?php endif; ?>
                <?php endforeach; wp_reset_postdata(); ?>

                <?php if($instance['callToActionButtonText']): ?>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                        <a href="<?php echo $link; ?>" class="btn btn-primary <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
