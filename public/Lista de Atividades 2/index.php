<?php
    include "header.php";

     if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $filme = $_POST["filme"];
        $genero = $_POST["genero"];
        $url = $_POST["url"];    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Catálogo de Filmes</title>
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }
        .form-wrapper {
            width: 60%; /* 60% da largura da tela */
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .container {
            width: 100%; /* A largura do contêiner ocupa toda a tela */
            display: flex;
            justify-content: center; /* Centraliza o card no eixo X */
        }
        .card {
            width: 18rem; /* Tamanho fixo do card */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-wrapper">
            <form method="POST" action="index.php">
                <div class="mb-3">
                    <label for="filme" class="form-label">Nome do Filme</label>
                    <input type="text" class="form-control" name="filme" placeholder="Digite um filme">
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero</label>
                    <input type="text" class="form-control" name="genero" placeholder="Digite o gênero do filme">
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">URL da Imagem</label>
                    <input type="text" class="form-control" name="url" placeholder="Digite o URL da imagem">
                </div>
                <button type="submit" class="btn-submit">Enviar</button>
            </form>
        </div>
    </div>
    
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $url ?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?php echo $filme?></h5>
                <p class="card-text"><?php echo $genero?></p>
            </div>
        </div>
    </div>  
</body>
</html>

<?php include "footer.php"?>