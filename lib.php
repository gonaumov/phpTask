<?php
/**
 * This function will return array
 * from all prime numbers up to any given limit
 * usign sieve of Eratosthenes algorithm.
 * @param $maxNumber
 * @return array
 */
function sieveOfEratosthenesGenerator($maxNumber)
{
    $serie = array_fill(0, $maxNumber, true);
    for ($i = 0; $i <= sqrt($maxNumber); $i++) {
        if ($i >= 2 && $serie[$i]) {
            for ($j = pow($i, 2); $j <= $maxNumber; $j += $i) {
                $serie[$j] = false;
            }
        } else {
            $serie[$i] = false;
        }
    }
    return array_keys(array_filter($serie));
}

/**
 * This function will return most popular
 * element from input array.
 *
 * @param $inputArray
 * @return mixed - element
 */
function mostPopularElement($inputArray)
{
    $count = 1;
    $popularElement = $inputArray[0];
    $temp = 0;
    $inputSize = count($inputArray);
    for ($i = 0; $i < $inputSize - 1; $i++) {
        $temp = $inputArray[$i];
        $tempCount = 0;
        for ($j = 1; $j < $inputSize; $j++) {
            if ($temp == $inputArray[$j]) {
                $tempCount++;
            }
        }
        if ($tempCount > $count) {
            $popularElement = $temp;
            $count = $tempCount;
        }
    }
    return $popularElement;
}
