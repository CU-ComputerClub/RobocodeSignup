 <?php
include 'config.php';

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$need_team = htmlspecialchars($_POST['need_team'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');


$sql ="INSERT INTO hackathon_players VALUES (DEFAULT, '$name','$need_team', '$email')";

if (!mysql_query($sql,$db_con))
  {
  die('Error: ' . mysql_error());
  }


mysql_close($db_con);

?> 
