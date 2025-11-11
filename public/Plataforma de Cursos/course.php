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
    
    <h1 class="display-3"><?php echo $title ?></h1>

</body>

</html>