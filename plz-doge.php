#!/usr/bin/env php
<?php

require 'many-logic.php';

$muchWords = array_slice($argv, 1) ?: $muchWords;

echo $plzDogify($muchWords);
