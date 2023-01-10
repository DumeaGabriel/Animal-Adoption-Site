<?php
session_start();
$conn=new mysqli('localhost','root','','proiect pi');
        $date = date('d-m-Y');
        $dogid=$_SESSION['idDog'];
        $userId=$_SESSION['id'];
        mysqli_query($conn,"update cat set adoptat=1,adoptBy='$userId',dataAdoptie='$date'  where id=$dogid");
    unset($_SESSION['idDog']);
    header("location:../ShowCats.php");
?>