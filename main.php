<?php
include "datum.php";
include "datumEN.php";

$d = new Datum();

echo $d->trenutni() . "\n";

$den = new DatumEN();

echo $den->trenutni();



?>