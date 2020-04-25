<?php
include "koneksi.php";
$idpemilik=$_POST['id_pemilik'];
$namakost=$_POST['nama_kost'];
$jeniskost=$_POST['jenis_kost'];
$jumlahkost=$_POST['jumlah_kost'];
$status=$_POST['status'];
$deskripsi=$_POST['deskripsi'];
$hargakost=$_POST['harga_kost'];
$lokasi=$_POST['lokasi'];
$kota=$_POST['kota'];
$kampus=$_POST['kampus'];
$foto=$_POST['foto'];


$query=mysqli_query($konek,"INSERT INTO kost values('','$idpemilik','$namakost','$jeniskost','$status','$deskripsi','$hargakost','$lokasi','$kota','$kampus','$foto','$jumlahkost')")or die (mysqli_error($query));
if ($query)
{
	header('location:halaman_utama_pemilik.php');
}
else
{
	header('location:errorhandle.php');
}

?>