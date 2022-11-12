<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
   

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storyseek</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" href="style.css">

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



    </div>


    <section class="home" id="home">

    <div class="swiper home-slider">
        
    <div class="swiper-wrapper">

<div class="swiper-slide">
    <div class="box" style="background: url(home1.jpg) no-repeat;">
        <div class="content"
            style="letter-spacing: 0.054em; font-weight: 500; font-style: normal; align-items: flex-start;">
            <span>think, write and</span>
            <h3>publish!</h3>
            <p>interactive experience that feels fun and looks beautiful.</p>
            <a href="#" class="btn">get started</a>
        </div>
    </div>
</div>

<div class="swiper-slide">
    <div class="box second" style="background: url(home2.jpg) no-repeat;">
        <div class="content" style="letter-spacing: 0.054em; font-weight: 500; font-style: normal;">
            <span>read our amazing </span>
            <h3>stories</h3>
            <p>Engage and delight yourself with our Interactive Web Stories while you gain all the
                valuable
                insights with analytics.</p>
            <a href="#" class="btn">get started</a>
        </div>
    </div>
</div>

</div>

<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>

</div>


    </section>


    <section class="mission" id="mission">
        <div class="image">
            <img src="abt.jpg" alt="">
        </div>

        <div class="content">
            <h1 class="heading"> our <span>mission</span> </h1>
            <h3 style="color: black;">It is our mission to create a website where people can write the stories of any
                genre according to their preference.</h3>
            <p>The reason we develop Storyseek is for
                people who loves writing and reading the stories without ads and payment. </p>

        </div>

    </section>

    <!-- genre section starts  -->

    <section class="genre" id="genre">

        <h1 class="heading"> our <span>genre's</span> </h1>

        <div class="swiper product-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="action.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>action and adventure</h3>
                        <p> The stories under this genre usually show an event or a series in which the characters are
                            involved in exciting
                            and usually dangerous activities and adventures.</p>
                        <a href="#" class="btn">read more</a>

                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="biography.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>biography </h3>
                        <p>

                            Biography is a narrative on someone’s life written by someone else. When a person himself
                            writes
                            about his life, then the book is called an autobiography.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="classic.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>classic</h3>
                        <p>Classic refers to the fictions that are accepted as the most important and influential books
                            of a
                            particular time period or place.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="drama.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>drama</h3>
                        <p>Dramas are stories composed in verse or prose, usually for theatrical performance, where
                            conflicts
                            and emotions are expressed through dialogue and actions.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="fantasy.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>fantasy</h3>
                        <p> A Book under this genre contains a story set in a fantasy world – a world that is not real
                            and often
                            includes magic, magical creatures, and supernatural events.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="fairy.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>fairy tale</h3>
                        <p>Fairy tale is usually a story for children that involves imaginary creatures and magical
                            events which helps childrens to have fun and learn new things.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="melodrama.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>melodrama</h3>
                        <p>Melodrama is a dramatic work in which events, plot, and characters are sensationalized to
                            elicit
                            strong emotional reactions from the audience.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="thriller.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>mystery/Thriller</h3>
                        <p>This book contains a mysterious plot which is characterized by the moods they evoke among the
                            readers, giving them
                            feelings of suspense, thrill, surprise, and anxiety.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="romance.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>romance</h3>
                        <p>The primary focus of romance fiction is on the relationship and romantic love between two
                            people.
                            These books have an emotionally satisfying and optimistic ending.</p>
                        <a href="#" class="btn">read more</a>
                    </div>
                </div>


            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- genre section ends -->

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

</body>

</html>