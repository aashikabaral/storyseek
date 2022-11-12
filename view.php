<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Storyseek</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>
<body>

<header class="header">

        <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> storyseek</a>

        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.php">home</a>
            <a href="publish.php">publish</a>
            
            
        </nav>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="login-btn" class="fas fa-user"></div>
            <a href="logout-user.php">Logout</a></button>
        </div>

    </header>



    <div class="search-form">

        <div id="close-search" class="fas fa-times"></div>

        <form action="">
             <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </div>

   

    <div class="login-form-container">

        <div id="close-login-btn" class="fas fa-times"></div>

        <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>
Write to Alisha Khatri


    </div>

   <div class="container mt-5" style="margin-top: 13rem!important;">

        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>

                <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit" style="
    margin-top: 1rem;
    display: inline-block;
    border: 0.2rem solid #10221b;
    color: #10221b;
    cursor: pointer;
    background: white;
    font-size: 1.7rem;
    padding: 1rem 3rem; font-family: 'Poppins', sans-serif;">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete" style="
    margin-top: 1rem;
    display: inline-block;
    border: 0.2rem solid #10221b;
    color: #10221b;
    cursor: pointer;
    background: white;
    font-size: 1.7rem;
    padding: 1rem 3rem; font-family: 'Poppins', sans-serif;">Delete</button>
                    </form>
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
        <?php } ?>    

        <a href="publish.php" class="btn btn-outline-dark my-3" style="background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block;
  font-size: 16px; font-family: 'Poppins', sans-serif;">Go Home</a>
   </div>

   
   <section class="contact" id="contact">
        
        <div class="box-container">

        

            <div class="box">
                <h3>quick links</h3>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> about </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> genre </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> stories </a>
                <a href="#" class="links"> <i class="fas fa-arrow-right"></i> contact </a>
            </div>


            
            <div class="box">
                <h3>contact info</h3>
                <a href="#" class="links"> <i class="fas fa-phone"></i> 9862587365 </a>
                <a href="#" class="links"> <i class="fas fa-phone"></i> 9862842971 </a>
                <a href="#" class="links"> <i class="fas fa-envelope"></i> storyseek8888@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Kathmandu, Nepal </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-github"></i> github </a>
            </div>

        </div>

        <div class="credit">with love by <span>Aashika and alisha</span></div>

    </section>








    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


    <script src="script.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>