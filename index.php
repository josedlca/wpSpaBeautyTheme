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
		<section class="banner align-items-center">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="banner__info">
							<div class="row">
								<div class="col-xl-12">
									<div class="banner__info--welcome">
										<p>WELCOME TO</p>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="banner__info--title">
										<h1>STAKER SPA & BEAUTY</h1>
									</div>
								</div>
								<div class="col-xl-8">
									<div class="banner__info--desc">
										<p>We Ensure you we will Give Best Services . Check out</p>
										<p> Our Services And Book Now</p>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="banner__info--btn">
										<a href="#">CONTACT NOW</a>
									</div>
								</div>
							</div>
						</div>
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
								<div class="row t-c">
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
								<div class="caracteristics__topPart--imgContainer_aftBef">
									<div class="caracteristics__topPart--imgContainer_aftBef-bef"><i class="fas fa-long-arrow-alt-left"></i></div>
									<div class="caracteristics__topPart--imgContainer_aftBef-aft"><i class="fas fa-long-arrow-alt-right"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="caracteristics__botPart">
					<div class="row">
						<div class="col-xl-3">
							<div class="caracteristics__botPart--card">
								<div class="row t-c">
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_icon-border">
											<div class='caracteristics__botPart--card_icon-space'>
												<div class="caracteristics__botPart--card_icon-inside" >
													<img src="<?php bloginfo('template_url'); ?>/img/iconone.png" alt="">
												</div>
											</div>
										</div>
									</div>
									<hr class="cardLine">
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
								<div class="row t-c">
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_icon-border">
											<div class='caracteristics__botPart--card_icon-space'>
												<div class="caracteristics__botPart--card_icon-inside" >
													<img src="<?php bloginfo('template_url'); ?>/img/icontwo.png" alt="">
												</div>
											</div>
										</div>
									</div>
									<hr class="cardLine">
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
								<div class="row t-c">
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_icon-border">
											<div class='caracteristics__botPart--card_icon-space'>
												<div class="caracteristics__botPart--card_icon-inside" >
													<img src="<?php bloginfo('template_url'); ?>/img/iconthree.png" alt="">
												</div>
											</div>
										</div>
									</div>
									<hr class="cardLine">
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
								<div class="row t-c">
									<div class="col-xl-12">
										<div class="caracteristics__botPart--card_icon-border">
											<div class='caracteristics__botPart--card_icon-space'>
												<div class="caracteristics__botPart--card_icon-inside" >
													<img src="<?php bloginfo('template_url'); ?>/img/iconfour.png" alt="">
												</div>
											</div>
										</div>
									</div>
									<hr class="cardLine">
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
					<div class="row t-c">
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
		<section class="services">
			<div class="container">
				<div class="services__topPart">
					<div class="row">
						<div class="col-xl-12">
							<div class="services__topPart--title">
								<h4>Our Services</h4>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="services__topPart--desc">
								<p>We Provide Best Services For Our Valuable Clients</p>
							</div>
						</div>
					</div>
				</div>
				<div class="services__botPart">
					<div class="row">
						<div class="col-xl-3">
							<div class="services__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="services__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_title">
											<h4>BODY MESSAGE</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_desc">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam laboriosam aliquam mollitia vel corrupti nostrum iste explicabo, exercitationem delectus sequi voluptate aliquid officia distinctio</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="services__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="services__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_title">
											<h4>BODY MESSAGE</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_desc">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam laboriosam aliquam mollitia vel corrupti nostrum iste explicabo, exercitationem delectus sequi voluptate aliquid officia distinctio</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="services__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="services__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_title">
											<h4>BODY MESSAGE</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_desc">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam laboriosam aliquam mollitia vel corrupti nostrum iste explicabo, exercitationem delectus sequi voluptate aliquid officia distinctio</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="services__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="services__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_title">
											<h4>BODY MESSAGE</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_desc">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam laboriosam aliquam mollitia vel corrupti nostrum iste explicabo, exercitationem delectus sequi voluptate aliquid officia distinctio</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="services__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="services__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_title">
											<h4>BODY MESSAGE</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_desc">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam laboriosam aliquam mollitia vel corrupti nostrum iste explicabo, exercitationem delectus sequi voluptate aliquid officia distinctio</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="services__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="services__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_title">
											<h4>BODY MESSAGE</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_desc">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam laboriosam aliquam mollitia vel corrupti nostrum iste explicabo, exercitationem delectus sequi voluptate aliquid officia distinctio</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="services__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="services__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_title">
											<h4>BODY MESSAGE</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_desc">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam laboriosam aliquam mollitia vel corrupti nostrum iste explicabo, exercitationem delectus sequi voluptate aliquid officia distinctio</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="services__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="services__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_title">
											<h4>BODY MESSAGE</h4>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="services__botPart--card_desc">
											<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam laboriosam aliquam mollitia vel corrupti nostrum iste explicabo, exercitationem delectus sequi voluptate aliquid officia distinctio</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="gallery">
			<div class="container">
				<div class="gallery__topPart">
					<div class="row">
						<div class="col-xl-12">
							<div class="gallery__topPart--title">
								<h4>Our Gallery</h4>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="gallery__topPart--desc">
								<p>We Provide Best Services For Our Valuable Clients</p>
							</div>
						</div>
					</div>
				</div>
				<div class="gallery__botPart">
					<div class="row">
						<div class="col-xl-4">
							<div class="gallery__botPart--top hImgTopSides">
							
							</div>
						</div>
						<div class="col-xl-4">
							<div class="row">
								<div class="col-xl-12">
									<div class="gallery__botPart--top hImgTopCenter">
								
									</div>
								</div>
								<div class="col-xl-12">
									<div class="gallery__botPart--top hImgTopCenter">

									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="gallery__botPart--top hImgTopSides">
							
							</div>
						</div>
						<div class="col-xl-12">
							<div class="gallery__botPart--bot">
								<div class="row">
									<div class="col-xl-5">
										<div class="gallery__botPart--bot_img">
										</div>
									</div>
									<div class="col-xl-4">
										<div class="gallery__botPart--bot_img">
										</div>
									</div>
									<div class="col-xl-3">
										<div class="gallery__botPart--bot_img">
										</div>								
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="products">
			<div class="container">
				<div class="products__topPart">
					<div class="row">
						<div class="col-xl-12">
							<div class="products__topPart--title">
								<h4>Our Products</h4>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="products__topPart--desc">
								<p>Fron Products page just showing some Special Products</p>
							</div>
						</div>
					</div>
				</div>
				<div class="products__botPart">
					<div class="row">
						<div class="col-xl-4">
							<div class="products__botPart--card">
								<div class="products__botPart--card_img">

								</div>
								<div class="products__botPart--card_desc">
									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quisquam, deleniti mollitia error iure voluptatum a pariatur eum sunt nesciunt laudantium vel exercitationem.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="products__botPart--card">
								<div class="products__botPart--card_img">

								</div>
								<div class="products__botPart--card_desc">
									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quisquam, deleniti mollitia error iure voluptatum a pariatur eum sunt nesciunt laudantium vel exercitationem.</p>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="products__botPart--card">
								<div class="products__botPart--card_img">

								</div>
								<div class="products__botPart--card_desc">
									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur quisquam, deleniti mollitia error iure voluptatum a pariatur eum sunt nesciunt laudantium vel exercitationem.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="discount">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<p>Enjoy 20% Discount for Regular Customers</p>
						<a href="#">PURCHASE NOW</a>
					</div>
				</div>
			</div>
		</section>
		<section class="pricing">
			<div class="container">
				<div class="pricing__topPart">
					<div class="row">
						<div class="col-xl-12">
							<div class="pricing__topPart--title">
								<h4>Our Pricing</h4>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="pricing__topPart--desc">
								<p>Book a Session Now Otherwise Another Person Will Grab this Session</p>
							</div>
						</div>
					</div>
				</div>
				<div class="pricing__botPart">
					<div class="row">
						<div class="col-xl-3">
							<div class="pricing__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="pricing__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_price">
											<p>$0.00</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_duration">
											<p>per month</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_type">
											<ul>
												<li>Body Message (40Mins)</li>
												<li>Spa Therapy (20 Mins)</li>
												<li>Hai-Care & Styles</li>
												<li>Oil Message (30 Mins)</li>
												<li>Body Waxing (25 Mins)</li>
												<li>Skin Care (40 Mins)</li>
											</ul>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_btn">
											<a href="#">SELECT PLAN</a>							
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="pricing__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="pricing__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_price">
											<p>$0.00</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_duration">
											<p>per month</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_type">
											<ul>
												<li>Body Message (40Mins)</li>
												<li>Spa Therapy (20 Mins)</li>
												<li>Hai-Care & Styles</li>
												<li>Oil Message (30 Mins)</li>
												<li>Body Waxing (25 Mins)</li>
												<li>Skin Care (40 Mins)</li>
											</ul>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_btn">
											<a href="#">SELECT PLAN</a>							
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="pricing__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="pricing__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_price">
											<p>$0.00</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_duration">
											<p>per month</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_type">
											<ul>
												<li>Body Message (40Mins)</li>
												<li>Spa Therapy (20 Mins)</li>
												<li>Hai-Care & Styles</li>
												<li>Oil Message (30 Mins)</li>
												<li>Body Waxing (25 Mins)</li>
												<li>Skin Care (40 Mins)</li>
											</ul>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_btn">
											<a href="#">SELECT PLAN</a>							
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="pricing__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="pricing__botPart--card_icon">
											some icon
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_price">
											<p>$0.00</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_duration">
											<p>per month</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_type">
											<ul>
												<li>Body Message (40Mins)</li>
												<li>Spa Therapy (20 Mins)</li>
												<li>Hai-Care & Styles</li>
												<li>Oil Message (30 Mins)</li>
												<li>Body Waxing (25 Mins)</li>
												<li>Skin Care (40 Mins)</li>
											</ul>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="pricing__botPart--card_btn">
											<a href="#">SELECT PLAN</a>							
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="review">
			<div class="container">
				<div class="review__topPart">
					<div class="row">
						<div class="col-xl-12">
							<div class="review__topPart--title">
								<h4>Client Review</h4>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="review__topPart--desc">
								<p>Client Saying about us, how Many we have been satisfying our clients</p>
							</div>
						</div>
					</div>
				</div>
				<div class="review__botPart">
					<div class="row">
						<div class="col-xl-12">
							<div class="review__botPart--name">
								<p>JOHN DOE</p>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="review__botPart--charge">
								<p>Created Head Inc.</p>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="review__botPart--desc">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque eum doloribus ab amet placeat provident saepe vel! Soluta, molestias deleniti debitis sed beatae dolores facilis aspernatur ratione, nostrum omnis excepturi?</p>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="review__botPart--img">
								img
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="blog">
			<div class="container">
				<div class="blog__topPart">
					<div class="row">
						<div class="col-xl-12">
							<div class="blog__topPart--title">
								<h4>From Blog</h4>
							</div>
						</div>
						<div class="col-xl-12">
							<div class="blog__topPart--desc">
								<p>Some of Our Blog Post is Here</p>
							</div>
						</div>
					</div>
				</div>
				<div class="blog__botPart">
					<div class="row">
						<div class="col-xl-4">
							<div class="blog__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="blog__botPart--card_day">
											<p>07</p>
											<p>May</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_title">
											<p>Top 10 Tips To Improve Your Sales</p>									
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_desc">
											<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, magnam repellendus quo, blanditiis cumque perferendis ipsa quaerat fugit eveniet.</p>									
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_btn">
											<a href="#">READ MORE</a>									
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="blog__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="blog__botPart--card_day">
											<p>07</p>
											<p>May</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_title">
											<p>Top 10 Tips To Improve Your Sales</p>									
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_desc">
											<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, magnam repellendus quo, blanditiis cumque perferendis ipsa quaerat fugit eveniet.</p>									
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_btn">
											<a href="#">READ MORE</a>									
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="blog__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="blog__botPart--card_day">
											<p>07</p>
											<p>May</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_title">
											<p>Top 10 Tips To Improve Your Sales</p>									
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_desc">
											<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, magnam repellendus quo, blanditiis cumque perferendis ipsa quaerat fugit eveniet.</p>									
										</div>
									</div>
									<div class="col-xl-12">
										<div class="blog__botPart--card_btn">
											<a href="#">READ MORE</a>									
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer">
			<div class="container">
				<div class="footer__corePart">
					<div class="row">
						<div class="col-xl-3">
							<div class="footer__corePart--sign">
								<div class="row">
									<div class="col-xl-12">
										<div class="footer__corePart--sign_img">
											some img
										</div>
									</div>
									<div class="col-xl-12">
										<div class="footer__corePart--sign_languge">
											<label>Languge</label>
											<select name="" id="">
												<option value="">English(UK)</option>
												<option value="">Spanish</option>
											</select>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="footer__corePart--sign_btns">
											<a href="#">SIGN IN</a>
											<a href="#">SIGN UP</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="footer__corePart--services">
								<p>OUR SERVICES</p>
								<ul>
									<li>Body Message</li>
									<li>Spa Therapy</li>
									<li>Hai-Care & Styles</li>
									<li>Oil Message</li>
									<li>Body Waxing</li>
									<li>Skin Care</li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="footer__corePart--quick">
								<p>QUICK LINKS</p>
								<ul>
									<li> <a href="#"> Payment Options </a></a></li>
									<li><a href="#">Fee Schedule</a></li>
									<li><a href="#">Getting Started</a></li>
									<li><a href="#">Identity Verification</a></li>
									<li><a href="#">Card Verification</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="footer__corePart--event">
								<p>OUR EVENT</p>
								<div class="row">
									<div class="col-xl-12">
										<div class="footer__corePart--event_one">
											<div class="row">
												<div class="col-xl-6">
													<a href="#">10:00 PM</a>
												</div>
												<div class="col-xl-6">
													<div class="footer__corePart--event_one-place">
														<p>New York City</p>
														<p>05-24-2019</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="footer__corePart--event_one">
											<div class="row">
												<div class="col-xl-6">
													<a href="#">10:00 PM</a>
												</div>
												<div class="col-xl-6">
													<div class="footer__corePart--event_one-place">
														<p>New York City</p>
														<p>05-24-2019</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__lastPart">
					<div class="row">
						<div class="col-xl-4">
							<div class="footer__lastPart--copy">
								<p>Copyright 2018 Staker. Designed by Theme_US</p>
								<p>Privacy Policy Terms & Condition</p>
							</div>
						</div>
						<div class="col-xl-2">
							<div class="footer__lastPart--social">
								<p>Connect with us</p>
								<ul>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
									<li><a href="#"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</main>
</body>
</html>