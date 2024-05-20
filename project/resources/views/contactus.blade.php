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
	<title>Contact Us | Pharmacy Files</title>
	<!-- Favicon Link -->
	<link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assetss/images/favicon/android-chrome-512x512.png') }}">
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
<body class="full-page">
	<!-- Header Section -->
	<header class="header">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="./">
					<img src="./assets/images/logo/logo.png" alt="Logo" class="navbar-brand__image">
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
							<a class="nav-link active" href="./contact.html">Contact Us</a>
						</li>
					</ul>
					<ul class="navbar-nav text-center align-items-center">
						<li class="nav-item">
							<button type="button" class="btn btn--transparent btn--transparent--primary" data-toggle="modal" data-target="#loginModal">Login</button>
						</li>
						<li class="nav-item">
							<button type="button" class="btn" data-toggle="modal" data-target="#registerModal">Register</button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- Off Canvas Menu Toggler -->
	<div class="offCanvasMenuCloser position-fixed" data-toggle="collapse" data-target="#navbarSupportedContent" role="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></div>

	<!-- Contact Section -->
	<section class="contact section-gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="section-header">
						<h1 class="section-header__title">If you have any questions! <br> Email us.</h1>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-block">
								<div class="contact-block__icon" data-aos="zoom-in">
									<i class="bi bi-envelope-fill"></i>
								</div>
								<div class="contact-block__content">
									<h4 class="contact-block__content__title">Emaıl</h4>
									<a href="mailto:yourname@address.com" class="contact-block__content__text">abdoelhosin250@gmail.com</a>
								</div>
							</div>
						</div>
					</div>
					<div class="submission-status-wrapper d-none">
						<div class="submission-status submission-status--success">
							Thank you 😊. Your submission has been received.
						</div>
					</div>
					<form action="#!" class="contact-form form needs-validation" novalidate data-aos="fade-up">
						<div class="form-row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name" name="first_name">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="last Name" name="last_name">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="tel" class="form-control" placeholder="Phone Number" name="phone_number">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="yourname@address.com *" name="email_address" required>
									<div class="invalid-tooltip">
										Please provide valid email address.
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<textarea class="form-control" placeholder="Type your message here" name="message" rows="5"></textarea>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn">Submit Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer Section -->
	<footer class="footer mt-auto">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-auto text-center text-md-left">
					<a href="./" class="footer-brand d-inline-block">
						<img src="./assets/images/logo/white-logo.png" alt="logo" class="footer-brand__image">
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
    <script src="{{ asset('assetss/plugins/aos/js/aos.js') }}"></script>
    <script src="{{ asset('assetss/plugins/parallax/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assetss/js/script.js') }}"></script>
	<script>
		/*  After Form Submit Functions */
		window.addEventListener('load', function() {
			var contactForms = document.getElementsByClassName('contact-form');
			Array.prototype.filter.call(contactForms, function(contactFrom) {
				contactFrom.addEventListener('submit', function(event) {
					if (contactFrom.checkValidity()) {
						event.preventDefault();
						contactFrom.classList.add('d-none');
						$(".submission-status-wrapper").removeClass("d-none");
					}
				}, false);
			});
		}, false);
	</script>
</body>
</html>