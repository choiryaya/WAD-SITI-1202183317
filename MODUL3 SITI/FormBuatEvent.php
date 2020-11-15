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
    <h4> Buat Events</h4>
    <form action="crud/createEvent.php" method="POST" enctype="multipart/form-data">
      
    <div class="row" style="padding-bottom: 45px; padding-top:40px;">

        <div class="col col-6">
          <div class="card h-100">
            <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-danger w-100"></div>
            <div class="card-body">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>

              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
              </div>

              <label for="gambar">Upload Gambar</label>
              <div class="custom-file mb-3">
                <input name="gambar" type="file" class="custom-file-input" id="gambar">
                <label class="custom-file-label" for="gambar">upload</label>
              </div>
              <label for="kategori">Kategori</label>
              <div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="kategori" id="kategori" class="form-check-input" value="online">
                  <label for="online" class="form-check-lable">Online</label>
                </div>
                <div class="form-check form-check-inline">
                  <input type="radio" name="kategori" id="kategori" class="form-check-input" value="offline">
                  <label for="offline" class="form-check-lable">Offline</label>
                </div>
              </div>

            </div>
          </div>
        </div>


        <div class="col col-6">
          <div class="card h-100">
            <div style="height: 24px" class="bg-primary w-100"></div>
            <div class="card-body">
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal">
              </div>

              <div>
                <div class="d-flex">
                  <div class="w-100 pr-1">
                    <label for="mulai">Jam Mulai</label>
                    <select name="mulai" id="mulai" class="form-control">
                      <?php
                      $time = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00");
                      foreach ($time as $t) {
                        echo "<option value='$t'>$t</option>";
                      }
                      ?>
                    </select>
                  </div>

                  <div class="w-100 pr-1">
                    <label for="berakhir">Jam Berakhir</label>
                    <select name="berakhir" id="berakhir" class="form-control">
                      <?php
                      foreach ($time as $t) {
                        echo "<option value='$t'>$t</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="tempat">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="tempat">
              </div>

              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" name="harga" id="harga">
              </div>
              <label for="benefit">Benefit</label>
              <div class="control">
                <input type="checkbox" name="benefit[]" id="snack" value="snack">
                <label for="snacks">Snack</label>

                <input type="checkbox" name="benefit[]" id="sertifikat" value="sertifikat">
                <label for="sertifikat">Sertifikat</label>

                <input type="checkbox" name="benefit[]" id="souvenir" value="souvenir">
                <label for="souvenir">Souvenir</label>
              </div>

              <a class="btn btn-danger float-right ml-1" href="home.php" >Cancel</a>
              <button type="submit" class="btn btn-primary ml-1 float-right" style="width: 20%;">Submit</button>
            </div>
          </div>
        </div>

      </div>
    </form>
  </div>
  </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>