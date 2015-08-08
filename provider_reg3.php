<html>
<head>
<title>Address Information</title> 
</head>
<body>
<h3>Where are you located?</h3>
<h4>If you don't have a business addess, use your home address.</h4>

<?php

echo '<form action="provider_reg4.php">
<p>Street Adress
<input type = "text" name = "street_address"><br>
</p>
<p>Suite/Apt
<input type = "text" name = "suite_address"><br>
</p>
<p>City
<input type = "text" name = "city_address"><br>
</p>

<p>State
<input type = "text" name = "state_address"><br>
</p>

<p>Pin Code
<input type = "text" name = "pin_address"><br>
</p>

<p>Privacy </p>
<input type = "radio" name = "privacy_address" value = "privacy_address_limit">Show only my city and state to customers<br>
<input type = "radio" name = "privacy_address" value = "privacy_address_full">Show my full address to customers<br>

<input type = "submit" value = "Continue">
<br>
<input Type="button" value="Back" onClick="history.go(-1);return true;">

</form>';
?>
</body>

</html>
