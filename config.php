<?php
$db_host="ephesus.cs.cf.ac.uk";
$db_name="herrow";
$username="booooooh";
$password="bibbledebing";
$db_con=mysql_connect($db_host, $username, $password);
if (!$db_con)
	{
	die('Could not connect:' . mysql_error());
	}

mysql_connect($db_host,$username, $password);
mysql_select_db($db_name);

?>

