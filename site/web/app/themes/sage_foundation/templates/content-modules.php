	<?php


// check if the flexible content field has rows of data
if( have_rows('module1') ):

     // loop through the rows of data
    while ( have_rows('module1') ) : the_row();?>

        <?php if( get_row_layout() == 'module1-1' ):?>
		<!-- Flexible Layout #1 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-1 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">
		<div class="">
			<div class="row module align-middle <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
	        	<div class="medium-6 small-12 columns medium-push-6  <?php if ( get_sub_field('right_animation') ):?>animated" data-animation="<?php the_sub_field('right_animation');?><?php else: endif; ?>" style="">
	        		<? if (get_sub_field('image_lightbox') == 'lightbox'):?> <a href="<?php the_sub_field('image_lightbox_url');?>" class="zoombox"><?php else: endif; ?><?php if(get_sub_field('section_icon')): ?><img class="scale-with-grid" style="position:relative;" src="<?php	the_sub_field('section_icon'); ?>" alt="" /><? else: endif; ?><? if (get_sub_field('image_lightbox') == 'lightbox'):?></a><? else: endif; ?><? if (get_sub_field('image_lightbox') == 'videolightbox'):?></a><? else: endif; ?>
	        	</div>
	        	<div class="medium-6 small-12 medium-pull-6 columns  <?php if ( get_sub_field('left_animation') ):?>animated" data-animation="<?php the_sub_field('left_animation');?><?php else: endif; ?>">
	        		<?php	echo apply_filters('the_content', get_sub_field('section_copy')); ?>
	        	</div>
			</div>
		</div>
		</div>
        <?php elseif( get_row_layout() == 'module1-2' ): ?>
		<!-- Flexible Layout #2 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-2 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">
		<div class="">
			<div class="row module align-middle <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
	        	<div class="medium-6 small-12 columns  <?php if ( get_sub_field('left_animation') ):?>animated" data-animation="<?php the_sub_field('left_animation');?><?php else: endif; ?>" style="">
	        		<? if (get_sub_field('image_lightbox') == 'lightbox'):?> <a href="<?php the_sub_field('image_lightbox_url');?>" class="zoombox"><? else: endif; ?><?php if(get_sub_field('section_icon')): ?><img class="scale-with-grid" style="position:relative;" src="<?php	the_sub_field('section_icon'); ?>" alt="" /><? else: endif; ?><? if (get_sub_field('image_lightbox') == 'lightbox'):?></a><? else: endif; ?>
	        	</div>
				<div class="medium-6 small-12 columns <?php if ( get_sub_field('right_animation') ):?>animated" data-animation="<?php the_sub_field('right_animation');?><?php else: endif; ?>">
	        		<?php echo apply_filters('the_content', get_sub_field('section_copy')); ?>
	        	</div>

			</div>
		</div>
		</div><!-- end of module1-2 -->
        <?php elseif( get_row_layout() == 'module1-3' ): ?>
		<!-- Flexible Layout #3 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-3 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">
		<div class="module <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
			<div class="row">
	        	<div class="large-12 columns">
	        		<?php	echo apply_filters('the_content', get_sub_field('section_copy')); ?>
	        	</div>
			</div>
			<div class="row">
	        	<div class="large-12 columns" style="text-align:center;">
	        		<? if (get_sub_field('image_lightbox') == 'lightbox'):?> <a href="<?php the_sub_field('image_lightbox_url');?>" class="zoombox"><?php else: endif; ?><?php if(get_sub_field('section_icon')): ?><img class="scale-with-grid" style="position:relative; margin:0 auto;" src="<?php	the_sub_field('section_icon'); ?>" alt="" /><? else: endif; ?><? if (get_sub_field('image_lightbox') == 'lightbox'):?></a><? else: endif; ?>
	        	</div>
			</div>
		</div>
		</div><!-- end of module1-3 -->
        <?php elseif( get_row_layout() == 'module1-4' ): ?>
		<!-- Flexible Layout #4 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-4 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">

		<div class="module <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
			<div class="row medium-unstack">
				<div class="content-header small-12 columns"><div style="text-align:center;"><?php	the_sub_field('section_header'); ?></div></div>
			</div>
			<div class="row medium-unstack">
	        	<div class="columns first">
	        		<a href="<? if (get_sub_field('include_a_video_lightbox') == 'lightbox'): the_sub_field('lightbox_url');?>" rel="<? the_sub_field('include_a_video_lightbox'); else: endif; ?>" style="text-align:center; display:block"><?php $srcvalue = get_sub_field('section_icon'); if($srcvalue){ ?><img class="scale-with-grid icons-homepage" style="position:relative; margin:0 auto;" src="<?php echo $srcvalue; ?>" alt="" /><?php }else{} ?></a>
	        		<?php	echo apply_filters('the_content', get_sub_field('section_copy')); ?>
	        	</div>
	        	<div class="columns">
	        		<a href="<? if (get_sub_field('include_a_video_lightbox') == 'lightbox'): the_sub_field('lightbox_url');?>" rel="<? the_sub_field('include_a_video_lightbox'); else: endif; ?>" style="text-align:center; display:block"><?php $srcvalue1 = get_sub_field('section_icon_column_2'); if($srcvalue1){ ?><img class="scale-with-grid icons-homepage" style="position:relative; margin:0 auto;" src="<?php echo $srcvalue1; ?>" alt="" /><?php }else{} ?></a>
	        		<?php	echo apply_filters('the_content', get_sub_field('section_copy_column_2')); ?>
	        	</div>
	        	<div class="columns last">
	        		<a href="<? if (get_sub_field('include_a_video_lightbox') == 'lightbox'): the_sub_field('lightbox_url');?>" rel="<? the_sub_field('include_a_video_lightbox'); else: endif; ?>" style="text-align:center; display:block"><?php $srcvalue2 = get_sub_field('section_icon_column_3'); if($srcvalue2){ ?><img class="scale-with-grid icons-homepage" style="position:relative; margin:0 auto;" src="<?php echo $srcvalue2; ?>" alt="" /><?php }else{} ?></a>
	        		<?php	echo apply_filters('the_content', get_sub_field('section_copy_column_3')); ?>
	        	</div>
			</div>
		</div>
		</div><!-- end of module1-4 -->
        <?php elseif( get_row_layout() == 'module1-5' ): ?>
		<!-- Flexible Layout #5 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="content-bg layout module1-5 <? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">
			<div class="">
				<div class="row align-left module align-middle <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">

						<div class="hide-for-medium large-12 columns top <?php if (get_sub_field('mobile_icon_placement') == 'top'):?>small-order-1<?php else: endif; ?><?php if (get_sub_field('mobile_icon_placement') == 'bottom'):?>small-order-2<?php else: endif; ?>"><img alt="" class="scale-with-grid" src="<?php the_sub_field('section_icon'); ?>"></div>
						<div class="medium-6 small-12 columns medium-pull-6 <?php if (get_sub_field('mobile_icon_placement') == 'top'):?>small-order-2<?php else: endif; ?><?php if (get_sub_field('mobile_icon_placement') == 'bottom'):?>small-order-1<?php else: endif; ?> <?php if ( get_sub_field('left_animation') ):?>animated" data-animation="<?php the_sub_field('left_animation');?><?php else: endif; ?>">
		        			<?php echo apply_filters('the_content', get_sub_field('section_copy')); ?>
						</div>
				</div>
			</div>
				<div class="show-for-medium <?php if ( get_sub_field('right_animation') ):?>animated" data-animation="<?php the_sub_field('right_animation');?><?php else: endif; ?>" style="position: absolute;background: url(<?php	the_sub_field('section_icon'); ?>) no-repeat center top;top: 0px;right: 0;width: 50%;height: 100%;background-size: <?php the_sub_field('bg_size');?>;"></div>
		</div><!-- end of module1-5 -->

         <?php elseif( get_row_layout() == 'module1-6' ): ?>
		<!-- Flexible Layout #6 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-6 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">		<div class="  <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>">
				<div class="row module align-right layout-min align-middle <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?> " style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">

						<div class="hide-for-medium large-12 columns top <?php if (get_sub_field('mobile_icon_placement') == 'top'):?>small-order-1<?php else: endif; ?><?php if (get_sub_field('mobile_icon_placement') == 'bottom'):?>small-order-2<?php else: endif; ?>"><img alt="" class="scale-with-grid" src="<?php the_sub_field('section_icon'); ?>"></div>

						<div class="medium-6 small-12 columns last  <?php if (get_sub_field('mobile_icon_placement') == 'top'):?>small-order-2<?php else: endif; ?><?php if (get_sub_field('mobile_icon_placement') == 'bottom'):?>small-order-1<?php else: endif; ?>">
		        			<?php echo apply_filters('the_content', get_sub_field('section_copy')); ?>
						</div>


				</div>
			</div>
				<div class="show-for-medium show-for-small" style="position: absolute;background: url(<?php	the_sub_field('section_icon'); ?>) no-repeat left bottom;top: 0px;left: 0px;width: 50%;height: 100%;background-size: <?php the_sub_field('bg_size');?>;"></div>
		</div><!-- end of module1-6 -->
         <?php elseif( get_row_layout() == 'module1-7' ): ?>

		<!-- Flexible Layout #7 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-7 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="<?php if (get_sub_field('bg_position') == 'color'):?>background-color: <?php the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> background: url('<?php the_sub_field('bg_image');?>') center center fixed; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> background: url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?> ">


		<div class="module" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
			<div class="row align-middle">
				<div class="large-12 columns" >
		        	<div class="<?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-mobile<?php else: endif; ?>"><?php echo apply_filters('the_content', get_sub_field('section_copy')); ?> </div><?php if ( get_sub_field('include_a_mobile_bg') ):?><div class="show-onlymobile"><?php echo apply_filters('the_content', get_sub_field('mobile_content')); ?></div><?php else: endif; ?>
					</div>
				</div>
			</div>
		</div> <!-- end of module1-7 -->



       <?php elseif( get_row_layout() == 'module1-8' ): ?>
		<!-- Flexible Layout #8 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-8 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?> ">
			<div class="module" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
				<div class="" id="">
					<!--<a href="#none" class="unslider-arrow prev">&lt;&lt;</a>
					<a href="#none" class="unslider-arrow next">&gt;&gt;</a>-->
				<div class="<?php if (get_sub_field('full_width_rotator_content') == false ): ?>row <?php else: ?>none <?php endif; ?> ">
				    <div class="owl-carousel carousel8 owl-theme" style="">
				     <?php if( have_rows('rotator_repeater') ):
										$counters = 0;
										// loop through the rows of data
										while ( have_rows('rotator_repeater') ) : the_row(); ?>
											<div class="slide">
											<?php if (get_sub_field('slide_image')): ?><img src="<?php the_sub_field('slide_image'); ?>" style=" object-fit:cover;" /><?php else: endif; ?>
												<div class="<?php if (get_sub_field('full_width_rotator_content') == true ): ?>row <?php else: ?>none <?php endif; ?><?php if (get_sub_field('slide_image')): ?>absolute-centered<?php else:?>align-self-middle<?php endif; ?> row <?php if (get_sub_field('slide_text_position') == 'right'):?>align-right<?php else: endif; ?>">
													<div class="slide-text <?php if (get_sub_field('slide_text_position') == 'left'):?>align-self-middle medium-4 columns<?php elseif (get_sub_field('slide_text_position') == 'right'):?>align-self-middle float-right medium-4 columns<?php elseif (get_sub_field('slide_text_position') == 'center'):?>align-self-middle medium-12 columns<?php elseif (get_sub_field('slide_text_position') == 'none'):?>align-self-bottom<?php else: endif;?>">
														<div style="<?php if( get_sub_field('slide_text_padding') ):?>padding:<?php the_sub_field('slide_text_padding');?>; <?php endif; ?>">
															<?php echo apply_filters('the_content', get_sub_field('slide_text')); ?>





															<?php
															// IF YOU WANT TO SHOW POSTS
															if (get_sub_field('add_a_lists_of_posts')){
															/*
															*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
															*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
															*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
															*/
															$post_objects = get_sub_field('taxonomy');
															if( $post_objects ): ?>
															    <ul class="postList">
															    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
															        <?php setup_postdata($post); ?>
															        <li>
															        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array( 'class' => 'full' )); ?></a>
															            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
															            <p><span class="meta"><?php the_date(); ?></span></p>
															            <?php the_excerpt(array( 'class' => 'excerpt')); ?>
															            <p class="text-center"><a href="<?php the_permalink(); ?>" class="button lightTurqoiseButton third">Read More</a></p>
															        </li>
															    <?php endforeach; ?>
															    </ul>
															    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
															<?php endif;


															  }
															  else{}
															// ENDOF IF YOU WANT TO SHOW POSTS
															 ?>







														</div>
													</div>
												</div>

										        <div class="owl-dots">
										        </div>
											</div>
									<? endwhile;
					else :
						// no rows found
					endif;
					?>
				    </div>
				</div>
				</div>
			</div> <!-- End of .module -->
		</div> <!-- end of module1-8 -->

 <?php elseif( get_row_layout() == 'accordion' ): ?>
		<!-- Flexible Layout Accodion -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-columns-selector <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">

			<div class="row columns">
				<div class="<?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?> width:100%;">

<ul class="accordion" data-accordion data-multi-expand="false" data-allow-all-closed="true">
					<?php if( have_rows('accordion') ):
						$acccounter2 = 0;
						while ( have_rows('accordion') ) : the_row(); ?>

  <li class="accordion-item <?php if (get_sub_field('active')){ echo 'is-active'; }?>" data-accordion-item>
    <a href="#" class="accordion-title"><h3><?php	the_sub_field('title'); ?></h3></a>
    <div class="accordion-content" data-tab-content>
     <?php	echo apply_filters('the_content', get_sub_field('content')); ?>
    </div>
  </li>

  <?php $acccounter2++; endwhile; endif; ?>

</ul>

				</div> <!-- end of module padding -->
			</div>
		</div> <!-- end of accordion -->


					    <?php elseif( get_row_layout() == 'breadcrumbs' ): ?>
		<!-- Breadcrumbs -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-columns-selector <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">

				<div class="<?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
				<div class="row">
					<?php if ( function_exists( 'breadcrumb_trail' ) ) breadcrumb_trail(); ?>
				</div>





				<?php// endif; ?>

				</div> <!-- end of module padding -->
			</div>
	<!-- end of Breadcrumbs -->


       <?php elseif( get_row_layout() == 'module1-8-columns' ): ?>
		<!-- Flexible Layout #8 with Columns -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class=" content-bg layout module1-8-columns <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?> ">
		<div class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> <?php if (get_sub_field('full_width_rotator_content') == false ): ?>row <?php else: ?>none <?php endif; ?> ">
			<div class="module" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?> width:100%;">
					<div data-equalizer="image">
					<div data-equalizer="headline">
					<div data-equalizer="text">
				<div id="owl-example" class="owl-carousel owl-theme" data-slides="<?php the_sub_field('columns_per_slide');?>">
				     <?php if( have_rows('rotator_repeater') ):
										$counters = 0;
										// loop through the rows of data
										while ( have_rows('rotator_repeater') ) : the_row(); ?>
											<div class="slide">



															<?php
															// IF YOU WANT TO SHOW POSTS
															if (get_sub_field('add_a_lists_of_posts')){
															/*
															*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
															*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
															*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
															*/
															$post_objects = get_sub_field('taxonomy');
															if( $post_objects ): ?>
															    <ul class="postList">
															    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
															        <?php setup_postdata($post); ?>
															        <li>

															        	<div  ><a href="<?php the_permalink(); ?>"><?php if (get_sub_field('slide_image')): ?><img src="<?php the_sub_field('slide_image'); ?>" style=" object-fit:cover;" /><?php else: ?><?php the_post_thumbnail('full', array( 'class' => 'full' )); endif; ?></a></div>
															            <h3 ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
															            <p style="padding-bottom: 0rem;"><span class="meta"><?php the_date(); ?></span></p>
															            <div style="margin-bottom: 1rem;"><?php if (get_sub_field('slide_text')): ?><?php echo apply_filters('the_content', get_sub_field('slide_text')); ?><?php else: ?><?php the_excerpt(array( 'class' => 'excerpt')); endif; ?></div>
															            <p class="text-center"><a href="<?php the_permalink(); ?>" class="button lightTurqoiseButton third">Read More</a></p>
															        </li>
															    <?php endforeach; ?>
															    </ul>
															    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
															<?php endif;


															  }
															  else{?>

																<div ><?php if (get_sub_field('slide_image')): ?><img src="<?php the_sub_field('slide_image'); ?>" style=" object-fit:cover;" /><?php else: endif; ?></div>
																<?php if( get_sub_field('slide_text') ):?>
																	<div  style="margin-bottom: 1rem;"></div>
																	<div class="slide-text large-12 columns"  style="margin-bottom: 1rem;">
																		<div style="<?php if( get_sub_field('slide_text_padding') ):?>padding:<?php the_sub_field('slide_text_padding');?>; <?php endif; ?>">
																			<?php echo apply_filters('the_content', get_sub_field('slide_text')); ?>

																		</div>
																	</div>
																	<?php endif; ?>
																<?php }
															// ENDOF IF YOU WANT TO SHOW POSTS
															 ?>

											</div>
									<? endwhile; ?>
					<? else :
						// no rows found
					endif;
					?>
						</div>
					</div>
					</div>
					</div>
			</div>
				</div>
			</div> <!-- End of .module -->
		</div> <!-- end of module1-8 -->


      <?php elseif( get_row_layout() == 'column_selector' ): ?>
		<!-- Flexible Layout columns Selector -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-columns-selector <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">

			<div class="row"  style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
				<div class="columns-repeater <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>">
				<?php if (get_sub_field('section_header') ): ?><div class="content-header"><div style="text-align:center;"><?php	the_sub_field('section_header'); ?></div></div><?php endif; ?>
				<?php if (get_sub_field('column_number') ==  'two'): ?>
					<?php if( have_rows('content_module') ):
						$counter2 = 0;
						while ( have_rows('content_module') ) : the_row(); ?>
							<?php  if($counter2 % 2 == 0) { ?>
								<div class="new">
							<?php }  ?>
							<div class="large-6 columns ">
								<?php	echo apply_filters('the_content', get_sub_field('content')); ?>
							</div>
							<?php if($counter2 % 2 == 1) {?>
								</div> <!-- End Row -->
							<?php } $counter2++; ?>
						<? endwhile;
					else :
											// no rows found
					endif;
					?>
				<?php elseif (get_sub_field('column_number') ==  'three'): ?>
					<?php if( have_rows('content_module_three') ):
						$counter3 = 0;
						while ( have_rows('content_module_three') ) : the_row(); ?>
							<?php  if($counter3 % 3 == 0) { ?>
								<div class="">
							<?php }  ?>
							<div class="large-4 columns">
								<?php echo apply_filters('the_content', get_sub_field('content')); ?>
							</div>
							<?php if($counter3 % 3 == 2) {?>
								</div> <!-- End Row -->
							<?php } $counter3++; ?>
						<? endwhile;
					else :
											// no rows found
					endif;
					?>
				<?php elseif (get_sub_field('column_number') ==  'four'): ?>
					<?php if( have_rows('content_module_four') ):
						$counter4 = 0;
						$x=0;
						$xy = 0;
						while ( have_rows('content_module_four') ) : the_row();

							 $x++; endwhile;?> <?

						while ( have_rows('content_module_four') ) : the_row(); ?>
							<?php  if($counter4 % 4 == 0) { ?>
								<div class="">
							<?php }  ?>
							<div class="large-3 columns">
								<?php	echo apply_filters('the_content', get_sub_field('content')); ?>
							</div>
							<? //echo $counter4; echo $x;?>
							<?php if( ($counter4 % 4 == 3) || ( ($counter4 == $x-1) && ($counter4 % 4 != 3) ) ) {?>
								</div> <!-- EndRow -->
							<?php } $counter4++;?>
						<? endwhile; ?>
							<?
					else :
											// no rows found
					endif;
					?>
				<?php elseif (get_sub_field('column_number') ==  'six'): ?>
					<?php if( have_rows('content_module_six') ):
						$counter6 = 0;
						$x=0;
						$xy = 0;
						while ( have_rows('content_module_six') ) : the_row();

							 $x++; endwhile;?> <?

						while ( have_rows('content_module_six') ) : the_row(); ?>
							<?php  if($counter6 % 6 == 0) { ?>
								<div class="">
							<?php }  ?>
							<div class="large-2 columns">
								<?php	echo apply_filters('the_content', get_sub_field('content')); ?>
							</div>
							<? //echo $counter6; echo $x;?>
							<?php if( ($counter6 % 6 == 5) || ( ($counter6 == $x-1) && ($counter6 % 6 != 5) ) ) {?>
								</div> <!-- EndRow -->
							<?php } $counter6++;?>
						<? endwhile; ?>
							<?
					else :
											// no rows found
					endif;
					?>

				<?php elseif (get_sub_field('column_number') ==  'twelve'): ?>
					<?php if( have_rows('content_module_twelve') ):
						$counter12 = 0;
						$x=0;
						$xy = 0;
						while ( have_rows('content_module_twelve') ) : the_row();

							 $x++; endwhile;?> <?

						while ( have_rows('content_module_twelve') ) : the_row(); ?>
							<?php  if($counter12 % 12 == 0) { ?>
								<div class="row">
							<?php }  ?>
							<div class="larg-1 columns">
								<?php	echo apply_filters('the_content', get_sub_field('content')); ?>
							</div>
							<? //echo $counter12; echo $x;?>
							<?php if( ($counter12 % 12 == 11) || ( ($counter12 == $x-1) && ($counter12 % 12 != 11) ) ) {?>
								</div> <!-- EndRow -->
							<?php } $counter12++;?>
						<? endwhile; ?>
							<?
					else :
											// no rows found
					endif;
					?>
				<?php endif; ?>

				</div> <!-- end of module padding -->
			</div>
		</div> <!-- end of columns-selector -->


         <?php elseif( get_row_layout() == 'module1-10' ): ?>
		<!-- Flexible Layout #10 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-10 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">

			<div class="module" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
				<?php if ( get_sub_field('include_a_mobile_bg') ):?>
						<? if (get_sub_field('include_a_video_lightbox') == 'lightbox'){?><div class="show-onlymobile"><a href="<? if (get_sub_field('include_a_video_lightbox') == 'lightbox'): the_sub_field('lightbox_url');?>" class="zoombox" <? else: endif; ?>><?php } ?><img alt="" class="scale-with-grid show-onlymobile" src="<?php the_sub_field('mobile_background_image');?>"  /><? if (get_sub_field('include_a_video_lightbox') == 'lightbox'){?></a></div><?php } ?>

						<? if (get_sub_field('include_a_video_lightbox') == 'lightbox'){?><div class="hide-mobile"><a href="<? if (get_sub_field('include_a_video_lightbox') == 'lightbox'): the_sub_field('lightbox_url');?>" class="zoombox" <? else: endif; ?>><?php } ?><img alt="" class="scale-with-grid hide-mobile" src="<?php the_sub_field('full-img');?>"  /><? if (get_sub_field('include_a_video_lightbox') == 'lightbox'){?></a></div><?php } ?>

				 <?  else: ?>
					 <? if (get_sub_field('include_a_video_lightbox') == 'lightbox'){?><a href="<? if (get_sub_field('include_a_video_lightbox') == 'lightbox'): the_sub_field('lightbox_url');?>" class="zoombox" <? else: endif; ?>><?php } ?><img alt="" class="scale-with-grid" src="<?php the_sub_field('full-img');?>"  /><? if (get_sub_field('include_a_video_lightbox') == 'lightbox'){?></a><?php } ?>
					<?  endif; ?>



			</div> <!-- End .module -->

		</div> <!-- End module1-10-->



			<!-- Flexible Layout #NoContainer -->
         <?php elseif( get_row_layout() == 'no-container' ): ?>
		<!-- Flexible Layout #7 -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module-solilioquy <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="<?php if (get_sub_field('bg_position') == 'color'):?>background-color: <?php the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> background: url('<?php the_sub_field('bg_image');?>') center center fixed; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> background: url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?> ">


			<div class="">
				<div class="" >
					<div class="module" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
		        		<div class=""><div class="rel skrollable skrollable-between" data-top="top:0px;opacity:1;" data-anchor-target="#headerz" style="top: 0px; opacity: 1;"><div class="show-for-medium"><?php	echo apply_filters('the_content', get_sub_field('section_copy')); ?> </div><div class="hide-for-medium"><?php if ( get_sub_field('include_a_mobile_bg') ):	echo apply_filters('the_content', get_sub_field('mobile_content')); else: endif;?></div></div></div>
					</div>
				</div>
			</div>
			</div> <!-- end of module1-no-container -->





        <?php elseif( get_row_layout() == 'module1-4copy' ): ?>
         <!-- Flexible Layout #4 copy -->
		<div class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center fixed; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?>">
		<div class="container">
				<div class="content-header"><div style="text-align:center;"><?php	the_sub_field('section_header'); ?></div></div>

			<?php if( have_rows('module_repeater') ):
						 $counter = 0;
						while ( have_rows('module_repeater') ) : the_row(); ?>

							<?php  if($counter % 3 == 0) { ?>
								<div class="row  <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>">
							<?php }  ?>

							<div class="four columns ">
								<a href="#" rel="lightbox" style="text-align:center; display:block"><img class="scale-with-grid" style="position:relative; margin:0 auto;" src="<?php	the_sub_field('section_icon'); ?>" alt="" /></a>
	        		<?php	echo apply_filters('the_content', get_sub_field('section_copy')); ?>
							</div>

							<?php if($counter % 3 == 2) {?>
								</div> <!-- End Row -->
							<?php } $counter++; ?>
						<? endwhile;
					else :
											// no rows found
					endif;
					?>






    <?php elseif( get_row_layout() == 'column_selector_no_gutter' ): ?>
		<!-- Flexible Layout columns Selector without Gutters -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-columns-selector <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">

			<div class="row">
				<div class="columns-repeater <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">
				<?php if (get_sub_field('section_header') ): ?><div class="content-header"><div style="text-align:center;"><?php	the_sub_field('section_header'); ?></div></div><?php endif; ?>
				<?php if (get_sub_field('column_number') ==  'two'): ?>
					<?php if( have_rows('content_module') ):
						$counter2 = 0;
						while ( have_rows('content_module') ) : the_row(); ?>
							<?php  if($counter2 % 2 == 0) { ?>
								<div class="new row medium-collapse" data-equalizer>
							<?php }  ?>
							<div class="large-6 columns ">
								<div data-equalizer-watch class="callout">
									<?php	echo apply_filters('the_content', get_sub_field('content')); ?>
								</div>
							</div>
							<?php if($counter2 % 2 == 1) {?>
								</div> <!-- End Row -->
							<?php } $counter2++; ?>
						<? endwhile;
					else :
											// no rows found
					endif;
					?>
				<?php elseif (get_sub_field('column_number') ==  'three'): ?>
					<?php if( have_rows('content_module_three') ):
						$counter3 = 0;
						while ( have_rows('content_module_three') ) : the_row(); ?>
							<?php  if($counter3 % 3 == 0) { ?>
								<div class="row medium-collapse" data-equalizer>
							<?php }  ?>
							<div class="large-4 columns">
								<div data-equalizer-watch class="callout">
									<?php echo apply_filters('the_content', get_sub_field('content')); ?>
								</div>
							</div>
							<?php if($counter3 % 3 == 2) {?>
								</div> <!-- End Row -->
							<?php } $counter3++; ?>
						<? endwhile;
					else :
											// no rows found
					endif;
					?>
				<?php elseif (get_sub_field('column_number') ==  'four'): ?>
					<?php if( have_rows('content_module_four') ):
						$counter4 = 0;
						$x=0;
						$xy = 0;
						while ( have_rows('content_module_four') ) : the_row();

							 $x++; endwhile;?> <?

						while ( have_rows('content_module_four') ) : the_row(); ?>
							<?php  if($counter4 % 4 == 0) { ?>
								<div class="row collapse" data-equalizer>
							<?php }  ?>
							<div class="large-3 columns">
								<div data-equalizer-watch class="callout">
									<?php	echo apply_filters('the_content', get_sub_field('content')); ?>
								</div>
							</div>
							<? //echo $counter4; echo $x;?>
							<?php if( ($counter4 % 4 == 3) || ( ($counter4 == $x-1) && ($counter4 % 4 != 3) ) ) {?>
								</div> <!-- EndRow -->
							<?php } $counter4++;?>
						<? endwhile; ?>
							<?
					else :
											// no rows found
					endif;
					?>
				<?php elseif (get_sub_field('column_number') ==  'six'): ?>
					<?php if( have_rows('content_module_six') ):
						$counter6 = 0;
						$x=0;
						$xy = 0;
						while ( have_rows('content_module_six') ) : the_row();

							 $x++; endwhile;?> <?

						while ( have_rows('content_module_six') ) : the_row(); ?>
							<?php  if($counter6 % 6 == 0) { ?>
								<div class="row collapse" data-equalizer>
							<?php }  ?>
							<div class="large-2 columns">
								<div data-equalizer-watch class="callout">
									<?php	echo apply_filters('the_content', get_sub_field('content')); ?>
								</div>
							</div>
							<? //echo $counter6; echo $x;?>
							<?php if( ($counter6 % 6 == 5) || ( ($counter6 == $x-1) && ($counter6 % 6 != 5) ) ) {?>
								</div> <!-- EndRow -->
							<?php } $counter6++;?>
						<? endwhile; ?>
							<?
					else :
											// no rows found
					endif;
					?>

				<?php elseif (get_sub_field('column_number') ==  'twelve'): ?>
					<?php if( have_rows('content_module_twelve') ):
						$counter12 = 0;
						$x=0;
						$xy = 0;
						while ( have_rows('content_module_twelve') ) : the_row();

							 $x++; endwhile;?> <?

						while ( have_rows('content_module_twelve') ) : the_row(); ?>
							<?php  if($counter12 % 12 == 0) { ?>
								<div class="row collapse" data-equalizer>
							<?php }  ?>
							<div class="larg-1 columns">
								<div data-equalizer-watch class="callout">
									<?php	echo apply_filters('the_content', get_sub_field('content')); ?>
								</div>
							</div>
							<? //echo $counter12; echo $x;?>
							<?php if( ($counter12 % 12 == 11) || ( ($counter12 == $x-1) && ($counter12 % 12 != 11) ) ) {?>
								</div> <!-- EndRow -->
							<?php } $counter12++;?>
						<? endwhile; ?>
							<?
					else :
											// no rows found
					endif;
					?>
				<?php endif; ?>

				</div> <!-- end of module padding -->
			</div>
		</div> <!-- end of columns-selector without gutters -->




					    <?php elseif( get_row_layout() == 'column_selector_no_gutter_copy' ): ?>
		<!-- Flexible Layout columns Selector without Gutters -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<?php if( get_sub_field('fluid') ) { echo 'expanded '; } else{ echo ''; } ?> <? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-columns-selector <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center center <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>">

				<div class="columns-repeater <?php if (get_sub_field('bg_position') == 'cover'):?>layout-min<?else: endif;?>" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">

					<?php //SETS RANDOM NUMBER TO USE AS A NAME FOR EQUALIZER
						 $equalizer_name = rand(0, 150);
					?>
					<div class="<?php if( get_sub_field('fluid') ) { echo 'expanded row'; } else{ echo 'row'; } ?> <?php if( get_sub_field('gutters') ) { echo 'medium-collapse';  } else{ } ?>  <?php if (get_sub_field('vertical_row_alignment')): the_sub_field('vertical_row_alignment'); else: endif; ?> <?php if (get_sub_field('horizontal_row_alignment')): the_sub_field('horizontal_row_alignment'); else: endif; ?>" <?php if( get_sub_field('equalize_column_heights') ) { echo 'data-equalizer="' . $equalizer_name . '" data-equalize-on-stack="true" data-equalize-on="small"';  } else{ } ?> ><?php //opens new row?>

						<?php if( have_rows('content_module') ):
							$c_size_total_total = 0;
							$count = 0;
							while ( have_rows('content_module') ) : the_row(); ?>


<div class="<?php if (get_sub_field('only_background_column')): echo 'fixHeight '; else: endif; ?><?php if (get_sub_field('column_vertical_alignment')): the_sub_field('column_vertical_alignment'); else: endif; ?> <?php if ( !get_sub_field('no_number_of_columns') ):?> large-<?php the_sub_field('c_number'); ?> medium-<?php the_sub_field('c_number_medium'); ?> small-<?php the_sub_field('c_number_small'); ?> columns <?php else:?> columns <? endif;  the_sub_field('column_class');  //End of no_number_of_columns ?>"  style="position: relative; background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center top <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?> <?php if (get_sub_field('only_background_column')): echo 'padding:0!important; min-height: 300px; '; else: endif; ?>">

									<div <?php if( get_sub_field('equalize_column_heights') ):?> data-equalizer-watch="<?php echo $equalizer_name; ?>" <?php else: endif; ?>  class="<?php if ( get_sub_field('animation') ):?>animated <?php else: echo 'notAnimated'; endif; ?>  <?php if (get_sub_field('content')){}?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="/*background:<?php if (get_sub_field('bg_position') == 'color'): the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> url('<?php the_sub_field('bg_image');?>') center top <?php the_sub_field('background_cover_type');?>; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?>*/  display:block; height:100%; <?php if (get_sub_field('only_background_column')): echo 'position: absolute; width:100%'; else: endif; ?>" <?php if (get_sub_field('animation')): ?> data-animation="<?php the_sub_field('animation');?>"<?php else: endif; ?>>
									<?php if (get_sub_field('flexCenter_to_all_copy')):?>
										<div class="flexCenter">
											<?php if (get_sub_field('content')){ echo apply_filters('the_content', get_sub_field('content')); }?>
										</div>
									<?php else: ?>
										<?php if (get_sub_field('content')){ echo apply_filters('the_content', get_sub_field('content')); }?>
									<? endif; ?>
										<?php
										if (get_sub_field('add_a_lists_of_posts')){
										/*
										*  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
										*  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
										*  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
										*/
										$post_objects = get_sub_field('taxonomy');
										if( $post_objects ): ?>
										    <ul class="postList">
										    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
										        <?php setup_postdata($post); ?>
										        <li>
										        	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array( 'class' => 'full' )); ?></a>
										            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										            <p><span class="meta"><?php the_date(); ?></span></p>
										            <?php the_excerpt(array( 'class' => 'excerpt')); ?>
										            <p class="text-center"><a href="<?php the_permalink(); ?>" class="button lightTurqoiseButton third">Read More</a></p>
										        </li>
										    <?php endforeach; ?>
										    </ul>
										    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif;


										  }
										  else{}?>
									</div>

								</div> <!-- End Column -->
								<? endwhile;?>
							</div> <!-- End Row -->

					<?php else :
											// no rows found
					endif;
					?>





				</div> <!-- end of module padding -->
			</div>
	<!-- end of columns-selector without gutters -->

         <?php elseif( get_row_layout() == 'module_tabs' ): ?>

		<!-- Flexible Layout Tabs Panel -->
		<div <?php $idvalue = get_sub_field('module_id'); if($idvalue){ ?>id="<?php echo $idvalue; ?>"<?php }else{} ?> class="<? $ClassValue = get_sub_field('module_class'); if($ClassValue){ ?><?php echo $ClassValue; ?><?php }else{} ?> content-bg layout module1-7 <?php if ( get_sub_field('include_a_mobile_bg') ):?>hide-bg-img<? else: endif; ?>" style="<?php if (get_sub_field('bg_position') == 'color'):?>background-color: <?php the_sub_field('color');?>;<?php elseif (get_sub_field('bg_position') == 'cover'):?> background: url('<?php the_sub_field('bg_image');?>') center center fixed; background-size: cover;<?php elseif (get_sub_field('bg_position') == 'repeat'):?> background: url('<?php the_sub_field('bg_image');?>') repeat;<?php else : /* no bg found */ endif;?> <?php if ( get_sub_field('include_a_mobile_bg') ):?>background-color: <?php the_sub_field('mobile_background_image');?>;<? else: endif; ?> ">

		<div class="tabsNav">
			<ul class="tabs row small-collapse" data-tabs id="example-tabs">
				<?php $list_counter = 0; ?>
				<?php while ( have_rows('panels') ) : the_row(); ?>
				  <li class="tabs-title columns <?php if ($list_counter == 0){ echo 'is-active'; } else {}?>"><a href="#panel<?php echo $list_counter; ?>" <?php if ($list_counter == 0){ echo 'aria-selected="true"'; } else {}?>><?php  the_sub_field('panel_title');?></a></li>
				  <?php $list_counter ++; ?>
				<?php endwhile; ?>
			</ul>
		</div>

			<div class="row">
				<div class="module" style="<?php if( get_sub_field('module_padding') ):?>padding:<?php the_sub_field('module_padding');?>; <?php endif; ?>">


					<div class="tabs-content" data-tabs-content="example-tabs">
						<?php $content_counter = 0; ?>
						<?php while ( have_rows('panels') ) : the_row(); ?>
							  <div class="tabs-panel <?php if ($content_counter == 0){ echo 'is-active'; } else {}?>" id="panel<?php echo $content_counter; ?>" <?php if ($content_counter == 0){ echo 'aria-hidden="false"'; } else {}?>>
							    <?php  the_sub_field('panel_content');?>
							  </div>
							  <?php $content_counter ++; ?>
						<?php endwhile; ?>
					</div>

				</div>
			</div>
		</div> <!-- end of module_tabs -->







        <?php endif;?>


  <?php  endwhile;

else :

    // no layouts found

endif;




?>
