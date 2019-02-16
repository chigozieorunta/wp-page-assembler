<!--Page Assembler | Icon Set-->
<section class="theme-section-lg" style="<?php if($backgroundColor): ?>background-color:<?php echo $backgroundColor; ?>;<?php endif; ?><?php if($textColor): ?>color:<?php echo $textColor; ?>;<?php endif; ?><?php if($backgroundImage): ?>background-image:url(<?php echo $backgroundImage; ?>);background-size: cover;<?php endif; ?>">
    <?php if($backgroundImageVeilColor): ?>
    <div class="theme-bg-cover" style="background-color:<?php echo $backgroundImageVeilColor; ?>;"></div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="row row-spacer text-center">
                    <div class="col-sm-12>
						<?php if($title): ?>
                            <h2 <?php if($captionColor): ?> style="color:<?php echo $captionColor; ?>;"<?php endif; ?>>
    						    <?php echo $title; ?>
    					    </h2>
						<?php endif; ?>
						<?php if($footnote): ?>
                            <p>
    							<?php echo $footnote; ?>
    						</p>
						<?php endif; ?>
                    </div>
                </div>
				<?php
				    //Get Posts
					$posts = get_posts('numberposts=-1&orderby='.$sorttype.'&order='.$sortorder.'&category_name='.sanitize_title($category)); 
					global $post; 
					$total = count($posts);
					$count = 0; $normalize = 0; $counter = 0;
					
					//Iterate Posts...
					foreach($posts as $post): setup_postdata($post);
					    $counter++;
						$icon = get_post_meta($post->ID, 'icon', true);
						$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); 
						$image = $image[0]; $count += 0.3;
						$class = fn_get_class($columns);
						
						//Normalize Row Header
						if(!$normalize): echo '<div class="row row-spacer row-col-spacer">'; endif;
						
						//Get Template Part...
						if($position == 'top') :
					?>
				       <div class="<?php echo $class; ?> wow fadeInUp text-center" data-wow-duration="1s" data-wow-delay="<?php echo $count; ?>s">
                            <i class="<?php echo $icon; ?> ti-3x"></i>
                            <?php if(get_the_title()): ?>
                            <h4<?php if($captionColor): ?> style="color:<?php echo $captionColor; ?>;"<?php endif; ?>>
                        	    <?php the_title(); ?>
                            </h4>
                        	<?php endif; ?>
                        	<?php if(get_the_content()): ?>
                            <p>
                        		<?php the_content(); ?>
                        	</p>
                        	<?php endif; ?>
                        </div>
					<?php else: ?>
				        <div class="<?php echo $class; ?> wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo $count; ?>s">
                            <div class="row">
                                <div class="col-xs-2 text-right">
                                    <i class="<?php echo $icon; ?> ti-5x"></i>
                                </div>
                                <div class="col-xs-10">
                                    <?php if(get_the_title()): ?>
                                    <h4 class="no-margin-top"<?php if($captionColor): ?> style="color:<?php echo $captionColor; ?>;"<?php endif; ?>>
                        			    <?php the_title(); ?>
                        		    </h4>
                        	        <?php endif; ?>
                        			<?php if(get_the_content()): ?>
                                        <p><?php the_content(); ?></p>
                        			<?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif;
						
    					//Normalize Rows Footer
    				    $normalize++; 
    				    if(($normalize == $columns) || ($counter == $total)) { echo '</div>'; $normalize = 0; }  
				    endforeach; wp_reset_postdata(); 
				?>
        </div>
    </div>
</section>