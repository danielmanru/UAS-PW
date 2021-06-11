<?php
session_start();
include "koneksi.php";
$username = $_SESSION['username'];
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
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' ORDER BY username DESC");
        $data = mysqli_fetch_array($hasil);
        $saldo = mysqli_fetch_array($query);
        ?>
        <form method="POST" action="final.php">
            <input type="hidden" name="id_user" value="<?php echo $saldo['username'] ?>">
            <input type="hidden" name="id_pesanan" value="<?php echo $data['id'] ?>">
            <input type="text" style="text-align: center;width:100%;" value="<?php echo $data['judul'] ?>"><br>
            <input type="text" style="margin-left: 120px;" value="<?php echo $data['bioskop'] ?>"><br>
            <label for="tanggal">Tanggal : </label>
            <input type="text" id="tanggal" value="<?php echo $data['tanggal'] ?>"><br>
            <label for="Pukul">Pukul : </label>
            <input type="text" id="Pukul" value="<?php echo $data['pukul'] ?>"><br>
            <label for="Kursi">Kursi : </label>
            <input type="text" id="Kursi" value="<?php echo $data['kursi'] ?>"><br>
            <label for="jumlah_tiket">Jumlah Tiket : </label>
            <input type="text" id="jumlah_tiket" value="<?php echo $data['jumlah_tiket'] ?>"><br>
            <label for="harga">harga : </label>
            <input type="text" id="harga" value="<?php echo $data['harga'] ?>"><br>
            <label for="saldo">Saldo Anda : </label>
            <input type="text" id="saldo" value="<?php echo $saldo['saldo'] ?>"><br>
            <label for="sisa">Sisa Saldo : </label>
            <input type="text" id="sisa" name="sisa" value="<?php echo $saldo['saldo'] - $data['harga'] ?>"><br>
            <button type="submit" name="submit" style="padding:auto; background-color:green">Beli Tiket</button>
        </form><br>

        <a href="edit.php  ?name=<?php echo $data['id']; ?>" class="btn btn-primary">Ubah Pesanan</a>
        <a href="hapus.php  ?name=<?php echo $data['id']; ?>" class="btn btn-primary">Batalkan Pesanan</a>

    </div>
    <script src="pembelian.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>