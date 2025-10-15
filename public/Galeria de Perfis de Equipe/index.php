<?php include "equipe.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Perfis da Equipe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<style>
    img {
        display: block;
        max-height: 380px;
        width:fit-content;
        height: auto;
    }
</style>

<body>
    <h4 class="text-center">Nosso time</h4>
    <h1 class="display-5 text-center mx-auto" style="width: 45%;">Com nosso time você pode esperar atenção personalizada e designs engajados</h1>
    <div class="container mx-auto d-flex flex-row justify-content-center">
        <?php
        foreach ($equipe as $membro) {
            echo "
                    <div class='card' style='width: 18rem;'>
                        <img src='" . $membro["img"] . "' class='card-img-top'>
                        <div class='card-body'>
                            <h5 class='card-title'>" . $membro["nome"] . "</h5>
                            <p class='card-text'>" . $membro["bio"] . "</p>
                        </div>
                        <ul class='list-group list-group-flush'>
                            <li class='list-group-item'>" . $membro["cargo"] . "</li>
                        </ul>
                    </div>
                ";
        }
        ?>
    </div>
</body>
</html>