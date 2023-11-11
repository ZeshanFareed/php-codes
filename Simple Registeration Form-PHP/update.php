<?php


$conn = new mysqli('localhost', 'root', '', 'zeshi');


if ($conn->connect_error) {
  die('Database connection failed: ' . $conn->connect_error);
}


$id = $_POST['id'];
$name = $_POST['name'];
$fathername = $_POST['fname'];
$cnic = $_POST['cnic'];
$password = $_POST['password'];


$sql = "UPDATE regform SET name='$name', FatherName='$fathername', CNIC='$cnic' , Password='$password'  WHERE id='$id'";
$conn->query($sql);


header('Location: view.php');
exit;


$conn->close();

?>
