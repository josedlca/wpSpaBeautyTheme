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
				<div class="col-xl-3 d-f">
					<div class="aboutUsExperience__body--icons">
						<div class="row t-c">
							<?php
								// the query
								$the_aboutExperience_query = new WP_Query(array(
								'category_name' => 'aboutusexperience',
								'post_status' => 'publish',
								'posts_per_page' => 4,
								));
							?>
							<?php 
								if($the_aboutExperience_query->have_posts()) :;

								while($the_aboutExperience_query->have_posts()) : $the_aboutExperience_query->the_post();  ?>
									<div class="col-xl-12">
										<div class="aboutUsExperience__body--icons_icon">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="aboutUsExperience__body--icons_text">
											<p><?php the_title(); ?></p>
										</div>
									</div>
								<?php endwhile;

								endif;
							?>
						</div>
					</div>
				</div>
				<div class="col-xl-5">
					<div class="aboutUsExperience__body--gallery">
						<div class="row">
							<?php
								// the query
								$the_gallery_query = new WP_Query(array(
									'category_name' => 'gallery',
									'post_status' => 'publish',
									'posts_per_page' => 3,
								));
							?>
							<?php 
								if($the_gallery_query->have_posts()) : $i = 0;

								while($the_gallery_query->have_posts()) : $the_gallery_query->the_post();  ?>

								<?php 
									if($i ==0): $column = 12; $class = ' galleryAboutTop'; 
									elseif($i  > 0 && $i <= 1): $column = 6; $class = ' galleryAboutTwo';
									elseif($i  > 1 && $i <= 2): $column = 6; $class = ' galleryAboutTwo';
									endif;
								?>

								<div class="col-xl-<?php echo $column;?> blog-item">

									<div class="<?php echo $class; ?>">
										<?php the_post_thumbnail(); ?>
									</div>
								</div>

								<?php $i++; endwhile;

								endif;

							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="aboutUsServices">
	<div class="container p-r">
		<div class="aboutUsServices__core">
			<div class="row t-c">
				<?php
					// the query
					$the_aboutGallery_query = new WP_Query(array(
						'category_name' => 'aboutuscards',
						'post_status' => 'publish',
						'posts_per_page' => 4,
					));
				?>
				<?php if($the_aboutGallery_query->have_posts()) : ?>
					<?php while($the_aboutGallery_query->have_posts()) : $the_aboutGallery_query->the_post();  ?>
					<div class="col-xl-3">
						<div class="aboutUsServices__core--card">
							<div class="col-xl-12">
								<div class="aboutUsServices__core--card_icon">
									<?php the_post_thumbnail(); ?>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="aboutUsServices__core--card_store">
									<p><?php the_title(); ?></p>
								</div>
							</div>
							<hr class="aboutUsServices__line">
							<div class="col-xl-12">
								<div class="aboutUsServices__core--card_servicesName">
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p>No posts</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<section class="aboutUsBenefits">
	<div class="container">
		<div class="aboutUsBenefits__img">
			<img src="" alt="">
		</div>
		<div class="row">
			<div class="col-xl-6">

			</div>
			<div class="col-xl-6">
				<div class="aboutUsBenefits__core">
					<div class="row">
						<?php
						// the query
						$the_aboutUsBenefits_query = new WP_Query(array(
							'category_name' => 'aboutbenefits',
							'post_status' => 'publish',
							'posts_per_page' => 4,
							));
						?>
						<?php if($the_aboutUsBenefits_query->have_posts()) : ?>
							<?php while($the_aboutUsBenefits_query->have_posts()) : $the_aboutUsBenefits_query->the_post();  ?>
								<div class="col-xl-6">
									<div class="aboutUsBenefits__core--cards">
										<div class="row">
											<div class="col-xl-12">
												<div class="aboutUsBenefits__core--cards_icons">
													<?php the_post_thumbnail(); ?>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="aboutUsBenefits__core--cards_title">
													<p><?php the_title(); ?></p>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="aboutUsBenefits__core--cards_text">
													<p><?php the_content(); ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p>No posts</p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="aboutUsTeam">
	<div class="container">
		<div class="aboutUsTeam__topPart">
			<div class="row t-c">
				<div class="col-xl-12">
					<div class="aboutUsTeam__topPart--title">
						<h4>Meet Our Expert Team</h4>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="aboutUsTeam__topPart--desc">
						<p> From Products Page just showing some Special</p>
					</div>
				</div>
			</div>
		</div>
		<div class="aboutUsTeam__botPart">
			<div class="row">
				<?php
					// the query
					$the_about_query = new WP_Query(array(
						'category_name' => 'aboutus',
						'post_status' => 'publish',
						'posts_per_page' => 4,
					));
				?>
				<?php if($the_about_query->have_posts()) : ?>
					<?php while($the_about_query->have_posts()) : $the_about_query->the_post();  ?>
						<div class="col-xl-3">
							<div class="aboutUsTeam__botPart--card">
								<div class="row">
									<div class="col-xl-12">
										<div class="aboutUsTeam__botPart--card_img">
											<?php the_post_thumbnail(); ?>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="aboutUsTeam__botPart--card_name">
											<p><?php the_title(); ?></p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="aboutUsTeam__botPart--card_charge">
											<p><?php the_content(); ?></p>
										</div>
									</div>
									<hr class="aboutUsTeam__botPart--line">
									<div class="col-xl-12">
										<div class="aboutUsTeam__botPart--card_number">
											<p>+98 123445678</p>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="aboutUsTeam__botPart--card_social">
											<ul>
												<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
												<li><a href="#"><i class="fab fa-google-plus-g"></i></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p>No posts</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('content', 'reviews'); ?>
<?php get_footer(); ?>