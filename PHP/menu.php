<?php
    $data=yaml_parse_file("yaml/menu.yaml");
    echo '<nav class="espaceheader">';
    foreach($data as $cle => $val){
        echo '<a class="lien" href="#'.$cle.'">'.$val.'</a>';
    }
    echo '</nav>';
?>