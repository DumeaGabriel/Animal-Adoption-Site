<?php
session_start();
$conn=new mysqli('localhost','root','','proiect pi');
$db=mysqli_select_db($conn,'proiect pi');

if(isset($_POST['add'])){
    $nume=$_POST['nume'];
    $varsta=$_POST['varsta'];
    $gen=$_POST['gen'];
    $talie=$_POST['talie'];
    $descriere=$_POST['descriere'];
    $img=$_FILES['image']['name'];
    $idUser=$_SESSION['id'];

$querry="insert into dogs(nume,varsta,gen,talie,descriere,poza,idUser) values('$nume','$varsta','$gen','$talie','$descriere','$img','$idUser')";
if(mysqli_query($conn,$querry)){
    move_uploaded_file($_FILES['image']['tmp_name'],"../imagini/$img");
}
header('location:../homepage.php');

}


?>