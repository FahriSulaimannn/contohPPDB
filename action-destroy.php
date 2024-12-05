<?php

session_start();
include('db.php');

// Ambil key data yang akan dihapus dari formulir POST
$key = $_POST['delete_key'];

// Tentukan jalur ke tabel yang akan dihapus
$table = "berita/" . $key;

// Hapus data dari database Firebase Realtime
$deleteData = $database->getReference($table)->remove();

// Periksa apakah penghapusan berhasil atau tidak
if ($deleteData) {
    // Jika berhasil, atur notifikasi dan arahkan kembali ke halaman utama
    $_SESSION['notif'] = 'Data berhasil dihapus';
    header('Location: Admin.php');
} else {
    // Jika gagal, atur notifikasi dan arahkan kembali ke halaman utama
    $_SESSION['notif'] = 'Data gagal dihapus';
    header('Location: Admin.php');
}