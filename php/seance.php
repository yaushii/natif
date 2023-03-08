<!DOCTYPE html>

<html lang="fr">
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

    

    <form action="" method="post">

    <div class="session-container">
    <p class="tir">Distance de tir (M) :</p>
        <div class="distance">

        <input class="cache" type="radio" name="dist" id="tir" value="10">
            <label for="tir" ><img class="dis" src="../images/numero-10.png" alt=""></label>

       <input class="cache" type="radio" name="dist" id="tir1" value="25">
            <label for="tir1" ><img class="dis" src="../images/numero-25.png" alt=""></label>

            <input class="cache" type="radio" name="dist" id="tir2" value="50">
            <label for="tir2" ><img class="dis" src="../images/50.png" alt=""></label>

        </div>


        <p class="tir">Type de cible (14x14) :</p>

        <div class="type"> 

        <input class="cache" type="radio" name="type" id="cible1" value="1" Checked>
            <label for="cible1" ><img src="../images/cible_14x14_6_small Rouge.png" alt=""></label>

            <input class="cache" type="radio" name="type" id="cible2" value="2">
            <label for="cible2" ><img src="../images/cible_14x14_10a_small.png" alt=""></label>

            <input class="cache" type="radio" name="type" id="cible3" value="3">
            <label for="cible3" ><img src="../images/cible_14x14_10b_small.png" alt=""></label>

            <input class="cache" type="radio" name="type" id="cible4" value="4">
            <label for="cible4" ><img src="../images/cible_14x14_10c_small.png" alt=""></label>
        
        </div>

        <p class="tir">Nombre de tirs :</p>
        <div class="nbr">


         <input class="cache" type="checkbox" name="tir" id="plomb" value="1" >
            <label for="plomb" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb1" value="2" >
            <label for="plomb1" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb2" value="3" >
            <label for="plomb2" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb3" value="4" >
            <label for="plomb3" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb4" value="5" >
            <label for="plomb4" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb5" value="6" >
            <label for="plomb5" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb6" value="7" >
            <label for="plomb6" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb7" value="8" >
            <label for="plomb7" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb8" value="9" >
            <label for="plomb8" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input class="cache" type="checkbox" name="tir" id="plomb9" value="10" >
            <label for="plomb9" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>





        </div>

        <div class="btn">
        <input href="../php/session.php" class ="btn-btn" name ="valider" type="submit" value="envoie">
        </div>


</form>

<?php
include 'connexionBDD.php';
?>
<?php

@$dist = $_POST["dist"];
@$type = $_POST["type"];
@$tir = $_POST["tir"];
@$valider=$_POST["valider"];

if(isset($valider)){
    echo "<br>distance choisie ";
    echo $dist;
    echo "<br>type de cible:  ";
    echo $type;
    echo "<br> vous avez ";
    echo ($tir);
    echo " tir(s) de selectionne";

}


    if(isset($dist) && isset($type) && isset($tir))
   {
            $requete = ("INSERT INTO 'seance'('distance','types','nbrTirs') VALUES($dist, $type,$tir)");
        $db->exec($requete);
       return 0;
        
   }else{
    echo "<br>veuillez remplir tout les champs";
   }
    ?>

</body>

</html>