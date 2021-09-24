<?php
$servername="localhost";
$name="root";
$password="";
$dbname="user";
$a=$_GET['name'];
$b=$_GET['address'];
$c=$_GET['id'];
$d=$_GET['mob'];
$conn=mysqli_connect($servername,$name,$password,$dbname);
$task="insert into form(name,address,id,mob)VALUES('$a','$b','$c',$d)";

$result=mysqli_query($conn,$task);
        mysqli_close($conn);
?>
