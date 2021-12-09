<?php
$acceuil=\file_get_contents("yaml/accueil.yaml");
$acceuil=yaml_parse($acceuil);

$propos=\file_get_contents("yaml/propos.yaml");
$propos=yaml_parse($propos);

$compétences=\file_get_contents("yaml/compétences.yaml");
$compétences=yaml_parse($compétences);

$expériences=\file_get_contents("yaml/expériences.yaml");
$expériences=yaml_parse($expériences);

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
	<nav class="espaceheader">
		<a class="lien" href="#accueil">accueil</a>
		<a class="lien" href="#propos">à propos</a>
		<a class="lien" href="#compétences">compétences</a>
		<a class="lien" href="#expérience">expérience</a>
		<a class="lien" href="#formation">formation</a>
		<a class="lien" href="#contact">contact</a>
	</nav>
	
	<div id="accueil">
		<?php echo nl2br($acceuil['acceuil']);?>
	</div>

	<div id="propos">
		<?php echo nl2br($propos['propos']);?>
	</div>

	<div id="compétences">
		<?php echo nl2br($compétences['compétences']);?>
	</div>

	<div id="expérience">
		<?php echo nl2br($expériences['expérience']);?>
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