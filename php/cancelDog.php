<?php
session_start();
$conn=new mysqli('localhost','root','','proiect pi');
$db=mysqli_select_db($conn,'proiect pi');
$idDog=$_SESSION['dogid'];

mysqli_query($conn,"update dogs set adoptat=0,adoptBy='-1' where id=$idDog");
header("location:../homepage.php");

?>