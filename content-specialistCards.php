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