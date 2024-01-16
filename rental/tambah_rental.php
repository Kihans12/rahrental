<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Rental</title>
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
        <div class="row">
            <div class="col-md-12 mb-4">
                <?php include "../menu.php"; ?>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header">Tambah Data Rental</div>
            <div class="card-body text-success">
                <div class="row ">
                    <div class="col-md-6 ">
                        <form method="POST" action="insert_rental.php">
                            <div class="mb-3 mt-3-1">
                                <label for="no_trx_rizki_akhiramdhani_harahap" class="form-label">No TRX :</label>
                                <?php
                                $notrx = "TRX-" . date("Ymdhis");
                                ?>
                                <input type="text" name="no_trx_rizki_akhiramdhani_harahap" class="form-control" id="no_trx_rizki_akhiramdhani_harahap" value="<?php echo $notrx; ?>" readonly>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="nama_rizki_akhiramdhani_harahap" class="form-label">Pelanggan :</label>
                                <select name="nik_ktp_rizki_akhiramdhani_harahap" class="form-control">
                                    <option value=""> -- Pilih --</option>
                                    <?php
                                    include "../config/koneksi.php";
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan_rizki_akhiramdhani_harahap");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                        echo "<option value='$data[nik_ktp_rizki_akhiramdhani_harahap]'>$data[nik_ktp_rizki_akhiramdhani_harahap] - $data[nama_rizki_akhiramdhani_harahap] </option>";
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="nama_mobil_rizki_akhiramdhani_harahap" class="form-label">Mobil :</label>
                                <select name="no_plat_rizki_akhiramdhani_harahap" class="form-control">
                                    <option value=""> -- Pilih Mobil --</option>
                                    <?php
                                    include "../config/koneksi.php";
                                    $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_mobil_rizki_akhiramdhani_harahap");
                                    while ($data = mysqli_fetch_array($tampil)) {
                                        echo "<option value='$data[no_plat_rizki_akhiramdhani_harahap]'>$data[no_plat_rizki_akhiramdhani_harahap] - $data[nama_mobil_rizki_akhiramdhani_harahap] </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                    </div>

                    <div class="col-md-6 ">
                        <div class="mb-3">
                            <label for="tgl_rental_rizki_akhiramdhani_harahap" class="form-label">Tanggal Ambil :</label>
                            <input type="date" name="tgl_rental_rizki_akhiramdhani_harahap" class="form-control" id="tgl_rental_rizki_akhiramdhani_harahap" placeholder="Tanggal Ambil" required>
                        </div>
                        <div class="mb-3">
                            <label for="jam_rental_rizki_akhiramdhani_harahap" class="form-label">Jam Ambil :</label>
                            <input type="time" name="jam_rental_rizki_akhiramdhani_harahap" class="form-control" id="jam_rental_rizki_akhiramdhani_harahap" placeholder="Jam Ambil" required>
                        </div>
                        <div class="mb-3">
                            <label for="lama_rizki_akhiramdhani_harahap" class="form-label">Lama Sewa :</label>
                            <input type="number" name="lama_rizki_akhiramdhani_harahap" class="form-control" id="lama_rizki_akhiramdhani_harahap" placeholder="Lama Sewa" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga_rizki_akhiramdhani_harahap" class="form-label">Harga Rental :</label>
                            <input type="number" name="harga_rizki_akhiramdhani_harahap" class="form-control" id="harga_rizki_akhiramdhani_harahap" oninput="calculateTotal()" required>
                        </div>
                        <div class="mb-3">
                            <label for="total_bayar_rizki_akhiramdhani_harahap" class="form-label">Total Pembayaran :</label>
                            <input type="number" name="total_bayar_rizki_akhiramdhani_harahap" class="form-control" id="total_bayar_rizki_akhiramdhani_harahap" readonly>
                        </div>
                        <div class="mb-3">
                            <a href="tampil_rental.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Simpan</button>
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