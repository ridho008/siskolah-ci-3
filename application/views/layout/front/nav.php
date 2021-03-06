<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="<?= base_url(); ?>">
									<div class="logo_text">SMK MUDA<span>2</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="<?= $this->uri->segment(1) != 'tentang' || $this->uri->segment(2) != 'berita' ? ' active' : '' ?>"><a href="<?= base_url(); ?>">Home</a></li>
									
									<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sekolah
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item<?= $this->uri->segment(1) == 'guru' ? ' active' : '' ?>" href="<?= base_url('guru'); ?>">Guru</a>
          <a class="dropdown-item<?= $this->uri->segment(1) == 'siswa' ? ' active' : '' ?>" href="<?= base_url('siswa'); ?>">Siswa</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="<?= base_url('profile'); ?>">Profile</a>
        </div>
      </li>
									<li class="<?= $this->uri->segment(1) == 'tentang' ? ' active' : '' ?>"><a href="<?= base_url('tentang'); ?>">Tentang</a></li>
									<li class="<?= $this->uri->segment(2) == 'berita' ? ' active' : '' ?>"><a href="<?= base_url('home/berita'); ?>">Berita</a></li>
									<li class="<?= $this->uri->segment(2) == 'downloads' ? ' active' : '' ?>"><a href="<?= base_url('home/downloads'); ?>">Download</a></li>
									<li class="<?= $this->uri->segment(1) == 'galeri' ? ' active' : '' ?>"><a href="<?= base_url('galeri'); ?>">Galeri</a></li>
								</ul>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								<!-- <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div> -->
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="#">Tentang</a></li>
				<li class="menu_mm"><a href="#">Berita</a></li>
				<li class="menu_mm"><a href="#">Download</a></li>
				<li class="menu_mm"><a href="#">Galeri</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
			</ul>
		</nav>
	</div>