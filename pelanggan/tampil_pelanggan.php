<?php
session_start();
if(empty($_SESSION['username_rizki_akhiramdhani_harahap']) AND empty($_SESSION['password_rizki_akhiramdhani_harahap']) ){
echo "<script>alert('Anda tidak memiliki akses'); window.location =
'login.php'</script>";
}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <div class="card-header">Data Pelanggan</div>
            <div class="card-body text-success">
                <div class="row">
                    <div class="col-md-6 mb-2 ">
                        <a href='tambah_pelanggan.php' class='btn btn-primary'>Tambah Data</a>
                    </div>
                    <div class="col-md-6 ">
                        <form action="cari_pelanggan.php" method="GET">
                            <div class="btn-group float-end" role="group" >
                                <input type="text" name="keyword" class="form-control" placeholder="Masukan keyword" required>
                                <button type="submit" class="btn btn-primary">Pencarian</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Nomor Hp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </tbody>
                        <?php
                        include "../config/koneksi.php";
                        $i=0;
                        $tampil=mysqli_query($koneksi,"SELECT * FROM tbl_pelanggan_rizki_akhiramdhani_harahap");
                        while($data=mysqli_fetch_array($tampil)){
                            $i++;
                            ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$data['nik_ktp_rizki_akhiramdhani_harahap']?></td>
                                <td><?=$data['nama_rizki_akhiramdhani_harahap']?></td>
                                <td><?=$data['no_hp_rizki_akhiramdhani_harahap']?></td>
                                <td><?=$data['alamat_rizki_akhiramdhani_harahap']?></td>
                                <td>
                                    <a href="edit_pelanggan.php?nik_ktp_rizki_akhiramdhani_harahap=<?=$data['nik_ktp_rizki_akhiramdhani_harahap']?>" class='btn btn-primary'>Edit</a>
                                    <a href="delete_pelanggan.php?nik_ktp_rizki_akhiramdhani_harahap=<?=$data['nik_ktp_rizki_akhiramdhani_harahap']?>" class='btn btn-danger' onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Hapus</a>
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

<?php
}
?>
