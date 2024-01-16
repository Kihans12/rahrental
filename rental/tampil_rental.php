<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rental</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-12 mb-4">
                <?php include "../menu.php"; ?>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header">Data Rental Mobil</div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-6 mb-2 ">
                        <a href='tambah_rental.php' class='btn btn-primary'>Tambah Data</a>
                    </div>
                    <div class="col-md-6 ">
                        <form action="cari_rental.php" method="GET">
                            <div class="btn-group float-end" role="group">
                                <input type="text" name="keyword" class="form-control" placeholder="Masukan keyword" required>
                                <button type="submit" class="btn btn-primary">Pencarian</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped table-hover  ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No TRX</th>
                                    <th>Tanggal</th>
                                    <th>Pelanggan</th>
                                    <th>Mobil</th>
                                    <th>Lama</th>
                                    <th>Harga</th>
                                    <th>Total Bayar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            </tbody>
                            <?php
                            include "../config/koneksi.php";
                            $i = 0;
                            $tampil = mysqli_query($koneksi, "SELECT * FROM tbl_rental_rizki_akhiramdhani_harahap INNER JOIN tbl_pelanggan_rizki_akhiramdhani_harahap ON 
                            tbl_rental_rizki_akhiramdhani_harahap.nik_ktp_rizki_akhiramdhani_harahap=tbl_pelanggan_rizki_akhiramdhani_harahap.nik_ktp_rizki_akhiramdhani_harahap INNER JOIN tbl_mobil_rizki_akhiramdhani_harahap ON 
                            tbl_rental_rizki_akhiramdhani_harahap.no_plat_rizki_akhiramdhani_harahap=tbl_mobil_rizki_akhiramdhani_harahap.no_plat_rizki_akhiramdhani_harahap");
                            while ($data = mysqli_fetch_array($tampil)) {
                                $i++;
                            ?>
                                <tr>
                                    <td>
                                        <?= $i ?>
                                    </td>
                                    <td>
                                        <?= $data['no_trx_rizki_akhiramdhani_harahap'] ?>
                                    </td>
                                    <td>
                                        <?= $data['tgl_rental_rizki_akhiramdhani_harahap'] ?>
                                    </td>
                                    <td>
                                        <?= $data['nama_rizki_akhiramdhani_harahap'] ?>
                                    </td>
                                    <td>
                                        <?= $data['nama_mobil_rizki_akhiramdhani_harahap'], " - ", $data['no_plat_rizki_akhiramdhani_harahap'] ?>
                                    </td>
                                    <td>
                                        <?= $data['lama_rizki_akhiramdhani_harahap']  ?> Hari
                                    </td>
                                    <td>
                                        <?= $data['harga_rizki_akhiramdhani_harahap'] ?>
                                    </td>
                                    <td>
                                        <?= $data['total_bayar_rizki_akhiramdhani_harahap'] ?>
                                    </td>
                                    <td>
                                        <a href="edit_rental.php?no_trx_rizki_akhiramdhani_harahap=<?= $data['no_trx_rizki_akhiramdhani_harahap'] ?>" class='btn btn-primary'>Edit</a>
                                        <a href="delete_rental.php?no_trx_rizki_akhiramdhani_harahap=<?= $data['no_trx_rizki_akhiramdhani_harahap'] ?>" class='btn btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>

</html>