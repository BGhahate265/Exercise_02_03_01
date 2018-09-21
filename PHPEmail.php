<!DOCTYPE html>
<html>

<!--
Exercise 02_03_01
Author: Braddock Ghahate
Date: 09.20.18

PHPEmail.php
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
    $emailAddresses = array("john.smith@php.test", "mary.smith.mail@php.example", "john.jones@php.invalid", "alan.smithee@test", "jsmith456@example.com","jsmith456@test", "mjones@example", "mjones@example.net", "jane.doe@example.org");
    
    //function to check for validity on addresses 
    function validateAddress($address) {
        if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
            return true;
        }
        else {
            return false;
        }
    }
    //foreach method to procress thru the whole array
    foreach ($emailAddresses as $thisAddress) {
        if (validateAddress($thisAddress) === false) {
            echo "<p>The e-mail address <em>$thisAddress</em> does not appear to be valid.</p>";
        }
    }
    ?>
</body>

</html>
