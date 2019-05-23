<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Form
        </title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <video autoplay poster="#" id="bgvid" loop>
            <source src="../assets/v1.mp4" type="video/mp4">
        </video>
        <div class="login">
            <h1> Login Admin </h1>
            <form action="proseslogin.php" method="POST">
                <p><input type="text" name="txt_username" placeholder="Username" class="inp"></p>
                <p><input type="password" name="txt_password" placeholder="Password" class="inp"></p>
                <p><input type="submit" value="Login" class="btn-login"></p>
                <div class="register"><p><a href="register.php">Dont have an account?</p></div>
            </form>
        </div>
    </body>
</html>