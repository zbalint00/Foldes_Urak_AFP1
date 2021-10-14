<?php
    if(isset($_POST["visz"]))
    {
        header("location:menu.php");
    }
    if(isset($_POST["belep"]))
    {
        if($_POST["jelszo"] == "admin123")
        {
            header("location:admin.php");
        }
        else
        {
            echo "Téves jelszó!";
        }
    }
?>

<html>
    <head>
    <meta charset="utf-8">
		<title>adminLOGIN</title>
        <link href="menuformaz.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class = "mid3">
            <form action="adminlogin.php" method="POST">
                <h1>Admin bejelentkezés!</h1>
                Jelszó <input type="password" name ="jelszo">
                <br><br>
                <input type="submit" name = "belep" value = "Belépés">
                <br><br>
                <input type="submit" name = "visz" value = "Vissza">
            </form>
        </div>
    </body>
</html>