<?php get_header(); ?>
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
										<h1><?php bloginfo('name'); ?></h1>
									</div>
								</div>
								<div class="col-xl-8">
									<div class="banner__info--desc">
										<p><?php bloginfo('description'); ?></p>
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
								<div class="imgTest">
									<?php
										// the query
										$the_gallery_query = new WP_Query(array(
										'category_name' => 'gallery',
										'post_status' => 'publish',
										'posts_per_page' => 6,
										));
									?>
									<?php 
										if($the_gallery_query->have_posts()) :;

										while($the_gallery_query->have_posts()) : $the_gallery_query->the_post();  ?>

											<div class="mySlides thumnail">
												<?php the_post_thumbnail(); ?>
											</div>

										<?php endwhile;

										endif;
									?>
								</div>
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
										<div class="caracteristics__botPart--card">
											<div class="row t-c">
												<div class="col-xl-12">
													<div class="caracteristics__botPart--card_icon-border">
														<div class='caracteristics__botPart--card_icon-space'>
															<div class="caracteristics__botPart--card_icon-inside" >
																<?php the_post_thumbnail(); ?>
															</div>
														</div>
													</div>
												</div>
												<hr class="cardLine">
												<div class="col-xl-12">
													<div class="caracteristics__botPart--card_title">
														<h5><?php the_title(); ?></h5>
													</div>
												</div>
												<div class="col-xl-12">
													<div class="caracteristics__botPart--card_text">
														<p><?php the_excerpt(); ?></p>																						
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
								<div class="row t-c">
									<div class="col-xl-12">
										<div class="reserves__botPart--card_title">
											<h4>STAKE OPEN HOURS</h4>
										</div>
									</div>
									<hr class="reservesLine">
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
									<div class="col-xl-6">
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
									<div class="col-xl-6">
										<div class="reserves__botPart--form_right">
											<div class="reserves__botPart--form_right-email">
												<input type="email" placeholder="Email">
											</div>
											<div class="reserves__botPart--form_right-choose">
												<select name="" id="">
													<option value="">Choose Service</option>
												</select>
											</div>
											<div class="reserves__botPart--form_right-time">
												<input type="time" placeholder="Time">
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="reserves__botPart--form_message">
											<textarea placeholder="Message" name="" id=""></textarea>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="reserves__botPart--form_btn">
											<input type="button" value="BOOK A SESSION">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php get_template_part('content', 'ourServicesCards'); ?>
		<section class="gallery">
			<div class="container">
				<div class="gallery__topPart">
					<div class="row t-c">
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
					<div class="row ">
						<?php
							// the query
							$the_gallery_query = new WP_Query(array(
								'category_name' => 'gallery',
								'post_status' => 'publish',
								'posts_per_page' => 6,
							));
						?>
						<?php 
							if($the_gallery_query->have_posts()) : $i = 0;

							while($the_gallery_query->have_posts()) : $the_gallery_query->the_post();  ?>

							<?php 
								if($i ==0): $column = 4; $class = ' galleryOne'; 
								elseif($i  > 0 && $i <= 1): $column = 4; $class = ' galleryTwo';
								elseif($i  > 1 && $i <= 2): $column = 4; $class = ' galleryThree';
								elseif($i  > 2 && $i <= 3): $column = 5; $class = ' galleryFour';
								elseif($i  > 3 && $i <= 4): $column = 4; $class = ' galleryFive';
								elseif($i  > 4 && $i <= 5): $column = 3; $class = ' gallerySix';
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
		</section>
		<section class="products">
			<div class="container">
				<div class="products__topPart">
					<div class="row t-c">
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
						<?php
							// the query
							$the_products_query = new WP_Query(array(
								'category_name' => 'products',
								'post_status' => 'publish',
								'posts_per_page' => 3,
							));
						?>
						<?php if($the_products_query->have_posts()) : ?>
                            <?php while($the_products_query->have_posts()) : $the_products_query->the_post();  ?>
							<div class="col-xl-4">
								<div class="products__botPart--card">
									<!-- img -->
									<div class="products__botPart--card_desc">
										<h5><?php the_title(); ?></h5>
										<p><?php the_excerpt(); ?></p>
									</div>
									<a class="products__botPart--card_link" href="#">BUY NOW</a>
									<div class="products__botPart--card_cost">
										<?php the_tags('', null, null);?>
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
		<?php get_template_part('content', 'discount'); ?>
		<?php get_template_part('content', 'pricing'); ?>
		<?php get_template_part('content', 'reviews'); ?>
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
<?php get_footer(); ?>