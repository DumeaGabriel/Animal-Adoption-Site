<DOCTYPE>
<html>
    <?php
    session_start();
    include("./php/verifyLogIn.php");
    ?>
    <head>
        <title >Dog Info</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./CSS/InfoDogs.css">
    </head>

    <body>
        <div class="container-fluid">
                <div class="container">
            <h2>Adoptie Animale</h2>
            <ul>
                <li ><a href='./homepage.php'><ion-icon name="home-outline"></ion-icon> HOME</a></li>
                <li ><a href="./ShowDogs.php"><ion-icon name="paw-outline"></ion-icon> Catei</a></li>
                <li ><a href="./ShowCats.php"><ion-icon name="logo-octocat"></ion-icon> Pisici</a></li>
               <li><a href='./AddAnimal.php'>Add Animal </a></li>
                <li><a href='./php/LogOut.php'>LogOut</a></li>
                
            </ul>
            </div>
        <div class="content">
        <?php
         function dateDiffInDays($date1, $date2) 
         {
             $diff = strtotime($date2) - strtotime($date1);
         
             return abs(round($diff / 86400));
         }
        $conn=new mysqli('localhost','root','','proiect pi');
        $db=mysqli_select_db($conn,'proiect pi');
        $_SESSION['idDog']=$_GET['idDog'];
        $dogid=$_GET['idDog'];
        $querry="select * from dogs where id='$dogid'";
        $result=mysqli_query($conn,$querry);
        if($row=mysqli_fetch_array($result)){

            $nume=$row['nume'];
            $varsta=$row['varsta'];
            $gen=$row['gen'];
            $img=$row['poza'];
            $talie=$row['talie'];
            $jud=$row['oras'];
            $dogid=$row['id'];
            $_SESSION['dogid']=$dogid;
            $descriere=$row['descriere'];
            $idUser=$row['idUser'];
            $_SESSION['owner']=$idUser;
            $adoptat=$row['adoptat'];
            $adoptBy=$row['adoptBy'];
            $querry="select * from users where id='$idUser'";
            $result=mysqli_query($conn,$querry);
            $row=mysqli_fetch_array($result);
            $numeUser=$row['username'];
            $email=$row['email'];
            echo "<div class='imagine'><img src='./imagini/$img''></div>
            <div class='descrieri'>
                <table>
                    <tr>
                        <td>Nume:</td>
                        <td>$nume</td>
                    </tr>
                    <tr>
                        <td>Varsta</td>
                        <td>$varsta</td>
                    </tr>
                    <tr>
                        <td>Gen</td>
                        <td>$gen</td>
                    </tr>
                    <tr>
                        <td>Talie</td>
                        <td>$talie</td>
                    </tr>
                    <tr>
                        <td>Judet:</td>
                        <td>$jud</td>
                    </tr>
                    <tr>
                        <td>Descriere</td>
                        <td>$descriere</td>
                    </tr>
                </table>";
                if($adoptat)
                    echo "<button class='adopta'>Adopta</button>";
                else if($idUser!=$_SESSION['id'])
                    echo "<button class='adopta1' value=\'adopta\' id='adopta1'>Adopta</button>";
                echo "<button class='btn btn btn-danger' id='email' type='submit'>Send Email</button>
            ";
            if($_SESSION['id']==$idUser)
                echo "<button class='sterge' id='sterge'>Delete</button>";
            
            if($_SESSION['id']==$adoptBy)
                echo "<button class='cancel' id='cancel'>Cancel</button>";
            

            echo "</div>";
            
            
        }
        ?>

        </div>
        
        
        <script type="text/javascript">
    document.getElementById("email").onclick = function () {
        <?php
        $_SESSION['dogName']=$nume;
        $_SESSION['owner']=$idUser;    
        ?>
        location.href = "./sendEmail.php";
    };
</script>
<script>
    var adopt=document.getElementById("adopta1");
    document.getElementById("adopta1").onclick = function () {
        window.location.href="./php/changeAdoptStat.php";
        }
</script>
<script>
    document.getElementById("sterge").onclick = function () {
        location.href = "./php/deleteDog.php";
    };
</script>
<script>
    document.getElementById("cancel").onclick = function () {
        location.href = "./php/cancelDog.php";
    };
</script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>


</html>