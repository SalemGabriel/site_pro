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
	
	<div id="accueil">
		<?php include("PHP/accueil.php");?>
	</div>

	<div id="propos">
		<?php include("PHP/propos.php");?>
	</div>

	<div id="competences">
		<?php include("PHP/competences.php");?>
	</div>

	<div id="experience">
		<?php include("PHP/experience.php");?>
	</div>

	<div id="formation">
		<?php include("PHP/formation.php");?>
	</div>

	<div id="contact">
		<?php include("PHP/contact.php");?>
	</div>

</body>
</html>

<?php

?>