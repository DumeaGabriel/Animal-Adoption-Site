<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"proiect pi");

$name=$_POST['user'];
$pass=$_POST['passwordReg'];
$em=$_POST['email'];

$s="select * from users where username='$name'";
$result=mysqli_query($con,$s); 

$num=mysqli_num_rows($result);
if($num==1){
    echo "Username already taken";
}else{
    $_SESSION['username']=$name;
    $reg="insert into users(username,email,password) values('$name','$em','$pass')";
    mysqli_query($con,$reg);
    header('location:../Login.php');
}


?>