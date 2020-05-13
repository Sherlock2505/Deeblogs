<?php include("path.php")?>
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

    <div class="auth-content">

        <form action="register.php" method = "post">
            <h2 class="form-title">Register</h2>

            <div class="msg success error">
                <li>Username Required</li>
            </div>
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
                <button type="submit" name="register-btn" class="btn btn-big">Register</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL. '/login.php'?>">Sign In</a></p>
        </form>
    </div>
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>
</body>
</html>