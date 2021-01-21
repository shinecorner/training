<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '../../model/flyable.php';
require '../../model/Bird/FlyingCharacter.php';
require '../../model/Kite/FlyingCharacter.php';

use Kite\FlyingCharacter as KiteClass;
use Bird\FlyingCharacter as BirdClass;

$flyObject = new KiteClass();
echo $flyObject->fly();