<?php
include 'connexionBDD.php';
@$dist = $_GET["dist"];
@$type = $_GET["type"];
@$tir = $_GET["tir"];
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href= '../css/encours.css ' rel="stylesheet"/>
    <script type="text/javascript" src="../js/index.js" defer></script>
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
            <button id="start" class="btn btn-primary go">GO</button>
                       <script>
                            var spanMinutes = document.getElementById("minutes");
var spanSeconds = document.getElementById("seconds");
var spanMillis = document.getElementById("millis");

var chrono = 0;   // millisecondes
var timer = null; // pour stocker le handle du timer

function reset() { // remet le compteur à zéro
  chrono = -1;
  increment();
}

function start() {
if (timer == null){
 	timer = setInterval(increment, 1);
  }
}

function stop() {
	clearInterval(timer);
  timer = null;
}

function increment() {
	// TODO: 
  //  - incrémenter le chrono 
  chrono++;
  //  - calculer minutes, secondes, millis
  var millis = chrono %1000;
  var seconds = ~~(chrono / 1000) % 60;
  var minutes = ~~(chrono / 60000);
  //  - mettre à jour le HTML
  spanMinutes.innerHTML = ("0"+minutes).slice(-2);
  spanSeconds.innerHTML = ("00"+seconds).slice(-2);
  spanMillis.innerHTML = ("000"+millis).slice(-3);
}

// enregistrer les événements
document.getElementById("start").addEventListener('click', start);
document.getElementById("stop").addEventListener('click', stop);
document.getElementById("reset").addEventListener('click', reset);

                       </script>
        </div>
    </div>
</div>

<div class="button-container">
    <button id="stop" onclick="stop()" class="btn btn-success btn btn-pause">Pause</button>
    <button class="btn btn-danger" onclick="reset()">Abandon</button>
</div>


<div>
</div>



<?php

@$valider=$_GET["valider"];

if(isset($valider)){
    echo "<br>distance choisie ";
    echo $dist;
    echo "<br>type de cible:  ";
    echo $type;
    echo "<br> vous avez ";
    echo ($tir);
    echo " tir(s) de selectionne";

}


    if(isset($dist) && isset($type) && isset($tir) && isset($valider))
   {
    $requete = ("INSERT INTO 'seance'('distance','types','nbrTirs','date') VALUES($dist, '$type',$tir, datetime())");
        $db->exec($requete);
       return 0;
        
   }else{
    echo "<br>veuillez remplir tout les champs";
   }
    
?>
</html>