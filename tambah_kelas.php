<?php
include 'koneksi.php';

// Menangani jika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $nama_kelas = mysqli_real_escape_string($koneksi, $_POST['nama_kelas']);

    // Query untuk memasukkan data kelas baru
    $query = "INSERT INTO kelas (nama_kelas) VALUES ('$nama_kelas')";

    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, redirect ke halaman kelola kelas
        header('Location: kelas.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-3">Tambah Kelas</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" required>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="kelas.php" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
