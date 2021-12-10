<?php
$acceuil=\file_get_contents("yaml/accueil.yaml");
$acceuil=yaml_parse($acceuil);

$propos=\file_get_contents("yaml/propos.yaml");
$propos=yaml_parse($propos);

$competences=\file_get_contents("yaml/competences.yaml");
$competences=yaml_parse($competences);

$experiences=\file_get_contents("yaml/experiences.yaml");
$experiences=yaml_parse($experiences);

$formation=\file_get_contents("yaml/formation.yaml");
$formation=yaml_parse($formation);

$contact=\file_get_contents("yaml/contact.yaml");
$contact=yaml_parse($contact);
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
		<?php echo nl2br($competences['competences']);?>
	</div>

	<div id="experience">
		<?php echo nl2br($experiences['experience']);?>
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