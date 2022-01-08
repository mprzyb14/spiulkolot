<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rejestracja</title>

    <!-- IKONY-->
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">

    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

</head>

<body id="register_bg">

	<nav id="menu" class="fake_menu"></nav>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="img/logo_sticky.png" width="155" height="36" data-retina="true" alt="" class="logo_sticky"></a>
			</figure>
			<form autocomplete="off">
				<div class="form-group">
					<label>Imię</label>
					<input class="form-control" type="text">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Nazwisko</label>
					<input class="form-control" type="text">
					<i class="ti-user"></i>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" type="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Hasło</label>
					<input class="form-control" type="password" id="password1">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="form-group">
					<label>Powtórz hasło</label>
					<input class="form-control" type="password" id="password2">
					<i class="icon_lock_alt"></i>
				</div>
				<div id="pass-info" class="clearfix"></div>
				<a href="#0" class="btn_1 rounded full-width add_top_30">Zajerestruj się</a>
				<div class="text-center add_top_10">Masz już konto? <strong><a href="login.html">Zaloguj się!</a></strong></div>
			</form>
      <div class="copy">© 2021 Śpiulkolot</div>
      <!-- automat do wklepywania danego roku w stopce <?php echo date("Y");?> -->
		</aside>
	</div>
	<!-- /login -->

	<!-- COMMON SCRIPTS -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>



</body>
</html>
