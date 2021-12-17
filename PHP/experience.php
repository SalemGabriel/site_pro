<?php
$data=yaml_parse_file("yaml/experiences.yaml");
echo '<h1 class="center">Mes expériences</h1>';
echo $data["experience"];
?>