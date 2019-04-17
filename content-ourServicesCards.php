<section class="services">
	<div class="container">
		<div class="services__topPart">
			<div class="row t-c">
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
			<div class="services__botPart--top">
				<div class="row">
					<?php
						// the query
						$the_services_query = new WP_Query(array(
							'category_name' => 'services',
							'post_status' => 'publish',
							'posts_per_page' => 8,
						));
					?>
					<?php if($the_services_query->have_posts()) : ?>
						<?php while($the_services_query->have_posts()) : $the_services_query->the_post();  ?>
								<div class="col-xl-3">
									<div class="services__botPart--card">
										<div class="row">
											<div class="col-xl-12">
												<div class="services__botPart--card_icon">
													<?php the_post_thumbnail(); ?>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="services__botPart--card_title">
													<h4><?php the_title(); ?></h4>
												</div>
											</div>
											<div class="col-xl-12">
												<div class="services__botPart--card_desc">
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
</section>