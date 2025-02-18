<?php
include 'koneksi.php';

// Cek apakah ada ID wali murid yang diberikan dalam URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_wali_murid = $_GET['id'];

    // Query untuk menghapus wali murid berdasarkan ID
    $delete_query = "DELETE FROM wali_murid WHERE id_wali_murid = '$id_wali_murid'";

    if (mysqli_query($koneksi, $delete_query)) {
        // Jika berhasil, redirect ke halaman kelola wali murid
        header('Location: wali_murid.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "ID wali murid tidak valid!";
    exit;
}
?>
