<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lista Hoteli</title>

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

	<div id="page">

	<header class="header menu_fixed">
		<div id="preloader"><div data-loader="circle-side"></div></div>
		<div id="logo">
			<a href="index.html">
				<img src="img/logo.png" width="150" height="36" data-retina="true" alt="" class="logo_normal">
				<img src="img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Zaloguj">Zaloguj</a></li>
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
				<li><span><a href={{url('/')}}>Strona Główna</a></span></li>
				<li><span><a href={{url('/lista.hoteli')}}>Hotele</a></span></li>
		</nav>
	</header>
	<!-- /header -->

	<main>

		<section class="hero_in hotels">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Lista hoteli</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="filters_listing sticky_horizontal">
			<div class="container">

			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->

		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60_35">
		<div class="col-lg-12">
			<div class="box_list">
				<div class="row no-gutters">

					<div class="col-lg-5">

						<figure>
							<a href="{{url('/hotel')}}"><img src="img/hotel_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="{{url('/hotel')}}">Pensjonat Bekas</a></h3>
							<p>PENSJONAT BEKAS oferuje swoim gościom namiastkę luksusu w przystępnej cenie z dala od zgiełku miasta.
								W samym sercu mazur, oko w oko z naturą, wieczorami gorycz standardu pokoju koi śpiew bekasów
								dobiegający przez dyktę zasłaniającą rozbite okna. Pensjonat BEKAS u nas stać Cię na mazury !</p>
							<span class="price">Od <strong>54 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure>
							<a href="{{url('/hotel')}}"><img src="img/hotel_2.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="{{url('/hotel')}}">Nad Jeziorem Kochle</a></h3>
							<p>Obiekt Nad Jeziorem Kochle położony w miejscowości Pszczew zapewnia ogród oraz taras.
							W obiekcie zapewniono wspólną kuchnię oraz bezpłatne WiFi we wszystkich pomieszczeniach.
							W każdej opcji zakwaterowania w obiekcie znajduje się szafa, telewizor z płaskim ekranem
							oraz prywatna łazienka. Pościel i ręczniki są zapewnione.</p>
							<span class="price">Od <strong>124 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure>
							<a href="{{url('/hotel')}}"><img src="img/hotel_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="{{url('/hotel')}}">Donna Mamma la Hotella</a></h3>
							<p>Obiekt położony jest w miejscowości Ejlat w regionie South District Israel
							i zapewnia bezpłatne WiFi oraz bezpłatny prywatny parking. W okolicy znajduje się: Neviot Beach i
							Promenada w mieście Eilat. W każdej opcji zakwaterowania znajduje się kuchnia z mikrofalówką oraz
							część wypoczynkowa z sofą. Wyposażenie obejmuje telewizor z płaskim ekranem z dostępem do kanałów
							satelitarnych, sprzęt do prasowania oraz biurko. Do dyspozycji Gości jest w pełni wyposażona prywatna
							łazienka z prysznicem i suszarką do włosów. Na terenie obiektu znajduje się taras.<p>
							<span class="price">Od <strong>45 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure>
							<a href="{{url('/hotel')}}"><img src="img/hotel_4.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="{{url('/hotel')}}">Uomo del Machineri Uno Duo</a></h3>
							<p>Wszystkie opcje zakwaterowania wyposażone są w lodówkę oraz telewizor z płaskim ekranem i dostępem
							do kanałów kablowych. Niektóre z nich dysponują balkonem oraz częścią wypoczynkową z sofą. W każdej opcji
							zakwaterowania mieści się również łazienka z wanną lub prysznicem, suszarką do włosów i bezpłatnym zestawem
							kosmetyków. Z okien roztaczają się widoki na miasto. Piaszczysta plaża oddalona jest od hotelu Soleil Boutique
							o 50 metrów. Goście mogą w kilka chwil dojść na przystanek lokalnych autobusów. Od lotniska w Ejlacie dzieli
							obiekt zaledwie 400 metrów.</p>
							<span class="price">Od <strong>25 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>9.0</strong></div></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->
			<div class="box_list">
				<div class="row no-gutters">
					<div class="col-lg-5">
						<figure>
							<a href="{{url('/hotel')}}"><img src="img/hotel_5.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
						</figure>
					</div>
					<div class="col-lg-7">
						<div class="wrapper">
							<a href="#0" class="wish_bt"></a>
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="{{url('/hotel')}}">Concorde Hotel</a></h3>
							<p>Rozległy kompleks już z zewnątrz zachwyca swych Gości, a to za sprawą futurystycznego
							wyglądu dachu w kształcie samolotu Concorde. Hotel usytuowany na powierzchni 62.000 m2.
							Do dyspozycji Gości 401 pokoi rozmieszczonymi na 7 piętrach. Są to pokoje standardowe i
							rodzinne. Każde wyposażone są w klimatyzację sterowaną centralnie, łazienkę z wanną lub
							prysznicem, suszarkę, telewizję, sejf, minibar, wykładzina lub laminat, balkon lub taras.
							Na terenie obiektu 7 restauracji oraz 10 barów. Do dyspozycji pralnia, sala konferencyjna
							oraz centrum biznesowe. Hotel przystosowany dla osób niepełnosprawnych. Internet na terenie
							hotelu bezpłatnie.</p>

							<span class="price">Od <strong>65 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>9.0</strong></div></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /box_list -->

			<p class="text-center add_top_60"><a href="#0" class="btn_1 rounded">Załaduj więcej</a></p>

		</div>

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
					Pecelt Dawid, Lingo Łukasz, Przybylski Mateusz</p>
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

	<div id="toTop"></div><!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>

	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/map_hotels.js"></script>
	<script src="js/infobox.js"></script>



</body>
</html>
