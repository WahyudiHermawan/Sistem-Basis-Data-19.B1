<!-- Koneksi ke database -->
<?php
$conn = new mysqli("localhost","root","","wahyudi_hermawan_311910106");
$result = mysqli_query($conn, "SELECT * FROM anggota");
?>
<!-- =============================
//Menampilkan data dari database -->
<!DOCTYPE html>
<html>
<head>
    <title>Wahyudi Hermawan</title>
</head>
<body>
<h1>DAFTAR ANGGOTA</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID Anggota</th>
        <th>Kode Anggota</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>No Telp</th>
        <th>Alamat</th>
    </tr>

    <?php while( $row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row["id_anggota"]; ?></td>
        <td><?= $row["kode_anggota"]; ?></td>
        <td><?= $row["nama_anggota"]; ?></td>
        <td><?= $row["jk_anggota"]; ?></td>
        <td><?= $row["jurusan_anggota"]; ?></td>
        <td><?= $row["no_telp_anggota"]; ?></td>
        <td><?= $row["alamat_anggota"]; ?></td>
    </tr>
    <?php endwhile; ?>
</body>
</html>
