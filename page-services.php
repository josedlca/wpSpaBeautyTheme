<?php 

/*
	Template Name: Page Services
*/

get_header(); ?>
<section class="bannerAbout">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-12 t-c">
				<div class="bannerAbout__namePage">
					<p>OUR SERVICES</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('content', 'ourServicesCards'); ?>
<?php get_template_part('content', 'specialistCards'); ?>
<section class="whyChosse">
	<div class="container">
		<div class="whyChosse__container">
			<div class="row">
				
			</div>
		</div>
	</div>
</section>
<?php get_template_part('content', 'discount'); ?>
<?php get_template_part('content', 'pricing'); ?>
<?php get_footer(); ?>