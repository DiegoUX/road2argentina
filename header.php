<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:300italic' rel='stylesheet' type='text/css'>

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
		<!-- <div class="wrapper"> -->
			<!-- header -->
			<header class="header clear" role="banner" id="totop">

				<div class="container top-h">
					
					<div class="row">
						<div class="col-sm-4">
							<!-- logo -->
							<div class="logo">
								<a href="<?php echo home_url(); ?>">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
								</a>
							</div>
							<!-- /logo -->
						</div>	

						<div class="col-sm-8">

							<p>Buenos Aires | <a href="#">Patagonia</a></p>

							<div class="nav-links">
								<!-- nav -->
								<!--<nav class="nav" role="navigation">
									<?php html5blank_nav(); ?>
								</nav>-->
								<!-- /nav -->
								<nav>
									<select class="program-opt" >
										<option selected value="#">Program Offerings</option>
										<option value="#">Study Abroad</option>
										<option value="#">Internships</option>
										<option value="#">Spanish Classes</option>
										<option value="#">Volunteering</option>
										<option value="#">TEFL Certification</option>
									</select>
								</nav>
								<a href="#" class="btn-t">APPLY NOW</a>
								<a href="#"><span></span>Contact Us</a>
							</div>
						</div>

					</div>		
				</div>

			</header>
			<!-- /header -->
