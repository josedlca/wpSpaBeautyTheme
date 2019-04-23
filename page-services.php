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
		<div class="whyChosse__topPart">
			<div class="row t-c">
				<div class="col-xl-12">
					<div class="whyChosse__topPart--title">
						<h4>Why Choose Stuck Salon</h4>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="whyChosse__topPart--desc">
						<p>We Provide Best Services For Our Clients</p>
					</div>
				</div>
			</div>
		</div>
		<div class="whyChosse__botPart">
			<div class="row align-items-center">
				<div class="col-xl-4">
					<div class="whyChosse__botPart--leftSide">
						<div class="row">
							<?php
							// the query
							$the_leftSide_query = new WP_Query(array(
								'category_name' => 'services',
								'post_status' => 'publish',
								'posts_per_page' => 2,
							));
							?>
							<?php if($the_leftSide_query->have_posts()) : ?>
								<?php while($the_leftSide_query->have_posts()) : $the_leftSide_query->the_post();  ?>
									<div class="col-xl-10">
										<div class="whyChosse__botPart--leftSide_titleDesc t-r">
											<div class="row">
												<div class="col-xl-12">
													<div class="whyChosse__botPart--leftSide_titleDesc-title">
														<p><?php the_title(); ?></p>
													</div>
												</div>
												<div class="col-xl-12">
													<div class="whyChosse__botPart--leftSide_titleDesc-desc">
														<p><?php the_content(); ?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-2">
										<?php the_post_thumbnail(); ?>
									</div>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php else : ?>
								<p>No posts</p>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
				</div>
				<div class="col-xl-4">
					<div class="whyChosse__botPart--rightSide">
						<div class="row">
							<?php
							// the query
							$the_rightSide_query = new WP_Query(array(
								'category_name' => 'services',
								'post_status' => 'publish',
								'posts_per_page' => 2,
							));
							?>
							<?php if($the_rightSide_query->have_posts()) : ?>
								<?php while($the_rightSide_query->have_posts()) : $the_rightSide_query->the_post();  ?>
									<div class="col-xl-2">
										<?php the_post_thumbnail(); ?>
									</div>
									<div class="col-xl-10">
										<div class="whyChosse__botPart--rightSide_titleDesc t-l">
											<div class="row">
												<div class="col-xl-12">
													<div class="whyChosse__botPart--rightSide_titleDesc-title">
														<p><?php the_title(); ?></p>
													</div>
												</div>
												<div class="col-xl-12">
													<div class="whyChosse__botPart--rightSide_titleDesc-desc">
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
	</div>
</section>
<?php get_template_part('content', 'discount'); ?>
<?php get_template_part('content', 'pricing'); ?>
<section class="attention">
	<div class="attention__container">
		<div class="attention__container--body">
			<div class="attention__container--body_icon">
				<i class="fas fa-phone"></i>
			</div>
			<div class="attention__container--body_title">
				<h4>CALL US TO BOOK NOW</h4>
			</div>
			<div class="attention__container--body_number">
				<p>51 098 765 432</p>
			</div>
		</div>
		<div class="attention__container--body">
			<div class="attention__container--body_icon">
				<i class="far fa-calendar"></i>
			</div>
			<div class="attention__container--body_title">
				<h4>OPENING HOUR</h4>
			</div>
			<div class="attention__container--body_days">
				<p>MON-FRI : 10 AM - 20 PM</p>
			</div>
		</div>
		<div class="attention__container--body">
			<div class="attention__container--body_icon">
				<i class="far fa-envelope"></i>
			</div>
			<div class="attention__container--body_title">
				<h4>NEWSLETTER SUBSCRIBE</h4>
			</div>
			<div class="attention__container--body_inp">
				<input type="text" aria-label="inp" placeholder="Enter Email">
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>