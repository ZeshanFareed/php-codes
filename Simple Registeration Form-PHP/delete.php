<?php

$conn = new mysqli('localhost', 'root', '', 'zeshi');


if ($conn->connect_error) 
{
  die('Database connection failed: ' . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "DELETE FROM regform WHERE id='$id'";
$conn->query($sql);


header('Location:view.php');
exit;

$conn->close();

?>