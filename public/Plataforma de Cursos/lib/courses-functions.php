<?php

function getAllCourses(?string $area = null): ?array {
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

    if ($area === null) {
        return $data;
    }

    
    $filtered = array_filter($data, function ($course) use ($area) {
        $courseArea = $course['area'] ?? $course['category'] ?? '';
        return $courseArea === $area;
    });

    return array_values($filtered);
}