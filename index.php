<?php 	
// Menampung data
if (isset($_POST["hitung"]) ) {
	$a = $_POST["kalkulator1"];
	$b = $_POST["kalkulator2"];
	$operator = $_POST['operator'];

if ($operator == "+") {
	 $hasil = $a + $b;
}elseif ($operator == "-") {
	$hasil = $a - $b;
}elseif ($operator == "*") {
	 $hasil = $a * $b;
}elseif ($operator == "/") {
	 $hasil = $a / $b;
}

}




 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kalkular Sederhana dengan PHP dan MYSQLI</title>
	<style>

		body{
			height: 1000px;
			margin: 50px;
			background: ghostwhite;
		}

		select {
			width:88%;
		}

		.pilihan2 option{
			margin: auto;
		}
		div h1{
			margin: 100px;
			font-size: 40px;
			text-align: center;
			color: dodgerblue;
			font-family: monospace;
		}
	</style>
</head>
<body>
	<div>
		<h1> <strong>Kalkulator Sederhana dengan PHP </strong></h2>
	</div>
	
	<form action="" method="post">
		<table border="0" cellpadding="10" cellspacing="0" width="50%" style="background-color: bisque; margin:50px auto;">
			<tr>
				<td><input type="text" name="kalkulator1" placeholder="Masukan Angka Pertama" autocomplete="off"></td>
				<td class="pilihan">
					<select name="operator">
						<option>operator</option>
						<?php $operator =["+", "-", "*", "/"]; ?>
						<?php foreach ($operator as $op) : ?>
							<option value="<?php echo $op ?>"><?php echo $op ?></option>
						<?php endforeach; ?>
					</select>
				</td>
				<td>
				<input type="text" name="kalkulator2" autocomplete="off" placeholder="Masukan Angka Kedua">
				</td>
			</tr>
			<tr>
				<td style="margin: auto;"><button type="submit" name="hitung">Hitung</button></td>
				<?php if (isset($_POST["hitung"]) ) { ?>
					<td><input type="text" value="<?php echo $hasil; ?>"></td>
				<?php }else{ ?>
					<td><input type="text" value=""></td>
				<?php } ?>
			</tr>
		</table>
	</form>

</body>
</html>