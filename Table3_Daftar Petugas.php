<!-- Koneksi ke database -->
<?php
$conn = new mysqli("localhost","root","","wahyudi_hermawan_311910106");
$result = mysqli_query($conn, "SELECT * FROM petugas");
?>
<!-- =============================
//Menampilkan data dari database -->
<!DOCTYPE html>
<html>
<head>
    <title>Wahyudi Hermawan</title>
</head>
<body>
<h1>DAFTAR PETUGAS</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID Petugas</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>No Telp</th>
        <th>Alamat</th>
    </tr>

    <?php while( $row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row["id_petugas"]; ?></td>
        <td><?= $row["nama_petugas"]; ?></td>
        <td><?= $row["jabatan_petugas"]; ?></td>
        <td><?= $row["no_telp_petugas"]; ?></td>
        <td><?= $row["alamat_petugas"]; ?></td>
    </tr>
    <?php endwhile; ?>
</body>
</html>
