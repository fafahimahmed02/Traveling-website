<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include '_dbconnect.php';
    $username  = $_POST["username"];
    $email     = $_POST["email"];
    $password  = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    //$exist = false;

    $existSql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRow = mysqli_num_rows($result);

    if ($numExistRow > 0) {

        $showError = "This email id already Exists. Chose different email id please.";
    } else {


        if (($password == $cpassword)) {
            $sql = " INSERT INTO `users` ( `username`, `password`, `dt`, `email`) VALUES ( '$username', '$password', current_timestamp(), '$email')";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Password do not match";
        }
    }
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

    <title>Tour & Travel</title>
</head>

<body>

    <?php require '_nav.php' ?>

    <?php
    if ($showAlert) {

        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESSFULL! </strong> Your account in created, you can login...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }


    if ($showError) {

        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>ERROR! </strong> ' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }






    ?>







    <div class="container my-4">
        <h1 class="text-center">Signup to our website</h1>

        <form action="signup.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">User Name</label>
                <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">

            </div>



            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Please put the same passwoard.</div>
            </div>


            <button type="submit" class="btn btn-primary">Signup</button>
        </form>

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