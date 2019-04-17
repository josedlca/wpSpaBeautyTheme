<section class="pricing">
	<div class="container">
		<div class="pricing__topPart">
			<div class="row t-c">
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
				<?php
					// the query
					$the_pricing_query = new WP_Query(array(
						'category_name' => 'pricing',
						'post_status' => 'publish',
						'posts_per_page' => 4,
					));
				?>
				<?php if($the_pricing_query ->have_posts()) : ?>
					<?php while($the_pricing_query ->have_posts()) : $the_pricing_query ->the_post();  ?>
					<div class="col-xl-3">
					<div class = "test">
						<div class="pricing__botPart--card">
							<div class="row t-c">
								<div class="col-xl-12">
									<div class="pricing__botPart--card_icon">
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="pricing__botPart--card_price">
										<?php the_tags('', null, null);?>
									</div>																														
								</div>
								<div class="col-xl-12">
									<div class="pricing__botPart--card_duration">
										<p>per month</p>
									</div>
								</div>
								<div class="col-xl-12">
									<div class="pricing__botPart--card_type">
										<p><?php the_title(); ?></p>
										<ul>
											<?php the_content(); ?>
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
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p>No posts</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>