
<!--Icon Group-->
<section class="pa-section pa-section-md" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <?php
                /**
                * Template Section Header;
                */
                ?>

                <?php require_once('template-section-header.php'); ?>

                <?php
                /**
                * Top Icon Template;
                */
                ?>

                <?php if($instance['iconPosition'] == 'top'): ?>
                <?php
                    foreach($posts as $post): setup_postdata($post);
                    $icon = get_post_meta($post->ID, 'icon', true);
                ?>
                <?php if(!($currentPointer%$numberOfColumns)): ?>
                <div class="row <?php if($currentRow != $numberOfRows): ?>row-spacer <?php endif; ?>row-col-spacer">
                <?php endif; ?>
                    <div class="<?= $columnClass; ?> text-center">
                        <?php if($icon): ?><i class="<?php echo $icon; ?>"></i><?php endif; ?>
                        <h4 class="pa-caption" style="color: <?= $instance['captionColor']; ?>"><?php the_title(); ?></h4>
                        <?php the_content(); ?>
                    </div>
                <?php $currentPointer++; ?>
                <?php if(!($currentPointer%$numberOfColumns) || ($currentPointer == count($posts))): ?>
                <?php $currentRow++; ?>
                </div>
                <?php endif; ?>
                <?php endforeach; wp_reset_postdata(); ?>
                <?php endif; ?>

                <?php
                /**
                * Side Icon Template;
                */
                ?>
                
                <?php if($instance['iconPosition'] == 'side'): ?>
                <?php
                    foreach($posts as $post): setup_postdata($post);
                    $icon = get_post_meta($post->ID, 'icon', true);
                ?>
                <?php if(!($currentPointer%$numberOfColumns)): ?>
                <div class="row <?php if($currentRow != $numberOfRows): ?>row-spacer <?php endif; ?>row-col-spacer">
                <?php endif; ?>
                    <div class="<?= $columnClass; ?>">
                        <div class="row">
                            <div class="col-xs-2 text-right">
                                <?php if($icon): ?><i class="<?php echo $icon; ?>"></i><?php endif; ?>
                            </div>
                            <div class="col-xs-10">
                                <h4 class="pa-caption" style="color: <?= $instance['captionColor']; ?>"><?php the_title(); ?></h4>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                <?php $currentPointer++; ?>
                <?php if(!($currentPointer%$numberOfColumns) || ($currentPointer == count($posts))): ?>
                <?php $currentRow++; ?>
                </div>
                <?php endif; ?>
                <?php endforeach; wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
