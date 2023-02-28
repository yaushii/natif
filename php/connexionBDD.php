<?php


$user="root" ;
$pass="";
$dataase="test";



try {
 
    $pdo = new PDO('mysql:host=localhost;dbname=test', $user , $pass);
    
    }
    catch (PDOException $exception) {
     
     
     echo 'Erreur :'. $exception ->getMessage()."<br/>";
     exit;
     
    }