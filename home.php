<?php /* Template Name: Home Template */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>
<main role="main">

	<section class="slider">
		<!--Plugin Slider -->
		<?php echo do_shortcode("[metaslider id=45]"); ?>
		<!--/ Plugin Slider -->
	</section>
	<section class="posts-and-links">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 pr0-for-large">
					<h2>The Road2Argentina Experience</h2>
					<?php 
						$nuevo_query = new WP_query( array( 'post_type' => 'post', 'posts_per_page' => '2' ) );
							while ($nuevo_query->have_posts()) : $nuevo_query->the_post(); ?>
								
								<div class="destacado-wra">
									<div class="thumb">
										<!-- post thumbnail -->
										<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
												<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
											</a>
										<?php endif; ?>
										<!-- /post thumbnail -->
									</div>
									<div class="text-wrap">
										<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="titulo-post"><?php the_title(); ?></a></h3>
										<!-- post details -->
										<span class="author"><?php _e( 'Posted by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
										<span class="date"><?php _e( 'on', 'html5blank' ); ?> <?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
										<span class="category"><?php _e( 'in', 'html5blank' ); ?> <?php the_category(', ') ?></span> 
										<span class="comments"><?php _e( 'with', 'html5blank' );?> <?php  if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'no comments', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
										<!-- /post details -->
										<div class="contenido-post">
											<?php the_excerpt(); ?>
										</div>
									</div>
								</div>
									
							<?php endwhile; 
						wp_reset_query();
					?>
				</div>
				<?php echo get('links_and_description_boxes'); ?>
				<!--<div class="col-sm-6 links-blk pl0-for-large">
					<div class="row pb10">
						<div class="col-sm-12">
							<figure class="effect-zoe">
								<span>Request a Brochure</span>
								<img src="wp-content/themes/road2argentina-child/img/brochure.png" alt="Brochure">
								<figcaption>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing proin gravida</p>
									<a href="#">Request a Brochure <span class="flecha">&raquo;</span></a>
								</figcaption>			
							</figure>
						</div>
					</div>
					<div class="row pb10">
						<div class="col-sm-4 pr5" id="boxrd">	
							<figure class="effect-zoe">
								<span>Road Trip</span>
								<img src="wp-content/themes/road2argentina-child/img/roadtrip.png" alt="Roadtrip">
								<figcaption>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing proin gravida</p>
									<a href="#">Road Trip <span class="flecha">&raquo;</span></a>
								</figcaption>			
							</figure>
						</div>
						<div class="col-sm-8 pl5">
							<figure class="effect-zoe">
								<span>Housing</span>
								<a href="#"><img src="wp-content/themes/road2argentina-child/img/housing.png" alt="Housing"></a>
								<figcaption>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing proin gravida</p>
									<a href="#">Housing <span class="flecha">&raquo;</span></a>
								</figcaption>			
							</figure>
						</div>
					</div>
					<div class="row pb10">
						<div class="col-sm-12">
							<figure class="effect-zoe">
								<span>For Parents</span>
								<a href="#"><img src="wp-content/themes/road2argentina-child/img/for-parents.png" alt="For parents"></a>
								<figcaption>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing proin gravida</p>
									<a href="#">For Parents <span class="flecha">&raquo;</span></a>
								</figcaption>			
							</figure>	
						</div>
					</div>
					<div class="row pb10">
						<div class="col-sm-6 pr5">
							<figure class="effect-zoe">
								<span>Costs &amp;<br> Scholarship</span>
								<a href="#"><img src="wp-content/themes/road2argentina-child/img/cost.png" alt="Cost"></a>
								<figcaption>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing proin gravida</p>
									<a href="#">Costs &amp; Scholarship <span class="flecha">&raquo;</span></a>
								</figcaption>			
							</figure>
						</div>
						<div class="col-sm-6 pl5">
							<figure class="effect-zoe">
								<span>FAQs</span>
								<a href="#"><img src="wp-content/themes/road2argentina-child/img/faq.png" alt="FAQs"></a>
								<figcaption>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing proin gravida</p>
									<a href="#">FAQs <span class="flecha">&raquo;</span></a>
								</figcaption>			
							</figure>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<?php the_content(); ?>

	<!-- Apply now section -->
		<section class="apply">
		<?php echo get_image('imgform'); ?>
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="apply-container tac">
							<h2>Are you ready to live the experience?</h2>
							<a href="#" class="btn">Apply Now</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="sponsors">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="img-container">
							<img src="wp-content/themes/road2argentina-child/img/uba.png" alt="Universidad de Buenos Aires">
						</div>
						<p>Universidad de Buenos Aires</p>
					</div>
					<div class="col-sm-2">
						<div class="img-container">
							<img src="wp-content/themes/road2argentina-child/img/george-mason.png" alt="George Mason University">
						</div>
						<p>George Mason University</p>
					</div>
					<div class="col-sm-2">
						<div class="img-container">
							<img src="wp-content/themes/road2argentina-child/img/eli.png" alt="Experiential Learning International">
						</div>
						<p>Experiential Learning International</p>
					</div>
					<div class="col-sm-2">
						<div class="img-container">
							<img src="wp-content/themes/road2argentina-child/img/go-abroad.png" alt="GoAbroad.com">
						</div>
						<p>GoAbroad.com</p>
					</div>
					<div class="col-sm-2">
						<div class="img-container">
							<img src="wp-content/themes/road2argentina-child/img/antipodeans.png" alt="Antipodeans Abroad">
						</div>
						<p>Antipodeans Abroad</p>
					</div>
					<div class="col-sm-2">
						<div class="img-container">
							<img src="wp-content/themes/road2argentina-child/img/uca.png" alt="Universidad Católica Argentina">
						</div>
						<p>Universidad Católica Argentina</p>
					</div>
				</div>
			</div>
		</section>
		
	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

		

	<?php endif; ?>
		
</main>			

<?php get_footer(); ?>