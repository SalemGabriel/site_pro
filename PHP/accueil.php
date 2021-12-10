<?php
$data=yaml_parse_file("yaml/accueil.yaml");
//print_r($acceuil);
echo $data["accueil"];
?>