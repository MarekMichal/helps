<?php
$conn = new mysqli('localhost','root','', 'articles');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>