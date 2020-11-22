<?php

session_start();
error_reporting(0);

$session_email    = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;
if ($session_email == NULL || empty($session_email) )
{
    session_destroy();
    header('Location:../login.php?status=Silahkan Login');
}

include "config.php";

if(isset($_POST['id_barang'])){

    $delete="DELETE FROM cart WHERE id = '$_POST[id_barang]'";
    mysqli_query($conn, $delete);
    header( "refresh:0;url=../cart.php?message=deleted" );
    exit();
    

}
?>