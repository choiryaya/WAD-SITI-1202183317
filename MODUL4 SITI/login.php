<?php
session_start();
require 'crud/config.php';
$alert = "";
//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result=mysqli_query($conn, "SELECT email FROM user WHERE id = $id");
    $row= mysqli_fetch_assoc($result);
    if($key=== hash ('sha256', $row['email'])){
        $_SESSION['login']= true;
    }
}
if (isset($_SESSION["login"])) {
    header("Location: index.php");
}


if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    //cek username
    if (mysqli_num_rows($result) === 1) {
        //cek password

        $row = mysqli_fetch_array($result);
        if (password_verify($password, $row["password"])) {
            //set session
            $_SESSION["login"] = true;
            //cek remember me
            if (isset($_POST['remember'])) {
                
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['email']), time()+60);
            }
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $email;
            $_SESSION['no_hp'] = $row['no_hp'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['login'] = TRUE;
            $alert = "Berhasil login!";
            header("Location: index.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
</head>

<body style="background-color:mediumaquamarine">
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
    <?php if ($alert) : ?>
        <div class="alert alert-success" role="alert">
            <?= $alert ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row" style="padding-bottom: 45px; padding-top:40px;">
            <div class="col col-6">
                <div class="card" style="width: 25rem; padding: 2rem; margin-left:23rem; margin-top:3rem">
                    <div class="card-body">
                        <h5 style="text-align: center;">Login</h5>
                        <hr>
                        <form action="" method="post" enctype="multipart/form-data">
                            <form>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Buat Kata Sandi">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember me!</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                                    <p style="text-align: center;">Belum punya akun? <a href="register.php" style="color:dodgerblue;">Registrasi</a></p>
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