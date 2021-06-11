<?php
include('koneksi.php');


if (isset($_POST["submit"])) {
    $id             = $_POST["id"];
    $judul          = $_POST["judul"];
    $bioskop        = $_POST["bioskop"];
    $tanggal        = $_POST["tanggal"];
    $pukul          = $_POST["pukul"];
    $kursi          = $_POST["kursi"];
    $harga_tiket    = $_POST["harga_tiket"];
    $jumlah_tiket   = $_POST["jumlah_kursi"];
    $total          = $harga_tiket * $jumlah_tiket;


    $update_pesan = mysqli_query($koneksi, "UPDATE tb_pembelian SET
    judul           = '$judul',
    bioskop         = '$bioskop',
    tanggal         = '$tanggal',
    kursi           = '$kursi',
    jumlah_tiket    = '$jumlah_tiket',
    harga           = '$total'
    WHERE id = '$id'")
        or die(mysqli_error());
    if ($update_pesan) {
        echo "<h2>data berhasil di update</h2>";
        echo "<script>window.location = 'konfirmasi.php'</script>";
    }
}
