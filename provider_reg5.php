<html>
<head>
<title>Business Information</title> 
</head>
<body>
<h3>Describe your business.</h3>
<h4>Tell customers about your business and what services you provide.</h4>

<?php

echo '<form action="provider_reg6.php">
<p>Business name <input type="text" name="business_name"></p>
<p>if your business has no official name, use something descriptive, like "Julie Housing Cleaning"</p>
<p>Website <input type="text" name="website_name"></p>
<p>optional</p>
<p>Business description <input type="text" name="business_desc"></p>
<p>Tell customers what you do and what makes your business great.</p>
<p>(100 characters minimum)</p>

<input type = "submit" value = "Continue">
<br>
<input Type="button" value="Back" onClick="history.go(-1);return true;">

</form>';
?>
</body>

</html>
