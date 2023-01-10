<?php   
session_start();
$_SESSION['filtru']="";
$f="";
if(strcmp($_POST['talie'],"")){
    $talie=$_POST['talie'];
    $f=$f."talie="."'$talie'";}
if(strcmp($_POST['varsta'],"")){
    $varsta=$_POST['varsta'];
        if(strcmp($f,""))$f.=" and ";
    $f=$f."varsta="."'$varsta'";
}

if(strcmp($_POST['gen'],"")){
    $gen=$_POST['gen'];
    if(strcmp($f,""))$f.=" and ";
    $f=$f."gen="."'$gen'";
}
if(strcmp($f,""))
    $_SESSION['filtru'].=" and ".$f;
echo "select * from dogs where adoptat=0".$_SESSION['filtru'];


 header("location:../inAdoptie.php")

?>