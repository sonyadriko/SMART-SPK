<?php
include '../config/database.php';

if (isset($_GET['Del'])) {
    $id = $_GET['Del'];

    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM handphone WHERE id_handphone = ?";
    $stmt = mysqli_prepare($conn, $query);

    // Menggunakan prepared statement
    mysqli_stmt_bind_param($stmt, "i", $id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Jika berhasil dihapus, arahkan kembali ke halaman daftar handphone
        header("Location: handphone.php?status=deleted");
    } else {
        echo "Gagal menghapus data handphone.";
    }

    // Tutup statement
    mysqli_stmt_close($stmt);
} else {
    echo "ID tidak valid.";
}