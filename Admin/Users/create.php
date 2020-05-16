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

    <title>Admin Section - Add User</title>
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
                <a href="index.php" class="btn btn-big">Manage Users</a>
            </div>

            <div class="content">

                <h2 class="page-title">Create User</h2>

                <form action="create.php" method="post">
                    
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" class="text-input">
                    </div>
        
                    <div>
                        <label>Email</label>
                        <input type="text" name="email" class="text-input">
                    </div>
        
                    <div>
                        <label>Password</label>
                        <input type="text" name="password" class="text-input">
                    </div>
        
                    <div>
                        <label>Password Confirmation</label>
                        <input type="text" name="passwordConf" class="text-input">
                    </div>

                    <div>
                        <label>Role</label>
                        <select name="role" class="text-input">
                            <option value="Author">Author</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-big" >Add User</button>
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

