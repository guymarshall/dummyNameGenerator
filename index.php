<?php

const FIRST_NAMES_PATH = '';
const LAST_NAMES_PATH = '';

function main(): void
{
    $firstNames = file(FIRST_NAMES_PATH);
    $lastNames = file(LAST_NAMES_PATH);
}