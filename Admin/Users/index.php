<?php include("../../path.php"); ?>
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

    <title>Admin Section - Manage Topics</title>
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
                <a href="create.php" class="btn btn-big">Add User</a>
                <a href="index.php" class="btn btn-big">Manage User</a>
            </div>

            <div class="content">

                <h2 class="page-title">Manage User</h2>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Deep</td>
                            <td>Admin</td>
                            <td><a href="#" class="edit">Edit</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>DeeBlogger</td>
                            <td>Deputy Admin</td>
                            <td><a href="#" class="edit">Edit</a></td>
                            <td><a href="#" class="delete">Delete</a></td>
                        </tr>
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
<!-- 
 -->