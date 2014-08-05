<?php /* Template Name: Team Template */ get_header(); ?>
<?php get_header(); ?>

	<main role="main">
		<section class="billboard-program team-p">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 tac col-sm-offset-1">
						<div class="bill-text">
							<h1><?php the_title(); ?></h1>
							<span class="main-caption">
								<?php the_meta(); ?>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="background">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</div>
		</section>

		<!-- Main Team Section -->
		<section class="main-program main-team">
			<div class="container">
				<div class="row">
					<div class="col-sm-5 first-b col-sm-offset-1">
						<div class="boxtxt-img">
							<a id="trigger-overlay"><img src="http://placehold.it/492x274"></a>
							<div class="subtitles">
								<h4 class="name-sub">KATIE DUNLOP</h4>
								<h5 class="name-sub">CO-FOUNDER</h5>
							</div>
							<div class="overlay overlay-slidedown">
									<button type="button" class="overlay-close">Close</button>
									<div class="adv-content">
										<h3>Katie Dunlop</h3>
										<h4>Co-Founder</h4>
										<p>Katie was born and raised in Michigan and graduated from the University of Michigan with degrees in Spanish and Education. She has lived in Argentina for seven years and enjoys traveling, learning languages and playing tennis and soccer.</p>
										<a href="#" target="_blank" class="icon-facebook"></a>
										<a href="#" target="_blank" class="icon-twitter"></a>
										<a href="#" target="_blank" class="icon-google"></a>
									</div>
								</div>
						</div>
					</div>

					<div class="col-sm-5 second-b">
						<div class="boxtxt-img">
							<a id="trigger-overlay-2"><img src="http://placehold.it/492x274"></a>
							<div class="subtitles">
								<h4 class="name-sub">SEBASTIÁN CADENAS</h4>
								<h5 class="name-sub">CO-FOUNDER & EXECUTIVE DIRECTOR</h5>
							</div>
							<div class="overlay-2 overlay-slidedown">
									<button type="button" class="overlay-close">Close</button>
									<div class="adv-content">
										<h3>SEBASTIÁN CADENAS</h3>
										<h4>PROGRAM COORDINATOR</h4>
										<p>Sebastian was born in Patagonia and graduated from the University of Buenos Aires. He has lived in New Zealand and is currently based in California. He is an entrepreneur who loves rock climbing, traveling and good teas.</p>
										<a href="#" target="_blank" class="icon-facebook"></a>
										<a href="#" target="_blank" class="icon-twitter"></a>
										<a href="#" target="_blank" class="icon-google"></a>
									</div>
								</div>
						</div>
					</div>					
				</div>

				<!--<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="row">
							<div class="col-sm-4">
								<div class="boxtxt-img">
									<a id="trigger-overlay-3"><img src="http://placehold.it/492x274"></a>
									<div class="subtitles">
										<h4 class="name-sub"></h4>
										<h5 class="name-sub"></h5>
									</div>
									<div class="overlay-3 overlay-slidedown">
										<button type="button" class="overlay-close">Close</button>
										<div class="adv-content">
											<h3></h3>
											<h4></h4>
											<p></p>
											<a href="#" target="_blank" class="icon-facebook"></a>
											<a href="#" target="_blank" class="icon-twitter"></a>
											<a href="#" target="_blank" class="icon-google"></a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>

							<div class="col-sm-4">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
				</div>-->

				<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<p>Since our founding, we have succeeded in enriching the lives of over 2000 participants of more than 40 different nationalities. We have also formed partnerships with over a dozen universities and international agencies in the United States, Europe and Australia who are dedicated to putting Argentina on the study abroad map. Our personable, caring and knowledgeable staff, comprised of young professionals both local and from abroad, is what makes us special. We are passionate about what we do and strive to make each and every participant's experience here in Argentina unforgettable.</p>
						</div>
					</div>
			</div>
		</section>

		<section class="team-choose">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h3>Why Choose Us</h3>

						<div id="tab-box">
						    <div id="tab-1" class="tab">
						        <span><a href="#tab-1" class="icon-location"></a></span>
						        <span>
						        <h6>Local Organization</h6>
								<p>We are a local organization with over seven years of experience in study abroad and immersion programs in Argentina. This not only means that we are experts on all things Buenos Aires and Argentina, but also that we are able to offer customized programs at lower prices compared to large international organizations.</p>
						        </span>
						    </div>
						    <div id="tab-2" class="tab">
						        <span><a href="#tab-2" class="icon-world"></a></span>
						        <span>
						        <h6>Globally-minded Staff</h6>
								<p>Each of our staff members is highly trained, outgoing, enthusiastic and has studied or lived abroad. This means we have the unique ability to draw on our own experiences and understand the challenges involved in living and studying in a foreign country. We love helping Roadies explore Argentina and its culture!</p>
						        </span>
						    </div>
						    <div id="tab-3" class="tab">
						        <span><a href="#tab-3" class="icon-svg"></a></span>
						        <span>
						        <h6>24/7 Support Network</h6>
								<p>Our top concerns are your safety and satisfaction and that is why our coordinators are always available to address your questions and concerns. Your program starts with an in-depth orientation and in the event of an emergency, you will be able to reach our coordinators at anytime on their staff cell phone.</p>
						        </span>
						    </div>
						    <div id="tab-3" class="tab">
						        <span><a href="#tab-4" class="icon-group"></a></span>
						        <span>
						        <h6>Community</h6>
								<p>When you choose Road2Argentina, you become a part of our community. We work hard to make sure that each participant becomes fully integrated within the Road community. Our friendly staff organizes weekly social activities and outings, along with monthly group dinners where Roadies get to know each other.</p>
						        </span>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- section -->
		<section>

		<!-- <h1><?php the_title(); ?></h1> -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>


				<!--<br class="clear">-->

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
