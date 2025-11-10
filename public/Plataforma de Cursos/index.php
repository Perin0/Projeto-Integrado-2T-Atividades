<?php
include "lib/courses-functions.php";

$currentArea = $_GET['area'] ?? null;
$courses = getAllCourses($currentArea);

$pageTitle = "Todos nossos cursos";
if ($currentArea) {
    $areaNames = [
        'programming' => 'Cursos de Programação',
        'design' => 'Cursos de Design',
        'business' => 'Cursos de Negócios'
    ];
    $pageTitle = $areaNames[$currentArea] ?? "Cursos de " . ucfirst($currentArea);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOHfy3f0oIUnadM/AreNL75jRS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Unifio</a>
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

    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>

    <div class="container py-4">
        <?php
        if ($courses === null) {
            echo '<div class="alert alert-danger">Não foi possível carregar os cursos.</div>';
        } else if (empty($courses)){
            echo '<div class="alert alert-info">Nenhum curso encontrado para esta área.</div>';
        } else {
            echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
            foreach ($courses as $course) {
                $img = isset($course['img']) ? ltrim($course['img'], '/') : '';
                $title = htmlspecialchars($course['title'] ?? '');
                $desc = htmlspecialchars($course['short_description'] ?? '');
                $instructor = htmlspecialchars($course['instructor'] ?? '');
                $id = htmlspecialchars($course['id'] ?? '');

                echo '<div class="col">';
                echo '<div class="card h-100" style="width: 18rem;">';
                if ($img !== '') {
                    echo '<img src="' . htmlspecialchars($img) . '" class="card-img-top contain" alt="' . $title . '">';
                }
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $title . '</h5>';
                echo '<p class="card-text">' . $desc . '</p>';
                echo '<p class="card-text text-muted">' . $instructor . '</p>';
                echo '<a href="course.php?id=' . $id . '" class="btn btn-primary">Ver curso</a>';
                echo '</div>'; // card-body
                echo '</div>'; // card
                echo '</div>'; // col
            }
            echo '</div>'; // row
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>