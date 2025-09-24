<?php
$koneksi = mysqli_connect("localhost", "u934050785_utama", "16031994Giri", "u934050785_utama");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}