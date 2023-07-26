<?php
    $con = mysqli_connect("localhost", "root", "", "carx");
    if(isset($_GET['deleteid'])) {
        $user_id = $_GET['deleteid'];

        $delete = "DELETE FROM `bookedcar` where user_id=$user_id ";
        $result = mysqli_query($con, $delete);
        if($result) {
            echo '<script> alert("Delete Successful") </script>';
        } else {
            die(mysqli_error($con));
        }
    }
?>