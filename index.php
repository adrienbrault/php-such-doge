<?php

$veryPre = @preg_match('/html/', $_SERVER['HTTP_ACCEPT']);

require 'many-logic.php';

if (isset($_GET['w']) && !empty($_GET['w'])) {
    $muchWords = $_GET['w'];
}

$soDoge = $plzDogify($muchWords);

if ($veryPre) {
    echo '<pre>';
    echo htmlentities($soDoge);
    echo '</pre>';
} else {
    echo $soDoge;
}
