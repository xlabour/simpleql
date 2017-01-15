<?php
error_reporting(0);

$t = isset($_POST['t'])?$_POST['t']:"";
if ($t!="" && $t===getenv('TOKEN_KEY')){
	include("./_dbconnect.inc.php");
	$q = "SELECT * FROM customerdata WHERE statusfu_idauto=1 AND statusemail_idauto=1";
	$r = mysqli_query($dblink, $q) or die (mysql_error($dblink));
	while ($d=mysqli_fetch_assoc($r)){
		$arrItem[] = $d;
	}
	$arrCustomerData = array(
		"success" => true,
		"msgCode" => "00",
		"msg" => "Success",
		"total" => count($arrItem),
		"data" => $arrItem
	);
} else {
	$arrCustomerData = array(
		"success" => true,
		"msgCode" => "00",
		"msg" => "Success",
		"total" => 0,
		"data" => array(
		)
	);
}
echo json_encode($arrCustomerData);
?>
