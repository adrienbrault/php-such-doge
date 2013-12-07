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

    while (
        count(preg_split('/\n/', $niceDoge)) <= $manyLines
        && (
            min(count($muchWords), count($soPrefixes)) > 0
            || count($veryWords) > 0
        )
    ) {
        $veryLine = null;

        if (count($veryWords) > 0 && rand(0, 1) === 1) {
            $veryLine = array_splice($veryWords, array_rand($veryWords), 1)[0];
        } elseif (min(count($muchWords), count($soPrefixes)) > 0) {
            $veryLine = sprintf(
                array_splice($soPrefixes, array_rand($soPrefixes), 1)[0],
                array_splice($muchWords, array_rand($muchWords), 1)[0]
            );
        }

        if (null !== $veryLine) {
            $niceDoge .= $plzIndentation($niceDoge) . $veryLine . "\n";
        }
    }

    return $niceDoge;
};
