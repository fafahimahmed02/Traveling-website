<?php

session_start();

if (!isset($_SESSION['loggedin']) ||  $_SESSION['loggedin'] != true) {
   header("location: login.php");
  
  exit;
}



?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/favicon.png" type="image/png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Welcome TO Tour & Travel - <?php $_SESSION['email'] ?> </title>
</head>

<body>

  <?php require '_nav.php' ?>

  



  <div class="container my-4 " >

    <div class="alert alert-success bg-success text-white"  role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['email'] ?> </h4>

       <p> You are logged in as <?php echo $_SESSION['email'] ?> . Travel You Choose The Destination, We Offer You The Experience. To confirm your booking please fillout the form by clicking this button <a href="booking.php"><button style="background-color:yellow; color:black;  border-radius: 18px; border: none; padding: 8px 23px; font-size: 22px; font-family: 'Nunito', sans-serif; ">Booking</button></a> </p>

      
      <p class="mb-0">Whenever you need to logout, you can logout  <a href="logout.php"> <button style="background-color:indigo; color:white;  border-radius: 18px; border: none; padding: 8px 23px; font-size: 22px; font-family: 'Nunito', sans-serif; ">Logout</button> </a> </p>
    </div>



  </div>




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>