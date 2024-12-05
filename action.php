<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    $table = "users/{$id}";

    if ($action === 'approve') {
        $database->getReference($table)->update(['status' => 'approved']);
        echo json_encode(['success' => true, 'message' => 'Status berhasil diubah menjadi approved.']);
    } elseif ($action === 'cancel') {
        $database->getReference($table)->remove();
        echo json_encode(['success' => true, 'message' => 'Data berhasil dihapus.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Aksi tidak valid.']);
    }
}
?>
