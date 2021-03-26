<?php 
include 'config.php';

$nama               =   $_POST['nama'];
$jurusan            =   $_POST['jurusan'];
$alamat             =   $_POST['alamat'];

$formulir_perndaftaran = "INSERT INTO kakau (nama, jurusan, alamat)
                VALUES ('$nama', '$jurusan', '$alamat')";
       

if(mysqli_query($koneksi, $formulir_perndaftaran)){
    echo "sukses";
}
else
{
    echo "gagal";
}

?>


