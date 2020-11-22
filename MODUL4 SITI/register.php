<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
</head>

<body style="background-color:mediumaquamarine">
<?php
   require 'crud/config.php';
   if(isset($_POST['register'])){
       if( register($_POST) > 0){
        echo "<script>alert('Data berhasil ditambah.');window.location='login.php';</script>";
       }else{
           echo mysqli_error($conn);
       }
   }
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light justify-content-between" style="color:white">
        <h4 style="color:slategray">WAD Beauty</h4>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="login.php" style="color:slategray">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php" style="color:slategray">Register</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row" style="padding-bottom: 45px; padding-top:40px;">
            <div class="col col-6">
                <div class="card" style="width: 25rem; margin-left:23rem; margin-top:1rem">
                    <div class="card-body">
                        <h5 style="text-align: center;">Registrasi</h5>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                        <form>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No. Handphone</label>
                                <input type="no_hp" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor Handphone">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Buat Kata Sandi">
                            </div>
                            <div class="form-group">
                                <label for="passwords">Password</label>
                                <input type="password" class="form-control" id="passwords" name="passwords" placeholder="Konfirmasi Kata Sandi">
                            </div>
                            <button type="submit" class="btn btn-primary" name="register">Daftar</button>
                            <p style="text-align: center;">Sudah punya akun? <a href="login.php" style="color: dodgerblue;">Login</a></p>
                        </form>
                        </form>
                    </div>
                </div>
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