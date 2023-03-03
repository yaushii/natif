<?php
$db = new SQLite3('../bdd.db');

$results = $db->query('SELECT * FROM test');
while ($row = $results->fetchArray()) {
    var_dump($row);
}
?>