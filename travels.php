<?php

require 'db/db.php';

$wczasy = R::findAll('wczasy');

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
								<li class="active"><a href="travels">Wczasy</a></li>
								<li><a href="car">Samochody</a></li>
								<li><a href="contact">Kontakty</a></li>
								<li><a href="admin/login">Login</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
					<div class="desc">
						<div class="container">
							<div class="row">
								<div class="col-md-5"></div>
								<div class="desc2 animate-box">
									<div class="col-md-7 col-md-push-1">
										<h2>Ekskluzywna oferta czasowo ograniczona</h2>
										<h3>Hong Kong przez Los Angeles!</h3>
										<span class="price">2499 zł</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div id="fh5co-tours" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>Nasze wczasy</h3>
							<p>Daleko, za słowami gór, daleko od krajów Vokalia i Consonantia, żyją niewidome teksty. Znajdź tu wymarzone miejsce na wakacje!</p>
						</div>
					</div>
					<div class="row">
						<?php foreach ($wczasy as $key) { ?>
							<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
								<div href="#"><img src="images/<?php echo $key['image']; ?>" alt="" class="img-responsive">
									<div class="desc">
										<span></span>
										<h3><?php echo $key['name']; ?></h3>
										<span><?php echo $key['description']; ?></span>
										<span class="price"><?php echo $key['price']; ?> zł</span>
										<a class="btn btn-primary btn-outline" href="contact">Rezerwuj teraz <i class="icon-arrow-right22"></i></a>
									</div>
								</div>
							</div>
						<?php } ?>
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