<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			background-color: grey;
		}
	</style>
</head>
<body>
	<h1><center> Form Login</center></h1>
	<form method="POST" action="latihan1Act.php">
		<center><table border="0" width="400" align="center" cellpadding="2" cellspacing="2">
			<tr>
				<td width="110">Nama</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td width="110">Email</td>
				<td><input type="text" name="Email"></td>
			</tr>
			<tr>
				<td>
					<input width="10" type="submit" name="btnLogin" value="Login">
					<input width="10" type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>