<?php

$veryPre = @preg_match('/html/', $_SERVER['HTTP_ACCEPT']);

require 'many-logic.php';

if ($veryPre) {
    echo '<pre>';
}

echo $plzDogify($muchWords);

if ($veryPre) {
    echo '</pre>';
}
