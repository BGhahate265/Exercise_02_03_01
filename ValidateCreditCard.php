<!DOCTYPE html>
<html>
<!--
Project 02_03_01
Author: Braddock Ghahate
Date: 09.24.18

ValidateCreditCard.php
-->

<head>
    <title>Validate Credit Card</title>
</head>

<body>
    <h2>Validate Credt Card</h2>
    <?php
    $creditCard = array("", "8910-1234-5678-6543", "OOOO-9123-4567-0123");
    
    foreach ($creditCard as $indexNumber => $cardNumber) {
        //if the entered data is empty
        if (empty($cardNumber)) {
            echo "<p>Credit Card Number $indexNumber is invalid because it contains an empty.</p>";
        }
        else {
            //else clause to take out spaces and/or dashes entered as data
            $creditCardNumber = $cardNumber;
            $creditCardNumber = str_replace("-","", $creditCardNumber);
            $creditCardNumber = str_replace(" ", "", $creditCardNumber);
            echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces</p>";
            //if the data entered has non-numeric characters
            if (!is_numeric($creditCardNumber)) {
                echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid because it contains a non-numeric character.</p>";
            }
            else {
                echo "<p>Credit Card Number $indexNumber $creditCardNumber is valid Credit Card Number</p>";
            }
        }
    }
?>
</body>

</html>
