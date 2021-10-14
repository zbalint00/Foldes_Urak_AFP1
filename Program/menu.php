<?php
    require 'database.php';
    mysqli_set_charset($kapcsolat,"utf8");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Főoldal</title>
        <link href="menuformaz.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Főoldal</h1>
				<a href="menu.php"><i class="fas fa-home"></i>Főoldal</a>
				<a href="kinal.php"><i class="fas fa-car"></i>Járművek</a>
				<a href="adminlogin.php"><i class="fas fa-user-cog"></i>Admin felület</a>
				<a href="profil.php"><i class="fas fa-user-circle"></i>Profil</a>
				<a href="ki.php"><i class="fas fa-sign-out-alt"></i>Kijelentkezés</a>
			</div>
		</nav>
		<div class="content">
			<h2>Hírek</h2>
			<p>Bejelentkezve mint, <?=$_SESSION['user']?>!</p>
			<h4>Fontos tudnivalók</h4>
			<p>Üdvözlünk a B Autó oldalán! Minden fontos információ a legújabb biztosításokkal kapcsolatban itt fog megjelenni. Kérjük figyelmesen olvassa el a főoldalon esetlegesen megjelenő híreket, hogy naprakész legyen a legújabb akcióinkal kapcsolatosan. Biztonságos utat kívánunk!</p>			
		</div>
	</body>
</html>