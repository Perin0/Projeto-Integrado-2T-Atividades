<?php

function getAllCourses(): ?array {
    $path = __DIR__ . '/../courses.json';
    $json = file_get_contents($path);
    $data = json_decode($json, true);
    return is_array($data) ? $data : null;
}