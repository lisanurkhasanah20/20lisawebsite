<?php

// Database_conn.php
$hostname = "localhost";
$database_username = "root";
$database_password = "";
$datebase_name = "keranjang";

// Koneksi ke database
$db_connect = mysqli_connect($hostname, $database_username, $database_password, $datebase_name);
if (!$db_connect) {
    die("Tidak dapat terhubung ke database: " . mysqli_connect_error());
}
?>