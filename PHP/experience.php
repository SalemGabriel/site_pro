<?php
$data=yaml_parse_file("yaml/experiences.yaml");

foreach($data as $experience){
    echo "<div>".$experience['experience']."<div>";
    foreach($experience['missions'] as $cle => $valeur){
        echo '<ul>';
        echo '<li>'.$valeur.'</li>';
        echo '</ul>';
    }
}
?>