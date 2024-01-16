<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_plat_rizki_akhiramdhani_harahap_tmp=$_POST['no_plat_rizki_akhiramdhani_harahap_tmp'];
$no_plat_rizki_akhiramdhani_harahap=$_POST['no_plat_rizki_akhiramdhani_harahap'];
$nama_mobil_rizki_akhiramdhani_harahap=$_POST['nama_mobil_rizki_akhiramdhani_harahap'];

$brand_mobil_rizki_akhiramdhani_harahap=$_POST['brand_mobil_rizki_akhiramdhani_harahap'];
$tipe_transmisi_rizki_akhiramdhani_harahap=$_POST['tipe_transmisi_rizki_akhiramdhani_harahap'];
//Menjalankan kueri update
$update=mysqli_query($koneksi,"UPDATE tbl_mobil_rizki_akhiramdhani_harahap SET
no_plat_rizki_akhiramdhani_harahap='$no_plat_rizki_akhiramdhani_harahap',
nama_mobil_rizki_akhiramdhani_harahap='$nama_mobil_rizki_akhiramdhani_harahap',
brand_mobil_rizki_akhiramdhani_harahap='$brand_mobil_rizki_akhiramdhani_harahap',
tipe_transmisi_rizki_akhiramdhani_harahap='$tipe_transmisi_rizki_akhiramdhani_harahap'
WHERE no_plat_rizki_akhiramdhani_harahap='$no_plat_rizki_akhiramdhani_harahap_tmp'
");
if($update){
    //Jika proses delete berhasil
    header("location:tampil_mobil.php");
}else{
    //Jika proses update gagal
    echo"<p>Gagal Menyimpan !</p>";
    echo"<a href='tampil_mobil.php'>Coba Lagi</a>";
}
?>