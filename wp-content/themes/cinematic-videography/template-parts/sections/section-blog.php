<?php  
	$cinematicvideography_hs_blog 			= esc_attr(get_theme_mod('hs_blog','1'));
	$cinematicvideography_blog_title 		= esc_attr(get_theme_mod('blog_title'));
	$cinematicvideography_blog_subtitle		= esc_attr(get_theme_mod('blog_subtitle')); 
	$cinematicvideography_blog_description	= esc_attr(get_theme_mod('blog_description'));
	$cinematicvideography_blog_num			= esc_attr(get_theme_mod('blog_display_num','3'));
	if($cinematicvideography_hs_blog=='1'):
?>

<section id="blog-section" class="blog-area home-blog">

	<div class="container">
		<div class="row justify-content-center text-center ">
			<div class="h-section">
				<p class="section-subtitle"><?php echo esc_html(get_theme_mod('blog_subheading')); ?>
				</p>
				<h3 class="section-title"><?php echo esc_html(get_theme_mod('blog_heading')); ?>
				</h3>	
							
			</div>
		 </div> 
		<?php if(!empty($cinematicvideography_blog_title) || !empty($cinematicvideography_blog_subtitle) || !empty($cinematicvideography_blog_description)): ?>
			<div class="title">
				<?php if(!empty($cinematicvideography_blog_title)): ?>
					<h6><?php echo wp_kses_post($cinematicvideography_blog_title); ?></h6>
				<?php endif; ?>
				
				<?php if(!empty($cinematicvideography_blog_subtitle)): ?>
					<h2><?php echo wp_kses_post($cinematicvideography_blog_subtitle); ?></h2>
					<span class="shap"></span>
				<?php endif; ?>
				
				<?php if(!empty($cinematicvideography_blog_description)): ?>
					<p><?php echo wp_kses_post($cinematicvideography_blog_description); ?></p>
				<?php endif; ?>
			</div>
		<?php endif; ?> 

			<div class="row">
			<?php 	
				$cinematicvideography_blogs_args = array( 'post_type' => 'post', 'posts_per_page' => $cinematicvideography_blog_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$cinematicvideography_blog_wp_query = new WP_Query($cinematicvideography_blogs_args);
				if($cinematicvideography_blog_wp_query)
				{	
				while($cinematicvideography_blog_wp_query->have_posts()):$cinematicvideography_blog_wp_query->the_post(); ?>
				<div class="col-lg-4 col-md-4 col-sm-12 ">
					<div class="blogbx">
							<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<a href="<?php echo esc_url( get_permalink() ); ?>">	
								<div class="blog-image" style="background-image: url('<?php echo esc_url($image[0]); ?>')">
									
									
								</div>
							</a>
							
							<?php else: 
								$img = get_template_directory_uri().'/assets/images/default.png';
								?>
								<!-- <a href="<//?php echo esc_url( get_permalink() ); ?>">
									<div class="blog-image" style="background-image: url('<//?php echo esc_url($img); ?>')">
										

									</div>
								</a> -->
							<?php endif; ?>

						<div class="clearfix"></div>
						<div class="blog-content">
							<div class="box-admin">
								<ul class="comment-timing">
									<li class="ath"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo get_the_date( 'j' ); ?> <?php echo get_the_date( 'M' ); ?><?php echo get_the_date( 'Y' ); ?></a> </li>

									<!-- <li class="share-button"><i class="fa fa-share-alt"></i></li> -->
									<div class="socialMedia">
				                        <ul>
				                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" target="_blank" class="site-button sharp"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>&title=<?php the_title();?>&source=<?php the_title();?>" target="_blank" class="site-button sharp"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				                            
				                            <li><a href="https://twitter.com/share?url=<?php the_permalink();?>&amp;text=<?php the_title();?>" class="site-button sharp" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                           
				                            <li class="share-button"><a href="#" class="site-button sharp"><i class="fa fa-share-alt"></i></a></li>
				                        </ul>
				                            <div class="clearfix"></div>
				                    </div>
								</ul>
							</div>
							<?php 
								if ( is_single() ) :
									
								the_title('<h6 class="post-title">', '</h6>' );
								
								else:
								
								the_title( sprintf( '<h6 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h6>' );
								
								endif; 
							?> 
							<p><?php echo wp_trim_words(get_the_content(), 35);	?></p>
									
							<div class="blog-btn">
								<a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('READ MORE','cinematic-videography'); ?>
									<div class="btn-brd"></div>
								</a>

									
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			<?php endwhile; 
				}
				wp_reset_postdata();
			?>
			</div>

	</div>

</section>
<?php endif; ?>