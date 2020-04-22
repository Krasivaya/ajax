<?php

// echo "Processing...";

//Connect to a database
$connect = mysqli_connect('localhost', 'admin', 'admin', 'ajaxtest');

// Check for POST Variable
if(isset($_POST['name'])){
  // echo "POST: Your name is ". $_POST['name'];

  $name = mysqli_real_escape_string($connect, $_POST['name']);

  $query = "INSERT INTO users(name) VALUES('$name')";

  if(mysqli_query($connect, $query)){
    echo 'User Added...';
  }
  else{
    echo 'Error: '. mysqli_error($connect);
  }
}

// // Check for GET Variable
// if(isset($_GET['name'])){
//   echo "GET: Your name is ". $_GET['name'];
// }