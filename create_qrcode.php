<?php
// Bestand met functions inladen, deze regel laten staan aub
require __DIR__ . "/vendor/autoload.php";

// Laad de composer autoloader in

// Lees de documentatie van de bacon/bacon-qr-code package
// Zo kom je te weten hoe je deze package kunt gebruiken
// https://github.com/Bacon/BaconQrCode

// Maak een QR code met als inhoud een leuke URL
// Tip: Gebruik de SvgImageBackEnd()

// Sla de QR code op als afbeelding: "qrcode.svg"

use CodeItNow\BarcodeBundle\Utils\QrCode;

$qrCode = new QrCode();
$qrCode
    ->setText('https://google.com')
    ->setSize(300)
    ->setPadding(10)
    ->setErrorCorrection('high')
    ->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
    ->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
    ->setLabel('Scan mijn QR code')
    ->setLabelFontSize(16)
    ->setImageType(QrCode::IMAGE_TYPE_PNG)
;
$qrCode->save('qrcode.png');
