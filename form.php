<?php
$servername="localhost";
$username="root";
$password="noel@123";
$dbname="my_app";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$name=$_POST['name'];

$email=$_POST['email'];
$password=$_POST['password'];


$sql = "INSERT INTO my_app(name,email,password) 
        VALUES('$name','$email","$password";


if($conn->query($sql)==TRUE){
    echo "New record inserted successfully...";
}else{
    echo "Error:".$sql."<br>".$conn->error;
}

$conn->close();
?>
