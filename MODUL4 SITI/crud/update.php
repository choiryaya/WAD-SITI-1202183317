<?php
session_start();

$session_email    = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;
if ($session_email == NULL || empty($session_email) )
{
    session_destroy();
    header('Location:login.php?status=Silahkan Login');
}

include "config.php";

$id = $_SESSION['id'];
$nama= $_POST['nama'];
$no_hp= $_POST['no_hp'];
$password = $_POST['password'];
$passwords = $_POST["passwords"];
//echo var_dump($id, $nama, $no_hp);
$cookie_name = 'warna';
$cookie_value = $_POST['warna'];
setcookie($cookie_name, $cookie_value);

if (isset($_POST['update'])) {
    if ($nama  != ""  && $no_hp != "" && $password != "")
        mysqli_query($conn, "UPDATE user SET nama ='$nama', no_hp ='$no_hp', password='$password' WHERE id = '$id'");

    $_SESSION['nama'] = $nama;



    header('Location: ../profile.php?msg=Berhasil Update');
}

?>

