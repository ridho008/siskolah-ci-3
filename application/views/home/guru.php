<!-- Home -->
<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="<?= base_url(); ?>">Home</a></li>
							<li>Guru</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>


<!-- Contact -->

<div class="contact">

	<!-- Contact Info -->

	<div class="contact_info_container">
		<div class="container">
			<div class="row">
				<!-- Team -->
					<div class="team">
						<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="section_title_container text-center">
										<h2 class="section_title">The Best Tutors in Town</h2>
										<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
									</div>
								</div>
							</div>
							<div class="row team_row">
								
								<!-- Team Item -->
								<?php foreach($guru as $g) : ?>
								<div class="col-lg-3 col-md-6 team_col">
									<div class="team_item">
										<div class="team_image"><img src="<?= base_url('assets/back/img/guru/' . $g->foto_guru); ?>" alt=""></div>
										<div class="team_body">
											<div class="team_title"><a href="#"><?= $g->nama_guru . ' / ' . $g->pendidikan; ?></a></div>
											<div class="team_subtitle"><?= $g->nama_mapel; ?></div>
											<div class="social_list">
												<ul>
													<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>

								

							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- Newsletter -->

<div class="newsletter">
	<div class="newsletter_background" style="background-image:url(<?= base_url('assets/front/') ?>images/newsletter_background.jpg)"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

					<!-- Newsletter Content -->
					<div class="newsletter_content text-lg-left text-center">
						<div class="newsletter_title">sign up for news and offers</div>
						<div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
					</div>

					<!-- Newsletter Form -->
					<div class="newsletter_form_container ml-lg-auto">
						<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
							<input type="email" class="newsletter_input" placeholder="Your Email" required="required">
							<button type="submit" class="newsletter_button">subscribe</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>