<?php
    require 'database.php';
    mysqli_set_charset($kapcsolat,"utf8");

    if(isset($_POST["felvisz"]))
    {
       $kat = $_POST["kateg"];
       $marka = $_POST["marka"];
       $tipus = $_POST["tipus"];
       $felsz = $_POST["felsz"];
       $evj = $_POST["evj"];
       $szin = $_POST["szin"];
       $meghajt = $_POST["meghajt"];
       $hely = $_POST["hely"];
       $k = $_POST["klima"];
       $benz = $_POST["uzemanyag"];
       $valt = $_POST["valto"];
       $abs = $_POST["abs"];
       $szervo = $_POST["szervo"];

       $upload = mysqli_query($kapcsolat, "insert into auto(kategoria, marka, tipus, felsz, evjarat, szin, meghajtas, ferohely, klima, uzemanyag, valto, abs, szervo)
       values ('$kat', '$marka', '$tipus', '$felsz', '$evj', '$szin', '$meghajt', '$hely', '$k', '$benz', '$valt', '$abs', '$szervo')");
    }

?>

<html>
	<head>
		<meta charset="utf-8">
		<title>admin</title>
        <link href="menuformaz.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Admin felület</h1>
                <a href="menu.php"><i class="fas fa-home"></i>Főoldal</a>
                <a href="kinal.php"><i class="fas fa-car"></i>Járművek</a>
				<a href="admin.php"><i class="fas fa-user-cog"></i>Admin felület</a>
				<a href="profil.php"><i class="fas fa-user-circle"></i>Profil</a>
				<a href="ki.php"><i class="fas fa-sign-out-alt"></i>Kijelentkezés</a>
			</div>
        </nav>
        <div class="content">
			<h2>Új autó felvétele</h2>
		</div>
        <div class="midwhite2">
            <form action="admin.php" method="POST">
            <h4>Kategória</h4>
				<select id="kategoria" name="kateg">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>
                </select>
            <h4>Márka</h4>
                <input type="text" name="marka"  placeholder="Márka">
            <h4>Típus</h4>
                <input type="text" name="tipus" placeholder="Típus">
            <h4>Felszereltség (1-5)</h4>
                <input type="number" name="felsz" value = "1" min ="1" max ="5">
            <h4>Évjárat (1980< >2021)</h4>
                <input type="number" name="evj" value = "2000" min ="1980" max ="2020">
            
        </div>
        <div class="midwhite3">
            
                <h4>Szín</h4>
                    <input type="text" name="szin" placeholder="Szín">
                    <h4>Meghajtás</h4>
                        <select id="meghajtas" name="meghajt">
                            <option value="Összkerék">Összkerék</option>
                            <option value="Hátsókerék">Hátsókerék</option>
                            <option value="Elsőkerék">Elsőkerék</option>
                        </select>
                    <h4>Férőhely (2-9)</h4>
                        <input type="number" name="hely" value = "2" min ="2" max ="9">
                    <h4>Klíma</h4>
                    <select id="klima" name="klima">
                            <option value="Van">Van</option>
                            <option value="Nincs">Nincs</option>
                    </select>
                    <h4>Üzemanyag</h4>
                    <select id="uzem" name="uzemanyag">
                            <option value="Benzin">Benzin</option>
                            <option value="Diesel">Diesel</option>
                    </select>
            
        </div>
        <div class="midwhite4">
            
                <h4>Váltó</h4>
                <select id="valto" name="valto">
                            <option value="Manuális">Manuális</option>
                            <option value="Autómata">Autómata</option>
                </select>
                <h4>ABS</h4>
                <select id="abs" name="abs">
                            <option value="Van">Van</option>
                            <option value="Nincs">Nincs</option>
                </select>
                <h4>Szervó</h4>
                <select id="szervo" name="szervo">
                            <option value="Van">Van</option>
                            <option value="Nincs">Nincs</option>
                </select>
                <br><br><input type="submit" name="felvisz" value="Felvétel">
            </form>
        </div>
	</body>
</html>
