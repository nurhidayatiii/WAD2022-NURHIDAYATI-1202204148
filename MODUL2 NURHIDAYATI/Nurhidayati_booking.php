<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>

    <link rel="stylesheet" href="style_home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Nurhidayati_home.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Nurhidayati_booking.php">Booking</a>
            </li>

        </ul>
        </div>
    </div>
    </nav>

    <br>
    <h3 style="text-align:center;">Rent your car now!</h3>
    <br>

    <form action="Nurhidayati_my_booking.php" method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="bookdate" class="form-label">Book Date</label>
            <input type="date" class="form-control" id="bookdate" name="bookdate">
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Start Time</label>
            <input type="time" class="form-control" id="jam" name="time">
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (Days)</label>
            <input type="number" class="form-control" id="duration" name="duration">
        </div>
        <div class="mb-3">
            <label for="cartype" class="form-label">Car Type</label>
                <select class="form-select" aria-label="Default select example" id="cartype" name="cartype">
                  <option selected>Pilih Mobil</option>
                  <option value="Honda Jazz">Honda Jazz</option>
                  <option value="Yaris">Yaris</option>
                  <option value="Avanza">Avanza</option>
                  <!-- <option value="4">Xenia</option> -->
                </select>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="services" class="form-label">Add Service(s)</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Health protocol" id="flexCheckDefault" name="service">
                <label class="form-check-label" for="flexCheckDefault">
                  Health protocol / Rp25.000
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Driver" id="flexCheckChecked" name="service">
                <label class="form-check-label" for="flexCheckChecked">
                  Driver / Rp100.000
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Fuel filled" id="flexCheckChecked" name="service">
                <label class="form-check-label" for="flexCheckChecked">
                  Fuel filled / Rp200.000
                </label>
              </div>
        </div>
        <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success" type="submit" name="book">Book</button>
            <!-- <a href="Nurhidayati_my_booking.php" class="btn btn-success">Book</a> -->
        </div>
    </form>

    <footer>
        <center><p>Created by NURHIDAYATI_1202204148</p></center>
    </footer>

</body>
</html>