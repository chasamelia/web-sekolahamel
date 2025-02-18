<?php
include 'koneksi.php';

// Cek apakah ada ID siswa yang diberikan dalam URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_siswa = $_GET['id'];

    // Query untuk menghapus siswa berdasarkan ID
    $delete_query = "DELETE FROM siswa WHERE id_siswa = '$id_siswa'";

    if (mysqli_query($koneksi, $delete_query)) {
        // Jika berhasil, redirect ke halaman kelola siswa
        header('Location: siswa.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "ID siswa tidak valid!";
    exit;
}
?>
