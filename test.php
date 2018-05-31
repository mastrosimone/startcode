<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8" />
<html>
<header>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
<title>Core System</title>
</header>
<body>
<div class="utop">	

	<div class="top">
		
		<div class="top1">
				<a href="https://www.google.com/maps/place/Villa+Riso/@38.1887877,13.3055371,17z/data=!3m1!4b1!4m5!3m4!1s0x1319e9abceec0833:0xd26f98c2033bd9ae!8m2!3d38.1887835!4d13.3077258" target="_blank" class="top_link">Raggiungici</a>
				<a href="tel:3803135022" class="top_link">Telefonaci</a>
				<a href="contatti.html" class="top_link">Scrivici</a>
		</div>
		<div class="top2">
			<img class="logo" alt="Core System" src="image/core_system_logo_small.png">
		</div>
		<div class="top3">
			<a href="https://www.facebook.com" target="_blank"><img class="icon" src="image/facebook.png"></a>
			<a href="https://www.twitter.com" target="_blank"><img class="icon" src="image/twitter.png"></a>
			<a href="https://www.pinterest.com" target="_blank"><img class="icon" src="image/pinterest.png"></a>
			<a href="https://www.instagram.com" target="_blank"><img class="icon" src="image/instagram.png"></a>
		</div>


	</div>

</div>







	<div class="menu">
		

		<nav class="dropdownmenu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php">Servizio 1</a></li>
			<li><a href="index.php">Servizio 2</a></li>
			<li><a href="index.php">Servizio 3</a></li>
			<li><a href="index.php">Servizio 4</a>

			<ul id="submenu">
			<li><a href="index.php">Sotto servizio 1</a></li>
			<li><a href="index.php">Sotto servizio 2</a></li>
			</ul>
		</li>

		<li><a href="index.php">News</a></li>
		<li><a href="contatti.php">Contatti</a></li>				
		</ul>
	</nav>
	<!--menu hamburger-->

	<div class="menu_hamburger"></div>
	<div class="menu_hamburger"></div>
	<div class="menu_hamburger"></div>

		
		
	</div>








<div class="colonne">
<div class="left">	
<ul class="sidemenu">
	<li><a href="index.php" class="sidemenu">Progetti</a></li>
	<li><a href="index.php" class="sidemenu">Corsi</a></li>
	<li><a href="index.php" class="sidemenu">Innovazione</a></li>
	<li><a href="index.php" class="sidemenu">Su di Noi</a></li>
	<li><a href="index.php" class="sidemenu">Il nostro Team</a></li>
</ul>
<a href="https://www.google.it"><img class="banner_left" src="image/banner1.jpg"></a>
<a href="https://www.google.it"><img class="banner_left" src="image/banner2.jpg"></a>
<a href="https://www.google.it"><img class="banner_left" src="image/banner3.jpeg"></a>
</div>

<div class="center">
	<div class="testo">

		<?php ini_set('display_errors', 'on'); ?>
		<?php include ("connect_db.php");?>


    <?php

$sql = "SELECT id, title, category, created_at FROM books INNER JOIN categoria ON books.id = categoria.id_categoria";

if($result = $mysqli->query($sql)){
	if($result->num_rows > 0){
		while($row = $result->fetch_array(MYSQLI_ASSOC)){
			echo '<pre>'; print_r($row);
		}
	}
}






?>


<form name="richiamo_funzione" action="funzione.php" method="GET">
<input type="text" name="funzione" /><input type="submit" name="richiama" value="Richiama la funzione" />
</form>
    
    
    
    </div>
</div>

<div class="right">
<a href="https://www.google.it"><img class="banner_right" src="image/banner1.jpg"></a>
<a href="https://www.google.it"><img class="banner_right" src="image/banner2.jpg"></a>
<a href="https://www.google.it"><img class="banner_right" src="image/banner3.jpeg"></a>
</div>
</div>
<!--ok-->
<div class="down">

<div class="footer1">

<ul class="footermenu">
	<li><a href="index.php">Progetti</a></li>
	<li><a href="index.php">Corsi</a></li>
	<li><a href="index.php">Innovazione</a></li>
	<li><a href="index.php">Su di Noi</a></li>
	<li><a href="index.php">Il nostro Team</a></li>
</ul>
</div>

<div class="footer2">
	<img class="logo_footer" src="image/logo_footer.png">
</div>	
<div class="footer3">
<div class="icon_footer">
		<a href="https://www.facebook.com" target="_blank"><img class="icon_footer" src="image/facebook.png"></a>
		<a href="https://www.twitter.com" target="_blank"><img class="icon_footer" src="image/twitter.png"></a>
		<a href="https://www.pinterest.com" target="_blank"><img class="icon_footer" src="image/pinterest.png"></a>
		<a href="https://www.instagram.com" target="_blank"><img class="icon_footer" src="image/instagram.png"></a>

</div>
</div>
<div class="copyright">
	Tutti i diritti riservati, copyright Core System.
</div>	

</body>
</html>