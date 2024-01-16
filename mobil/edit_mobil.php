<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mobil</title>
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
            <div class="card-header">Edit Data Mobil</div>
            <div class="card-body text-success">
                <div class="row" >
                    <div class="col-md-5 ">
                        <form method="POST" action="update_mobil.php" >
                            <?php
                            include "../config/koneksi.php";
                            $no_plat_rizki_akhiramdhani_harahap=$_GET['no_plat_rizki_akhiramdhani_harahap'];
                            $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_mobil_rizki_akhiramdhani_harahap WHERE no_plat_rizki_akhiramdhani_harahap='$no_plat_rizki_akhiramdhani_harahap'");
                            $data=mysqli_fetch_array($tampil);
                            ?>
                            <div class="mb-3 mt-3">
                                <label for="no_plat_rizki_akhiramdhani_harahap" class="form-label">No Plat :</label>
                                <input type="hidden" name="no_plat_rizki_akhiramdhani_harahap_tmp" value="<?=$data['no_plat_rizki_akhiramdhani_harahap']?>" class="form-control" id="no_plat_rizki_akhiramdhani_harahap_tmp" required>
                                <input type="text" name="no_plat_rizki_akhiramdhani_harahap" value="<?=$data['no_plat_rizki_akhiramdhani_harahap']?>" class="form-control" id="no_plat_rizki_akhiramdhani_harahap" placeholder="Masukan No Plat" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="nama_mobil_rizki_akhiramdhani_harahap" class="form-label">Nama Mobil :</label>
                                <input type="text" name="nama_mobil_rizki_akhiramdhani_harahap" value="<?=$data['nama_mobil_rizki_akhiramdhani_harahap']?>" class="form-control" id="nama_mobil_rizki_akhiramdhani_harahap" placeholder="Masukan Nama Mobil" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="brand_mobil_rizki_akhiramdhani_harahap" class="form-label">Brand Mobil :</label>
                                <select for="brand_mobil_rizki_akhiramdhani_harahap" name="brand_mobil_rizki_akhiramdhani_harahap" class="form-control" id="brand_mobil_rizki_akhiramdhani_harahap" >
                                    <option value="<?=$data['brand_mobil_rizki_akhiramdhani_harahap']?>"><?=$data['brand_mobil_rizki_akhiramdhani_harahap']?></option>
                                    <option value=""> -- Pilih Brand Mobil --</option>
                                    <option value="Avanza"> Avanza</option>
                                    <option value="Brio"> Brio</option>
                                    <option value="Pajero"> Pajero</option>
                                    <option value="DLL"> DLL</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tipe_transmisi_rizki_akhiramdhani_harahap" class="form-label">Tipe Transmisi:</label>
                                <input type="text" name="tipe_transmisi_rizki_akhiramdhani_harahap" value="<?=$data['tipe_transmisi_rizki_akhiramdhani_harahap']?>" class="form-control" id="tipe_transmisi_rizki_akhiramdhani_harahap" placeholder="Masukan Tipe Transmisi" required>
                            </div>
                            
                            <div class="mb-3">
                                <a href="tampil_mobil.php" class="btn btn-warning">Kembali</a> <button type="submit" class="btn btn-primary">Perbaharui</button>
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