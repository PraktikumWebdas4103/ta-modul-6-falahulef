<form action="#" method="POST">
<table>
<tr>
<td>Username</td><td>:</td><td><input type="text" name="username"></td>
</tr>
<td>Password</td><td>:</td><td><input type="password" name="password"></td>
<tr>
<td>NIM</td> <td>:</td> <td><input type="text" name="nim"></td>
</tr>
<tr>
<td>Nama</td> <td>:</td> <td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Kelas</td> <td>:</td> <td><input type="radio" name="kelas" value="D3 MI 41-01">D3 MI 41-01 <input type="radio" name="kelas" value="D3 MI 41-02">D3 MI 41-02 <br> 
<input type="radio" name="kelas" value="D3 MI 41-03">D3 MI 41-03 <input type="radio" name="kelas" value="D3 MI 41-04">D3 MI 41-04</td>
</tr>
<tr>
<td>Jenis Kelamin</td> <td>:</td> <td><input type="radio" name="gender" value="Laki-Laki" />Laki-Laki <input type="radio" name="gender" value="Perempuan" />Perempuan</td>
</tr>
<tr>
<td>Hobi</td><td>:</td><td><input type="checkbox" name="hobi" value="Futsal">Futsal <input type="checkbox" name="hobi" value="Voli">Voli <br><input type="checkbox" name="hobi" value="Bulu Tangkis">Bulu Tangkis  <input type="checkbox" name="hobi" value="Renang">Renang <br><input type="text" name="hobi" placeholder="Other Hobi"></td>
</tr>
<td>Fakultas</td><td>:</td><td><select name="fakultas"> <option value="FTE">Fakultas Teknik Elektro</option> <option value="FIT">Fakultas Ilmu Terapan</option> 
<option value="FEB">Fakultas Ekonomi Bisnis</option> <option value="FIK">Fakultas Ilmu Kreatif</option>  </select></td>
<tr>
<td>Alamat</td> <td>:</td> <td><textarea style="height: 100; width: 225;" name="alamat"></textarea></td>
</tr>
<tr>
<td></td><td></td><td align="right"><input type="submit" name="registrasi" value="Registrasi"></td>
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
if (isset($_POST['registrasi'])){
$username = $_POST['username'];
$password = $_POST['password'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jk = $_POST['gender'];
$hobi = $_POST['hobi'];
$fakultas = $_POST['fakultas'];
$alamat = $_POST['alamat'];

if(strlen($nim) != 10) {
	die("Nim Harus 10 Digit ". mysqli_connect_error());
}

if(strlen($nama) >= 25) {
	die("Karakter Nama tidak boleh melebihi 25 Digit ". mysqli_connect_error());
}

$sql ="INSERT INTO profile (username,password,nama,nim,kelas,jeniskelamin,hobi,fakultas,alamat) values ('$username','$password','$nama','$nim','$kelas','$jk','$hobi','$fakultas','$alamat')";
if (mysqli_query($con,$sql)){
	echo "Registrasi Berhasil Click <a href='formlogin.php'>Disini</a> untuk Login";
}else{
	echo "Registrasi Gagal";
}
}
?>