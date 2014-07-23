<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/vendor/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="container">

					<div class="col-md-4">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<!--<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">-->
								<img src="http://placehold.it/291x76" alt="Logo" class="logo-img">

							</a>
						</div>
						<!-- /logo -->
					</div>

					<div class="col-md-8">

						<p>Buenos Aires | <a href="#">Patagonia</a></p>

						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
						<a href="#">APPLY NOW</a>
						<a href="#"><span></span>Contact Us</a>
					</div>
					
				</div>

			</header>
			<!-- /header -->
