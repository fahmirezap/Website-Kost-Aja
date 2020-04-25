<?php
include "koneksi.php";
$idkost=$_POST['id_kost'];
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

echo $idkost=$_POST['id_kost'];
echo $idpemilik=$_POST['id_pemilik'];
echo $namakost=$_POST['nama_kost'];
echo $jeniskost=$_POST['jenis_kost'];
echo $jumlahkost=$_POST['jumlah_kost'];
echo $status=$_POST['status'];
echo $deskripsi=$_POST['deskripsi'];
echo $hargakost=$_POST['harga_kost'];
echo $lokasi=$_POST['lokasi'];
echo $kota=$_POST['kota'];
echo $kampus=$_POST['kampus'];
echo $foto=$_POST['foto'];

$query=mysqli_query($konek,"UPDATE kost set 
	id_pemilik='$idpemilik',
	nama_kost='$namakost',
	jenis_kost='$jeniskost',
	status='$status',
	deskripsi='$deskripsi',
	harga_kost='$hargakost',
	lokasi='$lokasi',
	kota='$kota',
	kampus='$kampus',
	foto='$foto',
	jumlah_kost='$jumlahkost'
	 where id_kost='$idkost'")or die (mysqli_error($query));


if($query)
{
	header('location:halaman_utama_pemilik.php');
}
else
{
	header('location:errorhandle.php');
}


?>