<?php
    $carrinho_de_compras = [
        [
        "nome" => "Leite",
        "preco" => 9.99,
        "qntd" => 2
        ],
        [
        "nome" => "Feião",
        "preco" => 18.10,
        "qntd" => 1
        ],
        [
        "nome" => "Arroz",
        "preco" => 20.20,
        "qntd" => 3
        ]
    ];

    $total = 0;

    foreach ($carrinho_de_compras as $produto){
        $subtotal = $produto["preco"]*$produto["qntd"];
        $total += $subtotal;
        echo "Produto: ".$produto["nome"]."</br>";
        echo "Preco: ".$produto["preco"]."</br>";
        echo "Quantidade: ".$produto["qntd"]."</br>";
        echo "Subtotal: ".$subtotal,"</br></br>"; 
    }
    echo "<b>Total: ".$total."</b>";

?>