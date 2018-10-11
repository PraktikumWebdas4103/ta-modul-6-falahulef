<form action=" " method="POST">
<table>
<tr>
<td>Username</td> <td>:</td> <td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td> <td>:</td> <td><input type="password" name="password"></td>
</tr>
<tr>
<td></td><td></td><td align="right"><input type="submit" name="login" value="Login"></td>
</tr>
<tr>
<td></td><td></td><td align="right">Registrasi <a href="form.php">Disini </a></td>
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
if(isset($_POST['login'])) {
	$user = $_POST['username'];
	$pass = $_POST['password'];

	session_start();
	$sql = mysqli_query($con,"SELECT username,password FROM profile WHERE username='$user' AND password='$pass'");
	//echo "$sql";
	$login = mysqli_num_rows($sql);
	$_SESSION['loginuser']=$user; 
		if($login) {
			echo "Login berhasil";
		}else {
			echo "Login Gagal";
		}
}

 ?>