<?php

echo "Processing...";

// Check for POST Variable
if(isset($_POST['name'])){
  echo "POST: Your name is ". $_POST['name'];
}

// Check for GET Variable
if(isset($_GET['name'])){
  echo "GET: Your name is ". $_GET['name'];
}