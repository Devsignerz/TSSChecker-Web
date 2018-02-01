<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width = device-width">
	<title><?php echo htmlspecialchars($_GET['device']); ?> - <?php echo htmlspecialchars($_GET['version']); ?></title>
	<style>
	body{
		margin: 0;
	}

	.navbar{
		color: white;
		background-color: black;
		width: 100%;
		text-align: center;
		font-family: arial;
		box-shadow: 0px 0px 2px 2px lightgray;
		padding: 16px 0px;

	}
	.status{
		width: 100%;
		background-color: limegreen;
		text-align: center;
		color: white;
		font-family: arial;
		box-shadow: 0px 0px 2px 2px lightgray;
	}
</style>
</head>
<body>
	<div class="navbar">TSSChecker - Web</div>
	<br>
	<br>
<div class="status"><center>
Signing status for <?php echo htmlspecialchars($_GET['device']); ?> on <?php echo htmlspecialchars($_GET['version']); ?><br>
<?php
$output = shell_exec('./tsschecker/tsschecker_macos -d '.str_replace("|", "", str_replace(";", "", str_replace("&", "", htmlspecialchars($_GET['device'])))).' --boardconfig '.str_replace("|", "", str_replace(";", "", str_replace("&", "", htmlspecialchars($_GET['boardconfig'])))).' -i '.str_replace("|", "", str_replace(";", "", str_replace("&", "", htmlspecialchars($_GET['version'])))).'');
$arr1 = explode(PHP_EOL, $output);
end($arr1);
$arr2 = prev($arr1);
print_r($arr2);
?>
</center>
</div>
</body>
</html>
