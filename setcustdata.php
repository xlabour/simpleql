<?php
error_reporting(0);

$t = isset($_POST['t'])?$_POST['t']:"";
$ids = isset($_POST['ids'])?$_POST['ids']:"";

if ($t!="" && $t===getenv('TOKEN_KEY') && $ids!=""){
	include("./_dbconnect.inc.php");
	$q = "UPDATE customerdata SET statusemail_idauto=2 WHERE idauto IN (".$ids.")";
	$r = mysqli_query($dblink, $q) or die (mysql_error($dblink));
  echo "Success";
} else {
	echo "Unknown Error";
}
?>
