<?php
session_start();
include 'config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'];
    $p = $_POST['password'];
    $q = $conn->query("SELECT * FROM users WHERE username='$u'");
    $d = $q->fetch_assoc();

    if ($d && password_verify($p, $d['password'])) {
        $_SESSION['user'] = $d;
        header("Location: dashboard.php");
    } else {
        echo "Login gagal!";
    }
}
?>
<form method="POST">
    <input name="username" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <button>Login</button>
</form>