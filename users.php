<?php

//Create connection
$connect = mysqli_connect('localhost', 'admin', 'admin', 'ajaxtest');

$query = 'SELECT * FROM users';

// Get result 
$result = mysqli_query($connect, $query);

// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);