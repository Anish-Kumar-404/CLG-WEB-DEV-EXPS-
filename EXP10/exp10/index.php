<?php

header("Access-Control-Allow-Origin: *");


header("Access-Control-Allow-Methods: GET, POST, OPTIONS");


header("Access-Control-Allow-Headers: Content-Type");


header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $filename = 'form_data.txt';
    
    if (file_exists($filename)) {
        $fileContent = file_get_contents($filename);
        $responseData = ['data' => $fileContent];
        echo json_encode($responseData);
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Data file not found']);
    }
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = json_decode(file_get_contents("php://input"), true);


    if (empty($data['name']) || empty($data['email']) || empty($data['course'])) {
        http_response_code(400);
        echo json_encode(['error' => 'All fields are required']);
        exit;
    }


    $name = $data['name'];
    $email = $data['email'];
    $course = $data['course'];


    $filename = 'form_data.txt';
    $fileContent = "Name: $name, Email: $email, Course: $course\n";
    
    if (file_put_contents($filename, $fileContent, FILE_APPEND) !== false) {

        echo json_encode(['message' => 'Form saved successfully']);
    } else {

        http_response_code(500);
        echo json_encode(['error' => 'Failed to save form data']);
    }
} else {

    http_response_code(405);
    echo json_encode(['error' => 'Invalid request method']);
}
?>
