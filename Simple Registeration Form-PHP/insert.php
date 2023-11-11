<?php

$conn = new mysqli('localhost' , 'root' ,'' , 'zeshi');

if($conn->connect_error)
{
    die(" DataBase connection is Faild".$conn->connect_error);
}

$name = $_POST['name'];
$father = $_POST['fname'];
$cnic = $_POST['cnic'];
$password = $_POST['password'];

$sql =  "INSERT INTO regform(name , FatherName , CNIC , Password) VALUE('$name' , '$father' , '$cnic' , '$password')";
$reslt = $conn->query($sql);


if($reslt)
{
    echo '<p class="success">Your data is Insert Successfully</p>';
}
else
{
    echo "Registration Faild".$conn->error;
}

$conn->close();

?> 