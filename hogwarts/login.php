<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hogwarts University</title>
    <!-- icon -->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Coat_of_arms_Hogwart_with_motto.svg/220px-Coat_of_arms_Hogwart_with_motto.svg.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets_lain/css/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets_lain/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-secondary">
            <div class="card-header text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Coat_of_arms_Hogwart_with_motto.svg/220px-Coat_of_arms_Hogwart_with_motto.svg.png" class="" alt="" width="50" height="50">
            </div>
            <div class="card-body">
                <p class="login-box-msg">MASUK KE HALAMAN ADMIN</p>
                <!-- notifikasi -->
                <div class="mb-4">
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger'>Username atau password Anda salah. Silahkan coba lagi!</div>";
                        } else if ($_GET['pesan'] == "belum_login") {
                            echo "<div class='alert alert-warning'>Anda harus login untuk mengakses halaman admin</div>";
                        }
                    }
                    ?>
                </div>
                <form action="aksi_login.php" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" name="submit" value="LOGIN" class="btn btn-secondary btn-block w-100">Sign In</button>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets_login/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets_login/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets_login/js/adminlte.min.js"></script>
</body>

</html>
