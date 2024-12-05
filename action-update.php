<?php

session_start();
include('db.php');

// Ambil data dari formulir POST
$key = $_POST['key'];
$judul = $_POST['judul'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];

// Susun data formulir ke dalam bentuk array
$formData = [
    'judul' => $judul,
    'lokasi' => $lokasi,
    'tanggal' => $tanggal,
    'isi' => $isi,
];

// Tentukan jalur ke tabel yang akan diubah dalam Firebase Realtime Database
$table = "berita/" . $key;

// Perbarui data dalam Firebase Realtime Database
$updateData = $database->getReference($table)->update($formData);

// Periksa apakah pembaruan data berhasil atau tidak
if ($updateData) {
    // Jika berhasil, atur notifikasi dan arahkan kembali ke halaman utama
    $_SESSION['notif'] = 'Data berhasil diubah';
    header('Location: Admin.php');
} else {
    // Jika gagal, atur notifikasi dan arahkan kembali ke halaman utama
    $_SESSION['notif'] = 'Data gagal diubah';
    header('Location: Admin.php');
}