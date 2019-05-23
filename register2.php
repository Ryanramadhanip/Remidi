<!DOCTYPE html>
<html>
    <head>
        <title>
            Registrasi Form
        </title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <video autoplay poster="#" id="bgvid" loop>
            <source src="../assets/v5.mp4" type="video/mp4">
        </video>
        <div class="login">
            <h1> Registrasi Pembeli </h1>
            <form action="prosesregistrasi2.php" method="POST">
                <p><input type="text" name="txt_username" placeholder="Username" class="inp"></p>
                <p><input type="password" name="txt_password" placeholder="Password" class="inp"></p>
                <p><input type="text" name="txt_nama" placeholder="Nama Lengkap" class="inp"></p>
                <p><input type="text" name="txt_alamat" placeholder="Alamat" class="inp"></p>
                <p><input type="text" name="txt_kontak" placeholder="Kontak" class="inp"></p>
                <p><input type="submit" value="Register" class="btn-login"></p>
                <div class="register"><p><a href="login2.php">Already have an account? Login here</p></div>
            </form>
        </div>
    </body>
</html>