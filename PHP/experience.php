<?php
$exp=yaml_parse_file("yaml/experiences.yaml");

foreach($data as $experience){
    echo "<div>".$experience['experience']."<div>";
    foreach($data as $experience => $missions){
        echo '<ul>';
        echo '<li>'.$missions.'</li>';
        echo '</ul>';
    }
}
?>