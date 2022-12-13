<DOCTYPE>
<html>
    <?php
    session_start();
    include("./php/verifyLogIn.php");
    ?>
    <head>
        <title >Add Dog</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./CSS/AddDog.css">
        
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
            
            <form action="./php/addDogToBD.php" method="post" enctype="multipart/form-data"> 
                <div class="Nume">
                <label >Numele cainelui</label>
                        <input name="nume" type="text" placeholder="Numele Cainelui" class="form-control form-control-sm" required>
                        
                </div>
                    <label>Varsta cainelui?</label>
                          <input name="varsta" type="number" min="0" max="30" required>
                </br>
                <label>Gen</label>
                <select name="gen" name="gen" class="gen form-select form-select-lg mb-3">
                    <option value="mascul">Mascul</option>
                    <option value="femela">Femela</option>
                </select>
                </br>
                <label>Talie</label>
                <select name="talie" name="talie" class="form-select form-select-lg mb-3" >
                    <option value="mare">Mare</option>
                    <option value="medie">Medie</option>
                    <option value="mic">Mica</option>
                </select>
                </br>
                <label>Descriere caine</label>
                </br>
                <textarea name="descriere" name="descriere" class="form-control" maxlength="255" rows="6" cols="30" required placeholder="Scrie o scurta descriere" ></textarea>
                </br>
                <label>Introdu o poza</label>
                <input class="dogImage " type="file" name="image" required/>
                </br>
                <button class="AddAnimal btn btn-primary" type="submit" name="add">Add</button>
                </div>
            </form>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>


</html>