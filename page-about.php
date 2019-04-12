<?php 

/*
	Template Name: Page About
*/

get_header(); ?>
<section class="bannerAbout">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-12 t-c">
				<div class="bannerAbout__namePage">
					<p>ABOUT US</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="aboutUsExperience">
	<div class="container">
		<div class="aboutUsExperience__body">
			<div class="row">
				<div class="col-xl-4">
					<div class="aboutUsExperience__body--description">
						<div class="row">
							<div class="col-xl-12">
								<div class="aboutUsExperience__body--description_afterTitle">	
									<p>WELCOME TO STUCK SPA</p>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="aboutUsExperience__body--description_title">	
									<h4>A Best Place For Spa & Beauty</h4>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="aboutUsExperience__body--description_text">	
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur velit maiores nihil in eligendi totam! Obcaecati adipisci nemo nisi itaque nulla esse velit voluptates voluptatum odio aperiam eos, eius ipsam?</p>
									<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde eaque.</p>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="aboutUsExperience__body--description_btn">	
									<a href="#">ABOUT US</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3">
					<div class="aboutUsExperience__body--icons">
						<div class="row">
							<div class="col-xl-12">
								<div class="aboutUsExperience__body--icons_icon">
									icon
								</div>
								<div class="aboutUsExperience__body--icons_text">
									10 Years of Experience
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5">

				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('content', 'reviews'); ?>
<?php get_footer(); ?>