<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        function calculateTotal() {
            var harga = document.getElementById('harga_rizki_akhiramdhani_harahap').value;
            var lama = document.getElementById('lama_rizki_akhiramdhani_harahap').value;
            var total = harga * lama;
            document.getElementById('total_bayar_rizki_akhiramdhani_harahap').value = total;
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="card border-success mb-3">
            <div class="card-header">Edit Data Rental</div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-5 ">
                        <form method="POST" action="update_rental.php">
                            <?php
                            include "../config/koneksi.php";
                            $no_trx_rizki_akhiramdhani_harahap = $_GET['no_trx_rizki_akhiramdhani_harahap'];
                            $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_rental_rizki_akhiramdhani_harahap INNER JOIN tbl_pelanggan_rizki_akhiramdhani_harahap ON 
                            tbl_rental_rizki_akhiramdhani_harahap.nik_ktp_rizki_akhiramdhani_harahap=tbl_pelanggan_rizki_akhiramdhani_harahap.nik_ktp_rizki_akhiramdhani_harahap INNER JOIN tbl_mobil_rizki_akhiramdhani_harahap ON 
                            tbl_rental_rizki_akhiramdhani_harahap.no_plat_rizki_akhiramdhani_harahap=tbl_mobil_rizki_akhiramdhani_harahap.no_plat_rizki_akhiramdhani_harahap WHERE no_trx_rizki_akhiramdhani_harahap='$no_trx_rizki_akhiramdhani_harahap'");
                            $data = mysqli_fetch_array($tampil);
                            ?>
                            <div class="mb-3 mt-3">
                                <label for="no_trx_rizki_akhiramdhani_harahap" class="form-label">No TRX :</label>

                                <input type="hidden" name="no_trx_rizki_akhiramdhani_harahap_tmp" value="<?= $data['no_trx_rizki_akhiramdhani_harahap'] ?>" class="form-control" id="no_trx_rizki_akhiramdhani_harahap_tmp" readonly>

                                <input type="text" name="no_trx_rizki_akhiramdhani_harahap" value="<?= $data['no_trx_rizki_akhiramdhani_harahap'] ?>" class="form-control" id="no_trx_rizki_akhiramdhani_harahap" readonly>

                            </div>

                            <div class="mb-3">
                                <label for="jam_rental_rizki_akhiramdhani_harahap" class="form-label">Jam Rental :</label>
                                <input type="time" name="jam_rental_rizki_akhiramdhani_harahap" value="<?= $data['jam_rental_rizki_akhiramdhani_harahap'] ?>" class="form-control" id="jam_rental_rizki_akhiramdhani_harahap">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="tgl_rental_rizki_akhiramdhani_harahap" class="form-label">Tanggal Rental :</label>
                                <input type="date" name="tgl_rental_rizki_akhiramdhani_harahap" value="<?= $data['tgl_rental_rizki_akhiramdhani_harahap'] ?>" class="form-control" id="tgl_rental_rizki_akhiramdhani_harahap" required>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="nik_ktp_rizki_akhiramdhani_harahap" class="form-label">Pelanggan :</label>
                                <select name="nik_ktp_rizki_akhiramdhani_harahap" class="form-control" id="nik_ktp_rizki_akhiramdhani_harahap" required>
                                    <?php
                                    if ($data && isset($data['nik_ktp_rizki_akhiramdhani_harahap']) && isset($data['nama_rizki_akhiramdhani_harahap'])) {
                                        echo "<option value='{$data['nik_ktp_rizki_akhiramdhani_harahap']}'>{$data['nik_ktp_rizki_akhiramdhani_harahap']} - {$data['nama_rizki_akhiramdhani_harahap']}</option>";
                                    }
                                    ?>
                                    <option value=""> -- Pilih --</option>
                                    <?php
                                    include "../config/koneksi.php";
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_rizki_akhiramdhani_harahap");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                        echo "<option value='{$data['nik_ktp_rizki_akhiramdhani_harahap']}'>{$data['nik_ktp_rizki_akhiramdhani_harahap']} - {$data['nama_rizki_akhiramdhani_harahap']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="no_plat_rizki_akhiramdhani_harahap" class="form-label">Mobil :</label>
                                <select name="no_plat_rizki_akhiramdhani_harahap" class="form-control" id="no_plat_rizki_akhiramdhani_harahap" required>
                                    <?php
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_rizki_akhiramdhani_harahap");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                        if (isset($data['no_plat_rizki_akhiramdhani_harahap'])) {
                                            echo "<option value='{$data['no_plat_rizki_akhiramdhani_harahap']}'>{$data['no_plat_rizki_akhiramdhani_harahap']}</option>";
                                        } else {
                                            echo "<p>Kolom no_plat_rizki_akhiramdhani_harahap tidak ada dalam hasil.</p>";
                                        }
                                    }
                                    ?>
                                    <option value=""> -- Pilih --</option>
                                    <?php
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_rizki_akhiramdhani_harahap");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                        echo "<option value='{$data['no_plat_rizki_akhiramdhani_harahap']}'>{$data['no_plat_rizki_akhiramdhani_harahap']} - {$data['nama_mobil_rizki_akhiramdhani_harahap']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="lama_rizki_akhiramdhani_harahap" class="form-label">Lama Sewa :</label>
                                <?php
                                $tampil2 = mysqli_query($koneksi, "SELECT * FROM tbl_rental_rizki_akhiramdhani_harahap WHERE no_trx_rizki_akhiramdhani_harahap='$no_trx_rizki_akhiramdhani_harahap'");
                                $data2 = mysqli_fetch_array($tampil2);
                                ?>
                                <input type="int" name="lama_rizki_akhiramdhani_harahap" value="<?= $data2['lama_rizki_akhiramdhani_harahap'] ?>" class="form-control" id="lama_rizki_akhiramdhani_harahap" placeholder="Masukan lama sewa Anda" required>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="harga_rizki_akhiramdhani_harahap" class="form-label">Harga Rental :</label>
                                <?php
                                $tampil3 = mysqli_query($koneksi, "SELECT * FROM tbl_rental_rizki_akhiramdhani_harahap WHERE no_trx_rizki_akhiramdhani_harahap='$no_trx_rizki_akhiramdhani_harahap'");
                                $data3 = mysqli_fetch_array($tampil3);
                                ?>
                                <input type="number" name="harga_rizki_akhiramdhani_harahap" value="<?= $data3['harga_rizki_akhiramdhani_harahap'] ?>" class="form-control" id="harga_rizki_akhiramdhani_harahap" required>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="total_bayar_rizki_akhiramdhani_harahap" class="form-label">Total Pembayaran :</label>
                                <?php
                                $tampil4 = mysqli_query($koneksi, "SELECT * FROM tbl_rental_rizki_akhiramdhani_harahap WHERE no_trx_rizki_akhiramdhani_harahap='$no_trx_rizki_akhiramdhani_harahap'");
                                $data4 = mysqli_fetch_array($tampil4);
                                ?>
                                <input type="number" name="total_bayar_rizki_akhiramdhani_harahap" value="<?= $data4['total_bayar_rizki_akhiramdhani_harahap'] ?>" class="form-control" id="total_bayar_rizki_akhiramdhani_harahap" readonly>
                            </div>

                            <div class="mb-3">
                                <a href="tampil_rental.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Perbaharui</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>