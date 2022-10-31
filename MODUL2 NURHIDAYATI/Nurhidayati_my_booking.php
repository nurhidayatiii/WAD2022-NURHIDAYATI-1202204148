<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Booking Page</title>

    <link rel="stylesheet" href="style_home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<?php

    $name = $_POST['Nama'];
    $date = $_POST['bookdate']." ".$_POST['time'];
    $checkin = date("d-m-y H:i", strtotime($date));
    $checkout = date("d-m-y H:i", (strtotime($date) + 60 * 60 * $_POST['duration']));
    $cartype = $_POST['cartype'];
    $phone = $_P0ST['phone'];

    // $service = ['Health protocol', 'driver', 'fuel']

    

?>


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
    <h4>Thank You <?= $name?> for Reserving</h4>
    <br>
    <h6>Please double check your reservation detail</h6>


    <table class="table">
        <thead>
            <tr>
            <th scope="col">Booking Number</th>
            <th scope="col">Name</th>
            <th scope="col">Check In</th>
            <th scope="col">Check Out</th>
            <th scope="col">Car Type</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Service(s)</th>
            <th scope="col">Total Price</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
            <th scope="row"><?= rand() ?></th>
            <td><?= $name ?></td>
            <td><?= $checkins ?></td>
            <td><?= $checkout ?></td>
            <td><?= $cartype ?></td>
            <td><?= $phone ?></td>
            <td><?php
                    if (isset ($_POST['book'])) {
                        if (!empty ($_POST['service'])){
                            foreach($_POST['service'] as $service){
                                echo '<li>' .$service. '</li>';
                            }
                        }else{
                            echo '-';
                        }
                    };
                ?>
            </td>
            

            <!-- <td><?php ?></td> -->
  

            </tr>
        </tbody>
    </table>

    <footer>
        <center><p>Created by NURHIDAYATI_1202204148</p></center>
    </footer>


</body>
</html>