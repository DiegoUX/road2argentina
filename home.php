<?php /* Template Name: Home Template */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>
<main role="main">

	<section class="slider">
		<!--Plugin Slider -->
		<?php echo do_shortcode("[metaslider id=11]"); ?>
		<!--/ Plugin Slider -->

		<div class="container billboard-legend">
			<div>
				<h1>SPANISH CLASSES</h1>
				<p>Lorem ipsum ad sidera met non dolor manque</p>
				<a href="#" class="btn">APPLY NOW</a>
			</div>
		</div>
	</section>

	<section class="video-slider">
		<h2>What is it like to be in Buenos Aires with us?</h2>
		<?php echo do_shortcode('[gallery ids="35,34,33,32"]'); ?>
	</section>

	<section class="posts-and-links">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
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
										<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
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
				<div class="col-md-6 links-blk">
					<div class="row pb10">
						<div class="col-md-12">
							<!-- <a href="#"><img src="wp-content/themes/road2argentina-child/img/brochure.png" alt="Brochure"></a> -->
							<figure class="effect-zoe">
								<!-- <img src="img/14.jpg" alt="img14"/> -->
								<img src="wp-content/themes/road2argentina-child/img/brochure.png" alt="Brochure">
								<figcaption>
									<!-- <h2>Creative <span>Zoe</span></h2> -->
									<!-- <span class="icon-heart"></span>
									<span class="icon-eye"></span>
									<span class="icon-paper-clip"></span> -->
									<p>Lorem ipsum dolor sit amet consectetur adipiscing proin gravida</p>
									<a href="#">Request a Brochure <span class="flecha">&raquo;</span></a>
								</figcaption>			
							</figure>
						</div>
					</div>
					<div class="row pb10">
						<div class="col-md-4 pr5">
							<img src="wp-content/themes/road2argentina-child/img/roadtrip.png" alt="Roadtrip">
							<figure class="effect-zoe">
								<figcaption>
									<p>Lorem ipsum dolor sit amet consectetur adipiscing proin gravida</p>
									<a href="#">Request a Brochure <span class="flecha">&raquo;</span></a>
								</figcaption>			
							</figure>
						</div>
						<div class="col-md-8 pl5">
							<!-- <a href="#"><img src="wp-content/themes/road2argentina-child/img/roadtrip.png" alt="Roadtrip"></a> -->
							<a href="#"><img src="http://placehold.it/320x202" alt=""></a>
						</div>
					</div>
					<div class="row pb10">
						<div class="col-md-12">
							<a href="#"><img src="wp-content/themes/road2argentina-child/img/for-parents.png" alt="For parents"></a>
						</div>
					</div>
					<div class="row pb10">
						<div class="col-md-6 pr5">
							<a href="#"><img src="wp-content/themes/road2argentina-child/img/cost.png" alt="Cost"></a>
						</div>
						<div class="col-md-6 pl5">
							<a href="#"><img src="wp-content/themes/road2argentina-child/img/faq.png" alt="FAQs"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<?php the_content(); ?>
		
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