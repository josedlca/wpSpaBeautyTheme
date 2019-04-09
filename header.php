<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo("description") ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap-grid.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
	<main>
		<section class="topBlackBar">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-xl-3">
						<div class="topBlackBar__language">
							<select id="">
								<option value="">Select Your Language</option>
								<option value="">Spanish</option>
								<option value="">English</option>
							</select>
						</div>
					</div>
					<div class="col-xl-5 t-r">
						<div class="topBlackBar__shop">
							<span><i class="fas fa-shopping-basket"></i></span>
							<p>Cart(0)</p>
						</div>
						<div class="topBlackBar__search">
							<input type="text" placeholder='Search Here....'>
							<button><i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="menu">
			<div class="container">
				<div class="row justify-content-between align-items-center">
					<div class="col-xl-3">
						<div class="menu__brand">
							<img src="<?php bloginfo('template_url'); ?>/img/brand.png" alt="brand">
						</div>
					</div>
					<div class="col-xl-8 t-r">
						<div class="menu__nav">
							<?php
								wp_nav_menu( array(
								'menu'              => 'beautyNav',
								'theme_location'    => 'primary',
								'depth'             => 2,
								'container'         => 'div',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'menu__nav--ul',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
								);
							?>
						</div>
					</div>
				</div>
			</div>
		</section>