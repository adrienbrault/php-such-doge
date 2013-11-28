<?php

// inspired by https://github.com/ehd/doge

$soPrefixes = [
    'such %s',
    'so %s',
    'bes %s',
    'much %s',
    'plz %s',
    'nice %s',
    'very %s',
    'wow such %s',
    'many %s',
    'scary %s',
];
$veryWords = [
    'wow',
];

$muchWords = [
    'symfony',
    'php',
    'mysql',
    'wordpress',
    '$_POST',
    '$_GET',
    '$_COOKIE',
    'composer',
];

$plzIndentation = function ($veryDoge) {
    $manyVeryDogeParts = preg_split('/\n/', $veryDoge);
    $veryLastLineSpaces = count($manyVeryDogeParts) > 0 ? strlen(end($manyVeryDogeParts)) : null;

    do {
        $manySpaces = rand(0, 30);
    } while ($manySpaces === $veryLastLineSpaces);

    return str_repeat(' ', $manySpaces);
};
$plzDogify = function ($muchWords, $manyLines = 5) use ($soPrefixes, $veryWords, $plzIndentation) {
    $niceDoge = '';
    for ($i = 0; $i < $manyLines && (0 < count($muchWords) || 0 < (count($veryWords) + count($soPrefixes))); $i++) {

        if (($i > 2 && 0 < count($veryWords) && rand(0, 1) === 1) || (1 > min(count($soPrefixes), count($muchWords)))) {
            $veryWordKey = array_rand($veryWords);
            $veryLine = array_splice($veryWords, $veryWordKey, 1)[0];
        } else {
            $veryLine = sprintf(
                array_splice($soPrefixes, array_rand($soPrefixes), 1)[0],
                array_splice($muchWords, array_rand($muchWords), 1)[0]
            );
        }

        $niceDoge .= $plzIndentation($niceDoge) . $veryLine . "\n";
    }

    return $niceDoge;
};
