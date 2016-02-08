<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link href="css/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.vmap.js" type="text/javascript"></script>
<script src="js/jquery.vmap.france.js" type="text/javascript"></script>
<script src="js/jquery.vmap.colorsFrance.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
                  $('#francemap').vectorMap({
                                            map: 'france_fr',
                                            hoverOpacity: 0.5,
                                            hoverColor: "#EC0000",
                                            backgroundColor: "#ffffff",
                                            color: "#FACC2E",
                                            borderColor: "#000000",
                                            selectedColor: "#EC0000",
                                            enableZoom: false,
                                            showTooltip: true,
                                            onRegionClick: function(element, code, region)
                                            {
                                            switch (code) {
                                            case "1":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region1', function() {});
                                            break;
                                            case "2":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region2', function() {});
                                            break;
                                            case "3":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region3', function() {});
                                            break;
                                            case "4":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region4', function() {});
                                            break;
                                            case "5":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region5', function() {});
                                            break;
                                            case "6":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region6', function() {});
                                            break;
                                            case "7":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region7', function() {});
                                            break;
                                            case "8":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region8', function() {});
                                            break;
                                            case "9":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region9', function() {});
                                            break;
                                            case "10":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region10', function() {});
                                            break;
                                            case "11":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region11', function() {});
                                            break;
                                            case "12":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region12', function() {});
                                            break;
                                            case "13":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region13', function() {});
                                            break;
                                            case "14":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region14', function() {});
                                            break;
                                            case "15":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region15', function() {});
                                            break;
                                            case "16":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region16', function() {});
                                            break;
                                            case "17":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region17', function() {});
                                            break;
                                            case "18":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region18', function() {});
                                            break;
                                            case "19":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region19', function() {});
                                            break;
                                            case "20":
                                            $('#region').load('http://localhost/promo2tel/promo2telMap/pageIncludes.php #region20', function() {});
                                            break;
                                            }
                                        }
                                    });
                });
</script>
</head>
<body>
<div id="francemap" style="width: 500px; height: 500px;"></div>
</body>
</html>

