<?php
    $total=0;
    $compra = [
        "Arroz" => 20,
        "Feijão" => 10,
        "Macarrão" => 5,
        "Leite" => 8,
        "Pão" => 6,
    ];

    foreach ($compra as $produto => $preco){
        $total += $preco;
    }
    echo $total
?>