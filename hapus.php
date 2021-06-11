<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="beli.css">
</head>
<?php
if (isset($_GET['name'])) {
    include('koneksi.php');
    $id     = $_GET['name'];
    $cek    = mysqli_query($koneksi, "SELECT id FROM tb_pembelian WHERE id = '$id'") or die(mysqli_error());
    if (mysqli_num_rows($cek) == 0) {
        echo "<script>whindow.history.back()</script>";
    } else {
        $del = mysqli_query($koneksi, "DELETE FROM tb_pembelian WHERE id='$id'");
        if ($del) {
            echo "<h3>Data berhasil di hapus</h3>";
            echo "<script>window.location = 'index.php'</script>";
        } else {
            echo "<h3>Gagal menghapus data</h3>";
            echo "<a href = 'index.php'>Kembali</a>";
        }
    }
} else {
    echo "<script>window.history.back()</script>";
}
?>

<body>
</body>

</html>