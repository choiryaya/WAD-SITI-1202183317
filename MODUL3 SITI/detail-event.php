<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"> </script>

    <?php
    include('config.php');
    $id = $_GET["id"];
    $query = "SELECT * FROM event_table WHERE id =$id";
    $select = mysqli_query($conn, $query);
    $event = $select->fetch_assoc();
    ?>

</head>

<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary justify-content-between" style="color:white">
        <h4>EAD Events</h4>
        <ul class="navbar-nav">
            <li><a class="btn btn-primary" href="home.php">Home</a></li>
            <li class="ml-2"><a class="btn btn-outline-light" href="FormBuatEvent.php">Buat Event</a></li>
        </ul>
    </nav>

    <div class="container" style="width: 95%; ">
        <p style="text-align: center;">Detail Events!</p>
        <div class="col align-self-center" style="padding-bottom: 20px;">
                <div class="card" >
                    <img class="crad-img-top" src="gambar/<?= $event["gambar"] ?>">
                    <div class="card-body">
                        <h4><?= $event["name"] ?></h4>
                        <p class="font-weight-bold">Deskripsi</p>
                        <p><?= $event["deskripsi"] ?></p>

                        <div class="row">
                            <div class="col col-6">
                                <p class="font-weight-bold">Informasi Event</p>
                                <p><?= $event["tanggal"] ?></p>
                                <p><?= $event["tempat"] ?></p>
                                <p><?= $event["mulai"] ?></p>
                                <p><?= $event["berakhir"] ?></p>
                                
                                <p><strong>Kategori: <?= $event["kategori"] ?></strong></p>
                                <p class="font-weight-bold">HTM Rp.<?= $event["harga"] ?></p>
                            </div>
                            <div class="col col-6">
                                <p class="font-weight-bold">Benefit</p>
                                <ul>
                                    <li><?= $event["benefit"] ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalEdit">Edit</button>
                            <a href="crud/deleteEvent.php?id=<?= $event["id"] ?>">
                                <button class="btn btn-danger">Delete</button>
                            </a>
                        </div>

                
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form action="crud/updateEvent.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modaledit"> Edit Content Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="id" value="<?= $event['id'] ?>" hidden>
                        <h4> Buat Events</h4>

                        <div class="row">

                            <div class="col col-6">
                                <div class="card h-100">
                                    <div style="height: 24px; border-radius: 4px 4px 0 0" class="bg-danger w-100"></div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" id="name" value="<?= $event["name"] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="deskripsi"><?= $event["deskripsi"] ?></textarea>
                                        </div>

                                        <label for="gambar">Upload Gambar</label>
                                        <div class="custom-file mb-3">
                                            <input name="gambar" type="file" class="custom-file-input" id="gambar">
                                            <label class="custom-file-label" for="gambar">upload</label>
                                        </div>
                                        <label for="kategori">Kategori</label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="kategori" id="kategori" class="form-check-input" value="online" <?= $event["kategori"] == "online" ?  "checked" : "" ?>>
                                                <label for="online" class="form-check-lable">Online</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" name="kategori" id="kategori" class="form-check-input" value="offline" <?= $event["kategori"] == "offline" ?  "checked" : "" ?>>
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
                                            <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= $event["name"] ?>">
                                        </div>

                                        <div>
                                            <div class="d-flex mb-3">
                                                <div class="w-100 pr-1">
                                                    <label for="mulai">Jam Mulai</label>
                                                    <select name="mulai" id="mulai" class="form-control" value="<?= substr($event["mulai"], 0, 5) ?>">
                                                        <?php
                                                        $time = array("00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00", "07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00", "21:00", "22:00", "23:00");
                                                        foreach ($time as $t) {
                                                            $selected = substr($event["mulai"], 0, 5) == $t ? "selected" : "";
                                                            echo "<option value='$t' $selected>$t</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div class="w-100 pr-1">
                                                    <label for="berakhir">Jam Berakhir</label>
                                                    <select name="berakhir" id="berakhir" class="form-control" value="<?= substr($event["berakhir"], 0, 5) ?>">
                                                        <?php
                                                        foreach ($time as $t) {
                                                            $selected = substr($event["berakhir"], 0, 5) == $t ? "selected" : "";
                                                            echo "<option value='$t' $selected>$t</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tempat">Tempat</label>
                                            <input type="text" class="form-control" name="tempat" id="tempat" value="<?= $event["tempat"] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="text" class="form-control" name="harga" id="harga" value="<?= $event["harga"] ?>">
                                        </div>
                                        <label for="benefit">Benefit</label>
                                        <div class="control">
                                            <?php
                                            $benefits = explode(",", $event["benefit"]);
                                            $benefit_list = array("snack", "souvenir", "sertifikat");

                                            foreach ($benefit_list as $benefit) {
                                            ?>
                                                <input type="checkbox" name="benefit[]" id="<?= $benefit ?>" value="<?= $benefit ?>" <?= in_array($benefit, $benefits) ?  "checked" : "" ?>>
                                                <label for="<?= $benefit ?>"><?= $benefit ?></label>

                                            <?php } ?>


                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary float-right">Save Change</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>