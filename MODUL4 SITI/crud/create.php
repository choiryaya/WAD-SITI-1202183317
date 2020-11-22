<?php
session_start();
include 'config.php';


if (isset($_POST['add'])) {

 $id = $_SESSION['id'];
    $nama_barang = $_GET['nama'];
    $harga = $_GET['harga'];

    $query = mysqli_query($conn, "INSERT INTO cart (id, user_id, nama_barang, harga) VALUES (NULL, '$id', '$nama_barang','$harga')");
    
    if(!$query){
        header( "refresh:0;url=../index.php?message=notadded" );
                                                    /*die ("Query gagal dijalankan: ".mysqli_errno($conn).
                                                        " - ".mysqli_error($conn));*/
                                                } else {
                                                    header( "refresh:0;url=../index.php?message=added" );
                                                exit();
                                                }
}