<?php
$robert=file_get_contents("yaml/menu.yaml");
$data=yaml_parse($robert);
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

<?php include("PHP/menu.php");

foreach($data as $cle => $val){
	echo '<div><section id="#$cle">';
	include("PHP/'.$cle.'.php");
	echo "</section></div>";
} 

?>
	
</body>
</html>

<?php

?>