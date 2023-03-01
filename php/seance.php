

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

    

    <form action="" method="post">

    <div class="session-container">
    <p class="tir">Distance de tir (M) :</p>
        <div class="distance">

        <input type="radio" name="dist" id="tir" value="10">
            <label for="tir" ><img class="dis" src="../images/numero-10.png" alt=""></label>

       <input type="radio" name="dist" id="tir1" value="25">
            <label for="tir1" ><img class="dis" src="../images/numero-25.png" alt=""></label>

            <input type="radio" name="dist" id="tir2" value="50">
            <label for="tir2" ><img class="dis" src="../images/50.png" alt=""></label>

        </div>


        <p class="tir">Type de cible (14x14) :</p>

        <div class="type"> 
        <input type="radio" name="type" id="cible1" value="../images/cible_14x14_6_small Rouge.png" Checked>
            <label for="cible1" ><img src="../images/cible_14x14_6_small Rouge.png" alt=""></label>

            <input type="radio" name="type" id="cible2" value="../images/cible_14x14_10c_small.png">
            <label for="cible2" ><img src="../images/cible_14x14_10c_small.png" alt=""></label>

            <input type="radio" name="type" id="cible3" value="../images/cible_14x14_10b_small.png">
            <label for="cible3" ><img src="../images/cible_14x14_10b_small.png" alt=""></label>

            <input type="radio" name="type" id="cible4" value="../images/cible_14x14_10a_small.png">
            <label for="cible4" ><img src="../images/cible_14x14_10a_small.png" alt=""></label>
        
        </div>

        <div class="nbr">

        <p class="tir">Nombre de tirs :</p>

        <input type="checkbox" name="tir[]" id="plomb" >
            <label for="plomb" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb1" >
            <label for="plomb1" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb2" >
            <label for="plomb2" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb3" >
            <label for="plomb3" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb4" >
            <label for="plomb4" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb5" >
            <label for="plomb5" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb6" >
            <label for="plomb6" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb7" >
            <label for="plomb7" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb8" >
            <label for="plomb8" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>
        <input type="checkbox" name="tir[]" id="plomb9" >
            <label for="plomb9" ><img class="plomb" src="../images/plomb.PNG" alt=""></label>

        </div>

        <div class="btn">
        <input class ="btn-btn" name ="valider" type="submit" value="envoie">
        </div>


</form>
<?php
include 'connexionBDD.php';
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
    echo sizeof($tir);
    echo " tir(s) de selectionne";

}



    if(isset($_POST['distance']) AND isset($_POST['cible']) AND isset($_POST['nbrTr']) )
    {
        $requete = $pdo->prepare("INSERT INTO idsession(distance, cible, nbrTr) VALUES(?, ?, ?)");
        $requete->execute(array(implode ($_POST['distance'],$_POST['cible'],$_POST['tir'])));
    }
    ?>

</body>

</html>