<?php
include "../config/koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$no_plat_rizki_akhiramdhani_harahap=$_GET['no_plat_rizki_akhiramdhani_harahap'];
//Menjalankan kueri delete
$delete=mysqli_query($koneksi,"DELETE FROM tbl_mobil_rizki_akhiramdhani_harahap WHERE
no_plat_rizki_akhiramdhani_harahap='$_GET[no_plat_rizki_akhiramdhani_harahap]'");
if($delete){
    //Jika proses delete berhasil
    header("location:tampil_mobil.php");
}else{
    //Jika proses delete gagal
    echo"<p>Gagal Menghapus !</p>";
    echo"<a href='tampil_mobil.php'>Coba Lagi</a>";
}
?>