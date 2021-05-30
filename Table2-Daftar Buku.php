<!-- Koneksi ke database -->
<?php
$conn = new mysqli("localhost","root","","wahyudi_hermawan_311910106");
$result = mysqli_query($conn, "SELECT * FROM buku");
?>
<!-- =============================
//Menampilkan data dari database -->
<!DOCTYPE html>
<html>
<head>
    <title>Wahyudi Hermawan</title>
</head>
<body>
<h1>DAFTAR BUKU</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID Buku</th>
        <th>Kode Buku</th>
        <th>Judul Buku</th>
        <th>Penulis Buku</th>
        <th>Penerbit Buku</th>
        <th>Tahun Terbit</th>
        <th>Stock</th>
    </tr>
    <?php while( $row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row["id_buku"]; ?></td>
        <td><?= $row["kode_buku"]; ?></td>
        <td><?= $row["judul_buku"]; ?></td>
        <td><?= $row["penulis_buku"]; ?></td>
        <td><?= $row["penerbit_buku"]; ?></td>
        <td><?= $row["tahun_penerbit"]; ?></td>
        <td><?= $row["stok"]; ?></td>
    </tr>
    <?php endwhile; ?>
</body>
</html>
