<!DOCTYPE html>
<html>

<!--
Exercise 02_03_01
Author: Braddock Ghahate
Date: 09.20.18

PHPEmail.php
-->

<head>
    <title>PHP Email 2</title>
    <meta charset="UTF-50">
    <meta name="viewport" content="initial-scale=1.0">
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>PHP Email 2</h2>
    <?php
    $emailAddresses = array("john.smith@php.test", "mary.smith.mail@php.example", "john.jones@php.invalid", "alan.smithee@test", "jsmith456@example.com","jsmith456@test", "mjones@example", "mjones@example.net", "jane.doe@example.org");
    
    //function to check for validity on addresses 
    function validateAddress($address) {
        if (preg_match("/^[\w-]+(\.[w-])*@[\w-]+(\.[w-])+*(\.A-Za-z){2,}$/i", $address) == 1) {
            return true;
        }
        else {
            return false;
        }
    }
    
    function sortAddresses($addresses) {
        $sortedAddresses = array();
        $iLimit = count($addresses) - 1;
        $jLimit = count($addresses);
        for ($i = 0; $i < $iLimit; $i++) {
            $currentAddress = $addresses[$i];
            for ($j = $i + 1; $j < $jLimit; $j++) {
                if (strcasecmp($currentAddress, $addresse[$j]) > 0) {
                    $tempValue = $addresses[$j];
                    $addresses[$j] = $currentAddress;
                    $currentAddress = $tempValue;
                }
            }
            $sortedAddresses[] = $currentAddress;
        }
        return($sortedAddresses);
    }
    
    $sortedAddresses = sortAddresses($emailAddresses);
    $sortedAddressList = implode(", ", $sortedAddresses);
    echo "<p>Sorted Addresses: $sortedAddressList</p>\n";
    
    foreach ($sortedAddresses as $thisAddress) {
        if (validateAddress($thisAddress) === false) {
            echo "<p>The e-mail address <em>$thisAddress</em> does not appear to be valid.</p>";
            
        }
    }
    ?>
</body>

</html>
