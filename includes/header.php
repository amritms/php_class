<?php session_start(); 
$app_path = '/opt/lampp/htdocs/php_class_1/';
	$base_url = 'http://localhost/php_class_1';
if(! $_SESSION['loggedin']){
	header('Location:'.$base_url.'/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo $base_url;?>/assets/bootstrap.min.css">
</head>
<body class="container-fluid">
	<?php 
	
	include $app_path. "config.php";

