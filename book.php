<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jsonData = file_get_contents("php://input");

    $data = json_decode($jsonData, true);

    // Access the form data
    $fname = $data["fname"];
    $lname = $data["lname"];
    $email = $data["email"];
    $phone = $data["phone"];
    $dob = $data["dob"];
    $address = $data["address"];

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = 'house';

    $connect = mysqli_connect($host, $user, $pass, $dbname);

    $insert = "INSERT INTO booked (fname, lname, email, phone, dob, address) values
      ('$fname', '$lname', '$email', '$phone', '$dob', '$address')";
    mysqli_query($connect, $insert);
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/book.css" />
    <title>Influencer Gear</title>
  </head>

  <body>
    <div>
      <div class="container">
      <nav>
          <h1 class="logo">Influencer Products</h1>
          <ul class="nav-items">
            <div id="inside-nav-items" class="inside-nav-items">
              <li class='home'><a href="#">Home</a></li>
              <li><a href="#form-container">Book Now</a></li>
            </div>
          </ul>
          <button class="admin"><a href="admin.php">Admin Login</a></button>
        </nav>

        <main id='form-container'>
            <form action="#" method='POST' id="myForm">
                <div class='fname'>
                    <label for="fname">First Name:</label>
                    <input id="fname" type="text" name="fname" required>
                </div>
                <div class='lname'>
                    <label for="lname">Last Name:</label>
                    <input id="lname" type="text" name="lname" required>
                </div>
                <div class='email'>
                    <label for="email">Email:</label>
                    <input id="email" type="email" name="email" required>
                </div>
                <div class='number'>
                    <label for="number">Phone:</label>
                    <input id="phone" type="number" name="phone" required>
                </div>
                <div class='dateofbirth'>
                    <label for="dateofbirth">Date of Birth:</label>
                    <input id="dob" type="date" name="dob" id="dob" required>
                </div>
                <div class='address'>
                    <label for="address">Address:</label>
                    <input id="address" type="text" name="address" required>
                </div>
                <input class="button-submit" id="submit" type="submit" name="submit" value="Submit">
            </form>
        </main>
      </div>
    </div>

    <footer>
      <div class="footer-container">
        <div>
            <h2>Bachelor Home</h2>
            <p>Copyright © Team Outliers All rights reserved</p>
          <div class="footer-icons">
            <a href="https://github.com/shifat-bin-reza" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/md-shifat-bin-reza/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://www.facebook.com/md.rudro.33886/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.youtube.com/channel/UC10fMvJs--GM_QMNFBzuuRw" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/book.js"></script>
    <!-- Bootstrap -->
    <script rel="stylesheet" href="node_modules/bootstrap/dist/js/bootstrap.bundle.js"> </script>
  </body>
</html>
