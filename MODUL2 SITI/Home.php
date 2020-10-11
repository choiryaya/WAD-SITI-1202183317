<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
</head>

<body>
    <ul class="nav justify-content-center" style="background-color:darkturquoise;">
        <li class="nav-item">
            <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Booking.php">Booking</a>
        </li>
    </ul>
    <div class="container">
        <h4 style="text-align: center; color:dodgerblue;">EAD HOTEL</h4>
        <h5 style="text-align: center; color:dodgerblue;">Welcome To 5 Star Hotel</h5>
        <div class="card-deck">
            <div class="card">
                <img src="standard.jpg" class="card-img-top" alt="standard" style="height:30%;" name="img">
                <div class="card-body" style="text-align:center;">
                    <h5 class="card-title" style="text-align: center;">Standard</h5>
                    <h6 class="card-title" style="text-align: center; color:dodgerblue;">$90/Day</h6>
                    <ul class="list-group list-group-flush">
                    <div class="card-header"> Facilities </div>
                        <li class="list-group-item">1 Single Bed</li>
                        <li class="list-group-item">1 Bathroom</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                <form action="Booking.php" method="get">
                <a href="Booking.php?room=standard" class="btn btn-primary">Book Now</a>
            </form>
                </div>
            </div>
            <div class="card" >
                <img src="superior.jpg" class="card-img-top" alt="superior" style="height:30%" name="img">
                <div class="card-body" style="text-align:center;">
                    <h5 class="card-title" style="text-align: center;">Superior</h5>
                    <h6 class="card-title" style="text-align: center; color:dodgerblue;">$150/Day</h6>
                    <ul class="list-group list-group-flush">
                    <div class="card-header"> Facilities </div>
                        <li class="list-group-item">1 Double Bed</li>
                        <li class="list-group-item">1 Bathroom with hot water</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                <form action="Booking.php" method="get">
                <a href="Booking.php?room=superior" class="btn btn-primary">Book Now</a>
            </form>
                </div>
            </div>
            <div class="card">
                <img src="luxury.jpg" class="card-img-top" alt="luxury" name="img" style="height:30%">
                <div class="card-body" style="text-align:center;">
                    <h5 class="card-title" style="text-align: center;">Luxury</h5>
                    <h6 class="card-title" style="text-align: center; color:dodgerblue;">$200/Day</h6>
                    <ul class="list-group list-group-flush">
                    <div class="card-header"> Facilities </div>
                        <li class="list-group-item">2 Single Bed</li>
                        <li class="list-group-item">2 Bathroom with hot water</li>
                        <li class="list-group-item">1 Kitchen</li>
                        <li class="list-group-item">1 Television and Wi-Fi</li>
                        <li class="list-group-item">1 Workroom</li>
                    </ul>
                </div>
                <div class="card-footer text-center">
                <form action="Booking.php" method="get">
                <a href="Booking.php?room=luxury" class="btn btn-primary">Book Now</a>
            </form>
                </div>
            </div>
        </div>

    </div>
</body>

</html>