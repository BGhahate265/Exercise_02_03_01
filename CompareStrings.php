<!DOCTYPE html>
<html>
<!--
Project 02_03_01
Author: Braddock Ghahate
Date: 09.24.18

CompareStrings.php
-->

<head>
    <title>Compare Strings</title>
</head>

<body>
    <h2>Compare Strings</h2>
    <?php
    $firstString = "Geek2Geek";
    $secondString = "Geezer2Geek";
    //A condition if both are empty strings
    if (!empty($firstString) && !empty($secondString)) {
        if ($firstString == $secondString) {
            echo "<p>Both strings are same.</p>";
        }
        else {
            echo "<p> Both Strings have " . similar_text($firstString, $secondString) . " characters(s) in common.</p>";
            echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the strings the same.</p>";
        }
    }
    /*========================================*/
        else {
            // backslahes documented for formatting the variables as literal strings
            echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared.</p>";
        }
    
    ?>
</body>

</html>
