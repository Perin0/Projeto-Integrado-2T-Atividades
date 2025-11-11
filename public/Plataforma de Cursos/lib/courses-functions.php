<?php

function loadCoursesData(): ?array{
    $path = __DIR__ . '/../courses.json';

    if (!file_exists($path)) {
        return null; 
    }

    $json = file_get_contents($path);
    if ($json === false) {
        return null;
    }

    $data = json_decode($json, true);
    if ($data === null) {
        return null;
    }

    return $data;
}

function getAllCourses(?string $area = null): ?array {
    $data = loadCoursesData();
    if ($data === null) {
        return null;
    }

    if ($area === null) {
        return $data;
    }

    $filtered = array_filter($data, function ($course) use ($area) {
        $courseArea = $course['area'];
        return $courseArea === $area;
    });

    return array_values($filtered);
}

function getCourseById(?string $id): ?array {
    $data = loadCoursesData();
    if ($data === null) {
        return null;
    }
    
    $filtered = array_filter($data, function ($course) use ($id) {
        $courseId = $course['id'];
        return $courseId === $id;
    });

    if (empty($filtered)) {
        return null;
    }

    $result = array_values($filtered);
    return $result[0];
}