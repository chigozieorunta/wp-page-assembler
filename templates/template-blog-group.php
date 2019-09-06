
<!--Blog Group-->
<section class="widgetify-section widgetify-section-md widgetify-blog-group <?= $instance['widgetClass']; ?>" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>); <?php if($instance['widgetPadding']): ?>padding: <?= $instance['widgetPadding']; ?>px 0;<?php endif; ?>" id="<?= $instance['widgetId']; ?>">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="widgetify-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <?php require('template-section-header.php'); ?>
                <?php
                    foreach($posts as $post): setup_postdata($post);
                    $image = getImage($post);
                ?>
                <?php if($instance['imagePosition'] == 'top'): ?>
                    <?php if(!($currentPointer%$numberOfColumns)): ?>
                    <div class="row <?php if(($currentRow != $numberOfRows) || $instance['callToActionButtonText']): ?>row-spacer-lg <?php endif; ?>row-col-spacer">
                    <?php endif; ?>
                    <div class="<?= $columnClass; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?= $image; ?>" height="<?= $instance['height']; ?>" class="<?php if($instance['imageUniform'] == 'yes'): ?>unim-<?= $instance['imageShape']; ?><?php else: ?>img-responsive center-block<?php endif; ?>"/>
                        </a>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-xs-3">
                                <div style="height: 75px; background-color: <?= $instance['captionColor']; ?>; color: <?= $instance['backgroundColor']; ?>">
                                    <div class="widgetify-fullscreen text-center">
                                        <div class="widgetify-fullscreen-child">
                                            <div class="widgetify-date"><?= getDay(get_the_date()); ?></div><span class="text-uppercase"><?= getMonth(get_the_date()); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-9" style="padding-left: 0 !important;">
                                <div class="widgetify-sub-caption" style="color: <?= $instance['captionColor']; ?>">
                                    <a href="<?= the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $currentPointer++; ?>
                    <?php if(!($currentPointer%$numberOfColumns) || ($currentPointer == count($posts))): ?>
                    <?php $currentRow++; ?>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
                <?php if($instance['imagePosition'] == 'side'): ?>
                    <?php $count++; ?>
                    <div class="row <?php if($instance['callToActionButtonText'] || ($count < $totalPosts)): ?>row-spacer-lg <?php endif; ?>row-col-spacer">
                        <div class="col-sm-4">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?= $image; ?>" height="<?= $instance['height']; ?>" class="<?php if($instance['imageUniform'] == 'yes'): ?>unim-<?= $instance['imageShape']; ?><?php else: ?>img-responsive center-block<?php endif; ?>"/>
                            </a>
                        </div>              
                        <div class="col-sm-8">
                            <div class="widgetify-sub-caption" style="color: <?= $instance['captionColor']; ?>">
                                <a href="<?= the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div style="margin-top: -7.5px; margin-bottom: 10px;"><small><i class="fa fa-calendar" style="margin-right: 10px;"></i><?= get_the_date(); ?></small></div>
                            <?= get_the_excerpt(); ?>
                            <div class="row" style="margin-top: 15px;">
                                <div class="col-sm-12">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary widgetify-anchor-btn <?= $instance['callToActionButtonClass']; ?>">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php endforeach; wp_reset_postdata(); ?>

                <?php if($instance['callToActionButtonText']): ?>
                <div class="row text-center">
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
