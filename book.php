<?php
$insert = false;
if(isset($_POST['email'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

    // Collect post variables
    $email = $_POST['email'];
    $place_name = $_POST['place_name'];
    $number_of_guests = $_POST['number_of_guests'];
    $package_id = $_POST['package_id'];
    $arrival = $_POST['arrival'];
    $leaving = $_POST['leaving'];

    $sql = "INSERT INTO `book`.`book` (`email`, `place_name`, `number_of_guests`, `package_id`, `arrival`, `leaving`, `Dt`) VALUES ('$email', '$place_name', '$number_of_guests', '$package_id', '$arrival', '$leaving', current_timestamp());";
    
    if($con->query($sql) == true){
        $insert = true;
    }
    else{
            echo "ERROR: $sql <br> $con->error";
        }
    
    $con->close();
}
    header("Location: booking.php");
?>
