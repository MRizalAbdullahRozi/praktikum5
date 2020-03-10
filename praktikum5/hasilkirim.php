<?php
if (empty($_POST['Nama'])) {
	header("Location:kosong.php");
} else {
	echo "<center>Nama :".$_POST['Nama']. "</center><br>";
}
?>