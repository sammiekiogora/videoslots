<?php
    /**
     * Task 1, Question 1
     * Create a function that takes an array of numbers as a parameter and
     * returns the number of values that are
     * a multiplier of either 4 or 6 (or, of course, both)
     */
    echo "TASK 1 Question 1 - Return multipliers of 4 and/or 6\n----------------------------------------------------\n";
    $array = readline("Enter array of numbers seperated by comma: ");

    echo checkMultipliersOf4AndOr6($array) . " is a multiplier of either 4 or 6\n";

    function checkMultipliersOf4AndOr6($array)
    {
        $numbersArray = explode(",", preg_replace("/\s+/", "", $array));
        $multipliersNumbers = NULL;
        for ($i = 0; $i < count($numbersArray); $i++) {
            $thisNumber = $numbersArray[$i];
            if (is_numeric($thisNumber) && ($thisNumber % 4 == 0 || $thisNumber % 6 == 0)) {
                $seperator = !empty($multipliersNumbers) ? ", " : "";
                $multipliersNumbers .= $seperator . $thisNumber;
            }
        }

        return $multipliersNumbers;
    }
  /**
     * Task 1, Question 2
     * Write a function that tests if a string is a palindrome
     */
    echo "\n\nTASK 1 Question 2 - Check string palindrome\n-------------------------------------------\n";
    $string = readline("Enter a string: ");

    echo "The string is ".checkPalindrome($string)."\n";

    function checkPalindrome($string)
    {
        $response = "NOT A PALINDROME";

        $cleanString = strtoupper(preg_replace("/\s+/", "", $string));
        if ($cleanString === strrev($cleanString)) {
            $response = "A PALINDROME";
        }

        return $response;
    }
