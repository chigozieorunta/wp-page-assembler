
<!--Icon Metro-->
<section class="widgetify-section widgetify-section-md widgetify-icon-metro <?= $instance['widgetClass']; ?>" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>); padding: <?= $instance['widgetPadding']; ?>px 0;" id="<?= $instance['widgetId']; ?>">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="widgetify-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row <?php if($instance['callToActionButtonText']): ?>row-spacer-lg<?php endif; ?> row-col-spacer">
                    <div class="col-sm-4 text-center">
                        <div class="widgetify-hero wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="0ms" style="color: <?= $instance['captionColor']; ?>"><?= $instance['title']; ?></h1><br/>
                        <div class="widgetify-text wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="300ms" style="color: <?= $instance['summaryColor']; ?>"><?= $instance['footnote']; ?></div>
                    </div>
                    <div class="col-sm-8">
                        <?php
                            foreach($posts as $post): setup_postdata($post);
                            $icon = get_post_meta($post->ID, 'icon', true);
                            $delayDuration = $currentPointer * 100;
                        ?>
                        <?php if(!($currentPointer%$numberOfColumns)): ?>
                        <div class="row <?php if($currentRow != $numberOfRows): ?>row-spacer-md <?php endif; ?>row-col-spacer">
                        <?php endif; ?>
                        <?php if($instance['iconPosition'] == 'top'): ?>
                            <div class="<?= $columnClass; ?> text-center wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="<?= $delayDuration; ?>ms">
                                <?php if($icon): ?>
                                    <i class="<?= $icon; ?>" style="margin-bottom: 15px; color: <?= $instance['iconColor']; ?>;"></i>
                                <?php endif; ?>
                                <div class="widgetify-sub-caption" style="color: <?= $instance['subCaptionColor']; ?>"><?php the_title(); ?></div>
                                <div class="widgetify-text" style="margin-top: -7.5px;">
                                    <?php if($instance['lengthOfPostText']): ?>
                                        <?= getShortenedText(get_the_excerpt(), $instance['lengthOfPostText']) ?>
                                    <?php else: ?>
                                        <?= get_the_excerpt(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if($instance['iconPosition'] == 'side'): ?>
                            <div class="<?= $columnClass; ?> wow <?= $instance['widgetAnimation']; ?>" data-wow-delay="<?= $delayDuration; ?>ms">
                                <div class="row">
                                    <div class="col-xs-2 text-right">
                                        <?php if($icon): ?><i class="<?= $icon; ?>" style="color: <?= $instance['iconColor']; ?>;"></i><?php endif; ?>
                                    </div>
                                    <div class="col-xs-10">
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
                    </div>
                </div>
                <?php if($instance['callToActionButtonText']): ?>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                        <a href="<?php echo $link; ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
