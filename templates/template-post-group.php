
<!--Post Group-->
<section class="widgetify-section widgetify-section-md widgetify-post-group <?= $instance['widgetClass']; ?>" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>); padding: <?= $instance['widgetPadding']; ?>px 0;" id="<?= $instance['widgetId']; ?>">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="widgetify-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <?php require('template-section-header.php'); ?>
                <?php
                    foreach($posts as $post): setup_postdata($post);
                    $delayDuration = $currentPointer * 100;
                    $image = getImage($post);
                ?>
                <?php if(!($currentPointer%$numberOfColumns)): ?>
                <div class="row <?php if(($currentRow != $numberOfRows) || $instance['callToActionButtonText']): ?>row-spacer-lg <?php endif; ?>row-col-spacer">
                <?php endif; ?>
                <?php if($instance['imagePosition'] == 'top'): ?>
                    <div class="<?= $columnClass; ?> text-center wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="<?= $delayDuration; ?>ms">
                        <img src="<?= $image; ?>" height="<?= $instance['height']; ?>" class="<?php if($instance['imageUniform'] == 'yes'): ?>unim-<?= $instance['imageShape']; ?><?php else: ?>img-responsive center-block<?php endif; ?>"/>
                        <div class="widgetify-sub-caption" style="margin-top: 20px; color: <?= $instance['subCaptionColor']; ?>"><?php the_title(); ?></div>
                        <div class="widgetify-text" style="margin-top: -7.5px;">
                            <?php if($instance['lengthOfPostText']): ?>
                                <?= getShortenedText(get_the_excerpt(), $instance['lengthOfPostText']) ?>
                            <?php else: ?>
                                <?= get_the_excerpt(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($instance['imagePosition'] == 'side'): ?>
                    <div class="<?= $columnClass; ?> wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="<?= $delayDuration; ?>ms">
                        <div class="row row-col-spacer">
                            <div class="col-sm-6">
                                <img src="<?= $image; ?>" height="<?= $instance['height']; ?>" class="<?php if($instance['imageUniform'] == 'yes'): ?>unim-<?= $instance['imageShape']; ?><?php else: ?>img-responsive center-block<?php endif; ?>"/>
                            </div>
                            <div class="col-sm-6">
                                <div class="hidden-xs" style="margin-top: 35px;"></div>
                                <div class="widgetify-sub-caption" style="color: <?= $instance['subCaptionColor']; ?>"><?php the_title(); ?></div>
                                <div class="widgetify-text">
                                    <?php if($instance['lengthOfPostText']): ?>
                                        <?= getShortenedText(get_the_excerpt(), $instance['lengthOfPostText']) ?>
                                    <?php else: ?>
                                        <?= get_the_excerpt(); ?>
                                    <?php endif; ?>
                                </div>
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
                <div class="row wow <?= $instance['widgetAnimation']; ?> text-center">
                    <div class="col-sm-12">
                        <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                        <a href="<?= $link; ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
