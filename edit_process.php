<?php 

include "database_conn.php";

if (count($_POST) > 0) {
    // ambil id dari customer sebagai penanda 
    $id_barang = $_POST["id_barang"]; 
    $nama_barang = $_POST["namabarang"]; 
    $jumlah_barang = $_POST["jumlahbarang"];
    $harga = $_POST["harga"]; 

    $query =
        "UPDATE furniture set id_barang='" . 
        $id_barang . 
        "', nama_barang ='" . 
        $nama_barang . 
        "', jumlah_barang='" . 
        $jumlah_barang . 
        "', harga='" . 
        $harga . 
        "' WHERE id_barang='" . 
        $id_barang . 
        "'";

    if (mysqli_query($db_connect, $query)) {
        $message = 2;
    } else {
        $message = 4;
    }
}

header("Location:tambah.php?message=" . $message . "");

?>