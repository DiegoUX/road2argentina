<?php /* Template Name: Program Template */ get_header(); ?>
<?php get_header(); ?>

	<main role="main">
		<section class="billboard-program">
			<div class="container">
				<div class="row">
					<div class="col-sm-10 tac col-sm-offset-1">
						<div class="bill-text">
							<h1><?php the_title(); ?></h1>
							<span class="main-caption">
								<?php the_meta(); ?>
							</span>
							<a href="#" class="btn">Click or scroll to Learn more</a>
						</div>
					</div>
				</div>
			</div>
			<div class="background">
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			</div>
		</section>
		<!-- Main Program Section -->
		<section class="main-program">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="tac pt50 pb50">
							<h1>Volunteering</h1>
							<p class="main-p">We at <strong>Road2Argentina</strong> have partneredwith many local non-profit organizations,  schools, orphanages and community centers in Buenos Aires in order to provide assistance to those in need. At the same time, these partnerships give our volunteers the opportunity to get involved with meaningful projects and make a difference during their time here in the city. Volunteering is also a great way to learn and practice your Spanish, or castellano as the locals call it.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8">
						<div class="accordion-sec">
							<h2>Volunteer placements</h2>
							<span class="sub-title">Placements in the following areas are available to our volunteers:</span>
							
							<div class="collapse-item">
								<h4 data-toggle="collapse" data-target="#id-1">
									<span class="icon-more"></span>
									Volunteer work with children
								</h4>
								<div id="id-1" class="collap-info collapse">
									<h5>Placement Locations</h5>
									<p>Orphanages, homes for abused children, day cares, and community centers in Buenos Aires.</p>
									
									<h5>Tasks</h5>
									<p>Volunteers help take care of children at centers, help them with their homework, organize educational activities, play games, and provide the children with much needed love and attention.</p>
									
									<h5>More Info</h5>
									<p>Children at these centers come from different backgrounds and most have had a difficult childhood. Many have been abandoned by their parents, abused or have lived on the streets. Volunteers should be prepared to take on these challenges.</p>
									
									<h5>Schedule</h5>
									<p>Flexible, Morning and Afternoon</p>
									
									<h5>Spanish Requirement</h5>
									<p>Basic+</p>
									<div class="mt20 mb20">
										<a class="btn btn-small" href="#">Apply Now</a>
									</div>
								</div>
							</div>
							<div class="collapse-item">
								<h4 data-toggle="collapse" data-target="#id-2">
									<span class="icon-more"></span>
									Help in a Community Soup Kitchen
								</h4>

								<div id="id-2" class="collap-info collapse">
									<h5>Placement Locations</h5>
									<p>Community Center in La Boca</p>
									
									<h5>Tasks</h5>
									<p>Volunteers help in preparing lunch (you will learn the secrets of regional plates), setting the tables, cleaning and making the whole process faster and more effective for everyone.</p>
									
									<h5>More Info</h5>
									<p>More than 100 children and adults have lunch at this community center every day. It is a great place to improve your language skills and offer social assistance. In addition, it is the starting point to understanding the workings of the community center and its people.</p>
									
									<h5>Schedule</h5>
									<p>Monday – Friday, 10am – 2pm</p>
									
									<h5>Spanish Requirement</h5>
									<p>Basic+</p>
									<div class="mt20 mb20">
										<a class="btn btn-small" href="#">Apply Now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="text mb20 mt20">
							<p>Prices listed above are in USD and include housing in our student residence. Accommodation is also available in shared apartments and homestays for an additional fee.</p>
							<p><span class="icon-info"></span>All prices are expressed in USD.</p>
							<p><span class="icon-warning"></span>Please note that programs without housing include only the volunteer placement, weekly activities and group dinners.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="sidebar">
							<!-- // <?php dynamic_sidebar( 'widget-sidebar-program' ); ?> -->
							<h5>INCLUDED IN THE PROGRAM</h5>
							<ul>
								<li><span class="icon-thick"></span>Tuition and fees</li>
								<li><span class="icon-housing"></span>Housing</li>
								<li><span class="icon-info"></span>Welcome orientation</li>
								<li><span class="icon-airport"></span>Airport transfer</li>
								<li><span class="icon-cell"></span>Cell phone</li>
								<li><span class="icon-user"></span>24/7 Staff support</li>
								<li><span class="icon-group"></span>Weekly group activities</li>
								<li><span class="icon-diner"></span>Group dinners</li>
								<li><span class="icon-luggage"></span>Luggage storage</li>
								<li><span class="icon-world"></span>Road2Argentina backpack with maps, guides and free passes</li>
								<li><span class="icon-envelope"></span>Postal mail reception</li>
							</ul>

							<h5>NO APPLICATION IS REQUIRED!</h5>
							<p>This program is open to anyone 18 years or older who is interested in learning or improving their Spanish. Academic credit is granted; however, it is not necessary to be enrolled in a university in order to participate.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="video-slider">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2>What do past Road2Argentina volunteers have to say about their experiences?</h2>
				</div>
			</div>
		</div>

		<div class="video-container">
				<div class="left-video">
					<ul class="bxslider">
					  <li>
					  	<div class="contentslider-insert">
					  		<img src="http://road2argentina.loc/wp-content/uploads/2014/07/slide-1.gif" />
					  		<div><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					  		quis nostrud exercitation.</p>
					  		</div>
					  	</div></li>
					  <li><img src="http://road2argentina.loc/wp-content/uploads/2014/07/slide-2.gif" /></li>
					</ul>
				</div>
				<div class="center-video">
					<ul class="bxslider">
					  <li><img src="http://road2argentina.loc/wp-content/uploads/2014/07/slide-1.gif" /></li>
					  <li><img src="http://road2argentina.loc/wp-content/uploads/2014/07/slide-2.gif" /></li>
					  <li><img src="http://road2argentina.loc/wp-content/uploads/2014/07/slide-3.gif" /></li>
					  <li><img src="http://road2argentina.loc/wp-content/uploads/2014/07/slide-4.gif" /></li>
					</ul>
				</div>
				<div class="right-video">
					<ul class="bxslider">
					  <li><img src="http://road2argentina.loc/wp-content/uploads/2014/07/slide-3.gif" /></li>
					  <li><img src="http://road2argentina.loc/wp-content/uploads/2014/07/slide-4.gif" /></li>		
					</ul>
				</div>
			</div>
		</section>

	<section class="apply">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="apply-container tac">
						<h2>Interested in becoming a volunteer? We want to hear you from you!</h2>
						<div class="contact-form">
								 <?php echo do_shortcode( '[contact-form-7 id="61" title="Contact Form 2"]' ) ?> 
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
