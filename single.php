<?php 
include("path.php");
include(ROOT_PATH."/app/controllers/posts.php");

if(isset($_GET['id'])){
    $post = selectOne('posts',['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts',['published' => 1]);

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
    <title><?php echo $post['title']; ?> | Deeblogs </title>
</head>
<body>
<?php include(ROOT_PATH."/app/includes/header.php"); ?>

    <!-- Page-wrapper -->
    <div class="page-wrapper">


        <!-- Content -->
        <div class="content clearfix">
            <!-- Main content -->
            <div class="main-content-wrapper">
                <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?> </h1>

                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                </div>

                </div>
            </div>
            <!-- Main Content -->
            <!-- Side bar -->
            <div class="sidebar single">

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>
                    <?php foreach ($posts as $p): ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL.'/assets/images/'.$p['image']?>" alt="">
                        <a href="single.php?id=<?php echo $p['id']; ?>" class="title">
                            <h4><?php echo $p['title']; ?></h4>
                        </a>
                    </div>
                    <?php endforeach ?>

                    
                </div>
                

                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $topic): ?>
                        <li><a href="<?php echo BASE_URL.'/index.php?t_id='.$topic['id'].'&name='.$topic['name']; ?>"><?php echo $topic['name']?></a></li>
                    <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Content -->
    </div>
    <!-- Page-wrapper -->

    <!-- footer -->
    <?php include(ROOT_PATH."/app/includes/footer.php")?>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <!-- JS Slick -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>