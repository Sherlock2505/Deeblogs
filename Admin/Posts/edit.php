<?php include("../../path.php"); ?>
<?php include(ROOT_PATH."/app/controllers/posts.php"); 
adminOnly();?>
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
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <title>Admin Section - Update Posts</title>
</head>

<body>

    <?php include(ROOT_PATH."/app/includes/adminHeader.php"); ?>
    <!-- Admin Page-Wrapper -->
    <div class="admin-wrapper">

        <!-- Left Sidebar -->
        <?php include(ROOT_PATH."/app/includes/adminSidebar.php"); ?>

        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">

                <h2 class="page-title">Update Posts</h2>
                <?php include(ROOT_PATH."/app/helpers/formErrors.php"); ?>

                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body" ><?php echo $body; ?></textarea>
                    </div>

                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                        <?php foreach ($topics as $key => $topic): ?>
                            <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                            <?php else: ?>
                                <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                            <?php endif; ?>   
                        <?php endforeach; ?>
                        </select>
                    </div>

                    <div>
                        <?php if(empty($published) && $published==0): ?>
                        <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="published" checked>
                            </label>
                        <?php endif; ?>
                    </div>

                    <div>
                        <button type="submit" name="update-post" class="btn btn-big" >Update Post</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- /Page Wrapper -->

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>

    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>
</body>
</html>

