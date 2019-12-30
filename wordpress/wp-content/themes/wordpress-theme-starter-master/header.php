<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Jua&display=swap" rel="stylesheet"> 

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
			<header role="banner">

				<!-- Top Nav -->
				<nav class="navbar--top navbar navbar-expand-md navbar-light">
					<div class="container justify-content-around">
						<span class="nav-item align-text-bottom text-center"><strong>Free Shipping over $100!</strong></span>
						<div class="collapse navbar-collapse">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a href="#" class="nav-link p">Store Locator</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link"><img src="http://fjallraven.clone/wp-content/uploads/2019/12/flag-us.png" alt="US Flag"> United States | $ <i class="fa fa-angle-down"></i></a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">English <i class="fa fa-angle-down"></i></a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">Account <i class="fa fa-angle-down"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<!-- /Top Nav -->
				<!-- Navbar -->
				<div class="navbar--main container text-uppercase navbar navbar-expand-md navbar-light pt-4 pb-4">
					<a class="navbar-brand" href="#">
						<img class="logo-img p-1" src="http://fjallraven.clone/wp-content/uploads/2019/12/fox_raven-1.png" alt="Fjallraven Logo">
					</a>
					<div class="collapse navbar-collapse mt-4">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item p-4">
								<a class="nav-link" href="#">Men</a>
							</li>
							<li class="nav-item p-4">
								<a class="nav-link" href="#">Women</a>
							</li>
							<li class="nav-item p-4">
								<a class="nav-link text-nowrap" href="#">Bags & Gear</a>
							</li>
							<li class="nav-item p-4">
								<a class="nav-link" href="#">Sustainability</a>
							</li>
							<li class="nav-item p-4">
								<a class="nav-link text-nowrap" href="#">Our Adventures</a>
							</li>
							<hr class="header--divider mt-4">
							<li class="nav-item p-4">
								<a id="search-btn" class="nav-link mr-2 text-nowrap"><i class="fa fa-search mr-2"></i>Search</a>
							</li>
							<li class="nav-item p-4">
								<i class="fa fa-shopping-bag"></i>
								<span class="cart--text">$0.00</span>
							</li>
						</ul>
					</div>
				</div> 
				<!-- /Navbar -->
			</header>
			<!-- /header -->
		</div>