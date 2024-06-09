<?php
include('connexion.php');
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$i = 1;
if ($conn) {
    $req1 = "SELECT * FROM `personne`";
    if ($result = $conn->query($req1)) {
        while ($row = $result->fetch(PDO::FETCH_NUM)) {
            if(count($row)<=12){
                $q = "true";
            }else{
                $q = "none";
            }
            // for ($j = 0; $j < $result->rowCount(); $j++) {
            //     # code...
            //     if ($j > 10) {
            //         $l = "<div class='breakafter'></div>";
            //         $i = $i + 1;
            //         break;
            //     }
            // }
            return $row;

        }
    }
}

function liste()
{
    include('connexion.php');
    $req1 = "SELECT * FROM `empdata`";
    if ($result = $conn->query($req1)) {
        return "Nous avons " . $result->rowCount() . "enregistrements </br>";
    }
}
