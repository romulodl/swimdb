<?php

include "vendor/autoload.php";

use SwimDB\Uploader\Reader;

$reader = new Reader("files/resultado.txt");

foreach($reader as $key => $line){
   echo $key . " - " . $line;   
}
