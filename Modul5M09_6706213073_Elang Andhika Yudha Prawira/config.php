<?php
    $server    = "localhost";
    $username   = "root";
    $pass       = "";
    $dbname     = "modul5";

    $koneksi = mysqli_connect($server, $username, $pass, $dbname);
    if(!$koneksi) {
        die("Gagal terkoneksi: ".mysqli_connect_error());
    }
?>