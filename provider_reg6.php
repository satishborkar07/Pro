<html>
<head>
<title>Contact Information</title> 
</head>
<body>
<h3>How can we contact you?</h3>
<h4>Tell us where we should send customer requests for your services.</h4>

<?php

echo '<form action="provider_reg7.php">
<p>First name<input type="text" name="first_name">
Last name <input type="text" name="last_name"></p>

<p>Email Address <input type="text" name="email_address"></p>
<p>Phone number <input type="text" name="phone_number"></p>
<input type="checkbox" name="notify_option" value=1>Notify me by text message of new customer requests and messages <br>
<input type = "submit" value = "Sign Up">
<br>
<input Type="button" value="Back" onClick="history.go(-1);return true;">

</form>';
?>
</body>

</html>
