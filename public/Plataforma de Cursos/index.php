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

include "lib/header.php"
?>

<div class="container-xl">
    <h1><?php echo htmlspecialchars($pageTitle); ?></h1>
</div>

<div class="container py-4">
    <?php
    if ($courses === null) {
        echo '<div class="alert alert-danger">Não foi possível carregar os cursos.</div>';
    } else if (empty($courses)) {
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

    <?php include "lib/footer.php" ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>