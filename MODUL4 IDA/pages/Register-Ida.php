
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<?php include('../config/connector.php');?>

    <?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'gagal') {$_SESSION['register'] = ' ';?>
    <div class="alert alert-warning m-0 p-2 alert-dismissible" role="alert">Email Anda sudah pernah terdaftar!
        <button type="button" class="btn=close p-3" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } ?>






<body>
    <div class="container-text-center">
      
          <div class="row justify-content-left">
            <div class="col-6" >
              <img src="../asset/images/aston-martin.jpg" alt="gambar mobil" style="height:655px; width:680px;">       
            </div>
            <div class="col-6" style="padding: 80px 80px;" >

            <h2><b>Register</b></h2>
            <br>

              <div class="form">
                <form action="../config/regis.php" method="POST" >
                  <div class="mb-3">
                    <label for="email" class="form-label" style="font-size :large;"> <b>Email</b></label>
                    <input type="email" class="form-control" id="nama_mobil" name="email"aria-describedby="emailHelp" required>
                    
                  </div>
                  <div class="mb-3">
                    <label for="nama_pemilik" class="form-label" style="font-size :large;"> <b>Nama</b></label>
                    <input type="text" class="form-control" id="nama_pemilik" name="nama">
                  </div>
                  <div class="mb-3">
                    <label for="merk" class="form-label" style="font-size :large;"> <b>Nomor Handphone</b></label>                      
                    <input type="text" class="form-control" id="merk" name="no_hp">
                  </div>
                  <div class="mb-3">
                    <label for="tanggal_beli" class="form-label" style="font-size :large;"> <b>Kata Sandi</b></label>
                    <input type="password" class="form-control" id="tanggal_beli" name="password"aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="tanggal_beli" class="form-label" style="font-size :large;"> <b>Konfirmasi Kata Sandi</b></label>
                    <input type="password" class="form-control" id="tanggal_beli" name="password"aria-describedby="emailHelp">
                  </div>

                  <input class="ps-5 pe-5 btn btn-primary" type="submit" value="Daftar">
                  
                  
                </form>
                
                <br>
                <p>Anda sudah punya akun? <a href="Login-Ida.php">Login</a></p>
              </div> 
            </div>
          </div>
        </div>

</body>
</html>