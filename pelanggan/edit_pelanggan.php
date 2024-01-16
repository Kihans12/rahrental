<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pelanggan</title>
    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <?php include "../menu.php"; ?>
            </div>
        </div>
        <div class="card border-success mb-3" >
            <div class="card-header">Edit Data Pelanggan</div>
            <div class="card-body text-success">
                <div class="row" >
                    <div class="col-md-5 ">
                        <form method="POST" action="update_pelanggan.php" >
                            <?php
                            include "../config/koneksi.php";
                            $nik_ktp_rizki_akhiramdhani_harahap=$_GET['nik_ktp_rizki_akhiramdhani_harahap'];
                            $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_pelanggan_rizki_akhiramdhani_harahap WHERE nik_ktp_rizki_akhiramdhani_harahap='$nik_ktp_rizki_akhiramdhani_harahap'");
                            $data=mysqli_fetch_array($tampil);
                            ?>
                            <div class="mb-3 mt-3">
                                <label for="nik_ktp_rizki_akhiramdhani_harahap" class="form-label">No NIK :</label>
                                <input type="hidden" name="nik_ktp_rizki_akhiramdhani_harahap_tmp" value="<?=$data['nik_ktp_rizki_akhiramdhani_harahap']?>" class="form-control" id="nik_ktp_rizki_akhiramdhani_harahap_tmp" required>
                                <input type="text" name="nik_ktp_rizki_akhiramdhani_harahap" value="<?=$data['nik_ktp_rizki_akhiramdhani_harahap']?>" class="form-control" id="nik_ktp_rizki_akhiramdhani_harahap" placeholder="Masukan No NIK" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="nama_rizki_akhiramdhani_harahap" class="form-label">Nama Pelanggan :</label>
                                <input type="text" name="nama_rizki_akhiramdhani_harahap" value="<?=$data['nama_rizki_akhiramdhani_harahap']?>" class="form-control" id="nama_rizki_akhiramdhani_harahap" placeholder="Masukan Nama Pelanggan" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="no_hp_rizki_akhiramdhani_harahap" class="form-label">Nomor Hp :</label>
                                <input type="text" name="no_hp_rizki_akhiramdhani_harahap" value="<?=$data['no_hp_rizki_akhiramdhani_harahap']?>" class="form-control" id="no_hp_rizki_akhiramdhani_harahap" placeholder="Masukan Nomor Hp" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="alamat_rizki_akhiramdhani_harahap" class="form-label">Alamat:</label>
                                <input type="text" name="alamat_rizki_akhiramdhani_harahap" value="<?=$data['alamat_rizki_akhiramdhani_harahap']?>" class="form-control" id="alamat_rizki_akhiramdhani_harahap" placeholder="Masukan Alamat" required>
                            </div>
                            
                            <div class="mb-3">
                                <a href="tampil_pelanggan.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Perbaharui</button>
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