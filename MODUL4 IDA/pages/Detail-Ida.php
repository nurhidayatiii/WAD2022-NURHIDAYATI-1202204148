


  <!-- // $id_mobil = "";
  // // pemeriksaan menggunakan fungsi isset()
  // $id_mobil = isset($_POST['id_mobil']) ? $_POST['id_mobil'] : '';
  // // pemeriksaan menggunakan fungsi empty()
  // $id_mobil = !empty($_POST['id_mobil']) ? $_POST['id_mobil'] : '';

//   if(isset($_POST['simpan'])){
//     // var_dump($id_mobil);
//     $id_mobil  =$_POST['simpan'];
//   }
//   else {
//     var_dump($id_mobil);
//     die ("Error. No ID Selected!");    
//   }
//   include "../config/connector.php"; -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="Home-Ida.php" style=" padding-left: 70px; font-weight:500;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="ListCar-Ida.php" style="color: white; padding-left:30px; font-weight:500;">MyCar</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <?php 
        
        include "../config/connector.php";
        $id_mobil = $_POST['id_mobil'];
        $query = mysqli_query($connect, "SELECT * FROM showroom_ida_table WHERE id_mobil = '$id_mobil'") ;
        // $record = mysqli_fetch_assoc($query);                                                                                                                   
 
        while($row = mysqli_fetch_array($query))
        {
            
    ?>



    <div class="mobil" style="margin: 100px 30px 100px 100px;">
      <h3><b></b></h3>
      <p style="text-transform:capitalize;">Detail mobil <?= $row['nama_mobil'] ?></p>
          <div class="row justify-content-left" style="margin-top: 60px;">
            <div class="col-6">
              <img src="../asset/images/<?= $row['foto_mobil']?>" alt="gambar mobil" style="width:450px;height: max-content; border-radius: 10px;">       
            </div>
            <div class="col-5" >
              <div class="form">
                <form action="Edit-Ida.php" method="POST" >
                    <input type="hidden" name="id_mobil" value="<?= $row['id_mobil']?>" /> 
                  <div class="mb-3">
                    <label for="nama_mobil" class="form-label" style="font-size :large;"> <b>Nama Mobil</b></label>
                    <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"aria-describedby="emailHelp" value="<?= $row['nama_mobil'] ?>" readonly>
                    
                  </div>
                  <div class="mb-3">
                    <label for="nama_pemilik" class="form-label" style="font-size :large;"> <b>Nama Pemilik</b></label>
                    <input type="text" class="form-control" id="nama_pemilik" name="pemilik_mobil"aria-describedby="emailHelp" value="<?= $row['pemilik_mobil'] ?>" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="merk" class="form-label" style="font-size :large;"> <b>Merk</b></label>                      
                    <input type="text" class="form-control" id="merk" name="merk_mobil" value="<?= $row['merk_mobil'] ?>" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="tanggal_beli" class="form-label" style="font-size :large;"> <b>Tanggal Beli</b></label>
                    <input type="date" class="form-control" id="tanggal_beli" name="tanggal_beli"aria-describedby="emailHelp" value="<?= $row['tanggal_beli'] ?>" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="deskripsi" class="form-label"style="font-size :large;"> <b>Deskripsi</b></label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" disabled> <?= $row['deskripsi'] ?></textarea>
                  </div>
                  <div class="mb-3">
                    <label for="formFile" class="form-label"style="font-size :large;"> <b>Foto</b></label>
                    <input class="form-control" type="file" id="formFile" name="foto" <?php echo $row['deskripsi'] ?> disabled>
                  </div>    
                  <div>
                    <label for="formFile" class="form-label"style="font-size :large;"> <b>Status Pembayaran</b></label> <br>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="lunas" <?= $row['status_pembayaran']?> disabled>
                        <label class="form-check-label" for="inlineRadio1">Lunas</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="belum lunas" <?= $row['status_pembayaran']?> disabled >
                        <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                      </div>
                  </div>
                </form>
                <form action="Edit-Ida.php" method="POST" >
                  <input type="hidden" name="id_mobil" value="<?= $id_mobil; ?>" />
                  <button type="submit" class="btn btn-primary" style="margin-top: 30px; width: 110px;">Edit</button>
                </form> 
              </div> 
            </div>
          </div>
        </div>
    <?php } ?>
</body>
</html>