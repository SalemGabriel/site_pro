<?php

?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>site internet professionnel</title>
	<link rel='stylesheet' href='style.css'>
</head>
<body>
	<!--
	<nav class="espaceheader">
		<a class="lien" href="#accueil">accueil</a>
		<a class="lien" href="#propos">à propos</a>
		<a class="lien" href="#compétences">compétences</a>
		<a class="lien" href="#expérience">expérience</a>
		<a class="lien" href="#formation">formation</a>
		<a class="lien" href="#contact">contact</a>
	</nav>
-->

<?php include("PHP/menu.php"); ?>
<?php foreach ($data as $cle => $valeur) {
	echo "<div><section id="$data">";
	include("php/"$nav".php");
	echo "</section></div>";
} ?>
	
</body>
</html>

<?php

?>