<?php
    if(!$_SESSION['username']){
        header("location:./Login.php");
    }
    ?>