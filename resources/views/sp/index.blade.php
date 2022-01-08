<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Strona Główna</title>

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
			@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
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
            </ul>
		</nav>
	</header>
	<!-- /header -->

	<main>
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
					<h3>Zarezerwuj wymarzony nocleg!</h3>
					<p>U nas, stać cię na wakacje.</p>
					<form>
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Wyszukaj hotel">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-2">
								<input type="submit" class="btn_search" value="Szukaj">
							</div>
						</div>
						<!-- /row -->
					</form>
				</div>
			</div>
		</section>
		<div class="container container-custom margin_30_95">
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Popularne miejsca</h2>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{{url('/hotel')}}" class="grid_item">
							<figure>
								<div class="score"><strong>8.9</strong></div>
								<img src="img/hotel_1.jpg" class="img-fluid" alt="">
								<div class="info">
									<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>Pensjonat Bekas</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{{url('/hotel')}}" class="grid_item">
							<figure>
								<div class="score"><strong>6.9</strong></div>
								<img src="img/hotel_2.jpg" class="img-fluid" alt="">
								<div class="info">
									<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>Nad Jeziorem Kochle </h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{{url('/hotel')}}" class="grid_item">
							<figure>
								<div class="score"><strong>7.0</strong></div>
								<img src="img/hotel_3.jpg" class="img-fluid" alt="">
								<div class="info">
									<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>Donna Mamma la Hotella</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{{url('/hotel')}}" class="grid_item">
							<figure>
								<div class="score"><strong>8.9</strong></div>
								<img src="img/hotel_4.jpg" class="img-fluid" alt="">
								<div class="info">
									<div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
									<h3>Uomo del Machineri Uno Duo</h3>
								</div>
							</figure>
						</a>
					</div>
					<!-- /grid_item -->
				</div>
				<!-- /row -->
				<a href="{{url('/lista.hoteli')}}"><strong>Zobacz wszystko <i class="arrow_carrot-right"></i></strong></a>
			</section>
		</div>

	</main>
	<!-- /main -->

	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo.png" width="150" height="36" data-retina="true" alt=""></p>
					<p>Projekt Laravel - Grupa K27<br>
					Pecelt Dawid 111795, Lingo Łukasz 111344, Przybylski Mateusz 116213</p>
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
	<!-- /Sign In Popup -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
		<!-- DATEPICKER  -->
	<script>
	$(function() {
	  'use strict';
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
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


</body>
</html>
