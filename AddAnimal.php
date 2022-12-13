<DOCTYPE>
<html>
    <?php
    session_start();
    include("./php/verifyLogIn.php");
    ?>
    <head>
        <title >HomePage</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./CSS/AddAnimal.css">
        
    </head>

    <body>
        <div class="container-fluid">
            <div class="container">
            <h2>Adoptie Animale</h2>
            <ul>
                <li ><a href='./homepage.php'><ion-icon name="home-outline"></ion-icon> HOME</a></li>
                <li ><a href="./ShowDogs.php"><ion-icon name="paw-outline"></ion-icon> Catei</a></li>
                <li ><ion-icon name="logo-octocat"></ion-icon> Pisici</li>
                <?php
                 if($_SESSION['admin']!=0){
                    echo "<li><a href='./AddAnimal.php'>Add Animal </a></li>";
                 }
                ?>
                <li><a href='./php/LogOut.php'>LogOut</a></li>
                
            </ul>
            </div>
        <div class="content">
            <button class="caine" id="Caine">Caine</button>
            <button class="pisica" id="Pisica">Pisica</button>
        </div>
        <script type="text/javascript">
    document.getElementById("Caine").onclick = function () {
        location.href = "./AddDog.php";
    };
</script>

<script type="text/javascript">
    document.getElementById("Pisica").onclick = function () {
        location.href = "./AddCat.php";
    };
</script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>


</html>