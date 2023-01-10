<?php
session_start();
$conn=new mysqli('localhost','root','','proiect pi');
$db=mysqli_select_db($conn,'proiect pi');
$idDog=$_SESSION['dogid'];
$querry="delete from dogs where id='$idDog'";

mysqli_query($conn,$querry);
header("location:../inAdoptie.php");

?>