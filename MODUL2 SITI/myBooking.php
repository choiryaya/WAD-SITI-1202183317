<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"> </script>
    </head>
    <body>
    <?php
    $name = $_POST['name'];
    $check = $_POST['date'];
    $duration = $_POST['duration'];
    $date = $_POST['date'];
    $phone= $_POST['phone'];
    $service = $_POST['service'];
    $room = $_POST['room'];
        if($room=='standard'){
            $sum = 90*$duration;
        }elseif($room=='superior'){
            $sum = 150* $duration;
        }else{
            $sum = 200*$duration;
        }

    $phone = $_POST['phone'];

?>
<table class="table">
        <tr>
            <th>Booking Number</th>
            <th>Name</th>
            <th>Check-in</th>
            <th>Check-out</th>
            <th>Room Type</th>
            <th>Phone Number</th>
            <th>Service</th>
            <th>Total Price</th>
        </tr>
        <tr>
        <td><?php
        echo rand();?></td>
        <td><?php echo $name;?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo date('Y-m-d', strtotime($date . ' + ' . $duration . ' days'));; ?>
        </td>
        <td><?php echo $room; ?></td>
        <td><?php echo $handphone; ?></td>
        <td><?php

        $a = $service=="roomService" && $service=="breakfast";
        if($service=="roomService"){
            $sum= $sum+20; 
        }elseif($service=="breakfast"){
            $sum= $sum+20; 
        }elseif($a){
            $sum= $sum+40; 
        }
        else {
        
           echo "no service";
        }

       echo $service;
        ?></td>
        <td><?php
            echo "$",$sum;
        ?></td>
        </tr>
</table>
</html>