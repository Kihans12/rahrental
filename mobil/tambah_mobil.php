<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mobil</title>
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
            <div class="card-header">Tambah Data Mobil</div>
            <div class="card-body text-success">
                <div class="row ">
                    <div class="col-md-5 ">
                        <form method="POST" action="insert_mobil.php" >
                            <div class="mb-3 mt-3">
                                <label for="no_plat_rizki_akhiramdhani_harahap" class="form-label">No Plat :</label>
                                <input type="text" name="no_plat_rizki_akhiramdhani_harahap" class="form-control" id="no_plat_rizki_akhiramdhani_harahap" placeholder="Masukan No Plat" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="nama_mobil_rizki_akhiramdhani_harahap" class="form-label">Nama Mobil :</label>
                                <input type="text" name="nama_mobil_rizki_akhiramdhani_harahap" class="form-control" id="nama_mobil_rizki_akhiramdhani_harahap" placeholder="Masukan Nama Mobil" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="brand_mobil_rizki_akhiramdhani_harahap" class="form-label">Brand Mobil :</label>
                                <select for="brand_mobil_rizki_akhiramdhani_harahap" name="brand_mobil_rizki_akhiramdhani_harahap" class="form-control" id="brand_mobil_rizki_akhiramdhani_harahap" required>
                                    <option value=""> -- Pilih Brand Mobil --</option>
                                    <option value="Avanza"> Avanza</op tion>
                                    <option value="Brio"> Brio</option>
                                    <option value="Pajero"> Pajero</option>
                                    <option value="DLL"> DLL</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tipe_transmisi_rizki_akhiramdhani_harahap" class="form-label">Tipe Transmisi:</label>
                                <input type="text" name="tipe_transmisi_rizki_akhiramdhani_harahap" class="form-control" id="tipe_transmisi_rizki_akhiramdhani_harahap" placeholder="Masukan Tipe Transmisi" required>
                            </div>
                            
                            <div class="mb-3">
                                <a href="tampil_mobil.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Simpan</button>
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