<!DOCTYPE html>
<html>
<body>

<p><h1>FPB dan KPK</h1></p>
<p>FPB atau faktor persekutuan terbesar adalah faktor terbesar dari dua atau lebih bilangan bulat yang membagi bilangan bulat tersebut.<br>
Untuk mencari FPB pertama kita harus mengetahui faktor dari bilangan-bilangan yang dicari FPBnya.<br></p>
<p>Sebagai contoh mari kita cari FBP dari bilangan 42 dan 18.</p>
<p>Langkah pertama: cari faktor dari 42.<br>
Faktor 42: 1, 2, 3, 6, 7, 14, 21, 42</p>
<p>Langkah kedua: cari faktor dari 18.<br>
Faktor 18: 1, 2, 3, 6, 9, 18</p>
<p>Langkah ketiga: pilih faktor yang sama dan terbesar dari 42 dan 18.<br>
Faktor yang sama dan terbesar adalah 6.</p>
<p>Langkah keempat: ambil kesimpulan.<br>
Jadi FPB dari 42 dan 18 adalah 6.</p>
<p>Silahkan coba dengan angka anda sendiri</p>

<form action="FPB dan KPK.php" method="post">
<p>Bilangan 1: <input type="text" name="Bil1"></p>
<p>Bilangan 2: <input type="text" name="Bil2"></p>
<input type="submit">
</form>

<?php
$bil1 = $_POST["Bil1"];
$bil2 = $_POST["Bil2"];
?>

<?php
function FPB(int $b1, int $b2){
	$b3 = -1;
	while ($b3 != 0){
		$b3 = $b1 % $b2;
		$b1 = $b2;
		$b2 = $b3;
	}
	return $b1;
}

	
?> 
<p>Bilangan 1 Anda: <?php echo $bil1; ?></p>
<p>Bilangan 2 Anda: <?php echo $bil2; ?></p>

<p>Langkah pertama: cari faktor dari <?php echo $bil1; ?>.<br>
Faktor <?php echo $bil1; ?>: 
<?php 
for ($a = 1; $a <= $bil1; $a++){
	if($bil1 % $a == 0){
		echo $a;
		if($a != $bil1){
			echo ", ";
		}
	}
}
?>

<p>Langkah kedua: cari faktor dari <?php echo $bil2; ?>.<br>
Faktor <?php echo $bil2; ?>: 
<?php
for ($a = 1; $a <= $bil2; $a++){
	if($bil2 % $a == 0){
		echo $a;
		if($a != $bil2){
			echo ", ";
		}
	}
}
?>

<p>Langkah ketiga: pilih faktor yang sama dan terbesar dari <?php echo $bil1; ?> dan <?php echo $bil2; ?><br>
Faktor yang sama dan terbesar adalah <?php echo FPB($bil1, $bil2); ?></p>
</body>
</html>
