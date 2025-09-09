<?php
    $notas = [
        "MAT" => 8.5,
        "LP" => 6,
        "CN" => 7.25
    ];
    foreach($notas as $materia => $nota){
        if($nota < 7){
            echo $materia.": Reprovado </br>";
        }
        else{
            echo $materia.": Aprovado </br>";
        }
    }
?>