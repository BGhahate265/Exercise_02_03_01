<!DOCTYPE html>
<html>
<!--
Exercise 02_03_01
Author: Braddock Ghahate
Date: 09.20.18

BooksAndAuthors.php
-->

<head>
    <title>Books And Authors</title>
    <meta charset="UTF-50">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Books and Authors</h2>
    <?php
    $books = array("The Adentures of Huckleberry Finn ", "Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
    $authors = array("MArk Twain", "George Orwell", "Lewis Carroll", "Dr. Suess");
    $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodor Geisel");
    //for loop
    for ($i = 0; $i < count($books); $i++) {
        echo "<p>The real name of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]}.</p>";
    }
        for ($i = 0; $i < count($books); $i++) {
        echo "<p>The title of \"{$books[$i]}\" contains " . strlen($books[$i]). " characters and " . str_word_count($books[$i]) . " words.</p>";
    }
    /*==========================================*/
    echo "<h2>Manipulating Strings</h2>";
    $staringText = "mAdAm, i'M aDaM";
    $uppercaseText = strtoupper($staringText);
    $lowercaseText = strtolower($staringText);
    echo "<p>$uppercaseText</p>\n";
    echo "<p>$lowercaseText</p>\n";
    echo "<p>" . ucfirst($lowercaseText) . "</p>\n";
    echo "<p>" . lcfirst($uppercaseText) . "</p>\n";
    $workingText = ucwords($lowercaseText);
    echo "<p>$workingText</p>\n";
  /*==========================================*/  
    echo "<h2>Other Manipulations</h2>";
    echo "<p>" . md5($workingText) . "</p>\n";
    echo "<p>" . substr($workingText, 0,6) . "</p>\n";
    echo "<p>" . substr($workingText, 7) . "</p>\n";
    echo "<p>" . strrev($workingText) . "</p>\n";
    echo "<p>" . str_shuffle($workingText) . "</p>\n";
?>
</body>

</html>
