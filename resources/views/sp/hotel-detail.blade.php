<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hotel</title>

    <!-- IKONY-->
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

</head>

<body>

	<div id="page" class="theia-exception">

	<header class="header menu_fixed">
		<div id="preloader"><div data-loader="circle-side"></div></div>
		<div id="logo">
			<a href="index.html">
				<img src="img/logo.png" width="150" height="36" data-retina="true" alt="" class="logo_normal">
				<img src="img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Zaloguj">Sign In</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="index.html">Strona Główna</a></span></li>
				<li><span><a href="hotels-list.html">Hotele</a></span></li>
		</nav>
	</header>
	<!-- /header -->

	<main>
		<section class="hero_in hotels_detail">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Szczegóły Hotelu</h1>
				</div>
				<span class="magnific-gallery">
					<a href="img/gallery/hotel_list_1.jpg" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">Wyświetl galerię</a>
					<a href="img/gallery/hotel_list_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
					<a href="img/gallery/hotel_list_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
				</span>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">

			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
							<h2>Opis</h2>
							<p>Tu cza info z bazy danych pobierać</p>
							<div class="row">
								<div class="col-lg-6">
									<ul class="bullets">
										<li>pleśń</li>
										<li>śmieci</li>
										<li>syf</li>
										<li>gnój</li>
									</ul>
								</div>
							</div>
							<!-- /row -->
							<hr>
							<div class="room_type first">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_1.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Pokój Jednoosobowy</h4>
										<ul class="hotel_facilities">
											<li><img src="img/hotel_facilites_icon_2.svg" alt="">Pojedyńcze łóżko</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Darmowe Wifi</li>
											<li><img src="img/hotel_facilites_icon_5.svg" alt="">Prysznic</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Klimatyzacja</li>
											<li><img src="img/hotel_facilites_icon_8.svg" alt="">Suszarka</li>
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->
							<div class="room_type gray">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_2.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Pokój Dwuosobowy</h4>
										<ul class="hotel_facilities">
											<li><img src="img/hotel_facilites_icon_3.svg" alt="">Podwójne łóżko</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Darmowe Wifi</li>
											<li><img src="img/hotel_facilites_icon_6.svg" alt="">Wanna</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Klimatyzacja</li>
											<li><img src="img/hotel_facilites_icon_8.svg" alt="">Suszarka</li>
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->
							<div class="room_type last">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_3.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Apartament</h4>
										<ul class="hotel_facilities">

											<li><img src="img/hotel_facilites_icon_3.svg" alt="">Łóżko Królewskie</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Darmowe Wifi</li>
											<li><img src="img/hotel_facilites_icon_6.svg" alt="">Wanna</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Klimatyzacja</li>
											<li><img src="img/hotel_facilites_icon_9.svg" alt="">Basen</li>
											<li><img src="img/hotel_facilites_icon_3.svg" alt="">Suszarka</li>

										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->


						</section>
						<!-- /section -->


					</div>
					<!-- /col -->

					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
							<div class="price">
								<span>45 zł <small>od osoby</small></span>
							</div>

							<div class="form-group">
								<input class="form-control" type="text" name="dates" placeholder="Data..">
								<i class="icon_calendar"></i>
							</div>

							<div class="panel-dropdown">
								<a href="#">Goście <span class="qtyTotal">1</span></a>
								<div class="panel-dropdown-content right">
									<div class="qtyButtons">
										<label>Ilość?</label>
										<input type="text" name="qtyInput" value="1">
									</div>
								</div>
							</div>

							<div class="form-group clearfix">
								<div class="custom-select-form">
									<select class="wide">
										<option>Typ pokoju</option>
										<option>Jednoosobowy</option>
										<option>Dwuosobowy</option>
										<option>Apartament</option>
									</select>
								</div>
							</div>
							<a href="cart-1.html" class=" add_top_30 btn_1 full-width purchase">Zarezerwuj</a>
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->

	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo.png" width="150" height="36" data-retina="true" alt=""></p>
					<p>Projekt Laravel - Grupa K27<br>
                        Pecelt Dawid 111795, Lingo Łukasz 111344, Przybylski Mateusz 116213</p>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Przydatne linki</h5>
					<ul class="links">
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Rejestracja</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Kontakt</h5>
					<ul class="contacts">
						<li><a href="mailto:dawidpecelt@gmail.com"><i class="ti-email"></i> dawidpecelt@gmail.com</a></li>
						<li><a href="mailto:lukaszlingo@gmail.com"><i class="ti-email"></i> lukaszlingo@gmail.com</a></li>
						<li><a href="mailto:mprzybylski80@gmail.com"><i class="ti-email"></i> mprzybylski80@gmail.com</a></li>
					</ul>
				</div>
			</div>
	<!--/footer-->
	</div>
	<!-- page -->

	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Panel logowania</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Hasło</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Zapamiętaj mnie
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Nie masz konta? <a href="register.html">Zarejestruj się</a>
				</div>
			</div>
		</form>

	</div>
	<!-- /Sign In Popup -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>

	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/map_single_hotel.js"></script>
	<script src="js/infobox.js"></script>

	<!-- DATEPICKER  -->
	<script>
	$(function() {
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
		  opens: 'left',
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
	  });
	  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		  $(this).val('');
	  });
	});
	</script>

	<!-- INPUT QUANTITY  -->
	<script src="js/input_qty.js"></script>

	<!-- INSTAGRAM FEED  -->
	<script>
	$(window).on('load', function(){
			"use strict";
			$.instagramFeed({
				'username': 'hotelwailea',
				'container': "#instagram-feed-hotel",
				'display_profile': false,
				'display_biography': false,
				'display_gallery': true,
				'get_raw_json': false,
				'callback': null,
				'styling': true,
				'items': 12,
				'items_per_row': 6,
				'margin': 1
			});
		});
	</script>



</body>
</html>
