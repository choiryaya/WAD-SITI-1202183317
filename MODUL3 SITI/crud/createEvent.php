<?php
include('../config.php');

$name = $_POST['name'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori'];
$tanggal = $_POST['tanggal'];
$mulai = $_POST['mulai'];
$berakhir = $_POST['berakhir'];
$tempat = $_POST['tempat'];
$harga = $_POST['harga'];
$benefit = isset($_POST['benefit']) ? implode(',', $_POST['benefit']) : "";

$rand = rand();
$ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
$gambar = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($gambar, PATHINFO_EXTENSION);

if (!in_array($ext, $ekstensi)) {
    header("location:home.php?alert=gagal_ekstensi");
} else {
    if ($ukuran < 1044070) {
        $gambar = $rand . '_' . $gambar;
        move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/' . $gambar);
        $query = "INSERT into event_table(name, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit)
            values ('$name', '$deskripsi', '$gambar', '$kategori', '$tanggal', '$mulai', '$berakhir', '$tempat', '$harga', '$benefit')";
        $insert = mysqli_query($conn, $query);
        header("location:../home.php");
    } else {
        header("location:home.php?alert=gagak_ukuran");
    }
}
