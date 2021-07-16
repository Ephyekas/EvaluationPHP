<?php
    //connexion à la bdd
    $bdd = new PDO('mysql:host=localhost;dbname=ticket1', 'root','', 
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>