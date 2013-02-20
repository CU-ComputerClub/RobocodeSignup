 <?php
include 'config.php';


$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$no_members = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
$members = htmlspecialchars($_POST['members'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');


$sql = "INSERT INTO hackathon_teams VALUES (DEFAULT,'$name', $no_members, '$members', '$email')";
echo 'Yes';

if (!mysql_query($sql,$db_con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($db_con);
?> 
