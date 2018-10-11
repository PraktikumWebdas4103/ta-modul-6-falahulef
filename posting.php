<form action="" method="POST" enctype="multipart/form-data">
<table>
<tr>
<td>Status</td> <td>:</td> <td><textarea rows=20 cols=80 name="status"></textarea></td>
</tr>
<tr>
<td>Upload Foto</td><td>:</td><td><input type="file" name="foto"></td>
</tr>
<tr>
<td></td><td></td><td><input type="submit" name="submit" value="Posting"></td>
</tr>
</table>
</form>

<?php 
$servername = "localhost";
$username ="root";
$password = "";
$db = "mahasiswa";
$con = new mysqli($servername,$username,$password,$db);

if($con==false){
	die("Connection Failed: ". $con->connect_eror);
}

if(isset($_POST['submit'])) {

	$status = $_POST['status'];
	$gambar = $_FILES["foto"];

	if(strlen($status) < 30) {
	die("Status Minimal 30 huruf ". mysqli_connect_error());
}

echo "<img src='$gambar'> <br>";
$sql ="INSERT INTO profile (username,password,nama,nim,kelas,jeniskelamin,hobi,fakultas,alamat,status) values ('$username','$password','$nama','$nim','$kelas','$jk','$hobi','$fakultas','$alamat','$status')";
if (mysqli_query($con,$sql)){
	echo "Berhasil update status";
}else{
	echo "gagal update status";
}
}

 ?>