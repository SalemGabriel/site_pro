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

<?php include("PHP/menu.php");

foreach($data as $cle => $val){
	if($cle == "experience"){
		echo '<div class="expsec"><section id='.$cle.'><b>';
		include("PHP/".$cle.".php");
		echo '</section></div></b>';
	}else{
		echo '<div class="text"><section id='.$cle.'>';
		include("PHP/".$cle.".php");
		echo '</section></div>';
	}
} 

?>
	<footer class="footer">
		<p>Tout droit réservé au créateur du site ©</p>
	</footer>
</body>

</html>

<?php

?>