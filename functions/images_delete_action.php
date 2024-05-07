<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $errors[] = "PETICIO NO ES POST";
}

if (empty($errors)) {    
    unlink($img);
    $success = $img;
} 
$query = http_build_query(["errors" => $errors]);
header("Location: ../images_list.php?{$query}");