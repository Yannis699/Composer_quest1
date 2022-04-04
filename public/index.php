<?php 

require_once  '../vendor/autoload.php';
use App\Hello;

$helloWorld = new Hello ();
echo $helloWorld->talk();