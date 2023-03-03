<?php
$db = new SQLite3('../bdd.db');

$results = $db->query('SELECT * from distance');
while ($row = $results->fetchArray()) {
    var_dump($row);
}
?>

