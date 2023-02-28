<?php
/*include 'connexionBDD.php'*/
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='../CSS/session.css' rel="stylesheet"/>
    <title>Creation Seance</title>
</head>
<body>
    


<div class="nav"> 
        <div class="nav-container"> 
            <a href="../html/index.html" ><img href="index.html" class="fleche" src='../images/fleche-gauche.png'alt="logo!"/></a>
            <p> Nouvelle Session </p>
        </div>
    </div>

    

    <form action="session.php" method="post">
    <div class="session-container">
    <p class="tir">Distance de tir (M) :</p>
        <div class="distance">
        <div class="M"><input class="choix" type="button" value="10"></div>
        <div class="M"><input class="choix" type="button" value="25"></div>
        <div class="M"><input class="choix" type="button" value="50"></div>
        

        </div>

        <p class="tir">Type de cible (14x14) :</p>
        <div class="type">
        

       <input type="image" class="cible" id="image" alt="Login" src="../images/cible_14x14_6_small Rouge.png">
        <input type="image" class="cible" id="image" alt="Login" src="../images/cible_14x14_10a_small.png">
        <input type="image" class="cible" id="image" alt="Login" src="../images/cible_14x14_10b_small.png">
        <input type="image" class="cible" id="image" alt="Login" src="../images/cible_14x14_10c_small.png">
        </select>

        </div>

        <div class="nbr">

        <p class="tir">Nombre de tirs :</p>


        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">
        <input class="plomb" type="image" src="../images/plomb.png" alt="logo!">

        </div>

        <div class="btn">
        <input class ="btn-btn" type="button" value="envoie">
        </div>


</form>


</body>

</html>