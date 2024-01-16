<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$nik_ktp_rizki_akhiramdhani_harahap=$_POST['nik_ktp_rizki_akhiramdhani_harahap'];
$nama_rizki_akhiramdhani_harahap=$_POST['nama_rizki_akhiramdhani_harahap'];
$no_hp_rizki_akhiramdhani_harahap=$_POST['no_hp_rizki_akhiramdhani_harahap'];
$alamat_rizki_akhiramdhani_harahap=$_POST['alamat_rizki_akhiramdhani_harahap'];
//Menjalankan kueri insert
$insert=mysqli_query($koneksi,"INSERT INTO tbl_pelanggan_rizki_akhiramdhani_harahap
(nik_ktp_rizki_akhiramdhani_harahap,
nama_rizki_akhiramdhani_harahap,
no_hp_rizki_akhiramdhani_harahap,
alamat_rizki_akhiramdhani_harahap)
VALUES
('$_POST[nik_ktp_rizki_akhiramdhani_harahap]',
'$_POST[nama_rizki_akhiramdhani_harahap]',
'$_POST[no_hp_rizki_akhiramdhani_harahap]',
'$_POST[alamat_rizki_akhiramdhani_harahap]')
");
if($insert){
    //Jika proses delete berhasil
    header("location:tampil_pelanggan.php");
}else{
    //Jika proses delete gagal
    echo"<p>Gagal Menyimpan !</p>";
    echo"<a href='tampil_pelanggan.php'>Coba Lagi</a>";
}
?>