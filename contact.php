<?php
require 'db/db.php';

if (isset($_POST['send'])) {
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['text'])) {
		$contact = R::dispense('contact');

		$contact->name = $_POST['name'];
		$contact->email = $_POST['email'];
		$contact->text = $_POST['text'];

		R::store($contact);

		header('Location: /contact?s=success');
	} else {
		header('Location: /contact?s=error');
	}
}
?>
<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="images/favicon.png">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="/"><i class="icon-airplane"></i>Travel</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a href="travels">Wczasy</a></li>
								<li><a href="car">Samochody</a></li>
								<li class="active"><a href="contact">Kontakty</a></li>
								<li><a href="admin/login">Login</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->

			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_2.jpg);">
					<div class="desc">
						<div class="container">
							<div class="row">
								<div class="col-md-5"></div>
								<div class="desc2 animate-box">
									<div class="col-md-7 col-md-push-1">
										<?php if ($_GET['s'] == 'success') { ?>
											<h2>Wiadomość została wysłana!</h2>
											<h3>Czekaj odpowiedzi w najbliższym czasie!</h3>
										<?php } elseif ($_GET['s'] == 'error') { ?>
											<h2>Błąd przy wysyłaniu wiadomośći!</h2>
											<h3>Sprawdź pola!</h3>
										<?php } else { ?>
											<h2>Twoja wymorzona wycieczka już teraz!</h2>
											<h3>Skontaktuj się z nami przez formę niżej!</h3>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>


			<div id="fh5co-contact" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Skontaktuj się z nami!</h3>
							<p>Daleko, za słowami gór, daleko od krajów Vokalia i Consonantia, żyją niewidome teksty. Znajdź tu wymarzone miejsce na wakacje!</p>
						</div>
					</div>
					<form action="" method="post">
						<div class="row animate-box">
							<div class="col-md-6">
								<h3 class="section-title">Nasz Oddział</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<ul class="contact-info">
									<li><i class="icon-location-pin"></i>rynek Starego Miasta, 00-279 Warszawa</li>
									<li><i class="icon-phone2"></i>+48 735 481 123</li>
									<li><i class="icon-mail"></i><a href="#">info@travel.com</a></li>
									<li><i class="icon-globe2"></i><a href="#">www.travel.com</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="name" class="form-control" placeholder="Imię" required />
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Email" required />
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea name="text" class="form-control" id="" cols="30" rows="7" placeholder="Wiadomość" required></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="submit" name="send" value="Wyślij" class="btn btn-primary" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Happy Clients</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="box-testimony animate-box">
								<blockquote>
									<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
									<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
								<p class="author">John Doe, CEO <span class="subtext">Creative Director</span></p>
							</div>

						</div>
						<div class="col-md-4">
							<div class="box-testimony animate-box">
								<blockquote>
									<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
									<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
								</blockquote>
								<p class="author">John Doe, CEO <span class="subtext">Creative Director</span></p>
							</div>


						</div>
						<div class="col-md-4">
							<div class="box-testimony animate-box">
								<blockquote>
									<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
									<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
								<p class="author">John Doe, Founder <span class="subtext">Creative Director</span></p>
							</div>

						</div>
					</div>
				</div>
			</div>


			<?php include 'includes/footer.php'; ?>


		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>

	<!-- Main JS -->
	<script src="js/main.js"></script>

</body>

</html>