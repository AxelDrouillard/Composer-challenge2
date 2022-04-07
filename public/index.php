<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;

$hello = new Hello();

echo $hello->talk();
