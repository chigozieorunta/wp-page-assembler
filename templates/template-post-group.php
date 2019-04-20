
<!--Post Group-->
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
                    $image = getImage($post);
                ?>
                <?php if(!($currentPointer%$numberOfColumns)): ?>
                <div class="row <?php if(($currentRow != $numberOfRows) || $instance['callToActionButtonText']): ?>row-spacer <?php endif; ?>row-col-spacer">
                <?php endif; ?>
                <?php if($instance['imagePosition'] == 'top'): ?>
                    <div class="<?= $columnClass; ?> text-center">
                        <img src="<?= $image; ?>" class="unim"/>
                        <h4 class="pa-caption" style="margin-top: 20px; color: <?= $instance['captionColor']; ?>"><?php the_title(); ?></h4>
                        <div style="margin-top: -7.5px;">
                            <?php if($instance['lengthOfPostText']): ?>
                                <?= getShortenedText(get_the_excerpt(), $instance['lengthOfPostText']) ?>
                            <?php else: ?>
                                <?= get_the_excerpt(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($instance['imagePosition'] == 'side'): ?>
                    <div class="<?= $columnClass; ?>">
                        <div class="row row-col-spacer">
                            <div class="col-sm-6">
                                <img src="<?= $image; ?>" class="unim-square"/>
                            </div>
                            <div class="col-sm-6">
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
                        <a href="<?= $link; ?>" class="btn btn-primary <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
