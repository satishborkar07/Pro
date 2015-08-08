<html>
<head>
<title>Welcome</title> 
</head>

<body>
<h1>Meet New Customers</h1>
<br />
<h2>What do you do?</h2>

<?php
@ $db = new mysqli('localhost','satishb','mypassword','myservicesdb');

if (mysqli_connect_errno())
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
//else { echo 'connection successful.'; }

$query = "select distinct service_group from services_lkp order by service_group";
$results = $db -> query($query);
$num_results  = $results -> num_rows;
//echo '</p>total number of service groups is ='.$num_results."</p>";

echo '<form action="provider_reg2.php" method="post">';
echo "\n";
echo '<select name ="pro_group">';
echo "\n";
	for ($i = 0; $i < $num_results; $i++)
	{
	$row = $results -> fetch_assoc();
	echo '<option value = '.$i.'>'. $row['service_group'] .'</option>';
	echo "\n";
	}
echo '<input type = "submit" value = "Get Started">';
echo "\n";
echo '</select>';
echo "\n";
echo '</form>';

?>

</body>

</html>
