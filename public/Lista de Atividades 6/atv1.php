<?php
    function calcular_total_bebidas(string $bebida, int $qtd){
        switch($bebida){
            case "Refrigerante": 
                $preco = 8;
                $preco_total = $preco*$qtd;
                return $preco_total;
            case "Suco": 
                $preco = 6;
                $preco_total = $preco*$qtd;
                return $preco_total;
            default: 
                $preco = 5;
                $preco_total = $preco*$qtd;
                return $preco_total;
        }
    }
    echo "Total de 3 Regrigerantes: R$".calcular_total_bebidas("Refrigerante", 3);
    echo "\nTotal de 2 Sucos: R$".calcular_total_bebidas("Suco", 2);
?>