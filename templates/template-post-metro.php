
<!--Post Metro-->
<section class="pa-section pa-section-md pa-post-metro" style="color: <?= $instance['textColor']; ?>; background-color: <?= $instance['backgroundColor']; ?>; background-image: url(<?= $instance['backgroundImage']; ?>);">
    <?php if($instance['backgroundOverlay']): ?>
        <div class="pa-overlay" style="background: <?= $instance['backgroundOverlay']; ?>"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row <?php if($instance['callToActionButtonText']): ?>row-spacer-lg<?php endif; ?> row-col-spacer">
                    <div class="col-sm-4 text-center">
                        <h1 style="font-size: 64px; color: <?= $instance['captionColor']; ?>"><?= $instance['title']; ?></h1><br/>
                        <summary><?= $instance['footnote']; ?></summary>
                    </div>
                    <div class="col-sm-8">
                        <?php
                            foreach($posts as $post): setup_postdata($post);
                            $image = getImage($post);
                        ?>
                        <?php if(!($currentPointer%$numberOfColumns)): ?>
                        <div class="row <?php if($currentRow != $numberOfRows): ?>row-spacer-lg <?php endif; ?>row-col-spacer">
                        <?php endif; ?>
                        <?php if($instance['imagePosition'] == 'top'): ?>
                            <div class="<?= $columnClass; ?> text-center">
                                <img src="<?= $image; ?>" height="<?= $instance['height']; ?>" class="<?php if($instance['imageUniform'] == 'yes'): ?>unim-<?= $instance['imageShape']; ?><?php else: ?>img-responsive center-block<?php endif; ?>"/>
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
                                        <img src="<?= $image; ?>" height="<?= $instance['height']; ?>" class="<?php if($instance['imageUniform'] == 'yes'): ?>unim-<?= $instance['imageShape']; ?><?php else: ?>img-responsive center-block<?php endif; ?>"/>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="hidden-xs" style="margin-top: 35px;"></div>
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
                    </div>
                </div>
                
                <?php if($instance['callToActionButtonText']): ?>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <?php $link = get_page_link($instance['callToActionButtonPage']); ?>
                        <a href="<?= $link; ?>" class="btn btn-primary pa-anchor-btn <?= $instance['callToActionButtonClass']; ?>"><?= $instance['callToActionButtonText']; ?></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
