<!-- Home -->
<div class="home">
	<div class="breadcrumbs_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="breadcrumbs">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Contact</li>
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
				<div class="col-lg">
					<h2>Download Area</h2>
					<div class="table-responsive">
						<table class="table table-bordered text-center">
							<thead>
								<tr>
									<th>No</th>
									<th>Keterangan</th>
									<th>Download</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($file as $f) : ?>
                                    <tr>
                                    	<td><?= ++$start; ?></td>
                                    	<td><?= $f->nama_file; ?></td>
                                    	<td><a href="<?= base_url('assets/back/file/' . $f->file); ?>" class="btn btn-info btn-sm">Download</a></td>
                                    </tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<?= $this->pagination->create_links(); ?>
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