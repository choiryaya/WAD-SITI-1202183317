<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>
</head>

<body>
    <?php
    if (isset($_GET["room"])) {
        if ($_GET["room"] == "standard") {
            $img = "standard.jpg";
        } else if ($_GET["room"] == "superior") {
            $img = "superior.jpg";
        } else if ($_GET["room"] == "luxury") {
            $img = "luxury.jpg";
        }
    } else {
        $img = "standard.jpg";
    }
    ?>
    <ul class="nav justify-content-center" style="background-color:darkturquoise;">
        <li class="nav-item">
            <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Booking.php">Booking</a>
        </li>
    </ul>

    <div class="container">
        <div class="row" style="padding-top: 20px; ">
            <div class="col-md-4 offset-md-1">
                <form action="myBooking.php" method="get">
                    <table style="width:100%">
                        <tr>
                            <td>Name</td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" name="nama">
                            </td>
                        </tr>
                        <tr>
                            <td>Check-In</td>
                        </tr>
                        <tr>
                            <td> <input type="date" class="form-control"  name="date" placeholder="dd/mm/yy"></td>
                        </tr>
                        <tr>
                            <td>Duration</td>
                        </tr>
                        <tr>
                            <td> <input type="text" class="form-control" name="duration"></td>
                        </tr>

                        <tr>
                            <td><small>Day(s)</small></td>
                        </tr>
                        <tr>
                            <td>Room Type</td>
                        </tr>
                        <tr>
                            <td> <select class="form-control" name="room">
                                    <option value="standard">Standard</option>
                                    <option value="superior">Superior</option>
                                    <option value="luxury">Luxury</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Add Service(s)</td>
                        </tr>
                        <tr>
                            <td><small>$20/Service</small></td>
                        </tr>
                        <tr>
                            <td><div class="form-check"><input class="form-check-input" type="checkbox" name="service"  value="roomService">Room Service</div>
                            <div class="form-check"><input class="form-check-input" type="checkbox" name="service"value="breakfast">Breakfast</div></td>
                        </td>
                        </tr>
                        <tr>
                            
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control"name="phone">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td><button type="submit" class="btn btn-primary" style="width: 100%; margin-top:0.4cm">Kirim</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-md-4 offset-md-2">
            <img src="<?=$img?>" alt="room" height="350" width="360">
            </div>
        </div>

    </div>

</body>

</html>