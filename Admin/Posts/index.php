<?php include("../../path.php"); ?>
<?php include(ROOT_PATH."/app/controllers/posts.php"); ?>
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

    <title>Admin Section - Manage Posts</title>
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

                <h2 class="page-title">Manage Posts</h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                        <tr>
                            <td><?php echo $key + 1 ;?></td>
                            <td><?php echo $post['title'] ;?></td>
                            <td>Deep</td>
                            <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                            <td><a href="edit.php?del_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>
                            <?php if ($post['published']): ?>
                                <td><a href="#" class="unpublish">unpublish</a></td>
                            <?php else: ?>
                                <td><a href="#" class="publish">Publish</a></td>
                            <?php endif; ?>
                        </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /Page Wrapper -->

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>
</body>
</html>

