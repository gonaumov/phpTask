<?php
/**
 * Here we will import rudimentary
 * lib. We write it only for clean code.
 */
require_once('lib.php');

/**
 * Number of items.
 */
$numbersCount = 10;
/**
 * Max numbers
 */
$maxNumber = 30;

$resultArray = array();

$dublicates = array();

/**
 * Generate simple numbers until $maxNumber
 */
$simpleNumbers = sieveOfEratosthenesGenerator($maxNumber);

/**
 * Generate numbers with count
 * equals to $numbersCount
 */
while ($numbersCount != 0) {
    $currentSimpleNumber = $simpleNumbers[mt_rand(0, count($simpleNumbers) - 1)];
    if (in_array($currentSimpleNumber, $resultArray)) {
        $dublicates[] = $currentSimpleNumber;
    }
    $resultArray[] = $currentSimpleNumber;
    $numbersCount--;
}

/**
 * Find most popular element
 */
$popularElement = mostPopularElement($resultArray);
/**
 * Remove dublicates.
 */
$resultArray = array_unique($resultArray);

print "Result array:\n";
print_r($resultArray);
print "\n";
print "Most popular number between dublicates:\n";
var_dump($popularElement);
print "\n";