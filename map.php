<!DOCTYPE html>
    <!--
        Réalisé par Erwan Guyomarc'h - TSP 2013-2016
        erwan-guyomarch.fr
    -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery-1.10.2.js"></script>
<script src="js/nav.js"></script>
<link rel="stylesheet" type="text/css" href="css/design.css" />
<link rel="shortcut icon" href="images/logo-court.png" />
<title>Promo2Tel</title>
</head>
<body>
<div id="entete">
<a href="index.php"><img class="imageDeTete" src="images/logo-long.png" alt="Promo2Tel" /></a>
<ul id="menu">
<li><a href="#presentation" data-target="presentation">Promo2Tel</a></li>
<li><a href="#infos" data-target="infos">Informations</a></li>
<li><a href="#etudiantTem" data-target="etudiantTem">Provenance des étudiants TEM</a></li>
<li><a href="#positionForum" data-target="positionForum">Carte des forums TSP</a></li>
<!--   	<li><a href="#admin" data-target="admin">Administration</a></li> -->
<li><a href="#contact" data-target="contact">Contact</a></li>
<!--    <li><a href="#contact" data-target="goodies">Goodies</a></li> -->
</ul>
</div>
<div id="listeConteneurs">
<div class="conteneurPage" style="visibility:hidden">
</div>
</div>
<div id="contenu">
<script type="text/template" id="contenu-presentation" data-titre="Promo2Tel" data-position="0">
Promo2Tel, c’est une équipe dynamique qui te permet de défendre les couleurs de nos deux Ecoles : Télécom École de Management et Télécom SudParis.<br /><br />
Nous proposons entre autre aux élèves de retourner dans leur prépa d’origine avec l'intégralité des frais de transports payés pour participer à leur forum.<br /><br />
Nous réalisons chaque année la sublime plaquette alpha donnée aux admissibles qui permet ainsi de mettre la créativité au service des Ecoles !<br /><br />
Nous sommes aussi en charge de la création du Yearbook permettant de présenter un trombinoscope de tous les élèves présents sur le campus cette année ainsi que de présenter les équipes composant chaque association ou club. Il constitue ainsi un beau souvenir d'une année chargée d'instants précieux.<br /><br />
De plus, nous allons commencer cette année la vente d'objets à l’effigie  des deux Ecoles, pour permettre à chacun de réaffirmer son appartenance à un campus riche et dynamique !<br /><br />
Sinon, que dire d’autre à part que Promo2Tel c’est aussi l’association qui fait en sorte que l’accueil des admissibles soit mémorable !
</script>
<script type="text/template" id="contenu-infos" data-titre="Informations" data-position="10">
<ul id="listeSections">
<li data-section="integrerPromo2Tel">Intégrer Promo2Tel</li>
<li class="detailsSection">
Pour intégrer Promo2Tel, il suffit d'envoyer un mail à Promo2Tel@tem-tsp.eu.<br />
Pour être responsable de région, c'est à dire coordonner les départs en promotion dans une région, le recrutement se fait en début d'année et, les places étant limitées, avec potentiellement un entretien (surtout pour TEM) qui est là pour s'assurer de la motivation et des compétences du candidat.
</li>
<li data-section="postulerForum">Postuler à un forum</li>
<li class="detailsSection">
Pour les élèves de <i class="tsp">Télécom SudParis</i> :<br />
Allez dans l'onglet "Carte des forum TSP". Si votre lycée s'y trouve et qu'un forum y est annoncé, il suffit de cliquer sur le lien "Postuler à ce forum" et suivre la procédure.<br />
Si vous savez qu'un forum est organisé dans un lycée, vous pouvez demander à être contacter quand l'école recevra une invitation.<br />
Si le lycée vous a directement contacté pour participer à un forum, veuillez contacter votre responsable de région (onglet Contact).<br />
<br />
Pour les élèves de <i class="tem">Télécom École de Management</i> :<br />
L'intégralité de la procédure vous sera expliqué dans un amphithéâtre obligatoire en octobre.<br />
</li>
<li data-section="avantDepart">Avant votre départ</li>
<li class="detailsSection">
Pour les élèves de <i class="tsp">Télécom SudParis</i> :<br />
Une feuille récapitulant départ en promotion vous sera donné par un responsable de votre région.<br />
Vous devez rendre cette feuille impérativement 15 jours avant le départ à l'un de ces responsables.<br />
Le service Promotion et Admissions de <i class="tsp">Télécom SudParis</i> vous contactera ensuite pour vous donner votre billet de train ainsi que des plaquettes de présentation de l'école et des goodies.<br/>
<br />
Pour les élèves de <i class="tem">Télécom École de Management</i> :<br />
L'intégralité de la procédure vous sera expliqué dans un amphithéâtre obligatoire en octobre.<br />
</li>
<li data-section="apresForum">Après le forum</li>
<li class="detailsSection">
Pour les élèves de <i class="tsp">Télécom SudParis</i> :<br />
Une feuille de présence est normalement distribuée par le lycée, retournez là en DIR212 avec vos billets de train <b>et de RER</b>.<br />
<br />
Pour les élèves de <i class="tem">Télécom École de Management</i> :<br />
L'intégralité de la procédure vous sera expliqué dans un amphithéâtre obligatoire en octobre.<br />
</li>
</ul>
</script>
<script type="text/template" id="contenu-etudiantTem" data-titre="Provenance des Etudiants TEM" data-position="20">
<iframe src="carte.php"></iframe>
</script>
<script type="text/template" id="contenu-positionForum" data-titre="Carte des Forums TSP" data-position="20">
<iframe src="positionForum.php"></iframe>
</script>
<script type="text/template" id="contenu-admin" data-titre="Administration" data-position="30">
Ya rien, cherche pas :)'
</script>
<script type="text/template" id="contenu-contact" data-titre="Contact" data-position="40">
Pour contacter Promo2Tel :
promo2tel@tem-tsp.eu<br />
<br />
Pour contacter le service Admissions et Promotion de <i class="tsp">Télécom SudParis</i> :
admissions@telecom-sudparis.eu<br />
<br />
Pour contacter le service Promotion de <i class="tem">Télécom École de Management</i> :
kian.shahmaei@telecom-em.eu<br />
<br />
Les noms des responsables de régions seront indiqués sur cette page dès que le recrutement aura eu lieu.<br />
<br />
Les membres de Promo2Tel :<br />
<br />
<img src="images/organigramme.png" alt="organigramme" id="organigramme" />
</script>
<script type="text/template" id="contenu-goodies" data-titre="Goodies" data-position="50">
<iframe src="goodies_commande.php"></iframe>
</script>
</div>
<div id="modeleConteneurPage">
<div class="decorateur">
<div class="titrePage"></div>
</div>
<div class="contenuPage"></div>
</div>
</body>
</html>
