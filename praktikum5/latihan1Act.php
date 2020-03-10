<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color: grey;
		}
	</style>
</head>
<body>
<?php
echo "<center>Nama :".$_POST['Nama']. "</center><br>";
echo "<center>Email :".$_POST['Email']. "</center><br>";

echo "<center>Login Pada "; date_default_timezone_set('asia/jakarta'). "</center>";
	echo date("l-d-F-Y, h:i:s a");

	if (empty($_POST['Nama'])) {
	header("Location:belumlengkap.php");
}
	if (empty($_POST['Email'])) {
	header("Location:belumlengkap.php");
}
?>
</body>
</html>





