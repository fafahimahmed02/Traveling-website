<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour & Travel</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/booking.css">

</head>

<body>
    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading"> BOOK NOW </h1>

        <div class="row">

            <div class="image">
                <img src="img/book-img.svg" alt="">
            </div>

            <form action="book.php" method="post">
                <div class="inputBox">
                    <h3>Email</h3>
                    <input type="email" name="email" id="email" placeholder="Login email">
                    <h3>where to</h3>
                    <input type="text" name="place_name" id="place_name" placeholder="place name">

                    <div class="inputBox">
                        <h3>how many</h3>
                        <input type="number" name="number_of_guests" id="number_of_guests" placeholder="number of guests">
                    </div>
                    <div class="inputBox">
                        <h3>Package ID</h3>
                        <input type="text" name="package_id" id="package_id" placeholder="package id">
                    </div>
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date" name="arrival" id="arrival" placeholder="arrival date">
                </div>

                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date" name="leaving" id="leaving" placeholder="leaving date">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>

        </div>

    </section>

    <!-- book section ends -->
</body>

</html>