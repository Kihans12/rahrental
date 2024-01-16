<?php
session_start();
include "../config/koneksi.php";
/* Mengambil nilai nim dari parameter get
yang dikirim dari tampil mahasiswa
*/
$no_trx_rizki_akhiramdhani_harahap = $_GET['no_trx_rizki_akhiramdhani_harahap'];
//Menjalankan kueri delete
$delete = mysqli_query($koneksi, "DELETE FROM tbl_rental_rizki_akhiramdhani_harahap WHERE
no_trx_rizki_akhiramdhani_harahap='$_GET[no_trx_rizki_akhiramdhani_harahap]'");
if ($delete) {
    //Jika proses delete berhasil

    header("location:tampil_rental.php");
} else {
    //Jika proses delete gagal
    echo "<p>Gagal Menghapus !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
