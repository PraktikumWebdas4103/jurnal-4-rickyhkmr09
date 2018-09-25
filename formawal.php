<form action="" method="POST">
	Nama 	: <input type="text" name="nama"><br><br>
	Nim 	: &nbsp &nbsp <input type="text" name="nim"><br><br>
	Hobby 	: <br><br>
	<input type="checkbox" name="hobi" value="Mobile Legends">Mobile Legends<br>
	<input type="checkbox" name="hobi[]" value="PUBG">PUBG<br>
	<input type="checkbox" name="hobi[]" value="Musik">Musik<br>
	<input type="checkbox" name="hobi[]" value="Makan">Makan<br>
	<input type="checkbox" name="hobi[]" value="Tidur">Tidur<br>
	<br>
	<br>
	<input type="file" name="upload" value="upload">
	<input type="submit" name="submit" value="input">&nbsp &nbsp &nbsp<input type="reset" name="reset" value="hapus">
	<br>
	<br>
</form>

<?php

if(isset($_POST["submit"])){
	$nama 	= $_POST["nama"];
	$nim 	= $_POST["nim"];
	$hobi 	= $_POST["hobi[]"];
	$file 	= $_FILES["upload"]["tmp_name"];
	move_uploaded_file($tmp_name, "images/".$file);

?>

<table border="1">
	<tr>
		<th>Nama</th>
		<th>Nim</th>
		<th>Hobby</th>
	</tr>
	<tr>
		<td><?php echo $nama; ?></td>
		<td><?php echo $nim; ?></td>
		<td><?php echo $hobi; ?></td>
		<td><img src="images/<?php echo$file; ?>"></td>
	</tr>
	
	<?php } ?>
