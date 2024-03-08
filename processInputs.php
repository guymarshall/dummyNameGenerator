<?php

function getRandomNames(int $numberOfNames, int $minimumLength, int $maximumLength): array
{
    $firstNamesAll = file('files/first_names.txt');
    $lastNamesAll = file('files/last_names.txt');

    $firstNames = getCorrectLengthNames($firstNamesAll, $minimumLength, $maximumLength);
    $lastNames = getCorrectLengthNames($lastNamesAll, $minimumLength, $maximumLength);

    return array_map(static function () use ($firstNames, $lastNames) {
        $firstName = getRandomElement($firstNames);
        $lastName = getRandomElement($lastNames);

        return $firstName . ' ' . $lastName;
    }, range(1, $numberOfNames));
}

function getCorrectLengthNames(array $names, int $minimumLength, int $maximumLength): array
{
    return array_filter($names, static function ($name) use ($minimumLength, $maximumLength) {
        $length = strlen($name);
        return $length >= $minimumLength && $length <= $maximumLength;
    });
}

function getRandomElement(array $array): string
{
    return $array[array_rand($array)];
}

$dangerous_numberOfNames = $_GET['number-of-names'];
$dangerous_minimumLength = $_GET['minimum-length'];
$dangerous_maximumLength = $_GET['maximum-length'];

if (!is_numeric($dangerous_numberOfNames) || floor($dangerous_numberOfNames) === $dangerous_numberOfNames) {
    exit('Please enter a valid whole number for number of names.' . '<br>' . '<a href="/">Go back</a>');
}

if (!is_numeric($dangerous_minimumLength) || floor($dangerous_minimumLength) === $dangerous_minimumLength) {
    exit('Please enter a valid whole number for minimum length.' . '<br>' . '<a href="/">Go back</a>');
}

if (!is_numeric($dangerous_maximumLength) || floor($dangerous_maximumLength) === $dangerous_maximumLength) {
    exit('Please enter a valid whole number for maximum length.' . '<br>' . '<a href="/">Go back</a>');
}

$numberOfNames = $dangerous_numberOfNames;
$minimumLength = $dangerous_minimumLength;
$maximumLength = $dangerous_maximumLength;

$randomNames = getRandomNames($numberOfNames, $minimumLength, $maximumLength);

// save random name array to random_names.txt
// let user save random_names.txt file