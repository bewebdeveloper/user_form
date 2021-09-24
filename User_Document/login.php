<?php
$servername="localhost";
$name="root";
$password="";
$dbname="Student";
$a=$_GET['Email'];
$b=$_GET['password'];
$conn=mysqli_connect($servername,$name,$password,$dbname);
$task="insert into mylog(Email,password)VALUES('$a','$b')";

$result=mysqli_query($conn,$task);
        mysqli_close($conn);
?>
