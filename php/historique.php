
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
        <div class="logo-container"> 
        
<?php
include 'connexionBDD.php';




$requete = $db->query('SELECT *
FROM seance');
  
    while ($seance = $requete->fetchArray()) {
     
        echo $seance["ID"] ,' - ' ,$seance["distance"],' - ',$seance["nbrTirs"],' - ',$seance["date"],"<br/>";
      }?>

    

</body>
</html>

