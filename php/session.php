<?php
include 'connexionBDD.php';
session_start();
$dist = $_GET["dist"];
$type = $_GET["type"];
$tir = $_GET["tir"];


/*
    echo "<br>distance choisie ";
    echo $dist;
    echo "<br>type de cible:  ";
    echo $type;
    echo "<br> vous avez ";
    echo ($tir);
    echo " tir(s) de selectionne";
*/

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= '../css/encours.css ' rel="stylesheet"/>
    <script type="text/javascript" src="../js/chrono.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

<img class="affiche" src=' <?php echo $_GET["type"] ?>'alt="logo!"/>
</div>

<div class="points">

    <?php

        $requete = $db->query('SELECT  point, numTir FROM score where seance_idseance = (select MAX(idseance) from seance)');
  
            while ($score = $requete->fetchArray()) {?>
   
            
                <div class ="point"><p> <?php echo $score["point"] ,'  '?> </p> </div> 

           <?php }?>


    

</div>

<div class="container-stats">

    <div class="container-items-stats"> 
        <div class="container-item-stat"> 
            <img href="/" class="icone-stat" src='../images/balle.png'alt="balle!"/>
            <p> <?php echo $_GET["tir"] ?> Tirs</p>
        </div>
        <div class="container-item-stat"> 
            <img href="/" class="icone-stat" src='../images/cible.png'alt="balle!"/>
            <p> 90 pts </p>
        </div>
    </div>
    <div class="container-items-stats"> 
        <div class="container-item-stat"> 
            <img href="/" class="icone-stat" src='../images/metre-ruban.png' alt="balle!"/>
            <p> <?php echo $_GET["dist"] ?> m </p>
        </div>
        <div id="chrono" class="container-item-stat"> 
            <img href="/" class="icone-stat" src='../images/sablier.png'alt="balle!"/>

                <div id="chrono">
                    <span id="minutes">00</span>:<span id="seconds">00</span>.<span id="millis">000</span>
                </div>
            
        </div>
    </div>
</div>

<div class="button-container">
    <button id="stop"  class="btn btn-success btn btn-pause">Go</button>
    <button class="btn btn-danger" >Abandon</button>
</div>


<div>
</div>



<?php

@$valider=$_GET["valider"];

/*if(isset($valider)){
    echo "<br>distance choisie ";
    echo $dist;
    echo "<br>type de cible:  ";
    echo $type;
    echo "<br> vous avez ";
    echo ($tir);
    echo " tir(s) de selectionne";

}*/



    if(isset($dist) && isset($type) && isset($tir) && isset($valider) && $_SESSION['i']==0)
   {
    $requete = ("INSERT INTO 'seance'('distance','typeCibles','nbtirs','date','etat') VALUES($dist, '$type',$tir, datetime(), 1)");
        $db->exec($requete);
        $_SESSION['i'] = 1;
       return 0;
   }
   
    
   ?>
</div>
</html>