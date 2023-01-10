<?php
session_start();
$conn=new mysqli('localhost','root','','proiect pi');
$db=mysqli_select_db($conn,'proiect pi');

if(isset($_POST['add'])){
    $nume=$_POST['nume'];
    $varsta=$_POST['varsta'];
    $gen=$_POST['gen'];
    $rasa=$_POST['rasa'];
    $descriere=$_POST['descriere'];
    $img=$_FILES['image']['name'];
    $idUser=$_SESSION['id'];
    $jud=$_POST['judet'];
$querry="insert into cat(nume,varsta,gen,derasa,descriere,poza,idUser,oras) values('$nume','$varsta','$gen','$rasa','$descriere','$img','$idUser','$jud')";
if(mysqli_query($conn,$querry)){
    move_uploaded_file($_FILES['image']['tmp_name'],"../imagini/$img");
}
header('location:../homepage.php');

}


?>