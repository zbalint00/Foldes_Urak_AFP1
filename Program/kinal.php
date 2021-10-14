<?php
    require 'database.php';
	mysqli_set_charset($kapcsolat,"utf8");  
	$idf = $_SESSION["id"];
	$email = $_SESSION["email"];
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>jarmuvek</title>
        <link href="menuformaz.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Járművek</h1>
                <a href="menu.php"><i class="fas fa-home"></i>Főoldal</a>
                <a href="kinal.php"><i class="fas fa-car"></i>Járművek</a>
				<a href="adminlogin.php"><i class="fas fa-user-cog"></i>Admin felület</a>
				<a href="profil.php"><i class="fas fa-user-circle"></i>Profil</a>
				<a href="ki.php"><i class="fas fa-sign-out-alt"></i>Kijelentkezés</a>
			</div>
		</nav>
		<h3>Foglaláshoz kattintson a kép mögötti számra!</h3>
        <div class="midwhite">
			<form action="kinal.php" method="POST">
				<h4>Kölcsönzés kezdete</h4>
				<input type="date" name = "kezd">
				<h4>Kölcsönzés vége</h4>
				<input type="date" name = "vege">
				<h4>Kategória</h4>
				<select id="kategoria" name="kateg">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>
				</select>
				<br><br><input type="submit" name ="keres" value ="Keresés">
				<h4>Extrák</h4>
				<input type="checkbox" name="bizt" value="Biztosítás">
				<label for="biztositas"> Biztosítás</label><br>
				<input type="checkbox" name="navi" value="Navigáció">
				<label for="navi"> Navigázió</label><br>
				<input type="checkbox" name="ules" value="Gyerekülés">
				<label for="ules"> Gyerekülés</label>
				<table class = "pos">
					<tr>
						<td>Márka</td>
						<td>Típus</td>
						<td>Felszereltség</td>
						<td>Évjárat</td>
						<td>Szín</td>
						<td>Meghajtás</td>
						<td>Férőhely</td>
						<td>Klíma</td>
						<td>Üzemanyag</td>
						<td>Váltó</td>
						<td>ABS</td>
						<td>Szervó</td>
						<td>Kép</td>
						<td>Foglalás</td>
					</tr>
					<?php
					if(isset($_POST["keres"]))
					{
						$összeg = 0;
						$kat = $_POST["kateg"];
						$kezd = $_POST["kezd"];
						$veg = $_POST["vege"];
						$kezd1 = strtotime($_POST["kezd"]);
						$veg1 = strtotime($_POST["vege"]);
						$nap = abs($veg1 - $kezd1);
						$nap2 = $nap/86400;
						$_SESSION["kezd"] = $kezd;
						$_SESSION["veg"] = $veg;
						if($kat == "A")
						{
							$összeg = $nap2 * 200000;
							if(isset($_POST["bizt"]))
							{
								$összeg = $összeg + 12000;
							}
							if(isset($_POST["navi"]))
							{
								$összeg = $összeg + 8000;
							}
							if(isset($_POST["ules"]))
							{
								$összeg = $összeg + 3000;
							}
						}
						else if($kat == "B")
						{
							$összeg = $nap2 * 100000;
							if(isset($_POST["bizt"]))
							{
								$összeg = $összeg + 12000;
							}
							if(isset($_POST["navi"]))
							{
								$összeg = $összeg + 8000;
							}
							if(isset($_POST["ules"]))
							{
								$összeg = $összeg + 3000;
							}
						}
						else if($kat == "C")
						{
							$összeg = $nap2 * 25000;
							if(isset($_POST["bizt"]))
							{
								$összeg = $összeg + 12000;
							}
							if(isset($_POST["navi"]))
							{
								$összeg = $összeg + 8000;
							}
							if(isset($_POST["ules"]))
							{
								$összeg = $összeg + 3000;
							}
						}
						else if($kat == "D")
						{
							$összeg = $nap2 * 10000;
							if(isset($_POST["bizt"]))
							{
							$összeg = $összeg + 12000;
							}
							if(isset($_POST["navi"]))
							{
								$összeg = $összeg + 8000;
							}
							if(isset($_POST["ules"]))
							{
								$összeg = $összeg + 3000;
							}
						}
						else if($kat == "E")
						{
							$összeg = $nap2 * 6000;
							if(isset($_POST["bizt"]))
							{
								$összeg = $összeg + 12000;
							}
							if(isset($_POST["navi"]))
							{
								$összeg = $összeg + 8000;
							}
							if(isset($_POST["ules"]))
							{
								$összeg = $összeg + 3000;
							}
						}
						$_SESSION["penz"] = $összeg;
						//echo $_SESSION["penz"];
						$result = mysqli_query($kapcsolat, "select auto.* from auto
						LEFT OUTER JOIN kolcsonoz ON auto.id = kolcsonoz.aid
							where 0 = (case when STR_TO_DATE('$kezd','%Y-%m-%d') between kolcsonoz.mettol and kolcsonoz.meddig then 1 else 0 end) +
						
							  (case when STR_TO_DATE('$veg','%Y-%m-%d') between kolcsonoz.mettol and kolcsonoz.meddig then 1 else 0 end) +
						
							  (case when kolcsonoz.mettol between STR_TO_DATE('$kezd','%Y-%m-%d') and STR_TO_DATE('$veg','%Y-%m-%d') then 1 else 0 end) +
						
							  (case when kolcsonoz.meddig between STR_TO_DATE('$kezd','%Y-%m-%d') and STR_TO_DATE('$veg','%Y-%m-%d') then 1 else 0 end) and auto.kategoria = '$kat'");
						
						while($sor = $result->fetch_assoc())
						{
							$id = $sor["id"];
							$kat = $sor["kategoria"];
							$marka = $sor["marka"];
							$tipus = $sor["tipus"];
							$felsz = $sor["felsz"];
							$ev = $sor["evjarat"];
							$szin = $sor["szin"];
							$meghajt = $sor["meghajtas"];
							$hely = $sor["ferohely"];
							$klima = $sor["klima"];
							$uzemanyag = $sor["uzemanyag"];
							$valto = $sor["valto"];
							$abs = $sor["abs"];
							$szervo = $sor["szervo"];
							$kep = $sor["tipus"].".jpg";
							echo "
							<tr>
								<td>$marka</td>
								<td>$tipus</td>
								<td>$felsz</td>
								<td>$ev</td>
								<td>$szin</td>
								<td>$meghajt</td>
								<td>$hely</td>
								<td>$klima</td>
								<td>$uzemanyag</td>
								<td>$valto</td>
								<td>$abs</td>
								<td>$szervo</td>
								<td><img id ='pic'src=".$kep."></td>
								<td><input type='submit' name='foglal' id = '$id' value ='$id'></td>
							</tr>
							";
						}
						//$kezd = $_SESSION["kezd"];
					}
					if(isset($_POST["foglal"]))
						{
							$kezd = $_SESSION["kezd"];
							$penz = $_SESSION["penz"];
							mail("$email", "Foglalás információ", "Sikeres Foglalás! Kérjük irodánkban a foglalás első napján azaz (".$kezd.") jelenjen meg a foglalás pontos összegével: ".$penz."Forintal");
							//$kezd = $_SESSION["kezd"];
							$id2 = $_POST["foglal"];
							$veg = $_SESSION["veg"];
							$result2 = mysqli_query($kapcsolat, "insert into kolcsonoz (felhid, aid, mettol, meddig, datum) VALUES ('$idf', '$id2', '$kezd', '$veg', sysdate())");
							echo "Adatok rögzítve";
						}
					
					?>
				</table>
        	</form>
        </div>
	</body>
</html>