<?php
require 'db/db.php';

$gorace = R::findAll('wczasy', 'LIMIT 3');
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
									<div class="col-12 col-md-7 col-md-push-1">
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
							<h3>Gorące wczasy</h3>
							<p>Daleko, za słowami gór, daleko od krajów Vokalia i Consonantia, żyją niewidome teksty. Znajdź tu wymarzone miejsce na wakacje!</p>
						</div>
					</div>
					<div class="row">
						<?php foreach ($gorace as $key) { ?>
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
						<div class="col-md-12 text-center animate-box">
							<p><a class="btn btn-primary btn-outline btn-lg" href="travels">Zobacz wszystkie <i class="icon-arrow-right22"></i></a></p>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-features">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">

							<div class="feature-left">
								<span class="icon">
									<i class="icon-hotairballoon"></i>
								</span>
								<div class="feature-copy">
									<h3>Family Travel</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
									<p><a href="https://www.google.com/search?q=Famil+Travel" target="_blank">Learn More</a></p>
								</div>
							</div>

						</div>

						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-search"></i>
								</span>
								<div class="feature-copy">
									<h3>Travel Plans</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
									<p><a href="https://www.google.com/search?q=Travel+Plans" target="_blank">Learn More</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-wallet"></i>
								</span>
								<div class="feature-copy">
									<h3>Honeymoon</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
									<p><a href="https://www.google.com/search?q=Honeymoon" target="_blank">Learn More</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 animate-box">

							<div class="feature-left">
								<span class="icon">
									<i class="icon-wine"></i>
								</span>
								<div class="feature-copy">
									<h3>Business Travel</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
									<p><a href="https://www.google.com/search?q=Business+Travel" target="_blank">Learn More</a></p>
								</div>
							</div>

						</div>

						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-genius"></i>
								</span>
								<div class="feature-copy">
									<h3>Solo Travel</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
									<p><a href="https://www.google.com/search?q=Solo+Travel" target="_blank">Learn More</a></p>
								</div>
							</div>

						</div>
						<div class="col-md-4 animate-box">
							<div class="feature-left">
								<span class="icon">
									<i class="icon-chat"></i>
								</span>
								<div class="feature-copy">
									<h3>Explorer</h3>
									<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
									<p><a href="https://www.google.com/search?q=Explorer" target="_blank">Learn More</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div id="fh5co-destination">
				<div class="tour-fluid">
					<div class="row">
						<div class="col-md-12">
							<ul id="fh5co-destination-list" class="animate-box">
								<li class="one-forth text-center" style="background-image: url(images/place-1.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Los Angeles</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-2.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Hongkong</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-3.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Italy</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-4.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Philippines</h2>
										</div>
									</a>
								</li>

								<li class="one-forth text-center" style="background-image: url(images/place-5.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Japan</h2>
										</div>
									</a>
								</li>
								<li class="one-half text-center">
									<div class="title-bg">
										<div class="case-studies-summary">
											<h2>Najpopularniejsze miejsca docelowe</h2>
											<span><a href="travels">Zobacz wszystkie</a></span>
										</div>
									</div>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-6.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Paris</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-7.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Singapore</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-8.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Madagascar</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-9.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Egypt</h2>
										</div>
									</a>
								</li>
								<li class="one-forth text-center" style="background-image: url(images/place-10.jpg); ">
									<a href="#">
										<div class="case-studies-summary">
											<h2>Indonesia</h2>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-blog-section" class="fh5co-section-gray"></div>

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
								<p class="author">Agnieszka, CEO<span class="subtext">Creative Director</span></p>
							</div>

						</div>
						<div class="col-md-4">
							<div class="box-testimony animate-box">
								<blockquote>
									<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
									<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
								</blockquote>
								<p class="author">Paweł, CEO<span class="subtext">Creative Director</span></p>
							</div>


						</div>
						<div class="col-md-4">
							<div class="box-testimony animate-box">
								<blockquote>
									<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
									<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
								</blockquote>
								<p class="author">Dominika, Founder<span class="subtext">Creative Director</span></p>
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