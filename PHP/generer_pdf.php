<!-- Générateur de PDF à partir de l'HTML -> non fonctionnel -->

<?php

use Dompdf\Dompdf;
use Dompdf\Options;

require_once('../LIB/dompdf/autoload.inc.php');

$options = new Options();
$options->set('defaultFont', 'Courier');
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);

$dompdf = new Dompdf($options);
$url = '../CV.html';
$html = file_get_contents($url);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$fichier = '../CV.pdf';
$dompdf->set_option('isRemoteEnabled', true);
$dompdf->stream($fichier, array("Attachment" => true));