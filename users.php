<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/plain');

$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');
$query = 'SELECT * FROM users';

// GET Result
$result = mysqli_query($conn, $query);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);