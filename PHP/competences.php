<?php
$data=yaml_parse_file("yaml/competences.yaml");
echo '<div class="text">';
echo $data["orga"];
echo "<br>";
echo $data["anim"];
echo "<br>";
echo $data["ser"];
echo "<br>";
echo $data["trav"];
echo "<br>";
echo '</div>'
?>