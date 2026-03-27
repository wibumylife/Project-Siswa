<?php include 'koneksi.php'; ?>
<?php
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);

if (isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE siswa SET
        nama='$_POST[nama]',
        kelas='$_POST[kelas]',
        alamat='$_POST[alamat]'
        WHERE id='$id'
    ");
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Siswa</h2>
    <form method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $d['nama']; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Kelas</label>
            <input type="text" name="kelas" value="<?= $d['kelas']; ?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control"><?= $d['alamat']; ?></textarea>
        </div>
        <button type="submit" name="update" class="btn btn-primary">Update</button>
    </form>
</div>
</body>
</html>
