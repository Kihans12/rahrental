<?php
include "../config/koneksi.php";
/* memasukan setiap data inputan kedalam
setiap variabel
*/
$no_trx_rizki_akhiramdhani_harahap_tmp = $_POST['no_trx_rizki_akhiramdhani_harahap_tmp'];
$no_trx_rizki_akhiramdhani_harahap = $_POST['no_trx_rizki_akhiramdhani_harahap'];
$nik_ktp_rizki_akhiramdhani_harahap = $_POST['nik_ktp_rizki_akhiramdhani_harahap'];
$no_plat_rizki_akhiramdhani_harahap = $_POST['no_plat_rizki_akhiramdhani_harahap'];
$tgl_rental_rizki_akhiramdhani_harahap = $_POST['tgl_rental_rizki_akhiramdhani_harahap'];
$jam_rental_rizki_akhiramdhani_harahap = $_POST['jam_rental_rizki_akhiramdhani_harahap'];
$lama_rizki_akhiramdhani_harahap = $_POST['lama_rizki_akhiramdhani_harahap'];
$harga_rizki_akhiramdhani_harahap = $_POST['harga_rizki_akhiramdhani_harahap'];
$total_bayar_rizki_akhiramdhani_harahap = $_POST['total_bayar_rizki_akhiramdhani_harahap'];
//Menjalankan kueri update
$update = mysqli_query($koneksi, "UPDATE tbl_rental_rizki_akhiramdhani_harahap SET
no_trx_rizki_akhiramdhani_harahap='$no_trx_rizki_akhiramdhani_harahap',
nik_ktp_rizki_akhiramdhani_harahap='$nik_ktp_rizki_akhiramdhani_harahap',
no_plat_rizki_akhiramdhani_harahap='$no_plat_rizki_akhiramdhani_harahap',
tgl_rental_rizki_akhiramdhani_harahap='$tgl_rental_rizki_akhiramdhani_harahap',
jam_rental_rizki_akhiramdhani_harahap='$jam_rental_rizki_akhiramdhani_harahap',
lama_rizki_akhiramdhani_harahap='$lama_rizki_akhiramdhani_harahap',
harga_rizki_akhiramdhani_harahap='$harga_rizki_akhiramdhani_harahap',
total_bayar_rizki_akhiramdhani_harahap='$total_bayar_rizki_akhiramdhani_harahap'
WHERE no_trx_rizki_akhiramdhani_harahap='$no_trx_rizki_akhiramdhani_harahap_tmp'
");
if ($update) {
    //Jika proses delete berhasil
    header("location:tampil_rental.php");
} else {
    //Jika proses update gagal
    echo "<p>Gagal Menyimpan !</p>";
    echo "<a href='tampil_rental.php'>Coba Lagi</a>";
    echo "Error updating record: " . mysqli_error($koneksi);
}
