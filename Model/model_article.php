<?php
    try
    {                
        //Exécution de la requête SQL insert
        $reponse = $bdd->query('insert into article(nom_article, prix_article) 
        values("'.$name.'", "'.$prix.'")');
        echo "ajout de l'article : $name qui à comme prix : $prix";                    
    }
    catch(Exception $e)
    {
        //affichage d'une exception en cas d’erreur
        die('Erreur : '.$e->getMessage());
    }
?>