<?php
include 'connexionBDD.php';
$requete = $db->query('SELECT * from seance');
while ($row = $requete->fetchArray()) {
    var_dump($row);}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= '../css/encours.css ' rel="stylesheet"/>
    <script src="../js/index.js"></script>
    <title>Partie en cours</title>
</head>
<body>
    
<div class="nav"> 
        <div class="nav2-container"> 
            <a href="../html/index.html" ><img href="/" class="fleche" src='../images/fleche-gauche.png' alt="logo!"/></a>
            <p>Rapport</p>
        </div>
    </div>

<div class="rendu">

<img class="affiche" src='../images/cible_14x14_10a_small.png'alt="logo!"/>
</div>

<div class="points">

    <div class ="point"><p>1</p></div>
    <div class ="point"> <p>2</p></div>
    <div class ="point"> <p>3</p></div>
    <div class ="point"> <p>4</p></div>
    <div class ="point"> <p>5</p></div>
    <div class ="point"> <p>6</p></div>
    <div class ="point"> <p>7</p></div>
    <div class ="point"><p>8</p> </div>
    <div class ="point"> <p>9</p></div>
    <div class ="point"><p>10</p> </div>

</div>

<div class="container-stats">

    <div class="container-items-stats"> 
        <div class="container-item-stat"> 
            <img href="/" class="icone-stat" src='../images/balle.png'alt="balle!"/>
            <p> <?php seance.nbrTirs ?></p>
        </div>
        <div class="container-item-stat"> 
            <img href="/" class="icone-stat" src='../images/cible.png'alt="balle!"/>
            <p> 90 pts </p>
        </div>
    </div>
    <div class="container-items-stats"> 
        <div class="container-item-stat"> 
            <img href="/" class="icone-stat" src='../images/metre-ruban.png' alt="balle!"/>
            <p> 10m </p>
        </div>
        <div class="container-item-stat"> 
            <img href="/" class="icone-stat" src='../images/sablier.png'alt="balle!"/>
            <p> 00:00 </p>
            
        </div>
    </div>
</div>

<div class="button-container">
    <button class="btn btn-pause">Pause</button>
    <button class="btn btn-abandon">Abandon</button>
</div>


<div>
</div>

</html>