<?php
    $notas = [10,5,3];
    $media = 0;
    foreach($notas as $nota){
        $media += $nota;
    }
    echo "Há ".count($notas)." notas, onde sua soma é: ".$media."</br>";
    echo "A média das notas é: ".$media/count($notas);
?>