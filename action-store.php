<?php

session_start();
include('db.php');

// Ambil data dari formulir POST
$judul = $_POST['input1'];
$isi = $_POST['input2'];
$lokasi = $_POST['input3'];
$tanggal = $_POST['input4'];

// Susun data formulir ke dalam bentuk array
$formData = [
    'judul' => $judul,
    'isi' => $isi,
    'lokasi' => $lokasi,
    'tanggal' => $tanggal,
];

// Tentukan tabel dalam Firebase Realtime Database
$table = "berita";

// Simpan data baru ke dalam Firebase Realtime Database
$storeData = $database->getReference($table)->push($formData);

// Periksa apakah penyimpanan data berhasil atau tidak
if ($storeData) {
    // Jika berhasil, atur notifikasi dan arahkan kembali ke halaman utama
    $_SESSION['notif'] = 'Data berhasil ditambah';
    header('Location: Admin.php');
} else {
    // Jika gagal, atur notifikasi dan arahkan kembali ke halaman utama
    $_SESSION['notif'] = 'Data gagal ditambah';
    header('Location: Admin.php');
}