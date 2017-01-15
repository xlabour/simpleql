<?php
error_reporting(0);

$q = $_POST['q'];
if (isset($q) && $q!=''){
	include("./_dbconnect.inc.php");
	$r = mysqli_query($dblink, $q) or die (mysql_error($dblink));
}
?>
<html>
<head>
<title>SimpleQL</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	SQL:<br />
	<textarea name="q"></textarea>
	<input type="submit" name="submit" value="Submit" />
	</form>
</body>
</html>
