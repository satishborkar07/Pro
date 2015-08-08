<html>
<head>
<title>Place of business</title> 
</head>
<body>
<h3>Where do you do business?</h3>
<h4>Help us send you the right customers by telling us where you work.</h4>

<?php

echo '<form action="provider_reg5.php">
<input type="checkbox" name="travel_to_cust" value=1>I travel to my customers<br>
<input type="checkbox" name="travel_to_cust" value=2>My customers travel to me<br>
<input type="checkbox" name="travel_to_cust" value=3>Neither (phone or internet only)<br>
<input type = "submit" value = "Continue">
<br>
<input Type="button" value="Back" onClick="history.go(-1);return true;">

</form>';
?>
</body>

</html>
