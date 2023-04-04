
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/historique.css" rel="stylesheet"/>
    <title>Projet Target</title>
</head>
<body>
<div class="nav"> 
        <div class="nav-container"> 
            <a href="../html/index.html" ><img href="index.html" class="fleche" src='../images/fleche-gauche.png' alt="logo!"/></a>
            <p>historique</p>
        </div>
    </div>
        
        
<?php
include 'connexionBDD.php';

?>

<div class="historique">

    <?php 
$requete = $db->query('SELECT *FROM seance');
  
    while ($seance = $requete->fetchArray()) {?>
     
     <section> <div class="calen" ><img class="date" ><img class="calendar" src='../images/calendrier.png'>  <?php echo $seance["date"];?></div>  <div class="distance" > <img class="dist" src="../images/metre-ruban.png"> <?php echo $seance["distance"];?></div>  <div class="tir" > <img class="nbr" src="../images/balle.png"> <?php echo$seance["nbtirs"];?></div><div class="sablier" ><img class="sable" src='../images/sablier.png'>  <?php echo $seance["temps"];?></div><div class="calen" ><img class="cible" ><img class="cible" src='../images/cible.png'>  <?php echo $seance["point"];?></div></section>
        <?php }?>

    
         
</body>
</html>

