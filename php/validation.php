<?php
include './erori.php';
session_start();
$conn=new mysqli('localhost','root','','proiect pi');
$db=mysqli_select_db($conn,'proiect pi');

if (!$conn) {
    die('Could not connect: ');
}

$nume=$_POST['user'];
$pass=$_POST['password'];

$s="select * from users where username='$nume'";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_assoc($result);
print_r($row['password']);
echo '</br>'.$pass.'</br>';
if($pass==$row['password']){
$_SESSION['username']=$nume;
$_SESSION['admin']=$row['admin'];
$_SESSION['id']=$row['id'];
header('location:../homepage.php');}
else
{
    header('location:../Login.php');
}

?>