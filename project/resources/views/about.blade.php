<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Site Meta Data -->
    <meta name="author" content="Pharmacy Files">
    <meta name="description" content="designed for patient focused care">
    <meta name="keywords" content="patient, care, pharmacy, pharmacy files, pharmacy-files">
	<!-- Site Title -->
	<title>Pharmacy Files | Designed for Patient-Focused Care</title>
	<!-- Favicon Link -->
	<link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assetsss/images/favicon/android-chrome-512x512.png') }}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assetss/images/favicon/android-chrome-192x192.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assetss/images/favicon/apple-touch-icon.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assetss/images/favicon/favicon-32x32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assetss/images/favicon/favicon-16x16.png') }}">
	<link rel="icon" type="image/x-icon" href="{{ asset('assetss/images/favicon/favicon.ico') }}">
	<!-- All CSS -->
	<link rel="stylesheet" href="{{ asset('assetss/plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assetss/plugins/aos/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('assetss/css/style.min.css') }}">
	
</head>
<body>
	<!-- Header Section -->
	<header class="header">
		<nav class="navbar navbar-expand-lg">

			@if (Auth::check())   
			<form action="{{route('logout')}}" method="POST" >
				@csrf
				<button type="submit" class="btn"  >log out</button>	
			</form>
			@endif
			
	 
			<div class="container">
				<a class="navbar-brand" href="./">
					<img src="./assetss/images/logo/logo.png" alt="Logo" class="navbar-brand__image">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<i class="bi bi-list navbar-toggler__icon navbar-toggler__icon--open"></i>
					<i class="bi bi-x-lg navbar-toggler__icon navbar-toggler__icon--close"></i>
				</button>
			
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center mx-auto">
						<li class="nav-item">
							<a class="nav-link" href="./about.html">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="{{route('portfolio')}}">Portfolio</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="./contact.html">Contact Us</a>
						</li>
						@if (Auth::check()&&  Auth::user()->user_type==1)
						<li class="nav-item">
							<a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
						</li>
						@endif
					</ul>
					<ul class="navbar-nav text-center align-items-center">
						<li class="nav-item">
							<button type="button" class="btn btn--transparent btn--transparent--primary" data-toggle="modal" data-target="#loginModal">Login</button>
						</li>
						<li class="nav-item">
							<button type="button" class="btn" data-toggle="modal" data-target="#registerModal">Register</button>
						</li>
						<li class="nav-item">
							@if (Auth::check())   
								<p class="text__container__text">Hello, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }} !</p>  
							@endif
						</li>

					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Off Canvas Menu Toggler -->
	<div class="offCanvasMenuCloser position-fixed" data-toggle="collapse" data-target="#navbarSupportedContent" role="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></div>

	<!-- Banner Section -->
	<section class="banner" data-parallax="scroll" data-image-src="./assetss/images/banners/banner.jpg"></section>

	<!-- Details Section -->
	<section class="details section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center" data-aos="fade-up">
					<div class="text__container mx-auto">
						<p class="text__container__text">Pharmacy Files allow users to store and organize their clinical documentations of their patient care. It has document templates for users to clearly communicate their medication-related or drug-related problems (MRP/DRP) and recommendations.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Features Section -->
	<section class="features section-gap section-gap--fix">
		<div class="container">
			<div class="row match-height">
				<div class="col-12">
					<div class="section-header">
						<h1 class="section-header__title">Features</h1>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6" data-aos="fade-up">
					<div class="features__card">
						<div class="features__card__icon">
							<img src="./assetss/images/icons/medicine.png" alt="icons" class="features__card__icon__image">
						</div>
						<h3 class="features__card__title">Pharmacy</h3>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
					<div class="features__card">
						<div class="features__card__icon">
							<img src="./assetss/images/icons/folder.png" alt="icons" class="features__card__icon__image">
						</div>
						<h3 class="features__card__title">Communation</h3>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
					<div class="features__card">
						<div class="features__card__icon">
							<img src="./assetss/images/icons/task.png" alt="icons" class="features__card__icon__image">
						</div>
						<h3 class="features__card__title">Organization</h3>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6" data-aos="fade-up">
					<div class="features__card">
						<div class="features__card__icon">
							<img src="./assetss/images/icons/heart.gif" alt="icons" class="features__card__icon__image">
						</div>
						<h3 class="features__card__title">Care</h3>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
					<div class="features__card">
						<div class="features__card__icon">
							<img src="./assetss/images/icons/ambulance.png" alt="icons" class="features__card__icon__image">
						</div>
						<h3 class="features__card__title">Efficient</h3>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
					<div class="features__card">
						<div class="features__card__icon">
							<img src="./assetss/images/icons/folder.png" alt="icons" class="features__card__icon__image">
						</div>
						<h3 class="features__card__title">Secure</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Steps Section -->
	<section class="steps section-gap section-gap--fix">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-header">
						<h1 class="section-header__title">File Examples</h1>
					</div>
				</div>
			</div>
			<div class="row justify-content-center section-zikzak">
				<div class="col-lg-4 col-sm-6" data-aos="fade-up">
					<div class="steps__card">
						<div class="steps__card__counter" data-aos="zoom-in"></div>
						<h3 class="steps__card__title">File #1</h3>
						<a href="#!" class="btn">Download</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
					<div class="steps__card">
						<div class="steps__card__counter" data-aos="zoom-in"></div>
						<h3 class="steps__card__title">File #2</h3>
						<a href="#!" class="btn">Download</a>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
					<div class="steps__card">
						<div class="steps__card__counter" data-aos="zoom-in"></div>
						<h3 class="steps__card__title">File #3</h3>
						<a href="#!" class="btn">Download</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer Section -->
	<footer class="footer">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-auto text-center text-md-left">
					<a href="./" class="footer-brand d-inline-block">
						<img src="./assetss/images/logo/white-logo.png" alt="logo" class="footer-brand__image">
					</a>
				</div>
				<div class="col-md-auto text-center mx-auto my-3 my-md-0">
					<p class="footer__copyright mb-0">Copyright © 2022 <a href="./" class="footer__copyright__link">Pharmacy Files</a></p>
				</div>
				<div class="col-md-auto text-center text-md-right">
					<ul class="footer-nav list-inline mb-0">
						<li class="list-inline-item">
							<a href="#!" class="footer-nav__link">Terms</a>
						</li>
						<li class="list-inline-item">
							<a href="#!" class="footer-nav__link">Privacy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Register Modal -->
	<div class="modal fade" id="registerModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
					<i class="bi bi-x-lg"></i>
				</button>
				<div class="modal-body">
					<form action="#!" class="form needs-validation" novalidate>
						<div class="form-row">
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-group-label">
										<span class="form-group-label__text">First Name <span class="text-danger">*</span></span>
										<input type="text" class="form-control" name="register_name" required>
										<div class="invalid-tooltip">
											Please provide name.
										</div>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-group-label">
										<span class="form-group-label__text">last Name</span>
										<input type="text" class="form-control">
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-group-label">
										<span class="form-group-label__text">Telephone <span class="text-danger">*</span></span>
										<input type="tel" class="form-control" name="register_telephone" required>
										<div class="invalid-tooltip">
											Please provide telephone number.
										</div>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-group-label">
										<span class="form-group-label__text">Email <span class="text-danger">*</span></span>
										<input type="email" class="form-control" name="register_email" placeholder="yourname@address.com" required>
										<div class="invalid-tooltip">
											Please provide valid email address.
										</div>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-group-label">
										<span class="form-group-label__text">Password <span class="text-danger">*</span></span>
										<div class="password-wrapper">
											<input type="password" class="form-control" name="register_password" required>
											<button type="button" class="password-toggler">
												<i class="bi bi-eye-fill"></i>
											</button>
											<div class="invalid-tooltip">
												Please enter valid password.
											</div>
										</div>
									</label>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label class="form-group-label">
										<span class="form-group-label__text">Re-enter Password <span class="text-danger">*</span></span>
										<div class="password-wrapper">
											<input type="password" class="form-control" name="register_re-password" required>
											<button type="button" class="password-toggler">
												<i class="bi bi-eye-fill"></i>
											</button>
											<div class="invalid-tooltip">
												Please enter valid password.
											</div>
										</div>
									</label>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<span class="form-group-label__text">Are you a medical professional? <span class="text-danger">*</span></span>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="professional_status_yes" name="register_professional_status" value="yes" class="custom-control-input" required>
										<label class="custom-control-label" for="professional_status_yes">Yes</label>
									</div>
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="professional_status_no" name="register_professional_status" value="no" class="custom-control-input" required>
										<label class="custom-control-label" for="professional_status_no">No</label>
									</div>
								</div>
							</div>
							<div class="col-md-6 mx-auto mt-3">
								<button type="submit" class="btn w-100">Sign Up</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Log In Modal -->
	<div class="modal fade" id="loginModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
					<i class="bi bi-x-lg"></i>
				</button>
				<div class="modal-body">
					<form action="#!" class="form needs-validation" novalidate>
						<div class="form-row">
							<div class="col-12">
								<div class="form-group">
									<label class="form-group-label">
										<span class="form-group-label__text">Email <span class="text-danger">*</span></span>
										<input type="email" class="form-control" placeholder="yourname@address.com" name="login_email" required>
										<div class="invalid-tooltip">
											Please provide valid email address.
										</div>
									</label>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label class="form-group-label">
										<span class="form-group-label__text">Password <span class="text-danger">*</span></span>
										<div class="password-wrapper">
											<input type="password" class="form-control" name="login_password" required>
											<button type="button" class="password-toggler">
												<i class="bi bi-eye-fill"></i>
											</button>
											<div class="invalid-tooltip">
												Please provide your password.
											</div>
										</div>
									</label>
								</div>
							</div>
							<div class="col-12 mt-3">
								<button type="submit" class="btn w-100">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Scroll To Top Button -->
	<div class="scroll-top position-fixed">
		<button class="scroll-top__btn border-0 d-inline-flex align-items-center justify-content-center">
			<i class="bi bi-chevron-up"></i>
		</button>
	</div>

	<!-- All Scripts -->
	<script src="{{ asset('assetss/js/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ asset('assetss/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- <script src="{{ asset('assetss/plugins/slick-slider/js/slick.js') }}"></script> -->
	<script src="{{ asset('assetss/plugins/aos/js/aos.js') }}"></script>
	<script src="{{ asset('assetss/plugins/parallax/js/parallax.min.js') }}"></script>
	<script src="{{ asset('assetss/js/script.js') }}"></script>
	
</body>
</html>