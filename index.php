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
