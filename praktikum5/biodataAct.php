<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
        body {
            background-color: grey;
        }

        .text{
        	font-weight: bold;
        }
    </style>
</head>
<body><center>
	<h2> Pendaftaran Berhasil </h2>
	<br>
<div class="text">
<?php
echo "<center>Nama : ".$_POST['Nama']. "</center><br>";
echo "<center>Email : ".$_POST['Email']. "</center><br>";
echo "<center>Status: ".$_POST['Status']. "</center><br>";
echo "<center>Tanggal lahir : ".$_POST['tanggal']. "</center><br>";
echo "<center>Jenis Kelamin : ".$_POST['jk']. "</center><br>";
echo "<center>Hobi : ".$_POST['Hobi']. "</center><br>";
echo "<center>Alamat : ".$_POST['Alamat']. "</center><br>";
?>
</div>
</center>
</body>
</html>
