<?php

	require 'vendor/autoload.php';

	$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
	echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';

?>