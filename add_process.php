<?php 

// add_process.php
include "database_conn.php";

if(count($_POST) > 0) {
    $idbarang = $_POST["idbarang"];
    $namabarang = $_POST["namabarang"]; 
    $jumlahbarang = $_POST["jumlahbarang"]; 
    $hargabarang = $_POST["harga"]; 

    $query = "INSERT INTO furniture (id_barang, nama_barang, harga, jumlah_barang) VALUES ('$idbarang', '$namabarang', '$jumlahbarang', '$hargabarang')";

    if(mysqli_query($db_connect, $query)){
        $message = 1; 
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");

?>