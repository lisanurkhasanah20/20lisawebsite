<?php

include "database_conn.php"; 
$id_barang = $_GET["id_barang"];

$query = "DELETE FROM furniture WHERE id_barang='" . $id_barang . "'";

if(mysqli_query($db_connect, $query)){
    $message = 3; 
} else {
    $message = 4;
}

header("Location:tambah.php?message=" . $message . "");

?>