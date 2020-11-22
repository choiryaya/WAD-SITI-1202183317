<?php
session_start();
include "crud/config.php";
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$SESSION_email    = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;
if ($SESSION_email == NULL || empty($SESSION_email)) {
    session_destroy();
    header('Location:login.php?status=Silahkan Login');
}
$SESSION_id = $_SESSION['id'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$SESSION_id'");
$user_data = mysqli_fetch_assoc($result);
//echo var_dump($result);
$nama = $user_data['nama'];
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
                <a href="cart.php">
                    <img src="gambar/cart.png" width="20" height="20" alt="no img" class="mr-3" style="margin-top:10px">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#" style="color:slategray">Selamat Datang,</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:dodgerblue"><?= $_SESSION['nama']; ?></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>

    <?php if (isset($_SESSION['message'])) { ?>
        <div class="bg-white pb-1">

            <div class="alert alert-warning">
                <?= $_SESSION['message']; ?>
            </div>
        </div>
        <?php unset($_SESSION['message']); ?>
    <?php } ?>

    <?php if (isset($_GET['message']) and $_GET['message'] == "added") {
    ?>
        <div class="bg-white pb-1">
            <div class="alert alert-warning">
                Data Berhasil ditambahkan ke keranjang!
            </div>
        </div>
    <?php } ?>

    <?php if (isset($_GET['message']) and $_GET['message'] == "notadded") {
        header("refresh:2;url=index.php");
    ?>
        <div class="bg-white pb-1">
            <div class="alert alert-danger">
                Data gagal ditambahkan ke keranjang!
            </div>
        </div>
    <?php } ?>

    <div class="container" style="margin-top: 3rem;">
        <div class="card mb-3">
            <div class="card text-center" style="background: rgb(120,216,255); background: linear-gradient(90deg, rgba(120,216,255,1) 23%, rgba(251,255,103,1) 100%);">
                <div class="card-body">
                    <form action="crud/create.php?nama=YUJA NIACIN&harga=169000" method="POST">
                        <h4 class="card-title">WAD Beauty</h4>
                        <p class="card-text">Tersedia Skin Care dengan harga murah tapi bukan murahan dan berkualitas</p>
                
                    </div>
            </div>
            <div class="card-group">
                <div class="card">
                    <img src="gambar/yujaa.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">YUJA NIACIN 30 DAYS BLEMISH CARE SERUM</h5>
                        <p class="card-text">Produk terbaru dari somebymi yang memiliki manfaat untuk Whitening + blemish care + Anti-wrinkle, sangat recomended untuk masalah kulit kusam, kulit kering dan bekas jerawat atau FLEK hitam</p>
                        <hr>
                        <p class="class-text" name="harga">Rp169.000</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-block" name="add" type="submit">Tambah Ke Keranjang
                        </button>
                    </div>
    </form>
                </div>
                <div class="card">
                    <img src="gambar/snail.jpg" class="card-img-top" alt="..." height="370">
                    <div class="card-body">
                        <form action="crud/create.php?nama=SOMEBYMI&harga=180000" method="POST">
                            <h5 class="card-title" name="nama_item">SOMEBYMI Snail Truecica Miracle Repair Cream</h5>
                            <p class="card-text">Sebagai pelembap, krim ini mampu memberikan kelembapan yang menyeluruh dan tahan lama bagi kulit, sehingga terasa halus, lembap dan kenyal. Mencerahkan, menghambat penuaan seperti keriput dan garis halus, juga menenangkan kulit yang iritasi, dengan kandungan 420,000ppm Snail Truecica.</p>
                            <hr>
                            <p class="card-text" name="harga">Rp180.000</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-block" name="add" type="submit">Tambah Ke Keranjang
                        </button>
                    </div>
    </form>
                </div>
                <div class="card">
                    <img src="gambar/toner.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <form action="crud/create.php?nama=MIRACLE TONER&harga=108000" method="POST">
                            <h5 class="card-title" name="nama_item">30 DAYS MIRACLE TONER</h5>
                            <p class="card-text">Dengan kandungan AHA, BHA, dan PHA bekerja secara efektif untuk membuat kulit lebih bersih dan lebih bersinar, mengandung 10.000 ppm ekstrak pohon teh alami yang secara efektif meningkatkan elastisitas dan menutrisi kulit Anda tanpa efek iritasi karena tidak mengandung 20 bahan 500 dan pewarna berbahaya.</p>
                            <hr>
                            <p class="card-text" name="harga">Rp108.000</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-block" name="add" type="submit">Tambah Ke Keranjang
                        </button>
                    </div>
    </form>
                </div>
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