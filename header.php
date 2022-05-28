<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="icon" href="<?= get_template_directory_uri() ?>/assets/imgs/favicon.png" type="image/png" sizes="16x16" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<title><?php bloginfo('title') ?></title>
	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<div id="preloader">
		<div class="preloader-wrap">
			<img width="300" src="http://superbangla.com.bd/wp-content/uploads/2022/03/0555.png" alt="logo" class="img-fluid" />
			<div class="preloader">
				<i>.</i>
				<i>.</i>
				<i>.</i>
			</div>
		</div>
	</div>

	<!--header section start-->
	<header id="header" class="header-main">
		<div id="logoAndNav" class="main-header-menu-wrap bg-transparent fixed-top">
			<div class="container">
				<nav class="js-mega-menu navbar navbar-expand-md header-nav">
					<a class="navbar-brand pt-0" href="<?= get_home_url() ?>">
						<?php dynamic_sidebar('hd_lg') ?>
					</a>
					<!--responsive toggle button start-->
					<button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
						<span id="hamburgerTrigger">
							<span class="ti-menu"></span>
						</span>
					</button>
					<!--responsive toggle button end-->

					<!--main menu start-->
					<div id="navBar" class="collapse navbar-collapse">
						<ul class="navbar-nav ml-auto main-navbar-nav">

							<?php
							wp_nav_menu([
								'theme_location' => 'main_menu',
								'container' => false,
								'items_wrap' => '%3$s',
								'menu_id' => ' ',
								'menu_class' => 'clearfix nav-item hs-has-sub-menu custom-nav-item',
							])
							?>

							<!--button start-->
							<li class="nav-item header-nav-last-item d-flex align-items-center">
								<a class="btn btn-brand-03 animated-btn" href="https://bill.superbangla.com/clientarea.php" target="_blank">
									<span class="fa fa-user pr-2"></span> Client Area
								</a>
							</li>
							<!--button end-->
						</ul>
					</div>
					<!--main menu end-->
				</nav>
			</div>
		</div>
		<!--main header menu end-->
	</header>
	<!--header section end-->