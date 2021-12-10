<?php
include("PHP/accueil.php");
include("PHP/propos.php");
include("PHP/competences.php");
include("PHP/experience.php");
include("PHP/formation.php");
include("PHP/contact.php");
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
		<?php echo nl2br($acceuil['acceuil']);?>
	</div>

	<div id="propos">
		<?php echo nl2br($propos['propos']);?>
	</div>

	<div id="competences">
		<?php echo nl2br($competence['competences']);?>
	</div>

	<div id="experience">
		<?php echo nl2br($experience['experience']);?>
	</div>

	<div id="formation">
		<?php echo nl2br($formation['formation']);?>
	</div>

	<div id="contact">
		<?php echo nl2br($contact['contact']);?>
	</div>

</body>
</html>

<?php

?>