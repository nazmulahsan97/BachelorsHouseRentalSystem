<?php 
  if(isset($_POST['submit'])) {
      $fname = $_POST["fname"];
      $lname = $_POST["lname"];
      $email = $_POST["email"];
      $phone = $_POST["phone"];
      $dob = $_POST["dob"];
      $address = $_POST["address"];
    
      $host = "localhost";
      $user = "root";
      $pass = "";
      $dbname = 'house';
    
      $connect = mysqli_connect($host, $user, $pass, $dbname);

      $insert = "INSERT INTO booked (fname, lname, email, phone, dob, address) values
      ('$fname', '$lname', '$email', '$phone', '$dob', '$address')";
      mysqli_query($connect, $insert);
      echo "
        <script>
          alert('Booked Successful')
        </script>
      ";      
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
            <form action="#" method='POST' id="register">
                <div class='fname'>
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname">
                </div>
                <div class='lname'>
                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname">
                </div>
                <div class='email'>
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                </div>
                <div class='number'>
                    <label for="number">Phone:</label>
                    <input type="number" name="phone">
                </div>
                <div class='dateofbirth'>
                    <label for="dateofbirth">Date of Birth:</label>
                    <input type="date" name="dob">
                </div>
                <div class='address'>
                    <label for="address">Address:</label>
                    <input type="text" name="address">
                </div>
                <input class="button-submit" type="submit" name="submit" value="Submit">
            </form>
        </main>
      </div>
    </div>

    <footer>
      <div class="footer-container">
        <div>
          <h2>Influencer products</h2>
          <p>Copyright © 2020 influencer products All rights reserved</p>
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
