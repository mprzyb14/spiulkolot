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
				<li><span><a href="index.html">Strona Główna</a></span></li>
				<li><span><a href="hotels-list.html">Hotele</a></span></li>
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
				<ul class="clearfix">
					<li>
						<div class="switch-field">
							<input type="radio" id="all" name="listing_filter" value="all" checked data-filter="*" class="selected">
							<label for="all">Wszystkie</label>
							<input type="radio" id="popular" name="listing_filter" value="popular" data-filter=".popular">
							<label for="popular">Popularne</label>
						</div>
					</li>
					<li>
						<div class="layout_view">
							<a href="hotels-list.html"><i class="icon-th-list"></i></a>
						</div>
					</li>
					<li>
						<a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">Pokaż na mapie</a>
					</li>
				</ul>
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
				<div class="row no-gutters custom-search-input-2 inner">
					<div class="col-lg-4">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Czego szukasz?">
							<i class="icon_search"></i>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Gdzie?">
							<i class="icon_pin_alt"></i>
						</div>
					</div>
					<div class="col-lg-3">
						<select class="wide">
							<option>Pokoje jednosobowe</option>	
							<option>Pokoje dwuosobowe</option>	
							<option>Apartamenty</option>	
						</select>
					</div>
					<div class="col-lg-2">
						<input type="submit" class="btn_search" value="Szukaj">
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /custom-search-input-2 -->
			
			<div class="isotope-wrapper">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="hotel-detail.html"><img src="img/hotel_1.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
						</figure>
						<div class="wrapper">
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="hotel-detail.html">Pensjonat Bekas</a></h3>
							<p>PENSJONAT BEKAS oferuje swoim gościom namiastkę luksusu w przystępnej cenie z dala od zgiełku miasta ...</p>
							<span class="price">Od <strong>54 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="hotel-detail.html"><img src="img/hotel_2.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>	
						</figure>
						<div class="wrapper">
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="hotel-detail.html">Nad Jeziorem Kochle</a></h3>
							<p>Obiekt Nad Jeziorem Kochle położony w miejscowości Pszczew zapewnia ogród oraz taras ...</p>
							<span class="price">Od <strong>124 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="hotel-detail.html"><img src="img/hotel_3.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
							
						</figure>
						<div class="wrapper">
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="hotel-detail.html">Donna Mamma la Hotella</a></h3>
							<p>Obiekt położony jest w miejscowości Ejlat w regionie South District Israel
							i zapewnia bezpłatne WiFi ...</p>
							<span class="price">Od <strong>25 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>7.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="hotel-detail.html"><img src="img/hotel_4.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
							
						</figure>
						<div class="wrapper">
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="hotel-detail.html">Uomo del Machineri Uno Duo</a></h3>
							<p>Wszystkie opcje zakwaterowania wyposażone są w lodówkę oraz
							telewizor z płaskim ekranem i dostępem do kanałów kablowych ...</p>
							<span class="price">Od <strong>45 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>9.0</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="hotel-detail.html"><img src="img/hotel_5.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
						</figure>
						<div class="wrapper">
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="hotel-detail.html">Concorde Hotel</a></h3>
							<p>Rozległy kompleks już z zewnątrz zachwyca swych Gości, a to za sprawą 
							futurystycznego wyglądu dachu w kształcie samolotu ...</p>
							<span class="price">Od <strong>65 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>7.5</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item latest">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="hotel-detail.html"><img src="img/hotel_6.jpg" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Dowiedz się więcej</span></div></a>
							
						</figure>
						<div class="wrapper">
							<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
							<h3><a href="hotel-detail.html">Hotel Cristal</a></h3>
							<p>Czterogwiazdkowy hotel położony w centrum Białegostoku, z ponad 65-letnią tradycją 
							hotelarską to doskonałe miejsce ...</p>
							<!-- /Czterogwiazdkowy hotel położony w centrum Białegostoku, z ponad 65-letnią tradycją 
							hotelarską to doskonałe miejsce do odpoczynku. Budynek usytuowany jest w pięknej okolicy,
							przy reprezentacyjnej ulicy Lipowej. W sąsiedztwie znajduje się miejski rynek, zabytkowy 
							ratusz, liczne sklepy, restauracje, banki oraz kluby. W 2019 roku Hotel znalazł się w 
							gronie 100 najlepszych hoteli w Polsce, a w 2018 roku sieć Best Western przyznała Hotelowi
							nagrodę Best Customer Service – za najlepszą obsługę gości, a restauracji hotelowej Best 
							Breakfast – za najlepsze śniadania wśród hoteli sieci Best Western. -->
							<span class="price">Od <strong>95 zł</strong> /za osobę</span>
						</div>
						<ul>
							<li><i class="ti-eye"></i> 164 wyświetleń</li>
							<li><div class="score"><span><em>350 Recenzji</em></span><strong>7.8</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /box_grid -->
			</div>
			<!-- /row -->
			</div>
			<!-- /isotope-wrapper -->
			
			<p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Załaduj więcej</a></p>
			
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
					Pecelt Dawid, Lingo Łukasz, Przybylski Mateusz</p>
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
	<script src="js/markerclusterer.js"></script>
	<script src="js/map_hotels.js"></script>
	<script src="js/infobox.js"></script>
	
	<!-- Masonry Filtering -->
	<script src="js/isotope.min.js"></script>
	<script>
	$(window).load(function(){
	  var $container = $('.isotope-wrapper');
	  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
	});

	$('.filters_listing').on( 'click', 'input', 'change', function(){
	  var selector = $(this).attr('data-filter');
	  $('.isotope-wrapper').isotope({ filter: selector });
	});
	</script>
	
	
  
</body>
</html>