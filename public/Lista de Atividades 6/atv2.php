<?php
    function verificarPromocao(float $total_pedido){
        return $total_pedido>50 ? "Parabéns! Você ganhou uma sobremesa grátis!" : "Que tal adicionar mais um item para ganhar uma sobremesa?\n";
    }
    echo verificarPromocao(45);
    echo verificarPromocao(60);
?>