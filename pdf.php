<?php
include('fonction.php');
$pdfcontent = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="row">
            <header>
                <p style="margin-bottom:-20%">
                    REPUBLIQUE DU SENEGAL <br> 
                    Un Peuple - Un But - Une Foi <br>
                    MINISTÈRE DE L\'ENSEIGNEMENT SUPÉRIEUR, <br>
                    DE LA RECHERCHE ET DE L\'INNOVATION <br> 
                </p>
                <div class="logo">
                    <img src="img/logo_coud-removebg-preview.png" alt="" width="160%" style="margin-left: -35%;"> 
                </div>
            </header>
            <div class="text">
                <img src="img/Frame 6.png" alt="" style="margin-left:10%; margin-bottom: 1%"> <br>
                <b> CENTRE DES ŒUVRES UNIVERSITAIRES DE DAKAR </b>
            </div>
            <div class="paie" style="text-align: center; margin-bottom: 10%; margin-left: 10%;">
                <img src="img/Frame 5.png" alt="" width="60%" style="margin-bottom: 2%;"><br/>
                
                ' . date("l d/m/Y h:i:s") . '
            </div>
            <section class="col-12">
            <img id="watermark" src="img/logo_coud-removebg-preview.png" alt="">
               <table class="tables" border="1">
                    <tr>
                        <th colspan="2">MATRICULE: ' . $row[1] . '</th>
                        <th colspan="2">PRENOM: ' . $row[2] . '</th>
                        <th colspan="2">NOM: ' . $row[3] . '</th>
                    </tr>
                    <tr>
                        <td colspan="2">DATE DE NAAISSANCE: ' . $row[4] . '</td>
                        <td colspan="2">LIEU DE NAISSSANCE: ' . $row[5] . '</td>
                        <td colspan="2">SEXE: ' . $row[6] . '</td>
                    </tr>
                    <tr>
                        <td colspan="2">SITUATION MATRIMONIALE: ' . $row[7] . '</td>
                        <td colspan="2">INDICE: ' . $row[8] . '</td>
                        <td colspan="2">FONCION: ' . $row[9] . '</td>
                    </tr>
                    <tr>
                        <td colspan="2">NOMBRE DE PARTS TRIMF: ' . $row[10] . '</td>
                        <td colspan="2">NOMBRE DE PARTS IR: ' . $row[11] . '</td>
                        <td colspan="2">ANCIENNETE: ' . $row[12] . '</td>
                    </tr>
                    <tr>
                        <td colspan="6">-</td>
                    </tr>
                    <tr>
                        <td colspan="6">Numero bulletin: </td>
                    </tr>
                    <tr>
                        <td colspan="6">-</td>
                    </tr>
                    <tr>
                        <th>CODE</th>
                        <th>RUBRIQUE</th>
                        <th>BASE</th>
                        <th>TAUX</th>
                        <th>GAIN</th>
                        <th>RETENUE</th>
                    </tr>
                    <tr>
                        <td>115</td>
                        <td>SOLDE GLOBALE</td>
                        <td>-</td>
                        <td>-</td>
                        <td>119 894</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>168</td>
                        <td>AUGMENTATION AVANT 2000</td>
                        <td>-</td>
                        <td>-</td>
                        <td>24 215</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>170</td>
                        <td>PRIME D\'ASSIDUITE</td>
                        <td>-</td>
                        <td>-</td>
                        <td>12 557</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>194</td>
                        <td>AUGMENTATION 2000</td>
                        <td>-</td>
                        <td>-</td>
                        <td>5 676</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>195</td>
                        <td>AUGMENTATION 2002</td>
                        <td>-</td>
                        <td>-</td>
                        <td>10 000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>334</td>
                        <td>INDEMNITE DE SUJETION 2002</td>
                        <td>-</td>
                        <td>-</td>
                        <td>35 625</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>497</td>
                        <td>PRIME ADMINISTRATION SPECIALE</td>
                        <td>-</td>
                        <td>-</td>
                        <td>150 000</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th colspan="4">TOTAL DES GAINS </th>
                        <th colspan="1">358 267</th>
                        <td colspan="1">-</td>
                    </tr>
                    <tr>
                        <td>602</td>
                        <td>IPRES REGIME GENERAL</td>
                        <td>208 267</td>
                        <td>5.6%</td>
                        <td>-</td>
                        <td>11 663</td>
                    </tr>
                    <tr>
                        <td>621</td>
                        <td>TAXE REPR IMPOT MINIMUM FISCAL (TRIMF)</td>
                        <td>168 076</td>
                        <td>-</td>
                        <td>-</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td>623</td>
                        <td>IMPOT SUR LE REVENU (IR)</td>
                        <td>168 076</td>
                        <td>-</td>
                        <td>-</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>492</td>
                        <td>RETENUE AVANCE TABASKI</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>10 000</td>
                    </tr>
                    <tr>
                        <th colspan="5">TOTAL DES RETENUES </th>
                        <th colspan="1">22 663</th>
                    </tr>
                    <tr>
                        <th colspan="6">-</th>
                    </tr>
                    <tr>
                    <th colspan="4">NET A PAYER </th>
                    <th colspan="2">200 000 fr</th>
                </tr>
                <tr>
                    <td colspan="2">MODE DE PAIEMENT:Virement bancaire </td>
                    <td colspan="2">BANQUE: BOA</td>
                    <td colspan="2">N° COMPTE: 001234567 </td>
                </tr>
                    <tr>
                        <td colspan="6">-</td>
                    </tr>
                    <tr>
                        <td colspan="6"><img class="center" src="img/empreunte.jpg" width="30"/> </td>
                    </tr>
                </table>
                </section>
                </div> <!--, veuillez concerver-->
                </main>
                <footer><img src="img/Frame 4.jpeg" alt="" width="100%"> </footer>
                <img id="watermark" src="img/logo_coud-removebg-preview.png" alt="" style="display:' . $q . ';">
</body>
</html>
                ';
$mpdf->WriteHTML($pdfcontent);
if ($result->rowCount() > 10) {
    $i++;
}
$mpdf->SetDisplayMode('fullpage');
$mpdf->list_indent_first_level = 0;

//call watermark content and image
//$mpdf->SetWatermarkText('COUD');
$mpdf->showWatermarkText = true;
$mpdf->watermarkTextAlpha = 0.1;

//output in browser
$mpdf->Output();
