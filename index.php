<?php

$veryPre = @preg_match('/html/', $_SERVER['HTTP_ACCEPT']);

require 'many-logic.php';

if (isset($_GET['words']) && !empty($_GET['words'])) {
    $muchWords = $_GET['words'];
}

$soDoge = $plzDogify($muchWords);

if ($veryPre) {
    echo '<pre>';
    echo htmlentities($soDoge);
    echo '</pre>';
} else {
    echo $soDoge;
}
