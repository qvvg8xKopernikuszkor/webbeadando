<?php
$ablakcim = array(
    'cim' => 'Kopernikusz Kör',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Kopernikusz Kör',
	'motto' => ''
);

$lablec = array(
    'jog' => '
        Az oldalon található képek és videók szerzői jogvédelem alatt állnak. 
A képek felhasználási szándékát, a felhasználás előtt kérjük elektronikus levélben jelezze.

Ennek figyelmen kívül hagyása szerzői jogvédelem sértése miatt - jogi következményekkel járhat. 
    '.date("Y").'.',
    'ceg' => 'kopernikuszkor.hu'
    
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(0,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'cikkek' => array('fajl' => 'cikkek', 'szoveg' => 'Cikkek', 'menun' => array(1,1)),
 'galeriabelep' => array('fajl' => 'galeriabelep', 'szoveg' => 'Galéria', 'menun' => array(1,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>