<?php
session_start();
include "config/koneksi.php";
$username_rizki_akhiramdhani_harahap=$_POST['username_rizki_akhiramdhani_harahap'];
$password_rizki_akhiramdhani_harahap=md5($_POST['password_rizki_akhiramdhani_harahap']);
$cari=mysqli_query($koneksi,"SELECT * FROM tbl_user_rizki_akhiramdhani_harahap WHERE username_rizki_akhiramdhani_harahap='$username_rizki_akhiramdhani_harahap' AND password_rizki_akhiramdhani_harahap='$password_rizki_akhiramdhani_harahap'");
$data=mysqli_fetch_array($cari);
if(!empty($data['username_rizki_akhiramdhani_harahap'])){
    $_SESSION['id_user_rizki_akhiramdhani_harahap']=$data['id_user_rizki_akhiramdhani_harahap'];
    $_SESSION['username_rizki_akhiramdhani_harahap']=$data['username_rizki_akhiramdhani_harahap'];
    $_SESSION['password_rizki_akhiramdhani_harahap']=$data['password_rizki_akhiramdhani_harahap'];
    $_SESSION['nama_lengkap_rizki_akhiramdhani_harahap']=$data['nama_lengkap_rizki_akhiramdhani_harahap'];
    $_SESSION['level_rizki_akhiramdhani_harahap']=$data['level_rizki_akhiramdhani_harahap'];

    echo"<script>alert('Berhasil Login');
window.location='mobil/tampil_mobil.php';</script>";}
else{
    echo"<script>alert('Gagal Login'); window.location='login.php';</script>";
}
?>