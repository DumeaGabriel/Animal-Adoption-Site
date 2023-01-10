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
                <label >Judetul:</label>
                <select name="judet" class="form-select form-select-lg mb-3" >
                    <option value="Dolj">Dolj</option>
                    <option value="Gorj">Gorj</option>
                    <option value="Mehedinti">Mehedinti</option>
                    <option value="Olt">Olt</option>
                    <option value="Teleorman">Teleorman</option>
                    <option value="Bucuresti">Bucuresti</option>
                    <option value="Calarasi">Calarasi</option>
                    <option value="Dambovita">Dambovita</option>
                    <option value="Giurgiu">Giurgiu</option>
                    <option value="Ialomita">Ialomita</option>
                    <option value="Constanta">Constanta</option>
                    <option value="Arad">Arad</option>
                    <option value="Bihor">Bihor</option>
                    <option value="Caras-Severin">Caras-Severin</option>
                    <option value="Timis">Timis</option>
                    <option value="Botosani">Botosani</option>
                    <option value="Alba">Alba</option>
                    <option value="Bistrita-Nasaut">Bistrita-Nasaud</option>
                    <option value="Cluj">Cluj</option>
                    <option value="Hunedoara">Hunedoara</option>
                    <option value="Maramures">Maramures</option>
                    <option value="Mures">Mures</option>
                    <option value="Salaj">Salaj</option>
                    <option value="Satu Mare">Satu Mare</option>
                    <option value="Arges">Arges</option>
                    <option value="Sibiu">Sibiu</option>
                    <option value="Valcea">Valcea</option>
                    <option value="Brasov">Brasov</option>
                    <option value="Covasna">Covasna</option>
                    <option value="Harghita">Harghita</option>
                    <option value="Iasi">Iasi</option>
                    <option value="Neamt">Neamt</option>
                    <option value="Prahova">Prahova</option>
                    <option value="Suceava">Suceava</option>
                    <option value="Bacau">Bacau</option>
                    <option value="Braila">Braila</option>
                    <option value="Buzau">Buzau</option>
                    <option value="Galati">Galati</option>
                    <option value="Vaslui">Vaslui</option>
                    <option value="Vrancea">Vrancea</option>
                    <option value="Ilfov">Ilfov</option>



                </select>
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