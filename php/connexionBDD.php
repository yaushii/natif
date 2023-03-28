<?php



try {
    $db = new sqlite3('../bdd.db');

$requete = $db->query('SELECT * from seance');
while ($row = $requete->fetchArray()) {
   // var_dump($row);}

}} catch (Exception $e) {
    echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
    die();
}
?>

