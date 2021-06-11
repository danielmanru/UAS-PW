<?php
include('koneksi.php');
$nama = $_POST['id_user'];
$sisa = $_POST['sisa'];
$update_user = mysqli_query($koneksi, "update user set
    saldo    = '$sisa'
    where username = '$nama'")
    or die(mysqli_error());
?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="beli.css">
    <style>
        .btn {
            font-size: 13px;
        }
    </style>

</head>


<body>
    <div class="container-sm" style="width:450px;margin-top:100px;">
        <?php
        include "koneksi.php";
        $hasil = mysqli_query($koneksi, "SELECT * FROM tb_pembelian ORDER BY id DESC LIMIT 1");
        $data = mysqli_fetch_array($hasil);
        ?>
        <form method="POST" action="simpan-pesanan.php">
            <input type="hidden" name="id" value="<?php echo $id_pesan ?>"><br>
            <input type="text" style="text-align: center;width:100%;" value="<?php echo $data['judul'] ?>"><br>
            <input type="text" style="margin-left: 120px;" value="<?php echo $data['bioskop'] ?>"><br>
            <label for="tanggal">Tanggal : </label>
            <input type="text" id="tanggal" value="<?php echo $data['tanggal'] ?>"><br>
            <label for="Pukul">Pukul : </label>
            <input type="text" id="Pukul" value="<?php echo $data['pukul'] ?>"><br>
            <label for="Kursi">Kursi : </label>
            <input type="text" id="Kursi" value="<?php echo $data['kursi'] ?>"><br>
            <label for="kode">Kode Tiket : </label>
            <input type="text" id="kode" name="kode" value="<?php echo $data['kode_tiket'] ?>"><br>
        </form><br>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>