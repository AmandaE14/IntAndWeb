<?php
header('Content-Type: application/json');
$myArray = [
    'fruit' => 'Mango',
    'color' => 'Yellow',
    'quantity' => 5
];
echo json_encode($myArray);