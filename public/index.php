<?php
require_once dirname(__DIR__).'/vendor/autoload.php';//3. el index lo que hace es cargar el autoload y cargar el kernel

use App\kernel;

$kernel = new Kernel();
$kernel -> init();