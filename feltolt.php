
<?php
    // Alkalmazás logika:
    include('./includes/galery.config.inc.php');
    include('./includes/config.inc.php');
    $uzenet = array();   

    // Űrlap ellenőrzés:
    if (isset($_POST['kuld'])) {
        //print_r($_FILES);
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   // Nem töltött fel fájlt
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   // A fájl túllépi a php.ini -ben megadott maximális méretet
                        or $fajl['error'] == 2   // A fájl túllépi a HTML űrlapban megadott maximális méretet
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy állomány: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }
    
    // adatok összegyűjtése:    
    $galeria = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $galeria[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
    
    // Megjelenítés logika:

include("./includes/config.inc.php");

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
</head>
<body>

</div>
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

                    </aside>
            <h1>Feltöltés a galériába:</h1>
            <?php
                if (!empty($uzenet))
                {
                    echo '<ul>';
                    foreach($uzenet as $u)
                        echo "<li>$u</li>";
                    echo '</ul>';
                }
            ?>
                <form action="feltolt.php" method="post" enctype="multipart/form-data">
                    <label><input type="file" class="btn btn-outline-primary" name="elso" required>
                   <input type="submit" name="kuld"></label>
                   
                    <label> </label>
                  </form>
            
            <?php
                // Alkalmazás logika:
                // adatok összegyűjtése:    
                $galeria = array();
                $olvaso = opendir($MAPPA);
                while (($fajl = readdir($olvaso)) !== false) {
                    if (is_file($MAPPA.$fajl)) {
                        $vege = strtolower(substr($fajl, strlen($fajl)-4));
                        if (in_array($vege, $TIPUSOK)) {
                            $galeria[$fajl] = filemtime($MAPPA.$fajl);
                        }
                    }
                }
                closedir($olvaso);
                
                // Megjelenítés logika:
            ?>
            



                <h1>Galéria <a href="index.php" class="btn btn-primary" style="text-center">Főoldal</a></h1>
                <?php
                arsort($galeria);
                foreach($galeria as $fajl => $datum)
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
          
        </div>
    </div>