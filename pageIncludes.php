<?php
    include("php/connect.php");
   function chargerClasse($Etudiants)
    {
        require $Etudiants . '.php';
    }
    
    spl_autoload_register('chargerClasse');
    <div id="region1">
        $region1 = new Etudiants();
        $request = $db->query('* FROM personnages WHERE id=1');
        
            while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
                $region1 = new Etudiants($donnees);
                echo 'Region: '$region1->getRegion(),'</br>'
                    'Homme: '$region1->getHomme(),'</br>'
                    'Femme: '$region1->getFemme(),'</br>'
                    'Boursier: '$region1->getBoursier(),'</br>'
                    'ECE: '$region1->getEce(),'</br>'
                    'ECS: '$region1->getEcs(),'</br>'
                    'Passerele: '$region1->getPasserelles(),'</br>'
                    'IUT: '$region1->getIut(),'</br>'
                    'DUT: '$region1->getDut(),'</br>'
                    'Université: '$region1->getUniversite(),'</br>'
                    'Classes préparatoires scientifiques: '$region1->getPrepaS(),'</br>'
                    'Littéraires: '$region1->getLitteraires(),'</br>'
                    'Autres: '$region1->getAutres()'</br>';
        }
    </div>
    <div id="region2">
    $region2 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=2');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region2 = new Etudiants($donnees);
        echo 'Region: '$region2->getRegion(),'</br>'
        'Homme: '$region2->getHomme(),'</br>'
        'Femme: '$region2->getFemme(),'</br>'
        'Boursier: '$region2->getBoursier(),'</br>'
        'ECE: '$region2->getEce(),'</br>'
        'ECS: '$region2->getEcs(),'</br>'
        'Passerele: '$region2->getPasserelles(),'</br>'
        'IUT: '$region2->getIut(),'</br>'
        'DUT: '$region2->getDut(),'</br>'
        'Université: '$region2->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region2->getPrepaS(),'</br>'
        'Littéraires: '$region2->getLitteraires(),'</br>'
        'Autres: '$region2->getAutres()'</br>';
    }
    </div>
    <div id="region3">
    $region1 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=3');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region3 = new Etudiants($donnees);
        echo 'Region: '$region3->getRegion(),'</br>'
        'Homme: '$region3->getHomme(),'</br>'
        'Femme: '$region3->getFemme(),'</br>'
        'Boursier: '$region3->getBoursier(),'</br>'
        'ECE: '$region3->getEce(),'</br>'
        'ECS: '$region3->getEcs(),'</br>'
        'Passerele: '$region3->getPasserelles(),'</br>'
        'IUT: '$region3->getIut(),'</br>'
        'DUT: '$region3->getDut(),'</br>'
        'Université: '$region3->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region3->getPrepaS(),'</br>'
        'Littéraires: '$region3->getLitteraires(),'</br>'
        'Autres: '$region3->getAutres()'</br>';
    }
    </div>
    <div id="region4">
    $region4 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=4');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region4 = new Etudiants($donnees);
        echo 'Region: '$region4->getRegion(),'</br>'
        'Homme: '$region4->getHomme(),'</br>'
        'Femme: '$region4->getFemme(),'</br>'
        'Boursier: '$region4->getBoursier(),'</br>'
        'ECE: '$region4->getEce(),'</br>'
        'ECS: '$region4->getEcs(),'</br>'
        'Passerele: '$region4->getPasserelles(),'</br>'
        'IUT: '$region4->getIut(),'</br>'
        'DUT: '$region4->getDut(),'</br>'
        'Université: '$region4->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region4->getPrepaS(),'</br>'
        'Littéraires: '$region4->getLitteraires(),'</br>'
        'Autres: '$region1->getAutres()'</br>';
    }
    </div>
    <div id="region5">
    $region5 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=5');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region5 = new Etudiants($donnees);
        echo 'Region: '$region5->getRegion(),'</br>'
        'Homme: '$region5->getHomme(),'</br>'
        'Femme: '$region5->getFemme(),'</br>'
        'Boursier: '$region5->getBoursier(),'</br>'
        'ECE: '$region5->getEce(),'</br>'
        'ECS: '$region5->getEcs(),'</br>'
        'Passerele: '$region5->getPasserelles(),'</br>'
        'IUT: '$region5->getIut(),'</br>'
        'DUT: '$region5->getDut(),'</br>'
        'Université: '$region5->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region5->getPrepaS(),'</br>'
        'Littéraires: '$region5->getLitteraires(),'</br>'
        'Autres: '$region5->getAutres()'</br>';
    }
    </div>
    <div id="region6">
    $region1 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=6');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region6 = new Etudiants($donnees);
        echo 'Region: '$region6->getRegion(),'</br>'
        'Homme: '$region6->getHomme(),'</br>'
        'Femme: '$region6->getFemme(),'</br>'
        'Boursier: '$region6->getBoursier(),'</br>'
        'ECE: '$region6->getEce(),'</br>'
        'ECS: '$region6->getEcs(),'</br>'
        'Passerele: '$region6->getPasserelles(),'</br>'
        'IUT: '$region6->getIut(),'</br>'
        'DUT: '$region6->getDut(),'</br>'
        'Université: '$region6->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region6->getPrepaS(),'</br>'
        'Littéraires: '$region6->getLitteraires(),'</br>'
        'Autres: '$region6->getAutres()'</br>';
    }
    </div>
    <div id="region7">
    $region7 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=7');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region7 = new Etudiants($donnees);
        echo 'Region: '$region7->getRegion(),'</br>'
        'Homme: '$region7->getHomme(),'</br>'
        'Femme: '$region7->getFemme(),'</br>'
        'Boursier: '$region7->getBoursier(),'</br>'
        'ECE: '$region7->getEce(),'</br>'
        'ECS: '$region7->getEcs(),'</br>'
        'Passerele: '$region7->getPasserelles(),'</br>'
        'IUT: '$region7->getIut(),'</br>'
        'DUT: '$region7->getDut(),'</br>'
        'Université: '$region7->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region7->getPrepaS(),'</br>'
        'Littéraires: '$region7->getLitteraires(),'</br>'
        'Autres: '$region7->getAutres()'</br>';
    }
    </div>
    <div id="region8">
    $region8 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=8');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region8 = new Etudiants($donnees);
        echo 'Region: '$region8->getRegion(),'</br>'
        'Homme: '$region8->getHomme(),'</br>'
        'Femme: '$region8->getFemme(),'</br>'
        'Boursier: '$region8->getBoursier(),'</br>'
        'ECE: '$region8->getEce(),'</br>'
        'ECS: '$region8->getEcs(),'</br>'
        'Passerele: '$region8->getPasserelles(),'</br>'
        'IUT: '$region8->getIut(),'</br>'
        'DUT: '$region8->getDut(),'</br>'
        'Université: '$region8->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region8->getPrepaS(),'</br>'
        'Littéraires: '$region8->getLitteraires(),'</br>'
        'Autres: '$region8->getAutres()'</br>';
    }
    </div>
    <div id="region9">
    $region9 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=9');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region9 = new Etudiants($donnees);
        echo 'Region: '$region9->getRegion(),'</br>'
        'Homme: '$region9->getHomme(),'</br>'
        'Femme: '$region9->getFemme(),'</br>'
        'Boursier: '$region9->getBoursier(),'</br>'
        'ECE: '$region9->getEce(),'</br>'
        'ECS: '$region9->getEcs(),'</br>'
        'Passerele: '$region9->getPasserelles(),'</br>'
        'IUT: '$region9->getIut(),'</br>'
        'DUT: '$region9->getDut(),'</br>'
        'Université: '$region9->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region9->getPrepaS(),'</br>'
        'Littéraires: '$region9->getLitteraires(),'</br>'
        'Autres: '$region9->getAutres()'</br>';
    }
    </div>
    <div id="region10">
    $region10 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=10');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region10 = new Etudiants($donnees);
        echo 'Region: '$region10->getRegion(),'</br>'
        'Homme: '$region10->getHomme(),'</br>'
        'Femme: '$region10->getFemme(),'</br>'
        'Boursier: '$region10->getBoursier(),'</br>'
        'ECE: '$region10->getEce(),'</br>'
        'ECS: '$region10->getEcs(),'</br>'
        'Passerele: '$region10->getPasserelles(),'</br>'
        'IUT: '$region10->getIut(),'</br>'
        'DUT: '$region1->getDut(),'</br>'
        'Université: '$region10->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region10->getPrepaS(),'</br>'
        'Littéraires: '$region10->getLitteraires(),'</br>'
        'Autres: '$region10->getAutres()'</br>';
    }
    </div>
    <div id="region11">
    $region11 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=11');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region11 = new Etudiants($donnees);
        echo 'Region: '$region11->getRegion(),'</br>'
        'Homme: '$region11->getHomme(),'</br>'
        'Femme: '$region11->getFemme(),'</br>'
        'Boursier: '$region11->getBoursier(),'</br>'
        'ECE: '$region11->getEce(),'</br>'
        'ECS: '$region11->getEcs(),'</br>'
        'Passerele: '$region11->getPasserelles(),'</br>'
        'IUT: '$region11->getIut(),'</br>'
        'DUT: '$region11->getDut(),'</br>'
        'Université: '$region11->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region11->getPrepaS(),'</br>'
        'Littéraires: '$region11->getLitteraires(),'</br>'
        'Autres: '$region11->getAutres()'</br>';
    }
    </div>
    <div id="region12">
    $region12 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=12');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region12 = new Etudiants($donnees);
        echo 'Region: '$region12->getRegion(),'</br>'
        'Homme: '$region12->getHomme(),'</br>'
        'Femme: '$region12->getFemme(),'</br>'
        'Boursier: '$region12->getBoursier(),'</br>'
        'ECE: '$region12->getEce(),'</br>'
        'ECS: '$region12->getEcs(),'</br>'
        'Passerele: '$region12->getPasserelles(),'</br>'
        'IUT: '$region12->getIut(),'</br>'
        'DUT: '$region12->getDut(),'</br>'
        'Université: '$region12->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region12->getPrepaS(),'</br>'
        'Littéraires: '$region12->getLitteraires(),'</br>'
        'Autres: '$region12->getAutres()'</br>';
    }
    </div>
    <div id="region13">
    $region13 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=13');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region13 = new Etudiants($donnees);
        echo 'Region: '$region13->getRegion(),'</br>'
        'Homme: '$region13->getHomme(),'</br>'
        'Femme: '$region13->getFemme(),'</br>'
        'Boursier: '$region13->getBoursier(),'</br>'
        'ECE: '$region13->getEce(),'</br>'
        'ECS: '$region13->getEcs(),'</br>'
        'Passerele: '$region13->getPasserelles(),'</br>'
        'IUT: '$region13->getIut(),'</br>'
        'DUT: '$region13->getDut(),'</br>'
        'Université: '$region13->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region13->getPrepaS(),'</br>'
        'Littéraires: '$region13->getLitteraires(),'</br>'
        'Autres: '$region13->getAutres()'</br>';
    }
    </div>
    <div id="region14">
    $region1 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=14');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region14 = new Etudiants($donnees);
        echo 'Region: '$region14->getRegion(),'</br>'
        'Homme: '$region14->getHomme(),'</br>'
        'Femme: '$region14->getFemme(),'</br>'
        'Boursier: '$region14->getBoursier(),'</br>'
        'ECE: '$region14->getEce(),'</br>'
        'ECS: '$region14->getEcs(),'</br>'
        'Passerele: '$region14->getPasserelles(),'</br>'
        'IUT: '$region14->getIut(),'</br>'
        'DUT: '$region14->getDut(),'</br>'
        'Université: '$region14->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region14->getPrepaS(),'</br>'
        'Littéraires: '$region14->getLitteraires(),'</br>'
        'Autres: '$region14->getAutres()'</br>';
    }
    </div>
    <div id="region15">
    $region15 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=15');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region15 = new Etudiants($donnees);
        echo 'Region: '$region15->getRegion(),'</br>'
        'Homme: '$region15->getHomme(),'</br>'
        'Femme: '$region15->getFemme(),'</br>'
        'Boursier: '$region15->getBoursier(),'</br>'
        'ECE: '$region15->getEce(),'</br>'
        'ECS: '$region15->getEcs(),'</br>'
        'Passerele: '$region15->getPasserelles(),'</br>'
        'IUT: '$region15->getIut(),'</br>'
        'DUT: '$region15->getDut(),'</br>'
        'Université: '$region15->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region15->getPrepaS(),'</br>'
        'Littéraires: '$region15->getLitteraires(),'</br>'
        'Autres: '$region15->getAutres()'</br>';
    }
    </div>
    <div id="region16">
    $region16 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=16');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region16 = new Etudiants($donnees);
        echo 'Region: '$region16->getRegion(),'</br>'
        'Homme: '$region16->getHomme(),'</br>'
        'Femme: '$region16->getFemme(),'</br>'
        'Boursier: '$region16->getBoursier(),'</br>'
        'ECE: '$region16->getEce(),'</br>'
        'ECS: '$region16->getEcs(),'</br>'
        'Passerele: '$region16->getPasserelles(),'</br>'
        'IUT: '$region16->getIut(),'</br>'
        'DUT: '$region16->getDut(),'</br>'
        'Université: '$region16->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region16->getPrepaS(),'</br>'
        'Littéraires: '$region16->getLitteraires(),'</br>'
        'Autres: '$region16->getAutres()'</br>';
    }
    </div>
    <div id="region17">
    $region17 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=17');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region17 = new Etudiants($donnees);
        echo 'Region: '$region17->getRegion(),'</br>'
        'Homme: '$region17->getHomme(),'</br>'
        'Femme: '$region17->getFemme(),'</br>'
        'Boursier: '$region17->getBoursier(),'</br>'
        'ECE: '$region17->getEce(),'</br>'
        'ECS: '$region17->getEcs(),'</br>'
        'Passerele: '$region17->getPasserelles(),'</br>'
        'IUT: '$region17->getIut(),'</br>'
        'DUT: '$region17->getDut(),'</br>'
        'Université: '$region17->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region17->getPrepaS(),'</br>'
        'Littéraires: '$region17->getLitteraires(),'</br>'
        'Autres: '$region17->getAutres()'</br>';
    }
    </div>
    <div id="region18">
    $region18 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=18');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region18 = new Etudiants($donnees);
        echo 'Region: '$region18->getRegion(),'</br>'
        'Homme: '$region18->getHomme(),'</br>'
        'Femme: '$region18->getFemme(),'</br>'
        'Boursier: '$region18->getBoursier(),'</br>'
        'ECE: '$region18->getEce(),'</br>'
        'ECS: '$region18->getEcs(),'</br>'
        'Passerele: '$region18->getPasserelles(),'</br>'
        'IUT: '$region18->getIut(),'</br>'
        'DUT: '$region18->getDut(),'</br>'
        'Université: '$region18->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region18->getPrepaS(),'</br>'
        'Littéraires: '$region18->getLitteraires(),'</br>'
        'Autres: '$region18->getAutres()'</br>';
    }
    </div>
    <div id="region19">
    $region19 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=19');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region19 = new Etudiants($donnees);
        echo 'Region: '$region19->getRegion(),'</br>'
        'Homme: '$region19->getHomme(),'</br>'
        'Femme: '$region19->getFemme(),'</br>'
        'Boursier: '$region19->getBoursier(),'</br>'
        'ECE: '$region19->getEce(),'</br>'
        'ECS: '$region19->getEcs(),'</br>'
        'Passerele: '$region19->getPasserelles(),'</br>'
        'IUT: '$region19->getIut(),'</br>'
        'DUT: '$region19->getDut(),'</br>'
        'Université: '$region19->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region19->getPrepaS(),'</br>'
        'Littéraires: '$region19->getLitteraires(),'</br>'
        'Autres: '$region19->getAutres()'</br>';
    }
    </div>
    <div id="region20">
    $region20 = new Etudiants();
    $request = $db->query('* FROM personnages WHERE id=20');
    
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))         {
        $region20 = new Etudiants($donnees);
        echo 'Region: '$region20->getRegion(),'</br>'
        'Homme: '$region20->getHomme(),'</br>'
        'Femme: '$region20->getFemme(),'</br>'
        'Boursier: '$region20->getBoursier(),'</br>'
        'ECE: '$region20->getEce(),'</br>'
        'ECS: '$region20->getEcs(),'</br>'
        'Passerele: '$region20->getPasserelles(),'</br>'
        'IUT: '$region20->getIut(),'</br>'
        'DUT: '$region20->getDut(),'</br>'
        'Université: '$region20->getUniversite(),'</br>'
        'Classes préparatoires scientifiques: '$region20->getPrepaS(),'</br>'
        'Littéraires: '$region20->getLitteraires(),'</br>'
        'Autres: '$region20->getAutres()'</br>';
    }
    </div>
   
    ?>
