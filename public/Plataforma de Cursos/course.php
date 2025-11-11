<?php
include "lib/courses-functions.php";
$id = $_GET["id"];
$course = getCourseById($id);

$title = htmlspecialchars($course['title'] ?? '');
$area = htmlspecialchars($course['area'] ?? '');
$instructor = htmlspecialchars($course['instructor'] ?? '');
$desc = htmlspecialchars($course['short_description'] ?? '');
$img = isset($course['img']) ? ltrim($course['img'], '/') : '';
$modules = $course['modules'];

$pageTitle = $title;

include "lib/header.php";

?>

<body>
    <div class="wrapper">
        <div class="container-xl">
            <h1 class="display-3"><?php echo $title ?></h1>
            <p class="lead">
                <?php echo $desc ?>
            </p>
            <hr>
            <h4>Ministrado por: <?php echo $instructor ?></h4>

            <div class="modules-container">
                <b>Módulos do Curso</b>
                <ul class="list-group">
                    <?php
                    foreach ($modules as $module) {
                        echo "<li class='list-group-item'>" . $module . "</li>";
                    }
                    ?>
                </ul>
            </div>
            <button type="button" class="btn btn-secondary"><a href="index.php" style="text-decoration: none; color: white">← Voltar ao catálogo</a></button>
        </div>

        <div class="img-container">
            <img src="<?php echo $img ?>" alt="Course Logo">
            <button type="button" class="btn btn-success">Inscrever-se agora</button>
        </div>
    </div>

    <?php include "lib/footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>