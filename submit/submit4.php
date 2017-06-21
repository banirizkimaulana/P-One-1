<?php
if($_POST["tombol"]=="Kirim")
{
$nama=$_POST["nama"];
$email=$_POST["email"];
$komentar=$_POST["komentar"];

}

//connect database
$con=mysql_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");

//Menampilkan data
mysql_select_db("db_comment", $con);
$sql="INSERT INTO tabel (nama, email, komentar, caption)VALUES('$_POST[nama]','$_POST[email]', '$_POST[komentar]','4')";

if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
echo "<meta http-equiv='refresh' content='0; >";
	header("location:../index.php?dtl=caption4");
exit; 
mysql_close($con);

?>