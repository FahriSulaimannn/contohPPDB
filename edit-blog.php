<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Jadwal</title>
</head>

<body>

<div class="container mb-3">
    <h3 class="text-center">Form Edit Jadwal</h3>
    <?php
    include('db.php');

    if (isset($_GET['id'])) {
        $index = $_GET['id'];

        $table = "berita";
        $data = $database->getReference($table)->getChild($index)->getValue();

        if ($data > 0) {

    ?>
            <form action="action-update.php" method="POST">
                <input type="hidden" name="key" value="<?= $index; ?>">
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="title" value="<?= $data['judul']; ?>">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" id="image" value="<?= $data['lokasi']; ?>">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Tanggal</label>
                    <input type="text" name="tanggal" class="form-control" id="category" value="<?= $data['tanggal']; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi/Isi</label>
                    <textarea class="form-control" name="isi" id="exampleFormControlTextarea1" rows="3"><?= $data['isi']; ?></textarea>
                </div>
                <a href="Admin.php"><button type="button" class="btn btn-secondary">Kembali</button></a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
    <?php
        }
    }
    ?>
</div>

</body>

</html>