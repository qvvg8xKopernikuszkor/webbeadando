<?php
    // Alkalmazás logika:

   $MAPPA = './galeria/';
   $TIPUSOK = array ('.jpg', '.png');
   $MEDIATIPUSOK = array('image/jpeg', 'image/png');
   $DATUMFORMA = "Y.m.d. H:i";
   $MAXMERET = 500*1024;

    // adatok összegyűjtése:    
    $galeria = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
    
    // Megjelenítés logika:
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mini honlap Kft.</title>
    <title>Bootstrap 4 Website Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, 
initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.
bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.
css">
<script src="https://ajax.googleapis.com/ajax/libs/
jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/
popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/
bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
.fakeimg {
  height: 200px;
  background: #aaa;
}
</style>
<style type="text/css">
        div#galeria {margin: 0 auto; width: 0 auto;}
        div.kep { display: inline-block; }
        div.kep img { width: 200px; }
        div.kep p { color: red; }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="content" class="jumbotron" style="margin-bottom:0"">
        <div id="galeria">
    <h1>Galéria    <a href="./feltolt.php" class="btn btn-outline-info">Képfeltöltés</a> </h1> 
    <?php
    arsort($kepek);
    foreach($kepek as $fajl => $datum)
    {
    ?>
        <div class="kep">
            <a href="<?php echo $MAPPA.$fajl ?>">
            <img src="<?php echo $MAPPA.$fajl ?>">
            </a>            
            <p>Név: <?php echo $fajl; ?></p>
            <p>Dátum:  <?php echo date($DATUMFORMA, $datum); ?></p>
        </div>
    <?php
    }
    ?>
    </div>
        </div>
    </div>






