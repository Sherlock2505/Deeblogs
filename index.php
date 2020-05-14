<?php 
    include("path.php");
    include(ROOT_PATH."/app/database/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/851a1e3a66.js" crossorigin="anonymous"></script>

    <!-- Google-fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>
<body>
    
    <?php include(ROOT_PATH."/app/includes/header.php"); ?>
    <?php include(ROOT_PATH."/app/includes/messages.php"); ?>


    <!-- Page-wrapper -->
    <div class="page-wrapper">

        <!-- Post slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>
            <div class="post-wrapper">

                <div class="post">
                    <img src="assets/images/img1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Hey there this is my new Website!</a></h4>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far fa-calendar">May 1, 2000</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Hey there this is my new Website!</a></h4>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far fa-calendar">May 1, 2000</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Hey there this is my new Website!</a></h4>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far fa-calendar">May 1, 2000</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Hey there this is my new Website!</a></h4>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far fa-calendar">May 1, 2000</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/img1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">Hey there this is my new Website!</a></h4>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far fa-calendar">May 1, 2000</i>
                    </div>
                </div>

            </div>
        </div>
        <!-- Post Slider -->

        <!-- Content -->
        <div class="content clearfix">
            <!-- Main content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post clearfix">
                    <img src="assets/images/img2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">The heaven is here come and taste it.</a></h2>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far calendar">May 1, 2000</i>
                        <p class="preveiw-text">
                            The following code has three sections. Each section has been labelled on top using a comment and the three are variables, actions and functions. 
                            So in your admin_functions.php file, add the following code to it but make sure you split it accordingly as indicated below using the comments.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/img2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">The heaven is here come and taste it.</a></h2>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far calendar">May 1, 2000</i>
                        <p class="preveiw-text">
                            The following code has three sections. Each section has been labelled on top using a comment and the three are variables, actions and functions. 
                            So in your admin_functions.php file, add the following code to it but make sure you split it accordingly as indicated below using the comments.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/img2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">The heaven is here come and taste it.</a></h2>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far calendar">May 1, 2000</i>
                        <p class="preveiw-text">
                            The following code has three sections. Each section has been labelled on top using a comment and the three are variables, actions and functions. 
                            So in your admin_functions.php file, add the following code to it but make sure you split it accordingly as indicated below using the comments.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/img2.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">The heaven is here come and taste it.</a></h2>
                        <i class="far fa-user">Deep Maheshwari</i>
                        &nbsp;
                        <i class="far calendar">May 1, 2000</i>
                        <p class="preveiw-text">
                            The following code has three sections. Each section has been labelled on top using a comment and the three are variables, actions and functions. 
                            So in your admin_functions.php file, add the following code to it but make sure you split it accordingly as indicated below using the comments.
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>

            </div>

            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search....">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Content -->
    </div>
    <!-- Page-wrapper -->
    <?php include(ROOT_PATH."/app/includes/footer.php")?>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <!-- JS Slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>