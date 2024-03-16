<?php
session_start();

$users = array(
    'usersatu' => array(
        'password' => '123'
    )
);

// menangkap data yang dikirim dari form login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mengecek apakah username ada di dalam array users
    if (array_key_exists($username, $users)) {
        // Jika password sesuai
        if ($password == $users[$username]['password']) {
            // Login sukses, set session
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:tambah_artikel_admin.php");
            exit();
        } else {
            $error = "Password salah";
        }
    } else {
        $error = "Username tidak ditemukan";
    }

    // Jika terjadi kesalahan, redirect kembali ke halaman login dengan pesan kesalahan
    header("location:login.php?pesan=" . urlencode($error));
    exit();
}
?>
