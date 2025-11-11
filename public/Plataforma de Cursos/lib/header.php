<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOHfy3f0oIUnadM/AreNL75jRS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.php">Unifio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Todos os cursos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <div class="btn-group">
                            <a class="dropdown-toggle nav-link text-white" role="button" data-bs-toggle="dropdown">Cursos por área</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.php?area=programming">Programação</a></li>
                                <li><a class="dropdown-item" href="index.php?area=design">Design</a></li>
                                <li><a class="dropdown-item" href="index.php?area=business">Negócios</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>