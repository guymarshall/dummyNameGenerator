<?php

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

// generate random name array
// save random name array to random_names.txt
// let user save random_names.txt file