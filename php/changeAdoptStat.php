<?php
session_start();
$conn=new mysqli('localhost','root','','proiect pi');
        $date = date('d-m-Y');
        $dogid=$_SESSION['idDog'];
        mysqli_query($conn,"update dogs set adoptat=1,dataAdoptie=CONVERT\(DATETIME,'$date'\)  where id=$dogid");
    unset($_SESSION['idDog']);
    header("location:../ShowDogs.php");
?>