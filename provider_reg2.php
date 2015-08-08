<html>
<head>
<title>Services Information</title> 
</head>
<body>
<h1>Which of these services do you provide?</h1>
<br />
<h2>Tell us what you do so we can send you the right customers.</h2>

<?php

$pro_group= $_POST['pro_group'];
//echo $pro_group;
@ $db = new mysqli('localhost','satishb','Dunnhumby890','myservicesdb');

if (mysqli_connect_errno())
{
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
//else { echo 'connection successful.'; }

$query = "set @rank = -1";
$db -> query($query);
$query = "select service_group from (select  @rank:=@rank+1 as rank_no, service_group from (select distinct service_group from services_lkp order by service_group) a ) b where rank_no =".$pro_group;
$results = $db -> query($query);
$pro_group_row= $results -> fetch_assoc();
$pro_group_name = $pro_group_row['service_group'];
echo $pro_group_name;

$query = "select service_name from services_lkp where service_group = '".$pro_group_name."' order by service_name";
$results = $db -> query($query);
$num_results  = $results -> num_rows;
//echo '</p>total number of service groups is ='.$num_results."</p>";

echo '<form action="provider_reg3.php" method="post">';
echo "\n";

echo "\n";
	for ($i = 0; $i < $num_results; $i++)
	{
	$row = $results -> fetch_assoc();
	echo '<input type="checkbox" name="services_list" value='.$i.'>'. $row['service_name'] .'<br>';
	echo "\n";
	}
	echo '<input type="checkbox" name="services_list"><input type = "text" name = "other_service"><br>';
echo '<input type = "submit" value = "Continue">';
echo '<br>
<input Type="button" value="Back" onClick="history.go(-1);return true;">';
echo "\n";
echo '</form>';

?>

</body>

</html>
