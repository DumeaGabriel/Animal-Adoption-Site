<DOCTYPE>
<html>
    <?php
    session_start();
    include("./php/verifyLogIn.php");
    ?>
    <head>
        <title >Catei in Adoptie</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./CSS/inAdoptie.css">
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
        $idUser=$_SESSION['id'];
        $querry="select * from dogs where idUser='$idUser'";
        $result=mysqli_query($conn,$querry);
        echo "<table>";
        while($row=mysqli_fetch_array($result)){
            $nume=$row['nume'];
            $varsta=$row['varsta'];
            $gen=$row['gen'];
            $img=$row['poza'];
            $dogid=$row['id'];
            echo "<tr><td>
            <a href='DogInfo.php?idDog=$dogid'><div class='afisareCaine' id=/''$dogid'/'>
            <div class='imagine'><img src='./imagini/$img'></div>
            <div class='date'>
                <table>
                    <tr>
                        <td>Nume:</td>
                        <td>$nume</td>
                    </tr>
                    <tr>
                        <td>Varsta:</td>
                        <td>$varsta</td>
                    </tr>
                    <tr>
                        <td>Gen:</td>
                        <td>$gen</td>
                    </tr>
                </table>
            </div>

        </div></a>
        </td></tr>
        ";
        }
        $querry="select * from cat where idUser='$idUser'";
        $result=mysqli_query($conn,$querry);
        while($row=mysqli_fetch_array($result)){
            $nume=$row['nume'];
            $varsta=$row['varsta'];
            $gen=$row['gen'];
            $img=$row['poza'];
            $dogid=$row['id'];
            echo "<tr><td>
            <a href='CatInfo.php?idDog=$dogid'><div class='afisareCaine' id=/''$dogid'/'>
            <div class='imagine'><img src='./imagini/$img'></div>
            <div class='date'>
                <table>
                    <tr>
                        <td>Nume:</td>
                        <td>$nume</td>
                    </tr>
                    <tr>
                        <td>Varsta:</td>
                        <td>$varsta</td>
                    </tr>
                    <tr>
                        <td>Gen:</td>
                        <td>$gen</td>
                    </tr>
                </table>
            </div>

        </div></a>
        </td></tr>
        ";
        }
        echo "</table>";?>

        
        </div>
       
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>


</html>