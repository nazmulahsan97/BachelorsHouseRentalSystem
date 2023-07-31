<?php
    $con = mysqli_connect("localhost", "root", "", "house");
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
            <li class='home'><a href="index.php">Home</a></li>
              <li><a href="#table-container">Customer</a></li>
            </div>
          </ul>
        </nav>

        <main id='login-container'>
              <div class='fname'>
                  <label for="fname">Username:</label>
                  <input id="username" type="text" name="username">
              </div>
              <div class='lname'>
                  <label for="lname">Password:</label>
                  <input id="password" type="password" name="password">
              </div>
              <input id="btn-login" class="button-submit" type="submit" name="submit" value="Login">
        </main>

        <main id="table-container" class="d-none">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <!-- Display the data -->
                <tbody>
                        <?php
                        $read = "SELECT * FROM booked";
                        $result = mysqli_query($con, $read);
                        if($result) {
                            while($row = mysqli_fetch_assoc($result)) 
                            {
                            $user_id = $row['SLNO'];
                            $fname = $row['fname'];
                            $lname = $row['lname'];
                            $phone = $row['phone'];
                            $email = $row['email'];
                            $address = $row['address'];
                            echo '<tr>
                                <th scope="row"> '.$user_id.' </th>
                                <td> '.$fname.' </td>
                                <td> '.$lname.' </td>
                                <td> '.$phone.' </td>
                                <td> '.$email.' </td>
                                <td> '.$address.' </td>
                                <td> <button class="bg-danger px-2 py-1 border-0 rounded"><a class="text-white" href="delete.php?deleteid='.$user_id.'">Delete</a></button> </td>
                            </tr> ';
                        
                            }
                        }
                        ?>
                </tbody>
            </table>
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
    <script src="js/admin.js"></script>
    <!-- Bootstrap -->
    <script rel="stylesheet" href="node_modules/bootstrap/dist/js/bootstrap.bundle.js"> </script>
  </body>
</html>
