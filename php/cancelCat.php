<?php
session_start();
$conn=new mysqli('localhost','root','','proiect pi');
$db=mysqli_select_db($conn,'proiect pi');
$idCat=$_SESSION['idCat'];

mysqli_query($conn,"update cat set adoptat=0,adoptBy='-1' where id=$idCat");
$_SESSION['idCat']="";
header("location:../homepage.php");

?>