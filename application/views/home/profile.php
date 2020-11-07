<!-- Home -->
<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="<?= base_url(); ?>">Home</a></li>
							<li>Galeri</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>


<!-- Team -->

	<div class="team">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Profile Kepala Sekolah</h2>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col offset-lg-3">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('assets/back/img/kepsek/' . $setting->foto_kepsek); ?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#"><?= $setting->kepsek; ?></a></div>
							<div class="team_subtitle"><?= $setting->nip; ?></div>
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

				<!-- Team Item -->
				<div class="col-lg-6 col-md-6">
					<div class="team_item">
						<!-- <div class="team_body"></div> -->

							<h4 class="section_title">Kepala Sekolah : <?= $setting->kepsek; ?></h4>
							<h4 class="section_title">NIP : <?= $setting->nip; ?></h4>
							<h4 class="section_title">Telepon : <?= $setting->telp; ?></h4>
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
		</div>
	</div>


<!-- Feature -->

<div class="feature">
	<div class="feature_background" style="background-image:url(<?= base_url('assets/front/'); ?>images/courses_background.jpg)"></div>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="section_title_container text-center">
					<h2 class="section_title">Profile Sekolah SMK MUDA 2</h2>
				</div>
			</div>
		</div>
		<div class="row feature_row">

			<!-- Feature Content -->
			<div class="col-lg-6 feature_col">
				<div class="feature_content">
					<!-- Accordions -->
					<div class="accordions">
						
						<div class="elements_accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>VISI</div></div>
								<div class="accordion_panel">
									<p><?= $setting->visi; ?></p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>MISI</div></div>
								<div class="accordion_panel">
									<p><?= $setting->misi; ?></p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Sejarah</div></div>
								<div class="accordion_panel">
									<p><?= $setting->sejarah; ?></p>
								</div>
							</div>

						</div>

					</div>
					<!-- Accordions End -->
				</div>
			</div>

			<!-- Feature Video -->
			<div class="col-lg-6 feature_col">
				<div class="feature_video d-flex flex-column align-items-center justify-content-center">
					<div class="feature_video_background" style="background-image:url(<?= base_url('assets/front/'); ?>images/video.jpg)"></div>
					<a class="vimeo feature_video_button" href="https://player.vimeo.com/video/99340873?title=0" title="OH, PORTUGAL - IN 4K - Basti Hansen - Stock Footage">
						<img src="<?= base_url('assets/front/'); ?>images/play.png" alt="">
					</a>
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