<?php
    try
    {
        $bdd = new PDO('mysql:host=sql.gandi.com;dbname=sitePerso', ' JR10469-GANDI', 'wE2G9ZA*');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    ?>