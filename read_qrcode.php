<?php
// Laad de composer autoloader in
require __DIR__ . "/vendor/autoload.php";

//use Zxing\QrReader;

use Zxing\QrReader;
$qrcode = new QrReader('qrcode.png');
$text = $qrcode->text(); 

echo "n\QR CODE = ". $text . "\n\n";