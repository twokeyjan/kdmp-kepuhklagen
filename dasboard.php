<?php
session_start();
if (!isset($_SESSION['user'])) header("Location: login.php");
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Dashboard KDMP</title>
  <link rel="stylesheet" href="assets/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <span class="navbar-brand">KDMP Kepuhklagen</span>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <a href="#" class="brand-link">KDMP Menu</a>
      <div class="sidebar">
        <ul class="nav nav-pills nav-sidebar flex-column">
          <li class="nav-item"><a href="pages/anggota/index.php" class="nav-link">Anggota</a></li>
          <li class="nav-item"><a href="pages/simpanan/index.php" class="nav-link">Simpanan</a></li>
          <li class="nav-item"><a href="pages/pinjaman/index.php" class="nav-link">Pinjaman</a></li>
          <li class="nav-item"><a href="pages/pembukuan/index.php" class="nav-link">Kas Manual</a></li>
          <li class="nav-item"><a href="pages/shu/index.php" class="nav-link">SHU</a></li>
        </ul>
      </div>
    </aside>
    <div class="content-wrapper p-4">
      <h3>Selamat datang, <?= $_SESSION['user']['username'] ?></h3>
      <p>Ini dashboard koperasi.</p>
    </div>
  </div>
  <script src="assets/adminlte/plugins/jquery/jquery.min.js"></script>
  <script src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>