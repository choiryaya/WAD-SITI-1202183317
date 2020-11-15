<?php
include('../config.php');

$id = $_POST['id'];
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

if ($gambar) {
    if (!in_array($ext, $ekstensi)) {
        header("location:home.php?alert=gagal_ekstensi");
    } else {

        if ($ukuran < 1044070) {
            $gambar = $rand . '_' . $gambar;
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/' . $gambar);
            $query = "UPDATE event_table SET 
            name = '$name',
            deskripsi = '$deskripsi',
            gambar= '$gambar',
            kategori = '$kategori',
            tanggal = '$tanggal',
            mulai = '$mulai',
            berakhir = '$berakhir',
            tempat = '$tempat',
            harga = '$harga',
            benefit = '$benefit'
            WHERE id = $id";

            $update = mysqli_query($conn, $query);
            header("location:../detail-event.php?id=$id");
        } else {
            header("location:home.php?alert=gagak_ukuran");
        }
    }
} else {
    $query = "UPDATE event_table SET 
    name = '$name',
    deskripsi = '$deskripsi',
    gambar= '$gambar',
    kategori = '$kategori',
    tanggal = '$tanggal',
    mulai = '$mulai',
    berakhir = '$berakhir',
    tempat = '$tempat',
    harga = '$harga',
    benefit = '$benefit'
    WHERE id = $id";

    $update = mysqli_query($conn, $query);
    header("location:../detail-event.php?id=$id");
}
