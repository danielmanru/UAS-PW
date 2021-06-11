<?php
session_start();
include "koneksi.php";
if (!isset($_SESSION['username'])) {
  header("location:login.php");
}
if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="beli.css">
  <script src="pembelian.js"></script>
</head>

<body>
  <div class="container-md">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2c3741; margin: 0px -11px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="tiket.html" style="font-weight: bold;">Cinema 21</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#nowplaying"><img src="Play.png" style="width: 15px; height:15px;margin-bottom: 2px;"> Sedang Tayang </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#upcoming"><img src="upcome.png" style="width: 15px; height:15px;margin-bottom: 2px;"> Akan Tayang </a>
            </li>
          </ul>
          <a class="nav-link active" aria-current="page" style="color:white;" href="aksi_logout.php"> Logout </a>
        </div>
      </div>
    </nav><br>
    <div class="container-sm" style="width: 960px; background-color: #fff5f5; color: black;">
      <h3 id="nowplaying" style="font-weight: bold;">Film-Film yang Sedang Tayang</h3><br>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <a href="pembelian.php">
                <img src="dearimamku.jpg" class="card-img-top" alt="Dear Imamku">
              </a>
              <div class="card-body">
                <p class="card-text" id="judul">DEAR IMAMKU</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="pembelian.php">
                <img src="terimakasihemak.jpg" class="card-img-top" alt="Terima Kasih Amak Abah">
              </a>
              <div class="card-body">
                <p class="card-text" id="judul">TERIMA KASIH EMAK TERIMA KASIH ABAH</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="pembelian.php">
                <img src="tarianlengger.jpg" class="card-img-top" alt="Tarian Lenger">
              </a>
              <div class="card-body">
                <p class="card-text" id="judul">TARIAN LENGGER MAUT</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="pembelian.php">
                <img src="wrathofman.jpg" class="card-img-top" alt="wrathofman">
              </a>
              <div class="card-body">
                <p class="card-text" id="judul">WRATH OF MAN</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="pembelian.php">
                <img src="spiral.jpg" class="card-img-top" alt="spiral">
              </a>
              <div class="card-body">
                <p class="card-text" id="judul">SPIRAL: FROM THE BOOK OF SAW</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="pembelian.php">
                <img src="mortalkombat.jpg" class="card-img-top" alt="mortalkombat">
              </a>
              <div class="card-body">
                <p class="card-text" id="judul">MORTAL KOMBAT</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="pembelian.php">
                <img src="ipman.jpg" class="card-img-top" alt="ipman">
              </a>
              <div class="card-body">
                <p class="card-text">IP MAN: KUNGFU MASTER</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <a href="pembelian.php">
                <img src="theunholy.jpg" class="card-img-top" alt="theunholy">
              </a>
              <div class="card-body">
                <p class="card-text">THE UNHOLY</p>
              </div>
            </div>
          </div>
        </div>
      </div><br>
      <h3 id="upcoming" style="font-weight: bold;">Film-Film yang Akan Tayang</h3><br>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <img src="aquietplace.jpg" class="card-img-top" alt="aquietplace">
              <div class="card-body">
                <p class="card-text" id="judul">A QUIET PLACE PART II</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="cruela.jpg" class="card-img-top" alt="cruela">
              <div class="card-body">
                <p class="card-text" id="judul">CRUELLA</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="ff9.jpg" class="card-img-top" alt="fast9">
              <div class="card-body">
                <p class="card-text" id="judul">FAST & FURIOUS 9</p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <img src="gretel.jpg" class="card-img-top" alt="gretel&hansel">
              <div class="card-body">
                <p class="card-text" id="judul">GRETEL & HANSEL</p>
              </div>
            </div>
          </div>
        </div><br><br>
      </div>
    </div>
    <footer>
      <p>Copyright &copy; 2021 Daniel Manurung</p>
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>