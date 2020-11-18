<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"> </script>



</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between" style="color:white">
    <h4>EAD Events</h4>
    <ul class="navbar-nav">
      <li><a class="btn btn-primary" href="home.php">Home</a></li>
      <li class="ml-2"><a class="btn btn-outline-light" href="FormBuatEvent.php">Buat Event</a></li>
    </ul>
  </nav>
  <div class="container">
    <h4 style="padding-top: 20px;"> WELCOME TO EAD EVENTS</h4>
    <div class="row" style="padding-bottom: 60px; padding-top:40px;">

      <?php
      include('conn.php');
      $query = "SELECT id, name, kategori, gambar, tanggal, tempat FROM event_table";
      $selects = mysqli_query($conn, $query);
      $empty = true;
      while ($select = mysqli_fetch_assoc($selects)) {

        $empty = false;
      ?>
        <div class="col col-4">
          <div class="card">
            <img class="card-img-top" src="gambar/<?= $select['gambar'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $select['name'] ?></h5>
              <p><?= $select['tanggal'] ?></p>
              <p><?= $select['tempat'] ?></p>
              <p>Kategori: <?= $select['kategori'] ?></p>
            </div>
            <div class="card-footer">
              <a href="detail-event.php?id=<?= $select['id'] ?>">
                <button type="button" class="btn btn-primary float-right" style="width: 25%;">Detail</button>
                
              </a>
            </div>
          </div>
        </div>
      <?php }
      if ($empty) {
        echo "No Events Found";
      }
      ?>
    </div>
  </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>