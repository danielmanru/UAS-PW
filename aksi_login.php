<?php
    session_start();
    include ('koneksi.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "select * from user where username = '$username' and password = '$password'");
    $cek = mysqli_num_rows($query);

    if ($cek == TRUE){
        $_SESSION['username'] = $username;
        header ("location:index.php");
    }
    else {
        echo "<script>alert('Username atau Password Anda Salah !');window.location='login.php'</script>";
    }
