<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>About us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="main-pagepics/lehenga1.jpeg" height="550" width="200">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>"Embark on a captivating journey through the enchanting world of Indian sarees, where timeless elegance meets vibrant craftsmanship. 
              Discover the allure of India's finest sarees, exquisitely handcrafted with meticulous attention to detail and a rich tapestry of colors. 
              Each saree unveils a story of tradition, heritage, and the artistry of skilled artisans who weave magic into every thread."</p>

              <p>We believe in making a positive impact. Silk Harmony actively collaborates with weaver communities and supports fair trade practices. By fostering sustainable partnerships and contributing to the betterment of artisans' livelihoods, we are committed to uplifting communities and preserving the traditional art forms that make each saree a masterpiece.</p>
         <a href="contact.php" class="btn">Contact us</a>
      </div>

   </div>

</section>

<br>
<br>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>