<!DOCTYPE html>
<html>

<!--
Exercise 02_03_01
Author: Braddock Ghahate
Date: 09.20.18

MusicalScale.php
-->

<head>
    <title>Musical Scale</title>
    <meta charset="UTF-50">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Musical Scale</h2>
    <?php
$musicalScale = array("do", "re", "me", "fa", "so", "la", "ti");
$outputString = "The notes of the musical scale are: ";
foreach ($musicalScale as $currentNote) {
    $outputString .= " " . $currentNote;
}
    echo "<p>$outputString</p>";
    echo "<h2>Formatted Text</h2>";
    $displayValue = 9.876;
    echo "<pre>\n";
    echo "Unformatted text line 1. \r\n";
    echo "\tUnformatted text line 2. \r\n";
    echo "\$displayValue = $displayValue";
    echo "</pre\n>";
?>
</body>

</html>
