<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman PHP dengan array</title>
</head>
<body>
	<?php
	$nama[] = "M Rizal ";
	$nama[] = "Abdullah ";
	$nama[] = "Rozi";
	echo $nama[1] . $nama[2] . $nama[0];
	echo "<br>";

	//menghitung jumlah elemen array
	$jum_array = count($nama);
	echo "jumlah elemen array = " .$jum_array;
	?>
</body>
</html>