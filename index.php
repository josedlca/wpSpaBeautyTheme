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
            <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
	<main>
		<section class="topBlackBar">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-xl-3">
						<div class="topBlackBar__language">
							<p>Select Your Language</p>
						</div>
					</div>
					<div class="col-xl-5">
						<div class="topBlackBar__shop">
							<p>Cart(0)</p>
						</div>
						<div class="topBlackBar__search">

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
					<div class="col-xl-7 t-r">
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
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						Some text here later
					</div>
				</div>
			</div>
		</section>
		<section class="caracteristics">
			<div class="container">
				<div class="caracteristics__topPart">
					<div class="row">
						<div class="col-xl-6">
							<div class="caracteristics__topPart--text">
								<div class="row">
									<div class="col-xl-12">
										<div class="caracteristics__topPart--text_little">
											<p>WELCOME TO STAKER</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__topPart--text_title">
											<p>A Best Place For Spa And Beauty</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__topPart--text_description">
											<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, corrupti accusantium tenetur ipsam, ad magnam quis, deserunt aliquid doloremque saepe voluptates iure commodi.</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__topPart--text_btn">
											<a href="#">ABOUT US</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6">
							<div class="caracteristics__topPart--imgContainer">
								<div class="imgTest"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="caracteristics__botPart">
					<div class="row">
						<div class="col-xl-3">
							<div class="caracteristics__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_icon">
											some icon here
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_title">
											<h5>10 Years of Experience</h5>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_text">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et saepe nemo voluptatibus temporibus quam quas exercitationem libero odit? Id expedita minus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="caracteristics__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_icon">
											some icon here
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_title">
											<h5>10 Years of Experience</h5>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_text">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et saepe nemo voluptatibus temporibus quam quas exercitationem libero odit? Id expedita minus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="caracteristics__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_icon">
											some icon here
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_title">
											<h5>10 Years of Experience</h5>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_text">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et saepe nemo voluptatibus temporibus quam quas exercitationem libero odit? Id expedita minus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="caracteristics__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_icon">
											some icon here
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_title">
											<h5>10 Years of Experience</h5>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_text">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et saepe nemo voluptatibus temporibus quam quas exercitationem libero odit? Id expedita minus.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="reserves">
			<div class="container">
				<div class="reserves__topPart">
					<div class="row">
						<div class="col-xl-12">
							<div class="reserves__topPart--title">
								<h3>Make an Appointment</h3>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="reserves__topPart--subTitle">
								<p>Book a Session Now Otherwise Another Person will Grab this Session </p>
							</div>
						</div>
					</div>
				</div>
				<div class="reserves__botPart">
					<div class="row">
						<div class="col-xl-4">
							<div class="reserves__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="reserves__botPart--card_title">
											<h4>STAKE OPEN HOURS</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="reserves__botPart--card_hours">
											<p>Sunday to Tuesday 09:00 - 24:00</p>
											<p>Friday and Sunday 08:00 - 02:00</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="reserves__botPart--card_numbertitle">
											<p>CALL US TO BOOK INMEDIATLY</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="reserves__botPart--card_number">
											<p>+84 846 250 592</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8">
							<div class="reserves__botPart--form">
								<div class="row">
									<div class="col-xl-5">
										<div class="reserves__botPart--form_left">
											<div class="reserves__botPart--form_left-name">
												<input type="text" placeholder="Name">
											</div>
											<div class="reserves__botPart--form_left-phone">
												<input type="number" placeholder="Phone">
											</div>
											<div class="reserves__botPart--form_left-date">
												<input type="date" placeholder="Date">
											</div>
										</div>
									</div>
									<div class="col-xl-5">
										<div class="reserves__botPart--form_right">
											<div class="reserves__botPart--form_right-email">
												<input type="email" placeholder="Email">
											</div>
											<div class="reserves__botPart--form_right-choose">
												<input type="number" placeholder="Choose Service">
											</div>
											<div class="reserves__botPart--form_right-time">
												<input type="date" placeholder="Time">
											</div>
										</div>
									</div>
									<div class="col-xl-10">
										<div class="reserves__botPart--form_message">
											<textarea placeholder="Message" name="" id="" cols="30" rows="10"></textarea>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="reserves__botPart--form_btn">
											<a href="#">BOOK A SESSION </a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
</html>