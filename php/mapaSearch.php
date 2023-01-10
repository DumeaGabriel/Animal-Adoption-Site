<?php
session_start();
$_SESSION['filtru']="";
if($_GET['jud']){
    $jud=$_GET['jud'];
}

$_SESSION['filtru']=$_SESSION['filtru']." and oras='$jud'";

header("location:../ShowDogs.php?jud=$jud");
?>