<?php include 'koneksi.php'; ?>
<?php
if (isset($_POST['submit'])) {
    mysqli_query($conn, "INSERT INTO siswa VALUES(
        '',
        '$_POST[nama]',
        '$_POST[kelas]',
        '$_POST[alamat]'
    )");
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Tambah Siswa</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" class="form-control">
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
</body>
</html>
