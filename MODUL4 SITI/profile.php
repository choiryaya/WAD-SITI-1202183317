<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
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
                <a href="cart.php">
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

    <div class="container" style="margin-top: 3rem ; width:70%">
        <h2 style="text-align: center;">Profile</h2>
        <form action="crud/update.php" method="POST" enctype="multipart/form-data">
        <form>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $_SESSION['nama']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-10">
                    <input type="no_hp" class="form-control" id="no_hp" name="no_hp" value="<?php echo $_SESSION['no_hp']; ?>">
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="passwords" class="col-sm-2 col-form-label">Password Confirm</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="passwords">
                </div>
            </div>
            <div class="form-group row">
                <label for="warna" class="col-sm-2 col-form-label">Warna Navbar</label>
                <div class="col-sm-10">
                <select class="btn btn-outline" id="warna" name="warna">
                                    <option value="putih">Putih</option>
                                    <option value="dark">Dark</option>
                                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="update">Submit</button>


            <!-- <a href="index.php">
            <button type="button" class="btn btn-light mb-2" style="width:100%">Cancel</button>
            </a> -->
            <input type="button" class="btn btn-block" value="cancel"
                            onClick="document.location.href='index.php'">
        </form>
        </form>
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