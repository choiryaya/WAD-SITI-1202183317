<?php
session_start();
require 'crud/config.php';
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;

    $sesi_id = $_SESSION['id'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$sesi_id'");
    $user_data = mysqli_fetch_assoc($result);
    echo var_dump($result);
    $nama = $user_data['nama'];
}


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light justify-content-between" style="color:white">
        <h4 style="color:slategray">WAD Beauty</h4>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="">
                    <img src="gambar/cart.png" width="20" height="20" alt="no img" class="mr-3" style="margin-top:10px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#" style="color:slategray">Selamat Datang,</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:dodgerblue"><?php echo $_SESSION['nama']; ?></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <?php if(isset($_SESSION['message'])){?>
    <div class="bg-white pb-1">

        <div class="col-12 alert alert-warning" style="border-radius:0px">
            <?= $_SESSION['message']; ?>
        </div>
    </div>
    <?php unset($_SESSION['message']); ?>
    <?php } ?>

    <?php if(isset($_GET['message']) and $_GET['message']=="deleted"){ 
	?>
    <div class="bg-white pb-1">
        <div class="col-12 alert alert-warning" style="border-radius:0px">
            Data Berhasil dihapus dari keranjang!
        </div>
    </div>
    <?php } ?>

    <div class="container p-5">
        <div class="p-2">
            <?php 
    $user_id = $_SESSION['id'];
    $show = mysqli_query($conn, "SELECT * FROM cart WHERE user_id = '$user_id'");

    $total_harga = mysqli_query($conn, "SELECT sum(harga) AS harga FROM cart where user_id = '$user_id'");
echo "
        <table class='table table-hover table-striped' width=100% >
          <tr>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>";
                 $no=1;
                while ($tampilkan=mysqli_fetch_array($show)){
                    $nama_barang = $tampilkan['nama_barang'];
                    $harga = $tampilkan['harga'];
                    $id = $tampilkan['id'];
                echo "<tr><td>$no</td>
                        <td>$nama_barang</td>
                        <td>Rp ".number_format($harga)."</td>
                        <td>
                            <form name='frmdelete$id' action='crud/delete.php' method='post' >
                                <input type='hidden' value='$id' name='id_barang'>
                                <input type='submit' name='cmdHapus' class='btn btn-danger' value='Hapus'></td>
                            </form>
                        </tr>";
                $no++;
                }
                while ($showw=mysqli_fetch_array($total_harga)) {
                echo "<tr><th>Total : </th>
            <td></td>
            <td>Rp ".number_format($showw['harga'])."</td>
            <td></td>
          </tr>
        </table>";
                }
                    
            ?>

        </div>
        <div class="p-5 text-center">
            <p>©2020 Copyright : <a href="index.php" style="color:royalblue">WAD Beauty</a></p>


        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>

</html>