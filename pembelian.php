<?php
include "koneksi.php";
function generate_code($len = 4)
{
    $chars = "0123456789";
    $password = substr(str_shuffle($chars), 0, $len);
    return $password;
}
//Menerima Inputan
if (isset($_POST["submit"])) {
    //var_dump($_POST);
    $judul          = $_POST["judul"];
    $bioskop        = $_POST["bioskop"];
    $tanggal        = $_POST["tanggal"];
    $pukul          = $_POST["pukul"];
    $kursi          = $_POST["kursi"];
    $harga_tiket    = $_POST["harga_tiket"];
    $jumlah_tiket   = $_POST["jumlah_kursi"];
    $total          = $harga_tiket * $jumlah_tiket;
    $kode = generate_code();

    //query untuk input kedalam tabel pembelian
    $query = "INSERT INTO tb_pembelian VALUES('','$judul', '$bioskop', '$tanggal', '$pukul', '$kursi', '$jumlah_tiket', '$total','$kode')";

    //menjalankan query
    mysqli_query($koneksi, $query);
    header("location:konfirmasi.php");
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="beli.css">
    < </head>

<body>
    <div class="container-md" style="background-color: #fff5f5;">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3741; margin: 0px -11px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="font-weight: bold; margin-left: 45%;">Cinema 21</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <br>
        <div class="container-sm" style="width: 450px;">
            <form method="POST" action="">
                <label for="judul">Judul film : </label>
                <select required name="judul" id="judul">
                    <option value="">Judul Film</option>
                    <option value="DEAR IMAMKU">DEAR IMAMKU</option>
                    <option value="TERIMA KASIH EMAK TERIMA KASIH ABAH">TERIMA KASIH EMAK TERIMA KASIH ABAH</option>
                    <option value="TARIAN LENGGER MAUT">TARIAN LENGGER MAUT</option>
                    <option value="WRATH OF MAN">WRATH OF MAN</option>
                    <option value="SPIRAL: FROM THE BOOK OF SAW">SPIRAL: FROM THE BOOK OF SAW</option>
                    <option value="MORTAL KOMBAT">MORTAL KOMBAT</option>
                    <option value="IP MAN: KUNGFU MASTER">IP MAN: KUNGFU MASTER</option>
                    <option value="THE UNHOLY">THE UNHOLY</option>
                </select><br>
                <label for="bioskop">Bioskop : </label>
                <select required name="bioskop" id="bioskop">
                    <option value="">Bioskop</option>
                    <option value="Mall Centre Point Medan">Mall Centre Point Medan</option>
                    <option value="Manhattan Times Square">Manhattan Times Square</option>
                    <option value="Thamrin Plaza Medan">Thamrin Plaza Medan</option>
                </select><br>
                <label for="tanggal">Pilih Tanggal : </label>
                <select required name="tanggal" id="tanggal" onchange="harga()">
                    <option value="">Pilih Tanggal</option>
                    <option value="24 Mei">24 Mei</option>
                    <option value="25 Mei">25 Mei</option>
                    <option value="26 Mei">26 Mei</option>
                    <option value="27 Mei">27 Mei</option>
                    <option value="28 Mei">28 Mei</option>
                    <option value="29 Mei">29 Mei</option>
                    <option value="30 Mei">30 Mei</option>
                </select><br>
                <label for="harga">Harga(Rp) : </label>
                <input type="number" readonly id="harga_tiket" name="harga_tiket"><br>
                <label for="pukul">Pilih Jam Tayang : </label>
                <select required name="pukul" id="pukul">
                    <option value="">Pukul</option>
                    <option value="12:25">12:25</option>
                    <option value="14:45">14:45</option>
                    <option value="17:15">17:15</option>
                </select><br>
                <label for="kursi">Kursi : </label>
                <select required name="nomor" id="nomor">
                    <option value="">Pilih Kursi</option>
                    <option value="A1, ">A1</option>
                    <option value="A2, ">A2</option>
                    <option value="A3, ">A3</option>
                    <option value="A4, ">A4</option>
                    <option value="A5, ">A5</option>
                    <option value="B1, ">B1</option>
                    <option value="B2, ">B2</option>
                    <option value="B3, ">B3</option>
                    <option value="B4, ">B4</option>
                    <option value="B5, ">B5</option>
                </select>
                <button type="button" onclick="add();" value="add" style="background-color: rgb(62, 202, 62);">Tambah</button>
                <button type="button" onclick="hapus()" style="background-color: rgb(208, 71, 71);">Hapus</button><br>
                <input type="text" name="kursi" id="tampil" style="margin-left: 45px;">
                <div class="container-sm" style="width: 300px;margin-top: -20px;">
                    <div class="tombol_kursi">
                        <button type="button" disabled>A1</button>
                        <button type="button" disabled>A2</button>
                        <button type="button" disabled>A3</button>
                        <button type="button" disabled>A4</button>
                        <button type="button" disabled>A5</button><br>
                        <button type="button" disabled>B1</button>
                        <button type="button" disabled>B2</button>
                        <button type="button" disabled>B3</button>
                        <button type="button" disabled>B4</button>
                        <button type="button" disabled>B5</button><br>
                    </div>
                </div>
                <label for="kursi">Jumlah Tiket : </label>
                <input type="number" readonly id="jumlah_kursi" name="jumlah_kursi" style="font-weight:bold;">
                <br><label for="total">Total Harga(Rp) : </label>
                <input type="text" disabled name="total_harga" id="total_harga"><br>
                <button type="submit" name="submit" id="tombolbeli" style="margin-left:28%;width: 80px;background-color: rgb(65, 33, 239);color: white;">Pesan</button>
            </form>
        </div><br>


        <footer>
            <p>Copyright &copy; 2021 Daniel Manurung</p>
        </footer>
    </div>
    <script src="pembelian.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>