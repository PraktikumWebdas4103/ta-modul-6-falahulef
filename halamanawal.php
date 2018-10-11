<?php
$servername = "localhost";
$username ="root";
$password = "";
$db = "mahasiswa";
$con = new mysqli($servername,$username,$password,$db);

if($con==false){
	die("Connection Failed: ". $con->connect_eror);
}

$sql = mysqli_query($con,"SELECT * FROM profile");
$row = mysqli_fetch_array($sql);
 ?>
 <form action="#" method="POST">
 <nav>
  <a href="">Posting</a>
  <a href="">Edit Data</a>
 </nav>
<table>
<br>
<tr>
<td>Nama</td> <td>:</td>  <td><?php echo $row['nama']; ?>  </td>
</tr>
<tr>
<td>NIM</td> <td>:</td> <td><?php echo $row['nim']; ?>  </td>
</tr>
<tr>
<td>Kelas</td> <td>:</td> <td><?php echo $row['kelas']; ?> </td>
</tr>
<tr>
<td>Jenis Kelamin</td> <td>:</td> <td><?php echo $row['jeniskelamin']; ?>  </td>
</tr>
<tr>
<td>Fakultas</td> <td>:</td> <td><?php echo $row['fakultas']; ?> </td>
</tr>
<tr>
<td>Hobi</td> <td>:</td> <td><?php echo $row['hobi']; ?> </td>
</tr>
<tr>
<td>Alamat</td> <td>:</td> <td><?php echo $row['alamat']; ?>  </td>
</tr>
</table>
</form>