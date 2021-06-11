<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="beli.css">
</head>

<body>
    <?php
    include "koneksi.php";
    $name  = $_GET['name'];
    $show  = mysqli_query($koneksi, "SELECT * FROM tb_pembelian WHERE id='$name' ");
    if (mysqli_num_rows($show) == 0) {
        echo '<script>window.history.back()</script>';
    } else {
        $d = mysqli_fetch_assoc($show);
    }
    ?>
    <div class="container-sm" style="width: 450px;margin-top:100px;">
        <form method="POST" action="simpan-pesanan.php">
            <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
            <label for="judul">Judul film : </label>
            <select required name="judul" id="judul">
                <option value="">Judul Film</option>
                <option value="DEAR IMAMKU" <?php if ($d['judul'] == 'DEAR IMAMKU') {
                                                echo 'selected';
                                            } ?>>DEAR IMAMKU</option>
                <option value="TERIMA KASIH EMAK TERIMA KASIH ABAH" <?php if ($d['judul'] == 'TERIMA KASIH EMAK TERIMA KASIH ABAH') {
                                                                        echo 'selected';
                                                                    } ?>>TERIMA KASIH EMAK TERIMA KASIH ABAH</option>
                <option value="TARIAN LENGGER MAUT" <?php if ($d['judul'] == 'TARIAN LENGGER MAUT') {
                                                        echo 'selected';
                                                    } ?>>TARIAN LENGGER MAUT</option>
                <option value="WRATH OF MAN" <?php if ($d['judul'] == 'WRATH OF MAN') {
                                                    echo 'selected';
                                                } ?>>WRATH OF MAN</option>
                <option value="SPIRAL: FROM THE BOOK OF SAW" <?php if ($d['judul'] == 'SPIRAL: FROM THE BOOK OF SAW') {
                                                                    echo 'selected';
                                                                } ?>>SPIRAL: FROM THE BOOK OF SAW</option>
                <option value="MORTAL KOMBAT" <?php if ($d['judul'] == 'MORTAL KOMBAT') {
                                                    echo 'selected';
                                                } ?>>MORTAL KOMBAT</option>
                <option value="IP MAN: KUNGFU MASTER" <?php if ($d['judul'] == 'IP MAN: KUNGFU MASTER') {
                                                            echo 'selected';
                                                        } ?>>IP MAN: KUNGFU MASTER</option>
                <option value="THE UNHOLY" <?php if ($d['judul'] == 'THE UNHOLY') {
                                                echo 'selected';
                                            } ?>>THE UNHOLY</option>
            </select><br>
            <label for="bioskop">Bioskop : </label>
            <select required name="bioskop" id="bioskop">
                <option value="">Bioskop</option>
                <option value="Mall Centre Point Medan" <?php if ($d['bioskop'] == 'Mall Centre Point Medan') {
                                                            echo 'selected';
                                                        } ?>>Mall Centre Point Medan</option>
                <option value="Manhattan Times Square" <?php if ($d['bioskop'] == 'Manhattan Times Square') {
                                                            echo 'selected';
                                                        } ?>>Manhattan Times Square</option>
                <option value="Thamrin Plaza Medan" <?php if ($d['bioskop'] == 'Thamrin Plaza Medan') {
                                                        echo 'selected';
                                                    } ?>>Thamrin Plaza Medan</option>
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
                <option value="12:25" <?php if ($d['pukul'] == '12:25') {
                                            echo 'selected';
                                        } ?>>12:25</option>
                <option value="14:45" <?php if ($d['pukul'] == '14:45') {
                                            echo 'selected';
                                        } ?>>14:45</option>
                <option value="17:15" <?php if ($d['pukul'] == '17:15') {
                                            echo 'selected';
                                        } ?>>17:15</option>
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
            <button type="submit" name="submit" id="tombolbeli" style="margin-left:28%;width: 80px;background-color: rgb(65, 33, 239);color: white;">Simpan</button>
        </form>
    </div><br>
    <script src="pembelian.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>