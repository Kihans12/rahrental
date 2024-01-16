<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_rizki_akhiramdhani_harahap_tmp=$_POST['nik_ktp_rizki_akhiramdhani_harahap_tmp'];
$nik_ktp_rizki_akhiramdhani_harahap=$_POST['nik_ktp_rizki_akhiramdhani_harahap'];
$nama_rizki_akhiramdhani_harahap=$_POST['nama_rizki_akhiramdhani_harahap'];

$no_hp_rizki_akhiramdhani_harahap=$_POST['no_hp_rizki_akhiramdhani_harahap'];
$alamat_rizki_akhiramdhani_harahap=$_POST['alamat_rizki_akhiramdhani_harahap'];
//Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE tbl_pelanggan_rizki_akhiramdhani_harahap SET
nik_ktp_rizki_akhiramdhani_harahap='$nik_ktp_rizki_akhiramdhani_harahap',
nama_rizki_akhiramdhani_harahap='$nama_rizki_akhiramdhani_harahap',
no_hp_rizki_akhiramdhani_harahap='$no_hp_rizki_akhiramdhani_harahap',
alamat_rizki_akhiramdhani_harahap='$alamat_rizki_akhiramdhani_harahap'
WHERE nik_ktp_rizki_akhiramdhani_harahap='$nik_ktp_rizki_akhiramdhani_harahap_tmp'
");
if($update){
    //Jika proses delete berhasil
    header("location:tampil_pelanggan.php");
}else{
    //Jika proses update gagal
    echo"<p>Gagal Menyimpan !</p>";
    echo"<a href='tampil_pelanggan.php'>Coba Lagi</a>";
}
?>