<?php 
    include("path.php");
    include(ROOT_PATH."/app/controllers/topics.php");

    $posts = array();
    $postsTitle = 'Recent Posts';    

    if(isset($_POST['search-term'])){
        $posts = searchPosts($_POST['search-term']);
        $postsTitle = "You searched for '". $_POST['search term']."'";
    }else{
        $posts = getPublishedPosts();
    }
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

                <?php foreach ($posts as $post): ?>
                <div class="post">
                    <img src="<?php echo BASE_URL.'/assets/images/'.$post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html"><?php echo $post['title']; ?></a></h4>
                        <i class="far fa-user"><?php echo $post['username']; ?></i>
                        &nbsp;
                        <i class="far fa-calendar"><?php echo date('F j, Y',strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
                <?php endforeach ?>

            </div>
        </div>
        <!-- Post Slider -->

        <!-- Content -->
        <div class="content clearfix">
            <!-- Main content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <?php foreach ($posts as $post): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL.'/assets/images/'.$post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html"></a><?php echo $post['title']; ?></h2>
                        <i class="far fa-user"><?php echo $post['username']; ?></i>
                        &nbsp;
                        <i class="far calendar"><?php echo date('F j, Y',strtotime($post['created_at'])); ?></i>
                        <p class="preveiw-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 150). '...'); ?>
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
                <?php endforeach; ?>
                

            </div>

            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search....">
                    </form>
                </div>

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>

                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="#"><?php echo $topic['name']; ?></a></li>        
                    <?php endforeach; ?>
                    
                        <!-- <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li> -->
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