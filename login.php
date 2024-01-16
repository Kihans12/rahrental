

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mobil</title>
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" ></script>
</head>
<body>
    <section class="vh-100" style="background-color: #DCF2F1;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="assets/img/r-nolan-yOg99a-LwQY-unsplash.jpg"
                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                    <form method="POST" action="cek_login.php">

                    <div class="d-flex align-items-center mb-3 pb-1">
                        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                        <span class="h1 fw-bold mb-0">RAH Rental.</span>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="text" name="username_rizki_akhiramdhani_harahap" class="form-control form-control-lg" id="username_rizki_akhiramdhani_harahap" placeholder="Masukan Username" required>
                        <label for="username_rizki_akhiramdhani_harahap" class="form-label">Username :</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" name="password_rizki_akhiramdhani_harahap" class="form-control form-control-lg" id="password_rizki_akhiramdhani_harahap" placeholder="Masukan Password" required>
                        <label for="password_rizki_akhiramdhani_harahap" class="form-label">Password :</label>
                    </div>

                    <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                    </div>

                    <a href="#!" class="small text-muted">RAH Rental.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                    </form>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
</body>
</html>
