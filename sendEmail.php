<DOCTYPE>
<html>
    <?php
    session_start();
    include("./php/verifyLogIn.php");
    ?>
    <head>
        <title >Send Email</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./CSS/sendEmail.css">
    </head>

    <body>
        <div class="container-fluid">
                <div class="container">
            <h2>Adoptie Animale</h2>
            <ul>
                <li ><a href='./homepage.php'><ion-icon name="home-outline"></ion-icon> HOME</a></li>
                <li ><a href="./ShowDogs.php"><ion-icon name="paw-outline"></ion-icon> Catei</a></li>
                <li ><a href="./ShowCats.php"><ion-icon name="logo-octocat"></ion-icon> Pisici</a></li>
                <?php
                 if($_SESSION['admin']!=0){
                    echo "<li><a href='./AddAnimal.php'>Add Animal </a></li>";
                 }
                ?>
                <li><a href='./php/LogOut.php'>LogOut</a></li>
                
            </ul>
            </div>
        <div class="content">
        <?php
        $conn=new mysqli('localhost','root','','proiect pi');
        $db=mysqli_select_db($conn,'proiect pi');
        $idOwner=$_SESSION['owner'];
        unset($_SESSION['owner']);
        $querry="select * from users where id='$idOwner'";
        $result=mysqli_query($conn,$querry);
        if($row=mysqli_fetch_array($result)){
            $email=$row['email'];
            $_SESSION['mailOwner']=$email;
            $dogName=$_SESSION['dogName'];
            $_SESSION['subject']="detalii despre $dogName";
            echo "<div class='email'>
            <div class='contentEmail'> 
            <form class='trimitere' method='post' action='./php/sendMail.php'>
            <label>Email to: '$email</label></br>
            <label>Subject: detalii despre '$dogName' </label> </br>
            <textarea rows='20' cols='50' name='mesaj'></textarea>
                <button type='submit' value='send' name='send'>Send</button>
            </form>
           </div>
            </div>";

        }
        ?>

        </div>
        
    </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>


</html>