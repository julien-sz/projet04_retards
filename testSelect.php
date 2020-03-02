<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$DBserveur = new PDO('mysql:host=localhost;dbname=retards', 'marvin', '1337', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

$getEleves = $DBserveur->query('select role_id, nom, id from utilisateurs where role_id=1');
$getEleves->execute();
$getEleves->setFetchMode(PDO::FETCH_ASSOC);

foreach($getEleves->fetchAll() as $key => $eleve) {

    echo  $eleve["nom"].' '.$eleve['id'].'<br>';

}

