
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
   


    <div class="container-text-center">
          <div class="row justify-content-left">
            <div class="col-6">
              <img src="../asset/images/astonmartin.jpg" alt="gambar mobil" style="height:655px; width:680px;">       
            </div>
            <div class="col-6"style="padding: 80px 80px;" >

            <h2><b>Login</b></h2>
            <br>
            <br>

              <div class="form">
                <form action="../config/login.php" method="POST" >
                  <div class="mb-3">
                    <label for="email" class="form-label" style="font-size :large;"> <b>Email</b></label>
                    <input type="email" class="form-control" id="nama_mobil" name="email"aria-describedby="emailHelp" required>
                  </div>
                
                  <div class="mb-3">
                    <label for="tanggal_beli" class="form-label" style="font-size :large;"> <b>Kata Sandi</b></label>
                    <input type="password" class="form-control" id="tanggal_beli" name="password"aria-describedby="emailHelp" required>
                  </div>
                  <br>

                  <input class="ps-5 pe-5 btn btn-primary" type="submit" value="Login">

            
          
                </form>
                <!-- <form action="Edit-Ida.php" method="POST" >
                  <button type="submit" class="btn btn-primary" style="margin-top: 30px; width: 110px;">Daftar</button>
                </form>  -->
                <br>
                <p>Anda belum punya akun? <a href="Register-Ida.php">Daftar</a></p>
              </div> 
            </div>
          </div>
        </div>

</body>
</html>